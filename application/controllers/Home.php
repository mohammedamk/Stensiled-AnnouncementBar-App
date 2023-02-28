<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: https://msubtest.myshopify.com');
header('Access-Control-Allow-Methods: GET, POST');
class Home extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('Global_model');
      $this->load->library('user_agent');
  }

  public function Dashboard(){
    if (!empty($_GET['shop'])) {
        $shop            = $_GET['shop'];
        $getActiveBar    = $this->Global_model->getActiveBar($shop);
        $data['shop']    = $shop;
        $data['shop_id'] = shop_id($shop);
        $data['activebardata'] = $getActiveBar;
        $getPlanId    = $this->Global_model->getPlanID($data['shop_id']);
        $data['plan_id'] = $getPlanId[0]->plan_id;
        $this->load->load_admin('templates/dashboard', $data);
    } else {
        echo "Something went wrong";
    }
  }

  public function Feedback(){
    if (!empty($_GET['shop'])) {
        $shop            = $_GET['shop'];
        $data['shop']    = $shop;
        $data['shop_id'] = shop_id($shop);
        $this->load->load_admin('templates/feedback_form',$data);
    } else {
        echo "Something went wrong";
    }
  }

  public function create_form(){
    if (!empty($_GET['shop'])) {
        $shop            = $_GET['shop'];
        $data['shop']    = $shop;
        $data['shop_id'] = shop_id($shop);
        $this->load->load_admin('templates/create_form', $data);
    } else {
        echo "Something went wrong";
    }
  }
  public function announce_bar(){
    if (!empty($_GET['shop'])) {
        $shop            = $_GET['shop'];
        $data['shop']    = $shop;
        $data['shop_id'] = shop_id($shop);
        $getPlanId = $this->Global_model->getPlanID($data['shop_id']);
        $data['plan_id'] = $getPlanId[0]->plan_id;
        $this->load->load_admin('templates/announce_bar', $data);
    } else {
        echo "Something went wrong";
    }
  }
  public function countdown_bar(){
    if (!empty($_GET['shop'])) {
        $shop            = $_GET['shop'];
        $data['shop']    = $shop;
        $data['shop_id'] = shop_id($shop);
        $getPlanId = $this->Global_model->getPlanID($data['shop_id']);
        $getBarCount = $this->Global_model->countBar($data['shop_id']);
        $data['bar_count'] = count($getBarCount);
        $data['plan_id'] = $getPlanId[0]->plan_id;
        $this->load->load_admin('templates/countdown_bar', $data);
    } else {
        echo "Something went wrong";
    }
  }
  public function plan(){
    if (!empty($_GET['shop'])) {
        $shop            = $_GET['shop'];
        $data['shop']    = $shop;
        $data['shop_id'] = shop_id($shop);
        $getPlanId = $this->Global_model->getPlanID($data['shop_id']);
        $data['plan_id'] = $getPlanId[0]->plan_id;
        $this->load->load_admin('templates/plan', $data);
    } else {
        echo "Something went wrong";
    }
  }

  public function newFeedback(){
    $shop            = $_GET['shop'];
    $shop_id = shop_id($shop);
    $data = array(
      'store_id' => $shop_id,
      'email' => $this->input->post('feedbackemail'),
      'description' => $this->input->post('feedbackdescription')
    );
    $insert = $this->Global_model->newFeedback($data);
    if ($insert) {
      $this->Dashboard();
    }else{
      echo "Feedback Cannot Be Inserted";
    }
  }

  public function img_upload(){
    if (!empty($_FILES['bar_image']['name'])) {
      $filename                = $_FILES['bar_image']['name'];
      $ext                     = pathinfo($filename, PATHINFO_EXTENSION);
      $milliseconds            = round(microtime(true) * 1000);
      $new_name                = $milliseconds . '.' . $ext;
      $config['upload_path']   = "./assets/templates";
      $config['allowed_types'] = 'jpg|jpeg|png|gif|JPEG|PNG|JPG';
      $config['file_name']     = "background" . $new_name;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ($this->upload->do_upload('bar_image')) {
        $uploadData = $this->upload->data();
        $img1       = $uploadData['file_name'];
        $image = $img1;
      } else {
        $image = '';
      }
    } else {
      $image = '';
    }
    return $image;
  }
  public function AudioFile()
  {
    if (!empty($_FILES['audio_file']['name'])) {
      $config['upload_path'] = 'assets/audio_file';
      $config['allowed_types'] = '*';
      $config['file_name'] = $_FILES['audio_file']['name'];
      //Load upload library and initialize configuration
      $this->load->library('upload');
      $this->upload->initialize($config);

      if($this->upload->do_upload('audio_file')){
          $uploadData = $this->upload->data();
          $badgeFile1 = $uploadData['file_name'];
          $badgeFile=$badgeFile1;
      }else{
        // $error = array('error' => $this->upload->display_errors());
        // print_r($error);
        // exit;
          $badgeFile = '';
      }
    }else {
      $badgeFile = '';
    }
    return $badgeFile;
  }
  public function create_bar(){
    $shop            = $_GET['shop'];
    $target = isset($_POST['target']) ? $_POST['target'] : '_self';
    $shop_id = shop_id($shop);

    if ($this->input->post('blink_text') == '') {
      $blink_text = "disable";
    }else {
      $blink_text = $this->input->post('blink_text');
    }
    if ($this->input->post('add_to_slider') == '') {
      $blink_text = "noslider";
    }else {
      $blink_text = $this->input->post('add_to_slider');
    }
    if ($this->input->post('blink_text_after') == '') {
      $blink_text_after = "disable";
    }else {
      $blink_text_after =  $this->input->post('blink_text_after');
    }

    if ($this->input->post('font_family') == '') {
      $font_family = "Arial";
    }else {
      $font_family = $this->input->post('font_family');
    }

    if ($this->input->post('background_image') == '') {
      $back_image = $this->img_upload();
    }else{
      $back_image = $this->input->post('background_image');
    }
    if ($this->input->post('btn_style') == '') {
      $btnStyle = "btn btn-default";
    }else{
      $btnStyle = $this->input->post('btn_style');
    }
    $expiry_hour = $this->input->post('bar_name');
    $current_hour = date("G");
    $expire_min = $this->input->post('expire_min');
    $expire_sec = $this->input->post('expire_sec');
    $expiry_hour = ((int)$current_hour + (int)$expiry_hour);
    $expiryArray = array($expiry_hour,$expire_min,$expire_sec);
    $expiryTime = implode(",",$expiryArray);
    $data = array(
      'bar_name' => $this->input->post('bar_name'),
      'button_name' => $this->input->post('button_name'),
      'button_link' => $this->input->post('button_link'),
      'target' => $target,
      'bar_position' => $this->input->post('bar_position'),
      'show_bar' => $this->input->post('show_bar'),
      'bar_text' => $this->input->post('bar_text'),
      'bar_background' => $this->input->post('bar_background'),
      'button_text_color' => $this->input->post('button_text_color'),
      'text_color' => $this->input->post('text_color'),
      'button_background' => $this->input->post('button_background'),
      'font_size' => $this->input->post('font_size'),
      'bar_padding' => $this->input->post('bar_padding'),
      'store_id' => $shop_id,
      'background_image' => $back_image,
      'btn_style' => $btnStyle,
      'close_btn_size' => $this->input->post('close_btn_size'),
      'close_btn' => $this->input->post('closed_btn'),
      'start_time' => $this->input->post('start_date'),
      'end_time' => $this->input->post('end_date'),
      'audio_file' => $this->AudioFile(),
      'bar_type' => $this->input->post('bar_type'),
      'blink_text' => $blink_text,
      'blink_text_after' => $blink_text_after,
      'font_family' => $font_family,
      'anim_type' => $this->input->post('anim_type'),
      'after_text' => $this->input->post('after_text'),
      'add_to_slider' => $this->input->post('add_to_slider'),
    );
    // echo "<pre>";
    // print_r($data);
    // exit;
    $insert = $this->Global_model->create_bar($data);
    if ($insert) {
      $this->Dashboard();
    }else{
      echo "Data Cannot Be Insert";
    }
  }

  public function update_bar(){
    $shop            = $_GET['shop'];
    $bar_id          = $_GET['bar_id'];
    $target = isset($_POST['target']) ? $_POST['target'] : '_self';
    $shop_id = shop_id($shop);

    if ($this->input->post('blink_text') == '') {
      $blink_text = "disable";
    }else {
      $blink_text = $this->input->post('blink_text');
    }
    if ($this->input->post('add_to_slider') == '') {
      $blink_text = "noslider";
    }else {
      $blink_text = $this->input->post('add_to_slider');
    }
    if ($this->input->post('blink_text_after') == '') {
      $blink_text_after = "disable";
    }else {
      $blink_text_after =  $this->input->post('blink_text_after');
    }

    if ($this->input->post('font_family') == '') {
      $font_family = "Arial";
    }else {
      $font_family = $this->input->post('font_family');
    }

    if ($this->input->post('background_image') == '') {
      if (!empty($_FILES['bar_image']['name'])) {
        $back_image = $this->img_upload();
      }else {
        $back_image = 'NULL';
      }
    }else{
      $back_image = $this->input->post('background_image');
    }
    if ($this->input->post('btn_style') == '') {
      $btnStyle = "btn btn-default";
    }else{
      $btnStyle = $this->input->post('btn_style');
    }
    $expiry_hour = $this->input->post('bar_name');
    $current_hour = date("G");
    $expire_min = $this->input->post('expire_min');
    $expire_sec = $this->input->post('expire_sec');
    $expiry_hour = ((int)$current_hour + (int)$expiry_hour);
    $expiryArray = array($expiry_hour,$expire_min,$expire_sec);
    $expiryTime = implode(",",$expiryArray);
    if (!empty($_FILES['audio_file']['name'])) {
      $data = array(
        'bar_name' => $this->input->post('bar_name'),
        'button_name' => $this->input->post('button_name'),
        'button_link' => $this->input->post('button_link'),
        'target' => $target,
        'bar_position' => $this->input->post('bar_position'),
        'show_bar' => $this->input->post('show_bar'),
        'bar_text' => $this->input->post('bar_text'),
        'bar_background' => $this->input->post('bar_background'),
        'button_text_color' => $this->input->post('button_text_color'),
        'text_color' => $this->input->post('text_color'),
        'button_background' => $this->input->post('button_background'),
        'font_size' => $this->input->post('font_size'),
        'bar_padding' => $this->input->post('bar_padding'),
        'store_id' => $shop_id,
        'background_image' => $back_image,
        'btn_style' => $btnStyle,
        'close_btn_size' => $this->input->post('close_btn_size'),
        'close_btn' => $this->input->post('closed_btn'),
        'start_time' => $this->input->post('start_date'),
        'end_time' => $this->input->post('end_date'),
        'audio_file' => $this->AudioFile(),
        'bar_type' => $this->input->post('bar_type'),
        'blink_text' => $blink_text,
        'blink_text_after' => $blink_text_after,
        'font_family' => $font_family,
        'anim_type' => $this->input->post('anim_type'),
        'typewriter' => $this->input->post('typewriter'),
        'after_text' => $this->input->post('after_text'),
        'add_to_slider' => $this->input->post('add_to_slider'),
      );
    }else {
      $data = array(
        'bar_name' => $this->input->post('bar_name'),
        'typewriter' => $this->input->post('typewriter'),
        'button_name' => $this->input->post('button_name'),
        'button_link' => $this->input->post('button_link'),
        'target' => $target,
        'bar_position' => $this->input->post('bar_position'),
        'show_bar' => $this->input->post('show_bar'),
        'bar_text' => $this->input->post('bar_text'),
        'bar_background' => $this->input->post('bar_background'),
        'button_text_color' => $this->input->post('button_text_color'),
        'text_color' => $this->input->post('text_color'),
        'button_background' => $this->input->post('button_background'),
        'font_size' => $this->input->post('font_size'),
        'bar_padding' => $this->input->post('bar_padding'),
        'store_id' => $shop_id,
        'background_image' => $back_image,
        'btn_style' => $btnStyle,
        'close_btn_size' => $this->input->post('close_btn_size'),
        'close_btn' => $this->input->post('closed_btn'),
        'start_time' => $this->input->post('start_date'),
        'end_time' => $this->input->post('end_date'),
        'bar_type' => $this->input->post('bar_type'),
        'blink_text' => $blink_text,
        'blink_text_after' => $blink_text_after,
        'font_family' => $font_family,
        'anim_type' => $this->input->post('anim_type'),
        'after_text' => $this->input->post('after_text'),
        'add_to_slider' => $this->input->post('add_to_slider')
      );
    }
    // echo "<pre>";
    // print_r($data);
    // exit;

    $update = $this->Global_model->updateBar($data,$bar_id);
    if ($update) {
      $this->Dashboard();
    }else{
      echo "Data Cannot Be Update";
    }
  }
  // public function UpdateData()
  // {
  //   $shop = $_GET['shop'];
  //   $shopId = shop_id($shop);
  //   $this->db->query('update bar_detail set bar_show="deactive" where id = "'.$_GET['bar_id'].'"');
  //
  // }
