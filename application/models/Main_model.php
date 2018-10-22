<?php
class Main_model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
    public function check_admin($email,$password)
    {
    	$query=$this->db
    	->select('*')
    	->from('admin')
    	->where(array('admin_email'=>$email,'admin_password'=>$password))
    	->get();
    	if($query->num_rows() > 0)
    	{
    		return $query->row();
    	}
    }
    public function insert_items($data)
    {
        $this->db->insert('items',$data);
    }
    public function fetch_items()
    {
        if($query=$this->db->select('*')->from('items')->join('company','company.company_id=items.company_name','left')->order_by('item_id','desc')->get())
        {
            return $query->result();
        }
    }
    public function fetch_company_data()
    {
      $query=$this->db
            ->select('*')
            ->from('company')
            ->where('is_delete','0')
            ->get();
      return $query->result();
    }
    public function fetch_company()
    {
      $query=$this->db
            ->select('*')
            ->from('company')
            ->where('is_delete','0')
            ->order_by('company_id','desc')
            ->get();
      return $query->result();
    }
    public function get_order_Invoice_id()

    {
      $sql="SELECT id FROM invoice UNION ALL SELECT null ORDER BY id DESC LIMIT 1";
        $query = $this->db->query($sql);
        return $query->row()->id;
    }

    public function insert_company($data)
    {
        $this->db->insert('company',$data);
    }
    public function fetch_party_data_order()
    {
        if($query=$this->db->select('*')->from('party')->get())
        {
            return $query->result();
        }
    }
    public function get_unique_company($com_id)
    {
        $query=$this->db
        ->select('*')
        ->from('party')
        ->where('party_id',$com_id)
        ->get();
        return $query->row();
    }
    public function get_company_code($com_id)
    {
        $query=$this->db
        ->select('*')
        ->from('company')
        ->where('company_id',$com_id)
        ->get();
        return $query->row();
    }
    public function get_party_code($com_id)
    {
        $query=$this->db
        ->select('*')
        ->from('party')
        ->where('party_id',$com_id)
        ->get();
        return $query->row();
    }
      public function get_unique_company_data_stock($com_id)
    {
        $query=$this->db
        ->select('*')
        ->from('party')
        ->where('party_id',$com_id)
        ->get();
        return $query->row();
    }
     public function get_unique_party_order($party_id)
    {
        $query=$this->db
        ->select('*')
        ->from('party')
        ->where('party_id',$party_id)
        ->get();
        return $query->row();
    }
     public function get_unique_party($party_id)
    {
        $query=$this->db
        ->select('*')
        ->from('party')
        ->where('party_id',$party_id)
        ->get();
        return $query->row();
    }
    public function get_unique_company_pending_amount($com_id)
    {
        $query=$this->db
        ->select_sum('remaining')
        ->from('order_billing')
        ->where('company_id',$com_id)
        ->get();
        return $query->row();
    }
    public function get_unique_company_stock_pending_amount($com_id)
    {
        $query=$this->db
        ->select_sum('remaining')
        ->from('stock_billing')
        ->where('company_id',$com_id)
        ->get();
        return $query->row();
    }
    public function get_party_remaining_balance($com_id)
    {
      $query=$this->db
            ->select_sum('remaining')
            ->from('order_billing')
            ->where('company_id',$com_id)
            ->get();
            if($query->num_rows() == 1)
            {
              return $query->row();
            }
            else
            {
              return FALSE;
            }
    }
    public function get_unique_item($item_id,$com_id)
    {
        $query=$this->db
        ->select('*')
        ->from('items')
        ->where('item_id',$item_id)
        ->or_where('multiple_items.party_m_id',$com_id)
        ->join('price','price.item_name=items.item_id')
        ->join('multiple_items','items.item_id=multiple_items.item_m_id')
        ->order_by('price.date','desc')
        ->get();
        return $query->row();
    }
    public function getItem($com_id)
    {
        $query = $this->db
                 ->select('*')
                 ->from('items')
                 ->where('company_name',$com_id)
                 ->get();
        return $query->result();
    }
     public function getItemsPurchase($com_id)
    {
        $query = $this->db
                 ->select('*')
                 ->from('multiple_items')
                 ->where('party_m_id',$com_id)
                 ->join('items','items.item_id=multiple_items.item_m_id')
                 ->get();
        if($query->num_rows() > 0)
        {
        return $query->result();
        }
        else
        {
          return FALSE;
        }
    }
    public function insertInvoce($insert)
    {
        return $this->db->insert('invoice',$insert);
    }
    public function insertOrder_billing($data)
    {
        $this->db->insert('order_billing',$data);
        return $this->db->insert_id();
    }
    public function fetch_order_invoice_id($bill_id)
    {
        $query = $this->db->select('*')->from('order_billing')->where('bill_id',$bill_id)->get();
        return $query->row()->invoice_id;
    }
    public function fetch_order_bill_data($bill_id)
    {
        $query = $this->db->select('*')->from('order_billing')->where('bill_id',$bill_id)->join('party','party.party_id=order_billing.company_id')->get();
        return $query->row();
    }
     public function fetch_order_data($invoice_id)
    {
        $query = $this->db->select('*,invoice.date,invoice.item_name,items.packing_unit')->from('invoice')->where('is_removed','0')->join('party','party.party_id=invoice.item_name','left')->join('items','items.item_id=invoice.item_id')->where('number',$invoice_id)->get();
        return $query->result();
    }

    // public function invoice($status=null)
    // {
    //     if ($status!=null) {           
            
    //         if ($status==0) {
    //             $this->db->select('*');
    //             $this->db->from('invoice');
    //             $this->db->where('status',0);
    //             $this->db->join('company','company.com_id=invoice.com_name');    
    //             $query=$this->db->get();
    //             return $query->result();
    //         }
    //         elseif ($status==1) {
               
    //             $this->db->select('*');
    //             $this->db->from('invoice');
    //             $this->db->where('status',1);
    //             $this->db->join('company','company.com_id=invoice.com_name');
    //             $query=$this->db->get();
    //             return $query->result();
    //         }
    //     }
    //     else{
    //         $this->db->select('*');
    //         $this->db->from('invoice');
    //         $this->db->join('company','company.com_id=invoice.com_name');
    //         $this->db->join('items','items.item_id=invoice.item_name');
    //         $query=$this->db->get();
    //         return $query->result();
    //     }
        
    // }
    public function invoice()
    {
        $query=$this->db
              ->select('*')
              ->from('invoice')
              //->where('is_printed', '0')
              ->where('order_billing.is_returned','NULL')
              ->join('party','party.party_id=invoice.com_name')
              ->join('order_billing','order_billing.invoice_id=invoice.number')
              ->group_by('number')
              ->get();
        return $query->result();
    }
    public function sale_invoice()
    {
        $query=$this->db
              ->select('*')
              ->from('invoice')
              //->where('is_printed', '0')
              ->where_not_in('order_billing.is_returned','1')
              ->join('party','party.party_id=invoice.com_name')
              ->join('order_billing','order_billing.invoice_id=invoice.number')
              ->group_by('number')
              ->get();
        return $query->result();
    }

    public function fetch_all_order_billing(){
      $query=$this->db
              ->select('*')
              ->from('order_billing')
              ->where_not_in('order_billing.is_returned','1')
              ->join('party','party.party_id=order_billing.company_id')
              ->join('invoice','invoice.number=order_billing.invoice_id')
              ->where('invoice.is_printed', '0')
              ->group_by('order_billing.invoice_id')
              ->get();
        return $query->result();
    }

    public function fecth_ivoices_by_number($number)
    {
        $query=$this->db
              ->select('*')
              ->from('invoice')
              ->where('is_printed', '0')
              // ->where_not_in('invoice.is_partial','1')
              ->join('party','party.party_id=invoice.com_name')
              ->join('order_billing','order_billing.invoice_id=invoice.number')
              ->where('number', $number)
              ->get();
        return $query->result();
    }
    public function fecth_stock_by_number($number)
    {
        $query=$this->db
              ->select('*')
              ->from('stock as s')
             // ->where_in('s.is_returned', '0')
              ->where('s.stock_id', $number)
              ->join('party','party.party_id=s.company_name')
              ->join('stock_billing','stock_billing.invoice_id=s.stock_id')
              ->get();
        return $query->result();
    }
    public function fecth_ivoices_return_by_date($number)
    {
        $query=$this->db
              ->select('*')
              ->from('invoice')
              ->where('is_returned', '1')
              ->join('party','party.party_id=invoice.com_name')
              ->join('order_billing','order_billing.invoice_id=invoice.number')
              ->where('number', $number)
              ->get();
        return $query->result();
    }
     public function fecth_ivoices_by_number_order_pdf($number)
    {
        $query=$this->db
              ->select('*')
              ->from('invoice')
              //->where('is_printed', '0')
              ->where('is_removed','0')
              ->join('party','party.party_id=invoice.com_name')
              ->join('order_billing','order_billing.invoice_id=invoice.number')
              ->where('number', $number)
              ->get();
        return $query->result();
    }

    public function fecth_ivoices_by_number_items_order_pdf($number,$item_id,$party)
    {
        $query=$this->db
              ->select('*')
              ->from('invoice')
              ->where('item_name',$item_id)
              ->where('com_name',$party)
              //->where('is_printed', '0')
              ->where('is_removed','0')
              ->join('party','party.party_id=invoice.com_name')
              ->join('order_billing','order_billing.invoice_id=invoice.number')
              ->where('number', $number)
              ->get();
        return $query->result();
    }
    public function fecth_ivoices_by_number_party_order_pdf($number,$party)
    {
        $query=$this->db
              ->select('*')
              ->from('invoice')
              //->where('item_name',$item_id)
              ->where('com_name',$party)
              //->where('is_printed', '0')
              ->where('is_removed','0')
              ->join('party','party.party_id=invoice.com_name')
              ->join('order_billing','order_billing.invoice_id=invoice.number')
              ->where('number', $number)
              ->get();
        return $query->result();
    }

    public function fetch_f_data(){
      $query=$this->db
              ->select('*')
              ->from('invoice')
              ->where('is_printed', '0')
              ->join('party','party.party_id=invoice.com_name')
              //->join('invoice','invoice.number=order_billing.invoice_id')
              ->group_by('number')
              ->get();
        return $query->result();
    }

    public function order_invoice()
    {
        $query=$this->db
              ->select('*')
              ->from('invoice')
              ->where('is_printed', '0')
              ->where('is_partial', '0')
              ->join('party','party.party_id=invoice.com_name')
              ->join('order_billing','order_billing.invoice_id=invoice.number')
              ->group_by('number')
              ->get();
        return $query->result();
    }
     public function view_order_invoice()
    {
        $query=$this->db
              ->select('*')
              ->from('invoice')
              //->where('is_printed','1')
              // ->where('is_printed', '0')
               //->where('is_partial', '0')
              ->where_not_in('order_billing.is_returned','1')
              ->join('party','party.party_id=invoice.com_name')
              ->join('order_billing','order_billing.invoice_id=invoice.number')
              ->group_by('number')
              ->get();
        return $query->result();
    }

    public function printed_invoice()
    {
        $query=$this->db
              ->select('*')
              ->from('invoice')
              ->where('is_printed','1')
              ->join('party','party.party_id=invoice.com_name')
              ->join('order_billing','order_billing.company_id=invoice.com_name')
              ->group_by('number')
              ->get();
        return $query->result();
    }

    
    public function insertStock($insert)
    {
         $this->db->insert('stock',$insert);
        //return $this->db->insert_id();
    }
    public function insertStock_billing($data)
    {
        $this->db->insert('stock_billing',$data);
        return $this->db->insert_id();
    }
    public function fetch_invoice_id($bill_id)
    {
        $query = $this->db->select('*')->from('stock_billing')->where('bill_id',$bill_id)->get();
        return $query->row()->invoice_id;
    }
    public function fetch_bill_data($bill_id)
    {
        $query = $this->db->select('*')->from('stock_billing')->where('invoice_id',$bill_id)->join('party','party.party_id=stock_billing.company_id')->get();
        return $query->row();
    }
     public function fetch_stock_data($invoice_id)
    {
        $query = $this->db->select('*')->from('stock')->where('stock_id',$invoice_id)->join('items','items.item_id = stock.item_name')->get();
        return $query->result();
    }
    public function fetchStock()
    {
        $this->db->select('*,s.item_name as item_id');
        $this->db->from('stock as s');
       // $this->db->where('item_code',$code);
        
         $this->db->select_sum('s.quantity');
         $this->db->select_sum('s.balance');
        // $this->db->select_sum('invoice.quantity' );
        // $this->db->where('item_code',$code);
       $this->db->group_by('s.item_name');
       $this->db->join('party','party.party_id = s.company_name');
       $this->db->join('items','items.item_id = s.item_name');
     // $this->db->join('invoice as i','i.item_id=s.item_name');
        $query=$this->db->get();
        return $query->result();

    }
    public function getData($id){
      $sql = $this->db->query("SELECT SUM(quantity) AS total FROM invoice WHERE item_id = '".(int)$id."'");
      return $sql->row();
    }
    public function getparty_debit($id){
      $sql = $this->db->query("SELECT SUM(remaining) AS debit FROM order_billing WHERE company_id = '".(int)$id."'");
      return $sql->row();
    }
     public function getparty_credit($id){
      $sql = $this->db->query("SELECT SUM(remaining) AS credit FROM stock_billing WHERE company_id = '".(int)$id."'");
      return $sql->row();
    }
     public function fetchStockData()
    {
        $this->db->select('*');
        $this->db->from('stock as s');
        $this->db->join('items','items.item_id=s.item_name');
        $this->db->join('party','party.party_id = s.company_name','left');
        $query=$this->db->get();
        return $query->result();

    }
    
    // public function total_quantity($code)
    // {
    //     $this->db->select('*');
    //     $this->db->select_sum('quantity');
    //     $this->db->where('item_code',$code);
    //     $this->db->from('stock');
    //     $query=$this->db->get();
    //     return $query->result();

    // }
    public function getItemsReport($start_date,$end_date)
    {
        $query = $this->db
                 ->select('*')

                 ->from('items as i')
                 ->where('date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->join('party','party.party_id = i.company_name')
                 ->group_by('date')
                 ->get();
        return $query->result();
    }
     public function getItemsShowReport($start_date,$end_date)
    {
        $query = $this->db
                 ->select('*')

                 ->from('items as i')
                 ->where('date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->join('party','party.party_id = i.company_name')
                 //->group_by('date')
                 ->get();
        return $query->result();
    }
    public function getTotalBalance($start_date,$end_date)
    {
        $query = $this->db
                 ->select('*')
                 ->from('items')
                 ->where('date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->get();
        return $query->row();
    }

    public function get_order_Report($start_date,$end_date)
    {
        $query = $this->db
                 ->select('*')
                 ->from('invoice as i')
                 ->join('items','items.item_id=i.item_name')
                 ->where('i.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->get();
        return $query->result();
    }

    public function getTotalBalance_order($start_date,$end_date)
    {
        $query = $this->db
                 ->select('SUM(total) AS total_amount')
                 ->from('invoice')
                 ->where('date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->get();
        return $query->row();
    }
    public function getPreviousTotal($start_date)
    {
        $query=$this->db
               ->select('SUM(total) as pre_amount')
               ->from('invoice')
               ->where('date <', $start_date)
               ->get();

        return $query->result();
    }

    public function getPDF($start_date,$end_date)
    {
        $query = $this->db
                 ->select('*')
                 ->from('items')
                 ->where('date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->get();
        return $query->result();
    }
    public function getTotalPDF($start_date,$end_date)
    {
        $query = $this->db
                 ->select('SUM(balance) AS total_amount')
                 ->from('items')
                 ->where('date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->get();
        return $query->row();
    }

    public function update_status($data,$id)
    {
            $query = $this->db->select('*')->where('id',$id)->update('invoice',$data);
            if ($query) {
                return 1;
            }
    }
    //    public function get_company_order_Report($start_date,$end_date)
    // {
    //     $query = $this->db
    //              ->select('*')
    //              ->from('invoice')
    //               ->where('date','date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
    //              // ->where('come_code',$com_id)
                 
    //              ->get();
    //     return $query->result();
    // }
    public function get_comapny_order_Report($start_date,$end_date,$com_id)
    {
        $query = $this->db
                 ->select('*')
                ->from('order_billing as i')
                 ->where('invoice.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                  ->where('invoice.com_name',$com_id)
                  ->join('invoice','invoice.number=i.invoice_id')
                  ->group_by('invoice_id')
                 // ->where('come_code',$com_id)
                 ->get();
        return $query->result();
    }

    public function fetch_company_order_data($com_id)
    {
        if($query=$this->db->select('*')->from('company')->where('come_code',$com_id)->get())
        {
            return $query->result();
        }
    }
    public function getCompanyPreviousTotal($start_date,$com_id)
    {
        $query=$this->db
               ->select('SUM(total) as pre_amount')
               ->from('invoice')
               ->where(array('date <' => $start_date,'come_code' => $com_id))
               //->where('date <',$start_date)
               // ->where('come_code',$com_id)
               // ->where($company)
               ->get();

        return $query->result();
    }
    public function total_pending()
    {
      $query=$this->db
            ->select('SUM(total) AS total')
            ->from('invoice')
            ->where('status',0)
            ->get();
            return $query->row()->total;  
    }


    //   public function get_comapny_test_order_Report($start_date,$end_date)
    // {
    //     $query = $this->db
    //              ->select('*')
    //              ->from('invoice')

    //              ->where('date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
    //              // ->where('come_code',$com_id)
    //              ->get();
    //     return $query->result();
    // }

    public function get_comapny_stock_Report($start_date,$end_date,$com_id)
    {
        $query = $this->db
                 ->select('*')
                 ->from('stock as s')
                 ->where('s.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->where('s.company_name',$com_id)
                 ->join('items','items.item_id=s.item_name')
                 ->get();
               //   echo $this->db->last_query();
  // exit();
        return $query->result();
    }
    public function getTotalBalance_stock($start_date,$end_date)
    {
        $query = $this->db
                 ->select('SUM(balance) AS total_amount')
                 ->from('stock')
                 ->where('date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->where('company_name',$com_id)
                 ->get();
        return $query->row();
    }
    //Company Ledger

   public function get_company_ledger_stock($start_date,$end_date,$party_id)
    {
        $query = $this->db
                 ->select('*')
                 ->from('stock_billing as s')
                  ->where('stock.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                  ->where('s.company_id',$party_id)
                  ->join('stock','stock.stock_id=s.invoice_id')
                  ->group_by('s.invoice_id')
                 ->get();
        return $query->result();
    }

     public function get_party_ledger_stock($start_date,$end_date,$party_id)
    {
        $query = $this->db
                 ->select('*')
                 ->from('order_billing as s')
                  ->where('invoice.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                  ->where('s.company_id',$party_id)
                  ->join('invoice','invoice.number=s.invoice_id')
                  ->group_by('s.invoice_id')
                 ->get();
        return $query->result();
    }



    //show order item report..
     public function get_unique_company_item_detail($com_id)
    {
        $query=$this->db
        ->select('item_id,item_name')
        ->from('items')
        ->where('company_name',$com_id)
        ->get();
        return $query->result();
    }
   public function get_item_order_Report($start_date,$end_date,$com_id,$item_name)
    {
        $query = $this->db
                 ->select('*')
                 ->from('order_billing as i')
                 ->where('invoice.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                  ->where('invoice.com_name',$com_id)
                  ->where('invoice.item_name',$item_name)
                 ->join('invoice','invoice.number=i.invoice_id')
                 ->group_by('invoice_id')
                 // ->group_by('invoice.item_name')
                 ->get();
        return $query->result();
    }

    //show item stock report vieew
    public function get_item_stock_Report($start_date,$end_date,$com_id,$item_id)
    {
        $query = $this->db
                 ->select('*')
                 ->from('stock as s')
                 ->where('s.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->join('items','items.item_id=s.item_name')
                  ->where('s.company_name',$com_id)
                  ->where('s.item_name',$item_id)
                  // ->where('item_name',$item_name)
                 ->get();
        return $query->result();
    }
    public function invoice_delivered()
    {
                $this->db->select("company.company_name, i.come_code,GROUP_CONCAT(i.number SEPARATOR ', ') as number,GROUP_CONCAT(items.item_name SEPARATOR ', ') as item_name,GROUP_CONCAT(i.date SEPARATOR ', ') as date,GROUP_CONCAT(i.quantity SEPARATOR ', ') as quantity,GROUP_CONCAT(i.unit_price SEPARATOR ', ') as unit_price,GROUP_CONCAT(i.total SEPARATOR ', ') as total");
                $this->db->from('invoice as i');
                // $this->db->select_sum()
                $this->db->where('status',1);
                $this->db->join('company','company.company_id=i.com_name');
                $this->db->join('items','i.item_name=items.item_id');

                $this->db->group_by('number');
                //$this->db->order_by('number DESC');
                $query=$this->db->get();
                return $query->result();
            }
            //Edit items
            public function edit_items($edit_id)
            {
              $query=$this->db
                    ->select('*,brand.brand_name')
                    ->from('items')
                    ->where_in('item_id',$edit_id)
                    ->join('party','party.party_id=items.company_name')
                    ->join('brand','brand.brand_id=items.brand_name')
                    ->get();
              return $query->row();      
            }
            public function update_items($edit_id,$updated_data)
            {
              $this->db->select('*')->from('items')->where('item_id',$edit_id)->update('items',$updated_data);
            }
            //Delete ITems.
            public function delete_items($del_id)
            {
              $this->db->select('*')->from('items')->where('item_id',$del_id)->delete();
            }
             public function get_comapny_order_ledger($start_date,$end_date,$com_id)
    {
        $query = $this->db
                 ->select('*')
                 ->from('order_billing as i')
                 ->where('invoice.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 ->join('invoice','invoice.number=i.invoice_id')
                // ->where('i.company_id',$com_id)
                 ->group_by('invoice_id')
                 ->get();
        return $query->result();
    }
     public function get_comapny_order_ledger_show_items($start_date,$end_date)
           {
              $query = $this->db
                 ->select('*')
                 ->from('order_billing as i')
                 ->where('invoice.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                 //->where('bill_is_printed','0')
                 ->join('invoice','invoice.number=i.invoice_id')
                 ->join('party','party.party_id=i.company_id')
                 ->group_by('invoice_id')
                 ->get();
              return $query->result();
        }
        public function insert_party_data($data)
        {
          $this->db->insert('party',$data);
        }
     public function view_party()
     {
      if($query=$this->db
               ->select('*')
               ->from('party')
               ->where('is_delete','0')
               ->order_by('party_id','desc')
               ->get())
      {
        return $query->result();
      }
     }
     public function fetch_party_data()
     {
      if($query=$this->db
               ->select('*')
               ->from('party')
               ->where('is_delete','0')
               // ->join('items','items.company_name=party.party_id')
               ->get())
      {
        return $query->result();
      }
     }
     public function fetch_sale_invoice($number)
     {
         if($query=$this->db
               ->select('*')
               ->from('invoice')
               ->where('number',$number)
               ->join('party','party.party_id=invoice.com_name')
               // ->join('items','items.item_id=invoice.item_name')
               //->group_by('number')
               ->order_by('id','DESC')
               ->get())
      {
        return $query->result();
      }
     }
     public function fetch_each_order_billing_total($number){
            if($query=$this->db
                    ->select('((total_amount*discount)/100) + (total_amount) as calculate')
                    ->from('order_billing')
                    ->where('invoice_id',$number)
                    ->get())
            {
              return $query->row()->calculate;
            }
     }
     public function fetch_each_invoice_total($number){
            if($query=$this->db
                     ->select('SUM(total) as calculate')
                     ->from('invoice')
                     ->where('number',$number)
                     ->get())
            {
              return $query->row()->calculate;
            }
     }
     public function fetch_data()
     {
      $query=$this->db->get('items');
      return $query->result();
     }
     public function add_party_items()
     {
      $query=$this->db
            ->select('*')
            ->from('party')
            ->get();
      return $query->result();      
     }
    public function insert_party_items_data($data)
    {
      $this->db->insert('party_items',$data);
    }
    public function view_party_items_data()
    {
      $query=$this->db
            ->select('*')
            ->from('party_items')
            ->join('party','party.party_id=party_items.party_name')
            ->get();
      if($query->num_rows())
      {
        return $query->result();
      }
    }
    public function fetch_items_data()
    {
      $query=$this->db
            ->select('*,item_name')
            ->from('items')
            ->get();
      return $query->result();
    }
    public function insert_price_data($inserted_data)
    {
      $this->db->insert('price',$inserted_data);
    }
    public function view_price_allocate(){
      //$check=str_replace('p-','','price.party_name');
      $query=$this->db
            ->select('price.date,items.item_name,party.party_name,company.company_name,price.purchase_rate,price.sale_rate,price.id,price.p_id,price.c_id')
            ->from('price')
            //->where('price.party_name',$check)
            ->join('items','items.item_id=price.item_name')
            ->join('company','company.company_id=price.c_id','left')
            ->join('party','party.party_id=price.p_id','left')
            ->get();
      return $query->result();
    }
    public function edit_allocate_price($id)
    {
      $query=$this->db
            ->select('*')
            ->from('price')
            ->where('id',$id)
            ->join('items','items.item_id=price.item_name')
            ->join('company','company.company_id=price.c_id','left')
            ->join('party','party.party_id=price.p_id','left')
            ->get();
      return $query->row();
    }
    public function update_price_allocate($id,$data)
    {
      $this->db->select('*')->from('price')->where('id',$id)->update('price',$data);
    }
    public function check_customer($email,$password)
    {
      $query=$this->db
            ->select('*')
            ->from('customer')
            ->where(array('customer_email'=>$email,'customer_password'=>$password))
            ->get();
       return $query->row();

    }
    public function delete_invoice($id)
    {
      $this->db->select('*')->from('invoice')->where('number',$id)->delete();
    }
    public function price_allocate_pdf()
    {
      $query=$this->db
            ->select('*')
            ->from('price')
            ->join('items','items.item_id=price.item_name')
            ->join('party','party.party_id=price.party_name')
            ->get();
      return $query->result();
    }
    public function brandData($data)
    {
      $this->db->insert('brand',$data);
    }
    public function viewBrand()
    {
      $query=$this->db
            ->select('*')
            ->from('brand')
            ->where('is_delete','0')
            ->order_by('brand_id','desc')
            ->get();
      return $query->result();
    }
    public function editBrand($brand_id)
    {
      $query=$this->db
            ->select('*')
            ->from('brand')
            ->where('brand_id',$brand_id)
            ->get();
      return $query->row();
    }
    public function updateBrandData($id,$data)
    {
      $this->db->select('*')->from('brand')->where('brand_id',$id)->update('brand',$data); 
    }
    public function deleteBrand($id)
    {
      $this->db->select('*')->from('brand')->where('brand_id',$id)->delete();
    }
    public function fetch_unique_brand($brand_id)
    {
      $query=$this->db
            ->select('*')
            ->from('brand')
            ->where('brand_id',$brand_id)
            ->get();
      return $query->row();
    }
    public function fetch_all_company_details()
    {
      $query=$this->db
            ->select('*')
            ->from('company')
            ->group_by('company.company_id')
            ->select_sum('remaining')
            ->join('stock_billing','stock_billing.company_id=company.company_id')
            ->get();
      return $query->result();
    }
    public function fetch_all_party_details_data()
    {
      $query=$this->db
            ->select('*')
            ->from('party')
            ->group_by('party.party_id')
            ->select_sum('remaining')
            ->join('stock_billing','stock_billing.company_id=party.party_id')
            ->get();
      return $query->result();
    }

    public function fetch_all_party_details()
    {
      $query=$this->db
            ->select('*')
            ->from('party')
            ->group_by('party_id')
            ->select_sum('remaining')
            ->join('order_billing','order_billing.company_id=party.party_id')
            ->get();
      return $query->result();
    }
    public function insertReceivedVoucher($data)
    {
      $this->db->insert('received_voucher',$data);
      return $this->db->insert_id();
    }
    public function fetch_received_voucher()
    {
      $query=$this->db
            ->select('*')
            ->from('received_voucher')
            ->join('party','party.party_id=received_voucher.party')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
    }
    public function insertPaymentVoucher($data)
    {
      $this->db->insert('payment_voucher',$data);
      return $this->db->insert_id();
    }
    public function fetch_payment_voucher()
    {
      $query=$this->db
            ->select('*')
            ->from('payment_voucher as p')
            ->join('company','company.company_id=p.company')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
    }
    public function fetch_received_voucher_invoice($id)
    {
      $query=$this->db
            ->select('*')
            ->from('received_voucher')
            ->where('voucher_id',$id)
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row()->invoice_id;
      }
    }
    public function fetch_unique_party_pending($party_name)
    {
      $query=$this->db
            ->select('*,SUM(remaining) as remain')
            ->from('order_billing')
            ->where('company_id',$party_name)
            ->get();
      return $query->row();

    }
    public function fetch_unique_company_pending($company_id)
    {
     $query=$this->db
           ->select('*,SUM(remaining) as remain')
           ->from('stock_billing')
           ->where('company_id',$company_id)
           ->get();
    return $query->row();
    }
    public function insertPartyPaid($data1)
    {
      $this->db->insert('order_billing',$data1);
    }
    public function insertCompanyPaid($data1)
    {
      $this->db->insert('stock_billing',$data1);
    }
    public function fetch_data_unique_party($party_id)
    {
      $query=$this->db
            ->select('*')
            ->from('party')
            ->where('party_id',$party_id)
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row();
      }
    }
    public function insert_region_data($data)
    {
      $this->db->insert('region',$data);
    }
    public function fetch_region_data()
    {
      $query=$this->db
            ->select('*')
            ->from('region')
            ->where('is_delete','0')
            //->join('party','party.region_party_name=region.region_id')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
    }
        public function fetch_region()
    {
      $query=$this->db
            ->select('*')
            ->from('region')
            ->where('is_delete','0')
            //->join('party','party.region_party_name=region.region_id')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
    }
    public function delete_region_data($del_id)
    {
      $this->db->select('*')->from('region')->where('region_id',$del_id)->delete();
    }
    public function edit_region_data($edit_id)
    {
      $query=$this->db
            ->select('*')
            ->from('region')
            ->where('region_id',$edit_id)
            ->get();
        return $query->row();
    }
    public function update_region_data($id,$data)
    {
      $this->db->where('region_id',$id);
      $this->db->update('region',$data);
    }
    public function fetch_unique_region_code($region_id)
    {
      $query=$this->db
            ->select('*')
            ->from('region')
            ->where('region_id',$region_id)
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row();
      }
    }
    public function total_company_record()
    {
      $query=$this->db
            ->select('*')
            ->from('company')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->num_rows();
      }
    }
    public function total_party_record()
    {
      $query=$this->db
            ->select('*')
            ->from('party')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->num_rows();
      }
    }
    public function total_order_record()
    {
      $query=$this->db
            ->select('*')
            ->from('order_billing')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->num_rows();
      }
    }
    public function total_items_record()
    {
      $query=$this->db
            ->select('*')
            ->from('items')
            ->get();
    if($query->num_rows() > 0)
    {
      return $query->num_rows();
    }
    }
    public function total_regions_record()
    {
      $query=$this->db
            ->select('*')
            ->from('region')
            ->get();
    if($query->num_rows() > 0)
    {
      return $query->num_rows();
    }
    }
    public function total_stock_record()
    {
      $query=$this->db
            ->select('*')
            ->from('stock_billing')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->num_rows();
      }
    }
    public function total_daily_record()
    {
      $query=$this->db
            ->select('*')
            ->from('invoice')
            ->where('date',$date=date('Y-m-d'))
            ->group_by('number')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->num_rows();
      }
    }
    public function delete_allocate_price($del_id)
    {
      $this->db->select('*')->from('price')->where('id',$del_id)->delete();
    }
    public function daily_based_orders()
    {
      $query=$this->db 
             ->select('*')
             ->from('invoice')
             ->where('date',$date=date('Y-m-d'))
             ->join('party','party.party_id=invoice.com_name')
             ->group_by('number')
             ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
    }
    public function profile_data($id)
    {
     $this->db->where('admin_id',$id);
     $query=$this->db->get('admin');
     return $query->row();
    }
    public function retun_removed_invoices($id,$number)
    {
       $query=$this->db->where_not_in('id',$id)
          ->where('number',$number)
          ->from('invoice')
          ->get();
        if($query->num_rows() > 0)
        {
          return $query->result();
        }
    }

    public function update_removed_invoices($id,$number)
    {
      $update = array(
            'is_removed'=> '1'
        );
        $this->db->where('number',$number);
        $this->db->where_not_in('id',$id);
        $this->db->update('invoice',$update);
    }

    public function fetch_unique_party_items($party_id){
            if(
               $query=$this->db
                     ->select('*')
                     ->from('items')
                     ->where('company_name',$party_id)
                     ->get())
              return $query->row();
    }

    public function items_data_by_party($party_id){
          if(
               $query=$this->db
                     ->select('*')
                     ->from('items')
                     ->where('company_name',$party_id)
                     ->get())
              return $query->result();
    }

    public function load_search_list($com_id,$search){
              $query=$this->db
                    ->select('*')
                    ->from('price')
                    ->where('party_name',$com_id)
                    ->like('item_name',$search)
                    ->get();
              return $query->result();
    }

    public function fetch_order_party_ledger($start_date,$end_date,$party_id){
                    $query=$this->db
                          ->select('*')
                          ->from('order_billing as i')
                          ->where('invoice.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                          ->where('i.company_id',$party_id)
                          //->join('invoice','invoice.number=i.invoice_id')
                          ->join('invoice','invoice.number=i.invoice_id')
                          ->group_by('invoice_id')
                          ->get();
                    return $query->result();
    }
    public function fetch_stock_party_ledger($start_date,$end_date,$party_id){
                    $query=$this->db
                          ->select('*')
                          ->from('stock_billing as i')
                          ->where('stock.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                          ->where('i.company_id',$party_id)
                          //->join('invoice','invoice.number=i.invoice_id')
                          ->join('stock','stock.stock_id=i.invoice_id')
                          ->group_by('invoice_id')
                          ->get();
                    return $query->result();
    }
    public function item_code_check($code){
                    $this->db->where('code',$code);
                    $sql=$this->db->get('items');
                    if($sql->num_rows() == 1){
                      return "Code is registered already";
                    }
                    else{
                      return FALSE;
                    }
    }
    public function check_brand_code($code){
                    $this->db->where('brand_code',$code);
                    $sql=$this->db->get('brand');
                    if($sql->num_rows() == 1){
                      return "Code is registered already";
                    }
                    else{
                      return FALSE;
                    }
    }
    public function check_region_code($code){
                    // $this->db->where('region_code',$code);
                    // $this->db->where('is_delete','0');
                    // $sql=$this->db->get('region');
                    // $code=int($code);
                    $sql=$this->db
                        ->select('*')
                        ->from('region')
                        ->where('code2',$code)
                        //->or_where("region_code",$code)
                        ->where('is_delete','0')
                        ->get();
                    if($sql->num_rows() == 1){
                      return "Code is registered already";
                    }
                    else{
                      return FALSE;
                    }
    }
    public function last_item_id()
    {
      $query=$this->db
            ->select('*')
            ->from('items')
            ->order_by('item_id','DESC')
            ->get();
      if($query->num_rows() > 0)
      {
      return $query->row()->code;
      }
      else
      {
        return 0;
      }
    }
    public function fecth_party_remain_balance($party_id){
      $query=$this->db
            ->select('SUM(remaining) as remain')
            ->from('order_billing')
            ->where('company_id',$party_id)
            ->get();
      return $query->row();
    }

    public function fetch_last_region_code(){
                    // $query=$this->db
                    //       ->select('*')
                    //       ->from('region')
                    //       ->where('is_delete','0')
                    //       ->order_by('region_id','desc')
                    //       ->get();
                    // if($query->row() > 1)      
                    // {
                    // return $query->row()->region_code+1;
                    // }
                    // else{
                    //   return FALSE;
                    // }
    }
    public function fetch_last_party_code(){
                    // $query=$this->db
                    //       ->select('*')
                    //       ->from('party')
                    //       ->order_by('party_id','desc')
                    //       ->get();
                    // return $query->row()->party_code+1;
    }
    public function fetch_last_brand_code(){
                    $query=$this->db
                          ->select('*')
                          ->from('brand')
                          ->where('is_delete','0')
                          ->order_by('brand_id','desc')
                          ->get();
                    if($query->num_rows() == 1)
                    {
                    return $query->row()->brand_code;
                    }
                    else
                    {
                      return 0;
                    }
    }
    public function fetch_party_balance_data(){
                    $query=$this->db
                          ->select('*')
                          //->select_sum('o.remaining')
                          ->from('party')
                          //->where('party_id',$party_id)
                          ->join('region','region.region_id=party.region_party_name','left')
                          // ->join('order_billing as o','o.company_id=party.party_id')
                          ->get();
                    return $query->result();
    }
    public function getPartyDebit($party_id){
                    $query=$this->db  
                          ->select('*,SUM(remaining) as remain')
                          ->from('order_billing')
                          ->where('company_id',$party_id)
                          ->get();
                    return $query->result();
    }
    public function fetch_each_party_remain(){
                    $query=$this->db
                          ->select_sum('remaining')
                          ->from('order_billing')
                          //->where('company_id',$i)
                          ->get();
                    return $query->result();

    }
    public function daily_order_report(){
                    $query=$this->db  
                          ->select('*')
                          ->from('order_billing as o')
                          ->where('date',date('Y-m-d'))
                          ->join('invoice','invoice.number=o.invoice_id')
                          ->join('party','party.party_id=o.company_id')
                          ->get();
                    return $query->result();
    }
    public function daily_order_report_by_invoice($number){
                    $query=$this->db
                          ->select('*')
                          ->from('invoice')
                          ->where('number',$number)
                          ->join('items','items.item_id=invoice.item_id')
                          ->join('party','party.party_id=invoice.com_name')
                          ->join('order_billing','order_billing.invoice_id=invoice.number')
                          ->get();
                  return $query->result();
    }
    public function fetch_daily_sales_report(){
                    $query=$this->db
                          ->select('*')
                          ->from('stock_billing as s')
                          ->where('date',date('Y-m-d'))
                          ->join('stock','stock.stock_id=s.invoice_id')
                          ->join('party','party.party_id=s.company_id')
                          ->get();
                    return $query->result();
    }
    public function fetch_same_invoices($number){
                    $query=$this->db
                          ->select('*')
                          ->from('invoice')
                          ->where('number',$number)
                          ->where('is_printed','0')
                          ->join('party','party.party_id=invoice.com_name')
                          //->join('order_billing','order_billing.invoie')
                          ->get();
                    return $query->result();
    }
    public function fetch_daily_stock_report(){
                    $query=$this->db
                          ->select('*')
                          ->from('stock_billing')
                          ->join('party','party.party_id=stock_billing.company_id')
                          ->join('stock','stock.stock_id=stock_billing.invoice_id')
                          ->get();
                  return $query->result();
    }
    public function fetch_daily_stock_report_by_stock($number){
                    $query=$this->db 
                          ->select('*')
                          ->from('stock')
                          ->where('stock_id',$number)
                          ->join('party','party.party_id=stock.company_name')
                          ->join('stock_billing','stock_billing.invoice_id=stock.stock_id')
                          ->join('items','items.item_id=stock.item_name')
                          ->get();
                    return $query->result();
    }
    public function fetch_items_by_date($number){
                    $query=$this->db
                          ->select('*')
                          ->from('items')
                          ->where('date',$number)
                          ->join('party','party.party_id=items.company_name')
                          //->group_by('date')
                          ->get();
                    return $query->result();
    }
    public function fetch_daily_purchase_report_data($start_date,$end_date){
                    // $query=$this->db
                    //       ->select('*')
                          
                    //       ->where_not_in('s.is_returned','1')
                    //       ->from('stock_billing as s')
                    //       ->join('party','party.party_id=s.company_id')
                    //       ->join('stock','stock.stock_id=s.invoice_id')

                    //       ->where('stock.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                    //       //->group_by('stock.date')
                    //       ->get();
                    //       return $query->result();

                    $query=$this->db
                          ->select('*')
                          ->from('stock_billing as i')
                           ->where('stock.date BETWEEN "'.$start_date.'" AND "'.$end_date.'"')
                          // ->where_not_in('i.is_returned','1')
                          //->join('party','party.party_id=i.company_id')
                          ->join('stock','stock.stock_id=i.invoice_id','left')
                          ->group_by('stock.date')
                          ->get();
                    return $query->result();            
                }
    public function fetch_stock_invoices_by_date($date){
                    $query=$this->db
                          ->select('*')
                          ->from('stock')
                          ->where('stock.date',$date)
                          ->where_not_in('stock.is_returned','1')
                          ->join('party','party.party_id=stock.company_name')
                          ->join('stock_billing','stock_billing.invoice_id=stock.stock_id')
                          ->join('items','items.item_id=stock.item_name')
                          ->get();
                    return $query->result();
    }  
    public function fetch_order_invoices_by_date($date){
                    $query=$this->db
                          ->select('*')
                          ->from('invoice as i')
                          ->where('i.date',$date)
                          ->where_not_in('i.is_returned','1')
                          ->join('party','party.party_id=i.com_name')
                          ->join('order_billing','order_billing.invoice_id=i.number')
                          ->join('items','items.item_id=i.item_id')
                          ->get();
                    return $query->result();
    }  
    public function fetch_sale_report_data($start_date,$end_date){
                    $query=$this->db
                          ->select('*,invoice.date')
                          ->from('order_billing as o')
                          ->where('invoice.date BETWEEN "'.$start_date.'" AND "'.$end_date.'" ')
                          ->where_not_in('o.is_returned','1')
                          ->join('party','party.party_id=o.company_id')
                          ->join('invoice','invoice.number=o.invoice_id')
                          ->join('items','items.item_id=invoice.item_id')
                          ->group_by('invoice.date')
                          ->get();
                    return $query->result();
    } 
    public function fetch_return_order_bill_by_date($start_date,$end_date)
    {
                    if($query=$this->db
                          ->select('*')
                          ->from('order_billing as o')
                          ->where('invoice.date  BETWEEN "'.$start_date.'" AND "'.$end_date.'" ')
                          ->where_in('o.is_returned','1')
                          ->join('party','party.party_id=o.company_id')
                          ->join('invoice','invoice.number=o.invoice_id')
                          ->join('items','items.item_id=invoice.item_id')
                          ->group_by('o.invoice_id')
                          ->get())
                          {
                            return $query->result();
                          }
                          else
                          {
                            return FALSE;
                          }
    }      
     public function fetch_return_stock_bill_by_date($start_date,$end_date)
    {
                    if($query=$this->db
                          ->select('*')
                          ->from('stock_billing as o')
                          ->where('stock.date  BETWEEN "'.$start_date.'" AND "'.$end_date.'" ')
                          ->where('o.is_returned','1')
                          ->join('party','party.party_id=o.company_id')
                          ->join('stock','stock.stock_id=o.invoice_id')
                          ->join('items','items.item_id=stock.item_name')
                          ->group_by('o.invoice_id')
                          ->get())
                          {
                            return $query->result();
                          }
                          else
                          {
                            return FALSE;
                          }
    }       
    public function add_multiple_party_items($data)
    {
      $this->db->insert('multiple_items',$data);
    }   
    public function filter_items_record_invoice($com_id,$search)
    {
      $query=$this->db
            ->select('*')
            ->from('items as i')
            ->where('i.company_name',$com_id)
            ->or_where('multiple_items.party_m_id',$com_id)
            ->like('i.item_name',$search)
            ->like('multiple_items.item_m_id')
            ->join('multiple_items','multiple_items.item_m_id=i.item_id')
            ->group_by('i.item_id')
            ->get();
      
        return $query;
      
    }
    public function fetch_party_multiple_items()
    {
      $query=$this->db
            ->select('*')
            ->from('multiple_items')
            // ->distinct('')
            ->join('items','items.item_id=multiple_items.item_m_id')
            ->join('party','party.party_id=multiple_items.party_m_id')
            //->_by('items.item_id')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
      else
      {
        return null;
      }
    }
    public function fetch_unique_party_list_data($party)
    {
      $query=$this->db
            ->select('*')
            ->from('multiple_items')
            ->where('party_m_id',$party)
            // ->where('i.item_id IN (select id from multiple_items)',NULL,FALSE)
            //->or_where('multiple_items.party_m_id',$party)
            ->join('party as m','m.party_id=multiple_items.party_m_id')
            ->join('items','items.item_id=multiple_items.item_m_id')
            //->join('party as i','i.party_id=items.item_id')
            //->join('multiple_items','multiple_items.item_m_id=i.item_id')
           // ->group_by('i.company_name')
            // ->join('multi')
            ->group_by('items.item_id')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
      else
      {
        return Null;
      }
    }
    public function fetch_uunique_party_from_items($party)
    {
       $query=$this->db
            ->select('*')
            ->from('items')
            ->where('item_id',$party)
            // ->where('i.item_id IN (select id from multiple_items)',NULL,FALSE)
            //->or_where('multiple_items.party_m_id',$party)
            //->join('party as m','m.party_id=multiple_items.party_m_id')
            ->join('items','items.item_id=multiple_items.item_m_id')
            ->join('party as i','i.party_id=items.item_id')
            //->join('multiple_items','multiple_items.item_m_id=i.item_id')
           // ->group_by('i.company_name')
            // ->join('multi')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
      else
      {
        return Null;
      }
    }
    public function fetch_last_company_code()
    {
      $query =$this->db
                   ->select('*')
                   ->from('company')
                   ->where('is_delete','0')
                   ->order_by('company_id','desc')
                   ->get();
                   if($query->num_rows() > 0)
                   {
                    return $query->row()->company_code;
                   }
                   else
                   {
                    return 0;
                   }

    }
    public function fetch_unique_party_data($id)
    {
      $query=$this->db
            ->select('*')
            ->from('party')
            ->where('party_id',$id)
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row();
      }
      else
      {
        return FALSE;
      }
    }
    public function update_party_date($id,$data)
    {
      $this->db->select('*')->from('party')->where('party_id',$id)->update('party',$data);
    }
    public function fetch_unique_company_data($id)
    {
      $query=$this->db
            ->select('*')
            ->from('company')
            ->where('company_id',$id)
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row();
      }
      else
      {
        return FALSE;
      }
    }
    public function update_company($id,$data)
    {
            $this->db->select('*')->from('company')->where('company_id',$id)->update('company',$data);
    }
    public function fetch_company_item($company)
    {
      $query=$this->db
            ->select('*')
            ->from('items')
            ->where('company_name',$company)
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
      else
      {
        return FALSE;
      }
    }
    public function fetch_filterd_data($search)
    {
      $query=$this->db
            ->select('*')
            ->from('party')
            ->like('party_name',$search)
            ->like('party_code',$search)
            ->group_by('party_id')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
      else
      {
        return FALSE;
      }
    }

    public function check_party_code($party_code)
    {
      $query=$this->db
            ->select('*')
            ->from('party')
            ->where('pcode',$party_code)
            ->or_where('party_code',$party_code)
            ->get();
      if($query->num_rows() == 1)
      {
        return 'Code is registered already';
      }
      else
      {
        return FALSE;
      }
    }
    public function getParty($region)
    {
      $query=$this->db 
            ->select('*')
            ->from('party')
            ->where('region_party_name',$region)
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->result();
      }
      else
      {
        return FALSE;
      }
    }

    public function check_party_items_list($item_id,$com_id)
    {
      $query=$this->db
            ->select('*')
            ->from('multiple_items')
            ->where('item_m_id',$com_id)
            ->where('party_m_id',$item_id)
            ->get();
      if($query->num_rows() == 1)
      {
        return "exists"; 
      }
      else
      {
        return FALSE;
      }
    }
    public function item_details($item_id)
    {
      $query=$this->db
            ->select('*')
            ->from('items')
            ->where('item_id',$item_id)
            ->join('brand','brand.brand_id=items.brand_name')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row();
      }
      else
      {
        return FALSE;
      }
    }
    public function fetch_received_voucher_last_id()
    {
      $query=$this->db
            ->select('*')
            ->from('received_voucher')
            ->order_by('voucher_id','desc')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row()->voucher_id;
      }
      else
      {
        return FALSE;
      }
    }
    public function fetch_payment_voucher_last_id()
    {
      $query=$this->db
            ->select('*')
            ->from('payment_voucher')
            ->order_by('voucher_p_id','desc')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row()->voucher_p_id;
      }
      else
      {
        return FALSE;
      }
    }
    public function generate_price_check($party,$item)
    {
      $query=$this->db
            ->select('*')
            ->from('price')
            ->where(array('item_name'=>$item,'p_id'=>$party))
            ->get();
      if($query->num_rows() > 0)
      {
        return 'exists';
      }
      else
      {
        return FALSE;
      }
    }
    public function fetch_unique_multiple_item($id)
    {
      $query=$this->db
            ->select('*')
            ->from('multiple_items')
            ->where('id',$id)
            ->join('items','items.item_id=multiple_items.item_m_id')
            ->join('party','party.party_id=multiple_items.party_m_id')
            ->join('brand','brand.brand_id=items.brand_name')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row();
      }
      else
      {
        return FALSE;
      }
    }
    public function fetch_party_by_code($c)
    {
      $query=$this->db
            ->select('*')
            ->from('party')
            ->where('party_code',$c)
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row();
      }
      else
      {
        return FALSE;
      }
    }
    public function fetch_received_voucher_pdf($id)
    {
      $query=$this->db
            ->select('*')
            ->from('received_voucher')
            ->where('voucher_id',$id)
            ->join('party','party.party_id=received_voucher.party')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row();
      }
      else
      {
        return FALSE;
      }
    }
    public function fetch_payment_voucher_data($id)
    {
      $query=$this->db
            ->select('*')
            ->from('payment_voucher')
            ->where('voucher_p_id',$id)
            ->join('party','party.party_id=payment_voucher.company')
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row();
      }
      else
      {
        return FALSE;
      }
    }
    public function fetch_last_stock_id()
    {
      $query=$this->db
            ->select('bill_id')
            ->from('stock_billing')
            ->order_by('bill_id','desc')
            ->limit(1)
            ->get();
      if($query->num_rows() > 0)
      {
        return $query->row()->bill_id;
      }
      else
      {
        return null;
      }
    }

}
?>