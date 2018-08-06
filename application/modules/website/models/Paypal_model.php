<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paypal_model extends CI_Model{
 
    //insert transaction data
    public function insertTransaction($data = array())
    {
        $insert = $this->db->insert('ws_payments',$data);
        return $insert?true:false;
    }

}