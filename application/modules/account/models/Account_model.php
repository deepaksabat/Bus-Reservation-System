<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model
{
    
    public function account_view()
    {
        return $this->db->select('*')
            ->from('acc_account_name')
            ->order_by('account_id', 'desc')
            ->get()
            ->result();
    }

    public function account_create($data = array())
    {
        return $this->db->insert('acc_account_name', $data);
    }
    
    public function delete_account($id = null)
    {
        $this->db->where('account_id', $id)
            ->delete('acc_account_name');
        
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }

    //find accoun_id 
    public function accountlist()
    {
        $this->db->select('*');
        $this->db->from('acc_account_name');
        $this->db->where('account_type', 0);
        $query = $this->db->get();
        $data  = $query->result();
        $list  = array();
        if (!empty($data)) {
            foreach ($data as $value) {
                $list[$value->account_id] = $value->account_name;
            }
        }
        return $list;
    }

    //find account_id 
    public function acdropdown($account_type = null)
    {
        $this->db->select('*');
        $this->db->from('acc_account_name');
        if (in_array($account_type, array(0,1)))
        { 
            $this->db->where('account_type', $account_type);
        }
        $query = $this->db->get();
        $data  = $query->result();
        $list  = array();
        if (!empty($data)) {
            foreach ($data as $value) {
                $list[$value->account_id] = $value->account_name;
            }
        }
        return $list;
    }
    
    /* see payroll module update for seleted dropdown */ 
    public function acc()
    {
        $this->db->select('*');
        $this->db->from('acc_account_name');
        $this->db->where('account_type', 1);
        $query = $this->db->get();
        $data  = $query->result();
        $list  = array();
        if (!empty($data)) {
            foreach ($data as $value) {
                $list[$value->account_id] = $value->account_name;
            }
        }
        return $list;
    }
    
    
    public function update_account($data = array())
    {
        return $this->db->where('account_id', $data["account_id"])->update("acc_account_name", $data);
    }

    public function account_updateForm($id)
    {
        $this->db->where('account_id', $id);
        $query = $this->db->get('acc_account_name');
        return $query->row();
    }
    
    public function trans_view()
    {
        return $this->db->select('
            acn_account_transaction.*, 
            acc_account_name.*,
            CONCAT_WS(" ", user.firstname, user.lastname) as created_by
            ')
            ->from('acn_account_transaction')
            ->join('acc_account_name', 'acc_account_name.account_id = acn_account_transaction.account_id', 'left')
            ->join('user', 'user.id = acn_account_transaction.create_by_id', 'left')
            ->order_by('account_tran_id', 'desc')
            ->get()
            ->result();
    }

    public function trans_create($data = array())
    {
        return $this->db->insert('acn_account_transaction', $data);
    }
    
    public function delete_trans($id = null)
    {
        $this->db->where('account_tran_id', $id)
            ->delete('acn_account_transaction');
        
        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function update_trans($data = array())
    {
        return $this->db->where('account_tran_id', $data["account_tran_id"])
        ->update("acn_account_transaction", $data);
    }
    
    public function view_details()
    {
        return $this->db->select('*')
            ->from('acn_account_transaction')
            ->get()
            ->result();
    }
    
    public function details($id = null)
    { 
        return $this->db->select('
            acn_account_transaction.*, 
            acc_account_name.*,
            CONCAT_WS(" ", user.firstname, user.lastname) as created_by
            ')
            ->from('acn_account_transaction')
            ->join('acc_account_name', 'acc_account_name.account_id = acn_account_transaction.account_id', 'left')
            ->join('user', 'user.id = acn_account_transaction.create_by_id', 'left')
            ->where('acn_account_transaction.account_tran_id', $id)
            ->get()
            ->row();
    }  
    
}

