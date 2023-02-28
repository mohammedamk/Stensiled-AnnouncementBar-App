<?php

class Global_model extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function check_ShopExist($shop = NULL){
    $query = $this->db->query("SELECT * FROM `shopify_stores` where  shop='" . $shop . "'");
    $rows  = $query->num_rows();
    if ($rows > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function get_shop_details($shop = NULL){
      $shop_details = $this->db->select('*')->where('shop', $shop)->get('shopify_stores');
      if ($shop_details->num_rows() > 0) {
          return $shop_details->row();
      } else {
          return false;
      }
  }

  public function UpdateShopDetails($where = array(), $data = array()){
      $this->db->where($where)->update('shopify_stores', $data);
      return $this->db->affected_rows();
  }

  public function update_Shop($data, $accessToken){
    if ($accessToken) {
      $sql = "update  shopify_stores set code='" . $data['code'] . "', hmac='" . $data['code'] . "', token='" . $accessToken . "' where  shop='" . $data['shop'] . "' ";
      $this->db->query($sql);
    }
  }

  public function add_newShop($data, $accessToken){
    $sql = "insert into shopify_stores set code='" . $data['code'] . "', hmac='" . $data['code'] . "', domain='" . $data['shop'] . "',shop='" . $data['shop'] . "', token='" . $accessToken . "' ";
    $this->db->query($sql);
  }

  public function create_bar($data){
    $insert = $this->db->insert('bar_detail', $data);
    return $insert;
  }


  public function newFeedback($data){
    $insert = $this->db->insert('feedback', $data);
    return $insert;
  }

  public function store_id($shop){
    $shopid = $this->db->select('id')
                       ->from('shopify_stores')
                       ->where("shop = '$shop'")
                       ->get()->row();
    return $shopid;
  }

  public function getBarList($shop){
    $shopid = $this->store_id($shop);

    $data = $this->db->select('*')
                     ->from('bar_detail')
                     ->where("store_id = '$shopid->id'")
                     ->where("deleted = 0")
                     ->get()->result();
    return $data;
  }

  public function inactiveBar($shop,$bar_id){
    $shop_id = $this->store_id($shop);
    $this->db->where('id',$bar_id);
    $res = $this->db->update('bar_detail',  array('active'=>0, 'script_id'=>NULL));
    return $res;
  }

  public function activeBar($shop,$bar_id){
    $shop_id = $this->store_id($shop);
    $this->db->where('store_id',$shop_id->id);
    $this->db->where('id',$bar_id);
    $result = $this->db->update('bar_detail',  array('active'=>1));

    return $result;
  }

  public function deleteBar($bar_id){
    // $this->db->where('id', $bar_id);
    // $result = $this->db->delete('bar_detail');
    $this->db->where('id',$bar_id);
    $result = $this->db->update('bar_detail',  array('deleted'=>1));
    return $result;
  }

  public function editBarDetail($bar_id){
    $data = $this->db->select('*')
                     ->from('bar_detail')
                     ->where("id = '$bar_id'")
                     ->where("deleted = 0")
                     ->get()->row();
    return $data;
  }

  public function updateBar($data,$bar_id){
    if ($data['background_image'] == NULL) {
      unset($data['background_image']);
    }

    $this->db->where('id', $bar_id);
    $result = $this->db->update('bar_detail', $data);
    return $result;
  }

  public function getActiveBar($shop){
    $shopid = $this->store_id($shop);
    $data = $this->db->select('*')
                     ->from('bar_detail')
                     ->where("store_id = '$shopid->id'")
                     ->where("active = '1'")
                     ->where("deleted = '0'")
                     ->get()->result();
    return $data;
  }
  public function getScriptID($shop)
  {
    $result = $this->db->select('*')
             ->from('shopify_stores')
             ->where("shop = '$shop'")
             ->get()->result();
    return $result;
  }
  public function getPlanID($id)
  {
    $result = $this->db->select('*')
             ->from('shopify_stores')
             ->where("id = '$id'")
             ->get()->result();
    return $result;
  }
  public function countBar($shop_id)
  {
    $result = $this->db->select('*')
             ->from('bar_detail')
             ->where("store_id = '$shop_id'")
             ->where("bar_type = 'count_bar'")
             ->where("deleted = 0")
             ->get()->result();
    return $result;
  }
  public function getTime($cdate)
  {
    $result = $this->db->select('*')
             ->from('bar_detail')
             ->where("end_time = '$cdate'")
             ->where("deleted = 0")
             ->get()->result();
    return $result;
  }
  public function updateBarActive($bar_id){
    $this->db->query('update bar_detail set active = 0 where id = "'.$bar_id.'"');
    return $result;
  }
}
?>
