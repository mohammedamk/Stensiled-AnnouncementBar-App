<?php

class Auth extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Global_model');
        $this->load->library('form_validation');
        //Do your magic here
    }

    //App Install View Page
    public function Install_login() {
      $this->load->view('auth/appinstall');
    }


    //Check For Login
    public function check_login() {
      $shop = $this->input->get('shop');
      if ($shop != '') {
        if ($this->db->table_exists('shopify_stores') === TRUE) {
          $this->auth($shop);
        } else {
          $this->CreateTable($shop);
        }
      } else {
        echo 'Unauthorized Access!';
        exit;
        // redirect('Auth/Install_login');
      }
    }

    public function CreateTable($shop='') {
      $query = "CREATE TABLE `shopify_stores` (
        `id` int(11) NOT NULL,
        `token` varchar(100) DEFAULT NULL,
        `shop` varchar(100) DEFAULT NULL,
        `store_id` int(11) DEFAULT NULL,
        `domain` varchar(100) DEFAULT NULL,
        `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `active` tinyint(1) NOT NULL DEFAULT '1',
        `code` text,
        `hmac` text,
        `charge_id` varchar(100) DEFAULT NULL
      )";
      $this->db->query($query);
      $this->auth($shop);
    }

    //Authenticate Shopify Store
    public function auth($shop) {
      $data = array(
        'API_KEY' => $this->config->item('shopify_api_key'),
        'API_SECRET' => $this->config->item('shopify_secret'),
        'SHOP_DOMAIN' => $shop,
        'ACCESS_TOKEN' => '',
      );

      $this->load->library('Shopify', $data); //load shopify library and pass values in constructor

      $scopes = array('read_content', 'write_content', 'read_themes', 'write_themes', 'read_products', 'write_products', 'read_script_tags', 'write_script_tags', 'read_price_rules', 'read_product_listings', 'read_collection_listings','read_inventory', 'write_inventory','read_locations');

      $redirect_url = $this->config->item('redirect_url');
      $paramsforInstallURL = array(
        'scopes' => $scopes,
        'redirect' => $redirect_url,
      );

      $permission_url = $this->shopify->installURL($paramsforInstallURL);
      $this->load->view('auth/escapeIframe', ['installUrl' => $permission_url]);
    }

    // After Installation callback function
    public function auth_callBack() {
      $code = $this->input->get('code');
      $shop = $this->input->get('shop');

      if (isset($code)) {
        $data = array(
          'API_KEY' => $this->config->item('shopify_api_key'),
          'API_SECRET' => $this->config->item('shopify_secret'),
          'SHOP_DOMAIN' => $shop,
          'ACCESS_TOKEN' => '',
        );
        $this->load->library('Shopify', $data); //load shopify library and pass values in constructor
      }

      $accessToken = $this->shopify->getAccessToken($code);

      $this->updateAccess_Token($accessToken);


      if ($accessToken != '') {
        $this->charge_exist($shop);
        redirect('Auth/home?shop=' . $shop);
      } else {
        redirect('Auth/Install_login');
      }
    }

    public function charge_exist($shop = '') {
  		if (!empty($shop)) {
  			$shop_details = $this->Global_model->get_shop_details($shop);
  			if ($shop_details) {
  				if (empty($shop_details->charge_id)) {
  					redirect('Auth/CreateCharge?shop=' . $shop);
  				} else {
  					redirect('Auth/GetCharge?shop=' . $shop . '&charge_id=' . $shop_details->charge_id);
  				}
  			} else {
  				redirect('Auth/Install_login');
  			}
  		} else {
  			redirect('Auth/Install_login');
  		}
  	}

    public function CreateCharge() {
      if (isset($_GET['shop']) && !empty($_GET['shop'])) {
        $shop = $_GET['shop'];

        $shopAccess = getShop_accessToken_byShop($shop);
        $this->load->library('Shopify', $shopAccess);
        if (!isset($_GET['price'])) {
          $price = 4.99;
          $plan = 0;
          $name = "Basic Plan";
        }else {
          if ($_GET['price'] == 'basic') {
            $price = 4.99;
            $plan = 0;
          }if ($_GET['price'] == 'premium') {
            $price = 9.99;
            $plan = 1;
          }
          $name = "Premium Plan";
        }

        $shop_details = $this->Global_model->get_shop_details($shop);
        $trial_days = $shop_details->trial_days;

        $data = array(
          "recurring_application_charge" => array(
            "name" => $name,
            "price" => $price,
            "return_url" => base_url('Auth/Charge_return_url?shop=' . $shop.'&plan_id='.$plan),
            "trial_days" =>7
          ),
        );
        $year = getYear();
        $charge = $this->shopify->call(['METHOD' => 'POST', 'URL' => '/admin/api/'.$year.'/recurring_application_charges.json', 'DATA' => $data], true);

        if ($charge->recurring_application_charge) {
          $charge = $charge->recurring_application_charge;
          // echo "<pre>";
          // print_r($charge);
          // // $che['installUrl'] = $charge;
          // // prin
          $this->load->view('auth/escapeIframe', ['installUrl'=>$charge->confirmation_url]);
          // redirect($charge->confirmation_url);
        } else {
          redirect('Auth/Install_login');
        }
      } else {
        redirect('Auth/Install_login');
      }
    }

    public function GetCharge() {
      $shop = $_GET['shop'];
      $charge_id = $_GET['charge_id'];

      if (!empty($shop)) {
        $shopAccess = getShop_accessToken_byShop($shop);
        $this->load->library('Shopify', $shopAccess);
        $year = getYear();
        $charge = $this->shopify->call(['METHOD' => 'GET', 'URL' => '/admin/api/'.$year.'/recurring_application_charges/' . $charge_id . '.json'], true);
        if ($charge) {
          $charge = $charge->recurring_application_charge;
          if ($charge->status != 'active') {
            redirect('Auth/CreateCharge?shop=' . $shop);
          } else {
            redirect('Auth/AppLoader?shop=' . $shop);
          }
        }
      }
    }

    public function Charge_return_url() {

      $shop = $_GET['shop'];
      $charge_id = $_GET['charge_id'];
      $plan_id = $_GET['plan_id'];
      if (!empty($shop)) {

        $shopAccess = getShop_accessToken_byShop($shop);
        $this->load->library('Shopify', $shopAccess);

        $data = array(
          "recurring_application_charge" => array(
            "id" => $charge_id,
            "status" => "accepted"
          ),
        );
        $year = getYear();
        $charge = $this->shopify->call(['METHOD' => 'POST', 'URL' => '/admin/api/'.$year.'/recurring_application_charges/' . $charge_id . '/activate.json', 'DATA' => $data], true);
        if ($charge) {
          $where = array('shop' => $shop);
          $data1 = array('charge_id' => $charge_id,"plan_id" => $plan_id);
          $update = $this->Global_model->UpdateShopDetails($where,$data1);
          if ($update) {
            redirect('Auth/AppLoader?shop=' . $shop);
          } else {
            $charge = $charge->recurring_application_charge;
            $data['installUrl'] = $charge->confirmation_url;
            $this->load->view('auth/escapeIframe', $data);
          }
        } else {
          redirect('Auth/Install_login');
        }
      }
    }

    //Home Page Controller
    public function home() {
      $code = $this->input->get('code');
      $shop = $this->input->get('shop');
      if (empty($shop)) {
        echo 'Unauthorized Access!';
        exit;
      }
      $this->AppLoader($shop);
      // $this->charge_exist($shop);
    }

    public function AppLoader($shop='') {
      $shop = $this->input->get('shop');
      if (empty($shop)) {
        echo 'Unauthorized Access!';
        exit;
      }
      if (isset($shop)) {
        if ($shop != '') {
          $accessData = getShop_accessToken_byShop($shop);
          if (count($accessData) > 0) {
            if ($accessData['ACCESS_TOKEN'] != '') {
              $data['access_token'] = $accessData['ACCESS_TOKEN'];
              // $this->load->view('welcome', $data);
              $this->remainingTrialDays($shop);
              $this->addScriptTag();
              $this->createWebhook();
              redirect('Home/create_form?shop='.$shop);
            } else {
              redirect('Auth/Install_login');
            }
          } else {
            redirect('Auth/Install_login');
          }
        }
      } else {
        redirect('Auth/Install_login');
      }
    }

    public function updateAccess_Token($accessToken) {
      if ($_GET['shop'] != '' && $_GET['code'] != '' && $_GET['hmac'] != '') {
        $shopdata = array('shop' => $_GET['shop'], 'code' => $_GET['code'], 'hmac' => $_GET['hmac']);
        $check_shop_exist = $this->Global_model->check_ShopExist($_GET['shop']);
        if ($check_shop_exist) {
          $this->Global_model->update_Shop($shopdata, $accessToken);
        } else {
          $this->Global_model->add_newShop($shopdata, $accessToken);
        }
      }
    }
    public function addScriptTag() {
      $shop       = $_GET['shop'];
      $shopAccess = getShop_accessToken_byShop($shop);
      $this->load->library('Shopify', $shopAccess);
      $getCount = $this->shopify->call(['METHOD' => 'GET', 'URL' => '/admin/api/'.getYear().'/script_tags/count.json?src=https://apps.vowelweb.com/announcementBar/assets/js/vw-announcebar.js'],true);
      $scriptCount = $getCount->count;
      if ($scriptCount < 1) {
        $data = array(
          "script_tag" => array(
            "event" => "onload",
            "src" => "https://apps.vowelweb.com/announcementBar/assets/js/vw-announcebar.js"
          )
        );
        $script = $this->shopify->call(['METHOD' => 'POST', 'URL' => '/admin/api/'.getYear().'/script_tags.json', 'DATA' => $data], true);
        $scriptID = $script->script_tag->id;
        $where = array('shop' => $shop);
        $data1 = array('script_id' => $scriptID);
        $this->Global_model->UpdateShopDetails($where,$data1);
      }
    }
    public function createWebhook()
    {
      $shop       = $_GET['shop'];
      $accessData=getShop_accessToken_byShop($shop);
      $payload  = array(
          "webhook" => array(
              "topic" => "app/uninstalled",
              "address" => "https://apps.vowelweb.com/announcementBar/Home/deleteScripts",
              "format" => "json"
        )
      );
      $payload_address = $payload['webhook']['address'];
      if ($accessData['ACCESS_TOKEN']!='') {
          $this->load->library('Shopify', $accessData);
          $webhookCount = $this->shopify->call(['METHOD' => 'GET', 'URL' =>'/admin/api/'.getYear().'/webhooks/count.json'], true);
          $webhook = $this->shopify->call(['METHOD' => 'GET', 'URL' =>'/admin/api/'.getYear().'/webhooks.json'], true);
          if ($webhookCount->count > 0) {
            foreach ($webhook as $value) {
              $existing_address = $value[0]->address;
              if ($payload_address == $existing_address) {
                echo "Webhook already created for this address";
              }else {
                $this->shopify->call(['METHOD' => 'POST', 'URL' =>'/admin/api/'.getYear().'/webhooks.json', 'DATA'=>$payload], true);
              }
            }
          }else{
            $this->shopify->call(['METHOD' => 'POST', 'URL' =>'/admin/api/'.getYear().'/webhooks.json', 'DATA'=>$payload], true);
          }
      }
    }

    public function remainingTrialDays($shop)
    {
      $accessData=getShop_accessToken_byShop($shop);
      $this->load->library('Shopify', $accessData);
      $shop_details = $this->Global_model->get_shop_details($shop);
      if ($shop_details) {
        if (!empty($shop_details->charge_id)) {
          $year = getYear();
          $charge = $this->shopify->call(['METHOD' => 'GET', 'URL' => '/admin/api/'.$year.'/recurring_application_charges/' . $shop_details->charge_id . '.json'], true);
          $charge = $charge->recurring_application_charge;
          $now = time(); // or your date as well
          $your_date = strtotime("$charge->trial_ends_on");
          $datediff =  $your_date - $now;
          $remain_days = ceil($datediff / (60 * 60 * 24));
          $trial_days = max(0,$remain_days);
          $where = array('shop' => $shop);
          $data1 = array('trial_days' => $remain_days);
          $this->Global_model->UpdateShopDetails($where,$data1);
        }
      }
    }
}