//   public function edit_announce()
//   {
//     $shop            = $_GET['shop'];
//     $data['shop']    = $shop;
// $data['shop_id'] = shop_id($shop);
// $data['bar_detail'] = $this->Global_model->editBarDetail(2);
// $getPlanId = $this->db->query('select * from shopify_stores where id = "'.$data['shop_id'].'"')->result();
// $data['plan_id'] = $getPlanId[0]->plan_id;
//   $this->load->load_admin('templates/edit_announce', $data);
//   }
//   public function edit_countdown()
//   {
//     $shop            = $_GET['shop'];
//     $data['shop']    = $shop;
// $data['shop_id'] = shop_id($shop);
// $data['bar_detail'] = $this->Global_model->editBarDetail(4);
// $getPlanId = $this->db->query('select * from shopify_stores where id = "'.$data['shop_id'].'"')->result();
// $data['plan_id'] = $getPlanId[0]->plan_id;
//   $this->load->load_admin('templates/edit_countdown', $data);
//   }
  public function inactive(){
    $shop            = $_GET['shop'];
    $bar_id          = $_GET['bar_id'];
    // $script_id = $this->db->select('script_id')
    //                       ->from('bar_detail')
    //                       ->where('id',$bar_id)
    //                       ->get()->row();
    // $shopAccess = getShop_accessToken_byShop($shop);
    // $this->load->library('Shopify', $shopAccess);
    // $script = $this->shopify->call(['METHOD' => 'DELETE', 'URL' => 'admin/api/2020-04/script_tags/'. $script_id->script_id .'.json'], TRUE);
    $status = $this->Global_model->inactiveBar($shop,$bar_id);
    if ($status) {
      $this->Dashboard();
    }else{

    }
  }

  // public function get_script() {
  //   $shop = 'msubtest.myshopify.com';
  //   $shopAccess = getShop_accessToken_byShop($shop);
  //   $this->load->library('Shopify', $shopAccess);
  //   $script = $this->shopify->call(['METHOD' => 'GET', 'URL' => 'admin/api/2020-04/script_tags.json'], TRUE);
  //   echo "<pre>";
  //   print_r($script);
  //   exit;
  // }

  // public function delete_script() {
  //   $shop = 'msubtest.myshopify.com';
  //   $shopAccess = getShop_accessToken_byShop($shop);
  //   $this->load->library('Shopify', $shopAccess);
  //   $script = $this->shopify->call(['METHOD' => 'DELETE', 'URL' => 'admin/api/2020-04/script_tags/112114139182.json'], TRUE);
  // }

  public function active(){
    $shop            = $_GET['shop'];
    $bar_id          = $_GET['bar_id'];
    $shop_id         = shop_id($shop);
    $shopAccess = getShop_accessToken_byShop($shop);
    $this->load->library('Shopify', $shopAccess);
    // $script_id = $this->db->select('script_id')
    //                       ->from('bar_detail')
    //                       ->where('store_id',$shop_id)
    //                       ->where('active',1)
    //                       ->get()->row();
    // if ($script_id !='') {
    //   $this->shopify->call(['METHOD' => 'DELETE', 'URL' => 'admin/api/2020-04/script_tags/'. $script_id->script_id .'.json'], TRUE);
    // }
    // $script_data = array(
    //   "script_tag" => array(
    //     "event" => "onload",
    //     "src" => "https://amkwebsolutions.com/shopify-app/Shopify_announcement_bar/assets/js/vw-announcebar.js"
    //   )
    // );
    // $script_inject = $this->shopify->call(['METHOD' => 'POST', 'URL' => 'admin/api/2020-04/script_tags.json', 'DATA' => $script_data], TRUE);
    // $script_tag_id = $script_inject->script_tag->id;
    $status = $this->Global_model->activeBar($shop,$bar_id);
    if ($status) {
      $this->Dashboard();
    }else{

    }
  }

  public function delete(){
    $bar_id          = $_GET['bar_id'];
    $status = $this->Global_model->deleteBar($bar_id);
    if ($status) {
      $this->Dashboard();
    }else{

    }
  }

  public function edit(){
    $shop            = $_GET['shop'];
    $bar_id          = $_GET['bar_id'];
    $data['shop']    = $shop;
    $data['shop_id'] = shop_id($shop);
    $data['activebardata'] = $this->Global_model->getActiveBar($shop);
    $data['bar_detail'] = $this->Global_model->editBarDetail($bar_id);
    $getPlanId = $this->Global_model->getPlanID($data['shop_id']);
    $data['plan_id'] = $getPlanId[0]->plan_id;
    if ($_GET['bar_type'] == 'announce_bar') {
      $this->load->load_admin('templates/edit_announce', $data);
    }
    if ($_GET['bar_type'] == 'count_bar') {
      $this->load->load_admin('templates/edit_countdown', $data);
    }
  }

  public function getBarList(){
    $shop            = $_GET['shop'];
    $get = $this->Global_model->getBarList($shop);
    $no = 1;
    foreach ($get as $value) {
      $row    = array();
      $row[]  = $no++;
      $row[]  = $value->bar_name;
      $row[]  = $value->bar_text;
      $row[]  = $value->button_name;
      $row[]  = ($value->active > 0 ? '<span class="btn btn-success">Active</span>' : '<span class="btn btn-danger">Inactive</span>');
      if ($value->active == 1) {
                $blockUsers = '<li>
                <a class="action_link" href="' . base_url() . 'Home/inactive?bar_id=' . $value->id . '&shop='.$shop.'">
                    <i class="fa fa-toggle-off">
                    </i>
                      <span class="kt-nav__link-text">
                      Inactive
                      </span>
                </a>
              </li>';
            } else {
                $blockUsers = '<li>
                    <a class="action_link" href="' . base_url() . 'Home/active?bar_id=' . $value->id . '&shop='.$shop.'">
                        <i class="fa fa-toggle-on">
                        </i>
                          <span class="kt-nav__link-text">
                          Active
                          </span>
                    </a>
                  </li>';
            }
            $blockUsers .= '<li>
                <a class="action_link" href="' . base_url() . 'Home/edit?bar_id=' . $value->id . '&shop='.$shop.'&bar_type='.$value->bar_type.'">
                    <i class="fa fa-pencil">
                    </i>
                      <span class="kt-nav__link-text">
                      Edit
                      </span>
                </a>
              </li>';
              $blockUsers .= '<li>
                  <a class="action_link" href="' . base_url() . 'Home/delete?bar_id=' . $value->id . '&shop='.$shop.'">
                      <i class="fa fa-trash">
                      </i>
                        <span class="kt-nav__link-text">
                        Delete
                        </span>
                  </a>
                </li>';
      $row[]  = GetActionButton2($blockUsers);
      $data[] = $row;
    }
    $newdata = isset($data) ? $data : '';
    $output = array(
        "data"            => $newdata,
    );
    echo json_encode($output);
  }

  public function getActiveBar(){
    $shop            = $_GET['shop'];
    $data    = $this->Global_model->getActiveBar($shop);
    echo json_encode($data);

    // if ($data) {
    //   echo json_encode($data);
    // }else{
    //   $bar = (object) [
    //       'Bar is not active'
    //   ];
    //   echo json_encode($bar);
    // }
  }

  public function remove_image(){
    $shop            = $_GET['shop'];
    $image           = $_GET['img'];
    $path = "./upload/$image";
    unlink($path);
    $data = array('background_image' => '');
    $this->db->where('background_image', $image);
    $this->db->update('bar_detail', $data);
    redirect($this->agent->referrer());
  }
  public function Test()
  {
    $shop            = $_GET['shop'];
    $shopAccess = getShop_accessToken_byShop($shop);
    $this->load->library('Shopify', $shopAccess);
    $a = $this->shopify->call(['METHOD' => 'DELETE', 'URL' => 'admin/api/2020-04/script_tags/114548539438.json'], TRUE);
    if ($a) {
      echo "deleted";
    }else {
      echo "not delete";
    }
    exit;
    $this->load->view('test');
    if ($this->input->post('submit')) {

        $config['upload_path'] = 'assets/test';
        $config['allowed_types'] = '*';
        $config['file_name'] = $_FILES['file']['name'];
        //Load upload library and initialize configuration
        $this->load->library('upload');
        $this->upload->initialize($config);

        if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            $badgeFile1 = $uploadData['file_name'];
            $badgeFile=$badgeFile1;
        }else{
          $error = array('error' => $this->upload->display_errors());
          // print_r($error);
          // exit;
            $badgeFile = '';
        }
        // print_r($badgeFile);
        // exit;
      }
  }
  public function deleteBarData()
  {
    // date_default_timezone_set('Asia/Kolkata');
    $CurrentDate = date('Y/m/d h:i', time());
    $data = $this->Global_model->getTime($CurrentDate);
    if ($data) {
    foreach ($data as $value) {
      $id = $value->id;
      $this->Global_model->updateBarActive($id);
    }
    }
  }

  public function testcronjob(){

    $sql = "insert into crontest set time='" . date('Y/m/d h:i', time()) . "'";
    $this->db->query($sql);
    return "200";
  }
  public function deleteScripts()
  {
    $json = file_get_contents('php://input');
    $json_decode = json_decode($json, true);
    $shop = $json_decode['domain'];
    $getscriptID = $this->Global_model->getScriptID($shop);
    $scriptID = $getscriptID[0]->script_id;
    $shopAccess = getShop_accessToken_byShop($shop);
    $this->load->library('Shopify', $shopAccess);
    $this->shopify->call(['METHOD' => 'DELETE', 'URL' => 'admin/api/'.getYear().'/script_tags/'.$scriptID.'.json'], TRUE);
  }
}

/* End of file filename.php */
