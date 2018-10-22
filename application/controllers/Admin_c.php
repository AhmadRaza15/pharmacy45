<?php 
class Admin_c extends CI_Controller{
	public function __construct(){
      		parent::__construct();
      		$this->load->helper(array('url','form'));
      		$this->load->model('Main_model');
	}

	public function index(){
          $data['company']=$this->Main_model->total_company_record();
          $data['party']=$this->Main_model->total_party_record();
          $data['order']=$this->Main_model->total_order_record();
          $data['items']=$this->Main_model->total_items_record();
          $data['regions']=$this->Main_model->total_regions_record();
          $data['stock']=$this->Main_model->total_stock_record();
          $data['daily']=$this->Main_model->total_daily_record();
      		$this->load->view('Admin_dashboard.php',$data);
	}

	public function master_title_account(){
		      $this->load->view('master_title_account');
	}

	public function add_items(){
          $data['last']=$this->Main_model->last_item_id(); 
          if($data['last'] != 0)
          {
            $id=$data['last'];
            $id++;
          }
          else
          {
            $data['last']=0;
            $id=$data['last'];
            $id++;
          }
          $data['last_item_code']=$id;
          $data['brand']=$this->Main_model->viewBrand();
      		$data['show']=$this->Main_model->fetch_company_data();
      		$this->load->view('add_items',$data);
	}

	public function insert_items(){
          $code=$this->input->post('code');
      		$data=array(
          'code'=>$code,
          'date'=>$this->input->post('date'),
          'brand_name'=>$this->input->post('item_brand'),
          'brand_value'=>$this->input->post('brand_value'),
          'item_name'=>$this->input->post('item_name'),
          'packing_unit'=>$this->input->post('packing_unit'),
          'filling'=>$this->input->post('filling'),
          'retail_rate'=>$this->input->post('retail_rate'),
          'trade_discount'=>$this->input->post('trade_discount'),
          'discount_rate'=>$this->input->post('discount_rate'),
          'trade_discount_offer'=>$this->input->post('trade_discount_offer'),
          'cost_rate'=>$this->input->post('cost_rate'),
          'reorder'=>$this->input->post('reorder'),
          'exp_date1'=> date('Y-m-d',strtotime($this->input->post('exp_date1'))),
          'exp_date2'=>date('Y-m-d',strtotime($this->input->post('exp_date2'))),
          'company_name'=>$this->input->post('company_name'),
          'company_value'=>$this->input->post('company_value')
          );
        	$this->Main_model->insert_items($data);
        	$this->session->set_flashdata('error',' your data has been
          Submitted successfully.');
          redirect('Admin_c/view_items');
	}

	public function view_items(){
      		$data['res']=$this->Main_model->fetch_items();
      		$this->load->view('view_items',$data);
	}

	public function view_company(){
          $data['res']=$this->Main_model->fetch_company();
          $this->load->view('view_company',$data);
	}

	public function add_order(){
      		$data['res']=$this->Main_model->fetch_party_data_order();
      		$data['show']=$this->Main_model->fetch_items();
          $data['id'] = $this->Main_model->get_order_Invoice_id();
          if ($data['id']==null) {
          $id=0;
          $id++;
          } 
          elseif ($data['id']!=null) {
          $id=$data['id'];
          $id++;
          }
          $data['order_invoice_id'] = $id;
      		$this->load->view('add_order',$data);
	}

  public function get_company_code(){
          $com_id=$this->input->post('com_id');
          $data=$this->Main_model->get_company_code($com_id);
          echo json_encode($data);
  }

  public function get_party_code(){
          $com_id=$this->input->post('com_id');
          $data=$this->Main_model->get_party_code($com_id);
          echo json_encode($data);
  }

  public function get_party_data(){
          $party_id=$this->input->post('party_id');
          $data['info']=$this->Main_model->get_unique_party($party_id);
          $data['options'] = $this->Main_model->items_data_by_party($party_id);
          echo json_encode($data);
  }

  public function get_party_items_data(){
          $party_id=$this->input->post('party_id');
          $data['options']=$this->Main_model->items_data_by_party($party_id);
          echo json_encode($data);
  }

	public function get_company_detail(){
      		$party_id=$this->input->post('com_id');
          $data1=$this->Main_model->get_unique_company_pending_amount($com_id);
      		echo json_encode(array('data' => $data, 'data1'=>$data1));
	}

  public function get_party_details(){
          $party_id=$this->input->post('party_id');
          $data=$this->Main_model->get_unique_party_order($party_id);
          echo json_encode($data);
  }

  public function get_company_stock_detail(){
          $com_id=$this->input->post('com_id');
          $data=$this->Main_model->get_unique_company_data_stock($com_id);
          $data1=$this->Main_model->get_unique_company_stock_pending_amount($com_id);
          $data2=$this->Main_model->get_unique_company_pending_amount($com_id);
          echo json_encode(array('data' => $data, 'data1'=>$data1, 'data2'=>$data2));
  }

	public function get_item_detail(){
      		$item_id=$this->input->post('item_id');
          $com_id=$this->input->post('com_id');
          // echo $item_id; echo $com_id; die();
      		$data=$this->Main_model->get_unique_item($item_id,$com_id);
      		echo json_encode($data);
	}

  public function load_search_list(){
          $output = '';
          $search = $this->input->post('search');
          $com_id=$this->input->post('com_id');
          $i = $this->input->post('i');
      // $sql = $this->db->query("SELECT 'i.company_name,i.item_name' FROM  items i WHERE 'i.company_name' = '$com_id'  || 'i.item_name' LIKE '$search%'");


      //$sql = $this->db->query("SELECT * FROM items  WHERE company_name = '$com_id'  AND item_name LIKE '$search%'");
      $sql=$this->Main_model->filter_items_record_invoice($com_id,$search);
      // $sql = $this->db->query("SELECT * FROM multiple_items  WHERE party_m_id = '$com_id'  AND item_m_id LIKE '$search%'");
       // print_r($sql->result());
       // die();
      $output .= '<ul style="list-style:none;padding:0;margin:0;">';
      if(count($sql->result()) > 0 && $sql->result()!=""){
      foreach($sql->result() as $row){
        $output .= '<li data-id="'.$row->item_id.'" data-item-id="'.$row->item_id.'" style="border-left:1px solid #ccc;border-right:1px solid #ccc;border-bottom:1px solid #ccc;padding:5px;cursor:pointer;" class="get_search'.$i.'">'.$row->item_name.'</li>';
      }
      $output .= '</ul>';
    }else{
      $output .= '<p>No result found</p>';
    }
      echo $output;
   }
	 public function getRows(){
    	$i = $this->input->post('i');
      // print_r($i); 
      $com_id = $this->input->post('com_id');
    	$table='<tr style="display:table;table-layout:fixed;">';
         $table .=           '<td width="7%" style="border-bottom:1px  solid;vertical-align:middle;padding-top:0;padding-bottom:0;">';
         $table .= '<input type="text" name="q_search[]" class="form-control qs input-sm q_search'.$i.'" autocomplete="off">';
         $table .= '<input type="text" name="q_search_item_ids[]" class="form-control hidden qs input-sm q_search_item_ids'.$i.'" autocomplete="off" data-id="">';
         $table .= '<span class="search_list'.$i.'"></span>';
         //$table .= '<select class="form-control input-sm item_name" name="item_name[]"><option>--</option>';
                             //foreach(getItems($com_id) as $item)                             
                             //{
               //$table .= '<option value="'.$item->item_id.'">'.$item->item_name.'</option>';
                             //}
                //$table .=               '</select>';
                 $table .=            '</td>';
                 $table .=             '
                             <td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="packing[]" class="form-control input-sm packing'.$i.'" autocomplete="off" readonly="">
                             </td>
                             <td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="dis[]" class="form-control  input-sm dis'.$i.'" autocomplete="off">
                             </td>
                             <td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="q_order[]" class="form-control qo input-sm q_order'.$i.'" autocomplete="off">
                             </td>
                             <td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text"  name="u_p[]" class="form-control input-sm up u_p'.$i.'" autocomplete="off" readonly=""></td>
                             <td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="t_p[]" class="form-control con input-sm t_p'.$i.'"  readonly=""></td>
                             
                             </tr>';
                             echo json_encode(array('table'=>$table,'i'=>$i)); 
    }
     public function getRows_item()
    {
      $i = $this->input->post('i');
      $com_id = $this->input->post('com_id');
      $data['res']=$this->Main_model->getItemsPurchase($com_id);
      // print_r($data['res']); die();
       // echo  $com_id; die();
      //$data['getItems'] = $this->Main_model->getItem();

      $table='<tr style="display:table;table-layout:fixed;">';
        
         $table .=           '<td width="6%" style="border-bottom:1px  solid;vertical-align:middle;padding-top:0;padding-bottom:0;">
                             <select class="form-control select2 input-sm item_name" name="item_name[]">
                             <option></option>';
                             foreach(getItemsPurchase($com_id) as $item)                             
                             {
               $table .= '<option value="'.$item->item_id.'">'.$item->item_name.'</option>';
                             }
                $table .=             '</select>';
                 $table .=            '</td>';
                 $table .=             '
                  <td class="text-center hidden" width="4%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="unit[]" class="form-control qo input-sm unit'.$i.'">
                             </td>
                <td class="text-center" width="4%"  style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="packing[]" class="form-control pc input-sm p_c'.$i.'" readonly="">
                             </td>
                   <td class="text-center" width="6%"  style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="comment[]" class="form-control input-sm comment'.$i.'" >
                             </td>
                 <td class="text-center" width="4%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="q_order[]" class="form-control qo input-sm q_order'.$i.'">
                             </td>
                            
                             <td class="text-center" width="4%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text"  name="u_p[]" class="form-control input-sm up u_p'.$i.'" readonly="" value="0.00"></td>
                             <td class="text-center" width="4%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="discount_row[]" class="form-control input-sm discount_row'.$i.'"></td>
                             <td class="text-center" width="4%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="t_p[]" class="form-control con input-sm t_p'.$i.'"></td>
                             <input type="hidden" name="a_p[]" class="form-control ss input-sm a_p'.$i.'" readonly="">
                             </tr>
                             ';
                             echo json_encode(array('table'=>$table,'i'=>$i)); 
    }
    public function save_data()
    {
    	$number 	 = $this->input->post('number');
    	$company_id = $this->input->post('p'); 
      // echo $company_id;
      // die();
      $date=$this->input->post('date');
    	$item_name = $this->input->post('q_search');
      $item_id = $this->input->post('q_search_item_ids'); 
      //print_r($item_id); die();
      
      $discount  = $this->input->post('discount'); 
      //echo $discount;
      // print_r($item_name);
      // die();
    	$q_order     = $this->input->post('q_order');
    	$unit_price  = $this->input->post('u_p');
    	$total_price = $this->input->post('t_p');
    	$com_code=$this->input->post('debit');
    	$balance=$this->input->post('credit');
    	$phone=$this->input->post('phone');
    	$date=date("Y-m-d",strtotime($date));
      $all_total = $this->input->post('tt_P');
      $remaining = $this->input->post('rt_P');
      $deliver_date = $this->input->post('deliver_date');
      $desc = $this->input->post('desc');
      $paid = $this->input->post('pt_P');
      $disc=$this->input->post('dis');
      $packing=$this->input->post('packing');
      // $item_id=$this->input->post('item_id');
    	for($i=0;$i<sizeof($q_order);$i++)
    	{
    		$insert = array(
    

    							'quantity'   =>    $q_order[$i],
    							'total'      =>    $total_price[$i],
    							'unit_price'	   =>    $unit_price[$i],
    							'number'		   =>    $number,
    							'com_name'      =>     $company_id,
    							'item_name'      =>    $item_name[$i],
                  'item_id'      =>    $item_id[$i],
                  // 'item_id'        =>    $item_id,
    							//'come_code'         =>$com_code,
    							// 'balance'        =>$balance,
    							'date'          =>$date,
    							'address'         =>$phone,
                  'disc'          => $disc[$i],
                  'packing'       => $packing[$i],
                  // 'desc'  => $desc,
                  // 'deliver_date' => $deliver_date,
                  'status' =>0
    			           );
        // echo "<pre>";
        // print_r($insert);
        // die();
    		$this->Main_model->insertInvoce($insert);
    	}
      $data = array('invoice_id' => $number,
                    'company_id' => $company_id,
                    'total_amount' => $all_total,
                    // 'remaining' => $remaining,
                    // 'discount' => $discount,
                    // 'paid' => $paid 
                  );
       // print_r($data);
       // die();
        $id = $this->Main_model->insertOrder_billing($data);
        
        redirect("Admin_c/generate_invoice_last_order/$id");
    			//redirect("Admin_c/add_order");
    }
    public function save_data_return_order(){
     $number   = $this->input->post('number');
      $company_id = $this->input->post('party'); 
      // echo $company_id;
      // die();
      $date=$this->input->post('date');
      $item_name = $this->input->post('q_search');
      $item_id = $this->input->post('q_search_item_ids'); 
      //print_r($item_id); die();
      
      $discount  = $this->input->post('discount'); 
      //echo $discount;
      // print_r($item_name);
      // die();
      $q_order     = $this->input->post('q_order');
      $unit_price  = $this->input->post('u_p');
      $total_price = $this->input->post('t_p');
      $com_code=$this->input->post('debit');
      $balance=$this->input->post('credit');
      $phone=$this->input->post('phone');
      $date=date("Y-m-d",strtotime($date));
      $all_total = $this->input->post('tt_P');
      $remaining = $this->input->post('rt_P');
      $deliver_date = $this->input->post('deliver_date');
      $desc = $this->input->post('desc');
      $paid = $this->input->post('pt_P');
      // $item_id=$this->input->post('item_id');
      for($i=0;$i<sizeof($q_order);$i++)
      {
        $insert = array(
    

                  'quantity'   =>   (-1) * $q_order[$i],
                  'total'      =>    (-1) * $total_price[$i],
                  'unit_price'     =>    $unit_price[$i],
                  'number'       =>    $number,
                  'com_name'      =>     $company_id,
                  'item_name'      =>    $item_name[$i],
                  'item_id'      =>    $item_id[$i],
                  // 'item_id'        =>    $item_id,
                  'come_code'         =>$com_code,
                  // 'balance'        =>$balance,
                  'date'          =>$date,
                  'address'         =>$phone,
                  // 'desc'  => $desc,
                  // 'deliver_date' => $deliver_date,
                  'status'       =>0,
                  'is_returned'  =>1
                     );
        // echo "<pre>";
        // print_r($insert);
        // die();
        $this->Main_model->insertInvoce($insert);
      }
      $data = array('invoice_id' => $number,
                    'company_id' => $company_id,
                    'total_amount' =>  (-1) * $all_total,
                    'is_returned'  => 1
                    // 'remaining' => $remaining,
                    // 'discount' => $discount,
                    // 'paid' => $paid 
                  );
       // print_r($data);
       // die();
        $id = $this->Main_model->insertOrder_billing($data);
        
        redirect("Admin_c/generate_invoice_return_order/$id"); 
    }
    public function generate_invoice_return_order($id)
    {
      $invoice_id=$this->Main_model->fetch_order_invoice_id($id);
      $data['billing']=$this->Main_model->fetch_order_bill_data($id);
      $data['result'] = $this->Main_model->fetch_order_data($invoice_id);
      // print_r($data['result']);
       // echo $invoice_id;
       // die();
      $this->load->view('generate_return_order_pdf',$data);
    }
    public function generate_invoice_last_order($id){
      $invoice_id=$this->Main_model->fetch_order_invoice_id($id);
      $data['billing']=$this->Main_model->fetch_order_bill_data($id);
      $data['result'] = $this->Main_model->fetch_order_data($invoice_id);
      // print_r($data['result']);
       // echo $invoice_id;
       // die();
      $this->load->view('generate_added_order_pdf',$data);
    }

    // public function save_data_stock()
    // {
    //   $number    = $this->input->post('number');
    //   $item_name = $this->input->post('item_name'); 
    //   $code=$this->input->post('code');
    //   $category=$this->input->post('category');
    //   $pre_stock=$this->input->post('pre_stock');
    //   $date=$this->input->post('date');
    //   $q_order     = $this->input->post('q_order');
    //   $unit_price  = $this->input->post('u_p');
    //   $total_price = $this->input->post('t_p');
    //   $unit=$this->input->post('unit');
    //   $company_name=$this->input->post('com_name');
    //   $code=$this->input->post('com_code');
      
      
    //   for($i=0;$i<sizeof($q_order);$i++)
    //   {
    //     $insert = array(
                
    //               'quantity'   =>    $q_order[$i],
    //               'stock_id'       =>    $number,
    //               'item_name'      =>    $item_name[$i],
    //               'rate'         => $unit_price[$i],
    //               'date'          =>$date,
    //               'balance'         => $total_price[$i],
    //               'unit'         => $unit[$i],
    //               'previous_stock' => $pre_stock,
    //                'updated_stock' => $pre_stock + $q_order[$i],
    //                'company_name' => $company_name,
    //                'item_code' => $code
    //                  );
    //     $this->Main_model->insertStock($insert);
    //   }

    //       redirect("Admin_c/add_stock");
    // }
    public function save_data_stock()
    {
      $number    = $this->input->post('number');
      $item_name = $this->input->post('item_name'); 
      $code=$this->input->post('code');
      $category=$this->input->post('category');
      $pre_stock=$this->input->post('pre_stock');
      $d=$this->input->post('exp_date2');
      $date=date("Y-m-d",strtotime($d));
      $q_order     = $this->input->post('q_order');
      $unit_price  = $this->input->post('u_p');
      $total_price = $this->input->post('t_p');
      $unit=$this->input->post('unit');
      $company_name=$this->input->post('com_name');
      $code=$this->input->post('com_code');
      $all_total = $this->input->post('tt_P');
      $remaining = $this->input->post('rt_P');
      $paid = $this->input->post('pt_P');
      $added_date = $this->input->post('stock_added_date');
      $desc = $this->input->post('desc');
      $packing=$this->input->post('packing');
      $discount_row=$this->input->post('discount_row');
      $comment=$this->input->post('comment');
      
      
      for($i=0;$i<sizeof($q_order);$i++)
      {
        $insert = array(
                
                  'quantity'   =>    $q_order[$i],
                  'stock_id'       =>    $number,
                  'item_name'      =>    $item_name[$i],
                  'rate'         => $unit_price[$i],
                  'date'          =>$date,
                  'balance'         => $total_price[$i],
                  'packing'         => $packing[$i],
                  'unit'         => $unit[$i],
                  'previous_stock' => $pre_stock,
                  'updated_stock' => $pre_stock + $q_order[$i],
                  'company_name' => $company_name,
                  'desc'  => $desc,
                  'particular'  => $comment[$i],
                  'disc'  => $discount_row[$i],
                  // 'added_stock_date' => $added_date,
                   //'item_code' => $code
                     );
        $this->Main_model->insertStock($insert);
      }

      $data = array('invoice_id' => $number,
                    'company_id' => $company_name,
                    'total_amount' => $all_total,
                    'remaining' => $remaining,
                    'paid' => $paid );
       $id = $this->Main_model->insertStock_billing($data);

          redirect("Admin_c/generate_invoice_last_stock/$id");
    }

     public function save_data_stock_return()
    {
      $number    = $this->input->post('number');
      $item_name = $this->input->post('item_name'); 
      $code=$this->input->post('code');
      $category=$this->input->post('category');
      $pre_stock=$this->input->post('pre_stock');
      $date=$this->input->post('date');
      $date=date("Y-m-d",strtotime($date));
      $q_order     = $this->input->post('q_order');
      $unit_price  = $this->input->post('u_p');
      $total_price = $this->input->post('t_p');
      $unit=$this->input->post('unit');
      $company_name=$this->input->post('com_name');
      $code=$this->input->post('com_code');
      $all_total = $this->input->post('tt_P');
      $remaining = $this->input->post('rt_P');
      $paid = $this->input->post('pt_P');
      $added_date = $this->input->post('stock_added_date');
      $desc = $this->input->post('desc');
      
      
      for($i=0;$i<sizeof($q_order);$i++)
      {
        $insert = array(
                
                  'quantity'   =>   (-1) * $q_order[$i],
                  'stock_id'       =>    $number,
                  'item_name'      =>    $item_name[$i],
                  'rate'         =>   $unit_price[$i],
                  'date'          =>$date,
                  'balance'         => (-1) * $total_price[$i],
                  'unit'         =>  $unit[$i],
                  'previous_stock' => $pre_stock,
                  'updated_stock' => $pre_stock + $q_order[$i],
                  'company_name' => $company_name,
                  'desc'  => $desc,
                  'added_stock_date' => $added_date,
                   'item_code' => $code,
                   'is_returned' => 1
                     );
        $this->Main_model->insertStock($insert);
      }

      $data = array('invoice_id' => $number,
                    'company_id' => $company_name,
                    'total_amount' => (-1) * $all_total,
                    'remaining' => (-1) * $remaining,
                    'paid' => (-1) * $paid,
                    'is_returned' => 1
                  );
        $id=$this->Main_model->insertStock_billing($data);

          redirect("Admin_c/generate_invoice_return_stock/$id");
    }
    public function generate_invoice_return_stock($id){
      $invoice_id=$this->Main_model->fetch_invoice_id($id);
      //echo $invoice_id; die();
      $data['billing']=$this->Main_model->fetch_bill_data($invoice_id);
      $data['result'] = $this->Main_model->fetch_stock_data($invoice_id);
      // echo "<pre>";
      // print_r($data['billing']);
      // die();
      $this->load->view('generate_invoice_return_stock',$data);
    }

    public function generate_invoice_last_stock($id){
      $invoice_id=$this->Main_model->fetch_invoice_id($id);
      //echo $invoice_id; die();
      $data['billing']=$this->Main_model->fetch_bill_data($invoice_id);
      $data['result'] = $this->Main_model->fetch_stock_data($invoice_id);
      // echo "<pre>";
      // print_r($data['billing']);
      // die();
      $this->load->view('generate_added_stock_pdf',$data);
    }
    public function invoice($status=null)
    {
      if ($status!=null) {
        $data['res']=$this->Main_model->invoice($status);
        $data['total']=$this->Main_model->total_pending();
       // var_dump($data['total']);
        //print_r($data['total']);
       // echo $total;
        // die();
        $this->load->view('invoice_view.php',$data);
      }
      else
      {
        $data['res']=$this->Main_model->invoice();
        $this->load->view('invoice_view.php',$data);
      }
    }
    
    public function view_order()
    {
    	$data['res']=$this->Main_model->view_order_invoice();
    	$this->load->view('view_order',$data);
    }

    public function show_order_report()
    {
      $this->load->view('order_report_view');
    }

    
   public function show_order_report_view()
   {
    
    $start_date   = date("Y-m-d",strtotime($this->input->post('start_date')));
    $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
    $start_date;
   $end_date;
   $com_id=$this->input->post('com_id');
    $data['order'] = $this->Main_model->get_comapny_order_ledger_show_items($start_date,$end_date); 
    // $data['total']   = $this->Main_model->getTotalBalance_order($start_date,$end_date,$com_id);
    // print_r($data['total'] );
    // die();
    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
    $this->load->view('show_order_report_view',$data);
   }
   public function order_pdf($start_date,$end_date)
   {
    
   
     $data['order'] = $this->Main_model->get_comapny_order_ledger_show_items($start_date,$end_date);
     // echo '<pre>';
     // print_r($data); die();
       $com_id=$this->input->post('com_id');
     //  $data['total']   = $this->Main_model->getTotalBalance_order($start_date,$end_date,$com_id);
     
     // $data['pre_total']=$this->Main_model->getPreviousTotal(urldecode($start_date));
     $data['start_date'] = urldecode($start_date);
     $data['end_date']   = urldecode($end_date);
    //  echo "<pre>";
    //  print_r($data);
    // die();
    // echo "</pre>";
    $this->load->view('order_pdf',$data);
   }
   public function add_stock()
    {
      $data['code']=$this->Main_model->fetch_last_stock_id();

      if($code = null)
      {
        $data['code']='0';
        $id=$data['code'];
        $id++;
      }
      else
      {
          $id=$data['code'];
          $id++;
      }
      $data['c']=$id;
      // print_r($data['c']); die();
      $data['res']=$this->Main_model->fetch_party_data();
      $this->load->view('add_stock',$data);
    }
    public function add_return_stock(){
                    $data['res']=$this->Main_model->fetch_party_data();
                    $this->load->view('add_return_stock',$data);
    }
    public function view_Stock()
    {
      $data['res']=$this->Main_model->fetchStockData();
      $this->load->view('view_stock',$data);
    }

    public function invoice_stock()
    {
      $data['res']=$this->Main_model->fetchStock();
      $this->load->view('invoice_stock',$data);
    }
    public function show_items_report()
    {
      $this->load->view('report_view');
    }
    public function showreport()
   {
    //$expense_type = $this->input->post('expense_type');
    $start_date   = date("Y-m-d",strtotime($this->input->post('start_date')));
    //$start_date = $this->input->post('start_date');
    
    $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
    $data['items'] = $this->Main_model->getItemsShowReport($start_date,$end_date);
    // echo"<pre>";
    // print_r($data);
    // die();
    $data['total']   = $this->Main_model->getTotalBalance($start_date,$end_date);

    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
    $this->load->view('showreport_view',$data);
   }
   public function item_pdf($start_date,$end_date)
   {
    
    $data['start_date']=$start_date;
    $data['end_date']=$end_date;
    $data['items'] = $this->Main_model->getItemsReport($start_date,$end_date);
    $data['total']   = $this->Main_model->getTotalBalance($start_date,$end_date);
    
    $this->load->view('item_pdf',$data);
   }
   public function total_Stock()
   {
    $data['res']=$this->Main_model->fetchStock();
    // print_r($data);
    // die();
    $this->load->view('total_Stock',$data);
   }
   public function invoice_total_Stock()
   {
      $data['res']=$this->Main_model->fetchStock();
    // print_r($data);
    // die();
    $this->load->view('total_Stock_invoice',$data);
   }

   public function update_status(){
    $id = $this->input->post('id');
    $data = array('status' => $this->input->post('status'),
                  'deliver_date'=>$this->input->post('d_date') );
    echo $res = $this->Main_model->update_status($data,$id);

   }
   public function show_company_report()
   {
    $data['show']=$this->Main_model->fetch_company_data();
    $this->load->view('order_company_report_view',$data);
   }
      public function show_company_order_report_view()
   {
    
    $start_date   = date("Y-m-d",strtotime($this->input->post('start_date')));
    $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
    // echo $start_date;
    // echo $end_date;
    // $data = $this->Main_model->fetch_company_order_data($com_id);
     $com_id=$this->input->post('company_id');
     // echo $com_id;die();
    $data['order'] = $this->Main_model->get_comapny_order_Report(urldecode($start_date),urldecode($end_date),$com_id);
   
    // $data['total']   = $this->Main_model->getTotalBalance_order($start_date,$end_date,$com_id);
    $data['com_id']=$com_id;
    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
    // echo "<pre>";
    // print_r($data);
    // die();

    $this->load->view('show_company_order_report_view',$data);
   }
     public function company_order_pdf($start_date,$end_date,$com_id)
   {
    
     $data['order'] = $this->Main_model->get_comapny_order_Report(urldecode($start_date),urldecode($end_date),$com_id);
    // print_r($data['order']);show_company_report
    // die();
    $data['total']   = $this->Main_model->getTotalBalance_order($start_date,$end_date,$com_id);
     $data['com_id']=$com_id;
    $data['pre_total']=$this->Main_model->getCompanyPreviousTotal(urldecode($start_date),$com_id);
     $data['start_date'] = urldecode($start_date);
    $data['end_date']   = urldecode($end_date);
    
    $this->load->view('company_order_pdf',$data);
   }

   public function finantial_report()
   {
    $data['res']=$this->Main_model->fetch_all_order_billing();
    // echo '<pre>';
    // print_r($data['res']); die();
    $data['show']=$this->Main_model->fetchStockData();
    $data['show']=$this->Main_model->fetchStock();
    $data['dev']=$this->Main_model->invoice_delivered();
     $data['stock']=$this->Main_model->fetchStock();
    $this->load->view('finantial_report',$data);
   }
   public function f_report(){
    $data['res']=$this->Main_model->fetch_f_data();
    // echo '<pre>';
    // print_r($data['res']); die();
     $this->load->view('f_report',$data);
   }
    public function finantial_report_data()
   {
    $data['res']=$this->Main_model->invoice();
    // $data['show']=$this->Main_model->fetchStockData();
    $data['show']=$this->Main_model->fetchStock();
    $data['dev']=$this->Main_model->invoice_delivered();
     $data['stock']=$this->Main_model->fetchStock();
    $this->load->view('finantial_report_data',$data);
   }


   //Stock Work ... 10-05-18

   public function show_com_stock_report()
    {

    $data['show']=$this->Main_model->fetch_party_data();
      $this->load->view('com_stock_view',$data);
    }
     public function show_company_stock_report_view()
   {
    
    $start_date   = date("Y-m-d",strtotime($this->input->post('start_date')));
    $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
    // echo $start_date;
    // echo $end_date;
    // die();
    $com_id=$this->input->post('party_id');
     // echo $com_id;die();
    $data['stock'] = $this->Main_model->get_comapny_stock_Report($start_date,$end_date,$com_id);
   
    // $data['total']   = $this->Main_model->getTotalBalance_order($start_date,$end_date);
    $data['com_id']=$com_id;
    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
    // echo "<pre>";
    // print_r($data);
    // die();

    $this->load->view('show_company_stock_report_view',$data);
   }
    public function company_stock_pdf($start_date,$end_date,$com_id)
   {
    
     $data['stock'] = $this->Main_model->get_comapny_stock_Report(urldecode($start_date),urldecode($end_date),$com_id);
   
     //$data['total']   = $this->Main_model->getTotalBalance_order($start_date,$end_date);
     $data['com_id']=$com_id;
     //$data['pre_total']=$this->Main_model->getCompanyPreviousTotal(urldecode($start_date),$com_id);
     $data['start_date'] = urldecode($start_date);
    $data['end_date']   = urldecode($end_date);
    
    $this->load->view('com_stock_pdf',$data);
   }


   //Company_LEdger

   public function company_ledger($com_id,$come_code)
   {
    $data['com_id']=$com_id;
    $data['come_code']=$come_code;
    $this->load->view('company_ledger',$data);
   }

   public function show_company_ledger_report_view()
   {
    
    $start_date   = date("Y-m-d",strtotime($this->input->post('start_date')));
    $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
     // echo $start_date;
     // echo $end_date;
    $com_id=$this->input->post('com_id');
    $come_code=$this->input->post('come_code');

    // $company_id=$this->input->post('company_id');
    // $data['com']
     $data['stock']=$this->Main_model->get_company_ledger_stock($start_date,$end_date,$com_id);
    //$come_code=$this->input->post('company_id');
    // $data['order'] = $this->Main_model->get_comapny_order_ledger($start_date,$end_date,$come_code);
    // $data['total']   = $this->Main_model->getTotalBalance_order($start_date,$end_date);
    $data['com_id']=$com_id;
    $data['come_code']=$come_code;
    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
    // print_r($data['order']);
    // die();
    $this->load->view('show_company_ledger_report_view',$data);
   }
     public function company_ledger_pdf($start_date,$end_date,$com_id,$come_code)
   {
    
   // $start_date   = date("Y-m-d",strtotime($this->input->post('start_date')));
  //  $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
     // echo $start_date;
     // echo $end_date;
     // echo $com_id;
     // echo $come_code;
     // die();
   // $com_id=$this->input->post('com_id');
   // $come_code=$this->input->post('come_code');

    // $company_id=$this->input->post('company_id');
    // $data['com']
    $data['stock']=$this->Main_model->get_company_ledger_stock($start_date,$end_date,$com_id);
    //$come_code=$this->input->post('company_id');
    // $data['order'] = $this->Main_model->get_comapny_order_ledger($start_date,$end_date,$come_code);
    // $data['total']   = $this->Main_model->getTotalBalance_order($start_date,$end_date,$com_id);
    $data['com_id']=$com_id;
    $data['come_code']=$come_code;
    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
    // print_r($data);
    // die();
    $this->load->view('company_ledger_pdf',$data);
   }

   //End Company Ledger.

   //Show ORDER ITEMS REPORTS...
   public function show_item_report()
   {
    $start_date   = date("Y-m-d",strtotime($this->input->post('start_date')));
    $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
    // echo $start_date;
    // echo $end_date;
    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
     $data['show']=$this->Main_model->fetch_party_data();
     $data['items']=$this->Main_model->fetch_items_data();
     $this->load->view('show_item_report',$data);
   }
   public function get_unique_company_item_detail()
  {
    $com_id=$this->input->post('com_id');
    $data=$this->Main_model->get_unique_company_item_detail($com_id);
    echo json_encode($data);
  }
  public function show_item_order_report_view()
   {
    
    $start_date   = date("Y-m-d",strtotime($this->input->post('start_date')));
    $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
    // echo $start_date;
    // echo $end_date;
    // $data = $this->Main_model->fetch_company_order_data($com_id);
     $com_id=$this->input->post('party_id');
      $item_name = $this->input->post('item_name');
     
    //echo $com_id;
      // echo $item_name; die();
    $data['order'] = $this->Main_model->get_item_order_Report(urldecode($start_date),urldecode($end_date),$com_id,$item_name);
   //  echo "<pre>";
   // print_r($data);
   // die();
     // $data['total']   = $this->Main_model->getTotalBalance_order($start_date,$end_date,$com_id);
     $data['com_id']=$com_id;

    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
    $data['item_name'] = $item_name;
    // print_r($data['end_date']); die();
    // echo "<pre>";
    // print_r($data['order']);
    // die();

    $this->load->view('stock_item_report_view',$data);
  }
  public function show_item_order_report_test($start_date,$end_date,$com_id,$item_name)
   {
    $data['order'] = $this->Main_model->get_item_order_Report($start_date,$end_date,$com_id,$item_name);
    $com_id=$this->input->post('com_id');
     $data['com_id']=$com_id;
     $data['item_name']=$item_name;
    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
    $this->load->view('order_item_report_view_test',$data);
   }

   public function stock_item_report(){
    $start_date   = date("Y-m-d",strtotime($this->input->post('start_date')));
    $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
     $data['show']=$this->Main_model->fetch_party_data();
     $this->load->view('show_item_report_stock_data',$data);
   }

   public function stock_item_report_crud(){
    $start_date   = date("Y-m-d",strtotime($this->input->post('start_date')));
    $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
    $com_id=$this->input->post('company_id');
    $item_id=$this->input->post('item_name');
    $data['stock'] = $this->Main_model->get_item_stock_Report(urldecode($start_date),urldecode($end_date),$com_id,$item_id);
     $data['total']   = $this->Main_model->getTotalBalance_order($start_date,$end_date);
    $data['start_date'] = $start_date;
    $data['end_date']   = $end_date;
    $data['com_id']=$com_id;
    $data['item_id']=$item_id;
    // echo "<pre>";
    // print_r($data['stock']); die();
    $this->load->view('stock_item_report_crud',$data);
   }

    public function sales_report(){
    $data['res']=$this->Main_model->invoice();
    // echo '<pre>';
    // print_r($data['res']); die();
    $data['show']=$this->Main_model->fetchStock();
    $data['dev']=$this->Main_model->invoice_delivered();
    $this->load->view('sales_report',$data);
   }

    public function invoice_delivered($status=null){
        $data['dev']=$this->Main_model->invoice_delivered();
        $this->load->view('invoice_delivered.php',$data);      
    }

    public function edit_items($edit_id){
      $data['brand']=$this->Main_model->viewBrand();
      $data['company']=$this->Main_model->fetch_company_data();
      $data['row']=$this->Main_model->edit_items($edit_id);
      $data['edit_id']=$edit_id;
      $this->load->view('edit_items',$data);
    }

    public function update_items(){
      $edit_id = $this->input->post('edit_id');
      $updated_data=array(
              'code'=>$this->input->post('code'),
              'date'=>$this->input->post('date'),
              'brand_name'=>$this->input->post('item_brand'),
              'brand_value'=>$this->input->post('brand_value'),
              'item_name'=>$this->input->post('item_name'),
              'packing_unit'=>$this->input->post('packing_unit'),
              'filling'=>$this->input->post('filling'),
              'retail_rate'=>$this->input->post('retail_rate'),
              'trade_discount'=>$this->input->post('trade_discount'),
              'discount_rate'=>$this->input->post('discount_rate'),
              'trade_discount_offer'=>$this->input->post('trade_discount_offer'),
              'cost_rate'=>$this->input->post('cost_rate'),
              'reorder'=>$this->input->post('reorder'),
              'exp_date1'=> date('Y-m-d',strtotime($this->input->post('exp_date1'))),
              'exp_date2'=>date('Y-m-d',strtotime($this->input->post('exp_date2'))),
              'company_name'=>$this->input->post('company_name'),
              'company_value'=>$this->input->post('company_value')

    );
    $this->Main_model->update_items($edit_id,$updated_data);
    $this->session->set_flashdata('error',' your data has been Submitted successfully.');
    redirect('Admin_c/view_items');
  }

  public function delete_items($del_id){
    $this->Main_model->delete_items($del_id);
    redirect('Admin_c/view_items');
  }

  public function add_party(){
    $data['id']=$this->Main_model->fetch_last_party_code();
    // print_r($data['id']); die();
    $data['res']=$this->Main_model->fetch_region_data();
    $this->load->view('add_party',$data);
  }   

  public function insert_party_data()
  {
    $string=$this->input->post('code');
    $pcode=ltrim($string,'0');
    $region_id=$this->input->post('region_id');
    $region_code=$this->input->post('region_code');
    $code=$this->input->post('code');
    $name=$this->input->post('name');
    $one=$this->input->post('one');
    $two=$this->input->post('two');
    $phone=$this->input->post('phone');

    $data=array(
               'region_party_name'=>$region_id,
               'region_party_code'=>$region_code,
               'party_code'=>$code,
               'party_name'=>$name,
               'address_1'=>$one,
               'address_2'=>$two,
               'phone'=>$phone,
               'debit'=>$this->input->post('debit'),
               'credit'=>$this->input->post('credit'),
               'pcode' => $pcode
    );
    $this->Main_model->insert_party_data($data);
    $this->session->set_flashdata('msg','Data Inserted successfully!');
    redirect("Admin_c/view_party");
  }
  public function view_party(){
    $data['region']=$this->Main_model->fetch_region();
    $data['res']=$this->Main_model->view_party();
    $this->load->view('view_party',$data);
  }

 public function sale_invoice($number, $is_printed = 'donot_print') {
    // $number=$this->input->post('number');
    $data['item']=$this->Main_model->fetch_data();
    $data['res']=$this->Main_model->fetch_company_data();
    $data['id'] = $number;
    $data['is_printed'] = $is_printed;
    $data['sale']=$this->Main_model->fetch_sale_invoice($number);
    //$data['total_data']=$this->Main_model->fetch_each_order_billing_total($number);
    $data['total_data']=$this->Main_model->fetch_each_invoice_total($number);
    // print_r($data['total_data']);
    // die();
    $this->load->view('sale_invoice',$data);
  }

  public function update_invoice($is_printed){ 
    $id = $this->input->post('id');
    $number = $this->input->post('number');
    $q_order = $this->input->post('q_order');
    $u_p = $this->input->post('u_p');
    $t_p = $this->input->post('t_p');
    $discount = $this->input->post('discount');
    $tt_P = $this->input->post('tt_P');
    $pt_P=$this->input->post('pt_P');

    $rt_P=$this->input->post('rt_P');

    
    if($q_order!=""){
    for($i=0;$i<sizeof($q_order);$i++){
    $update = array(
            'quantity'=>$q_order[$i],
            'unit_price'=>$u_p[$i],
            'total'=>$t_p[$i]
        );
    $this->db->where('id',$id[$i]);
    $this->db->update('invoice',$update);
      }
    }
    if ($is_printed == 'printed') 
    {
     $invoices=$this->Main_model->retun_removed_invoices($id,$number);
     
     if ($invoices) 
     {
       $this->Main_model->update_removed_invoices($id,$number); 
       //$new_invoice_id = $this->Main_model->get_order_Invoice_id();
       $last_invoice = explode('-', $number);
       if(sizeof($last_invoice) == 2)
       {
        $postfix=((int)$last_invoice[1])+1;

        $new_postfix_invoice_id=$last_invoice[0]. '-' .$postfix;
       }
       else
       {
            $new_postfix_invoice_id= $number. '-1';
       }
       for($i=0;$i<sizeof($invoices);$i++)
        {
          $insert = array(
                    'quantity'   =>    $invoices[$i]->quantity,
                    'total'      =>    $invoices[$i]->total,
                    'unit_price'     =>    $invoices[$i]->unit_price,
                    'number'       =>    $new_postfix_invoice_id ,
                    'com_name'      =>     $invoices[$i]->com_name,
                    'item_name'      =>    $invoices[$i]->item_name,
                    'item_id'      =>    $invoices[$i]->item_id,
                    'come_code'         =>$invoices[$i]->come_code,
                    'date'          =>$invoices[$i]->date,
                    'address'         =>$invoices[$i]->address,
                    'desc'  => $invoices[$i]->desc,
                    'status' =>0,
                    'is_partial'=>1
                       );
          $data=$this->Main_model->insertInvoce($insert);
          //print_r($data);
        }
        $sql = $this->db->select('*')->where('invoice_id',$number)
                              ->from('order_billing')->get();
        $order_billing=$sql->row();
    
       
        $data = array('invoice_id' => $new_postfix_invoice_id,
                      'company_id' => $order_billing->company_id,
                      'bill_is_printed' => 1
                    );
          $id = $this->Main_model->insertOrder_billing($data);
      } 
     }
     


    $discount = array(
             //'discount'=>$discount,
             'total_amount'=>$tt_P,
             'paid'=>$pt_P,
             'remaining'=>$rt_P
         );
    $this->db->where('invoice_id',$number);
    $this->db->update('order_billing',$discount);
    redirect("Admin_c/generate_order/$number/$is_printed");
  }

  public function generate_order($id, $is_printed){
      $invoice_id=$this->Main_model->fetch_order_invoice_id($id);
      $data['billing']=$this->Main_model->fetch_order_bill_data($id);
      $data['result'] = $this->Main_model->fetch_order_data($invoice_id);
      $data['is_printed']=$is_printed;
      if ($is_printed == 'printed')
      {
        $update = array(
            'is_printed'=> '1'
        );
        $this->db->where('number',$id);
        $this->db->update('invoice',$update);
      }
    
      $this->load->view('generate_added_order_update_pdf',$data);
  }

  public function add_party_items(){
    $data['res']=$this->Main_model->add_party_items();
    $this->load->view('add_party_items',$data);
  }

  public function insert_party_items_data(){
    $code=$this->input->post('code');
    if(strlen($code) < 5)
    {
      $this->session->set_flashdata('del','Item Code must be greater then 5 characters');
      redirect('Admin_c/add_party_items');
    }
    $data=array(
              'code'=>$code,
              'item_name'=>$this->input->post('item_name'),
              'cost_rate'=>$this->input->post('cost_rate'),
              'party_name'=>$this->input->post('party_name'),
              'party_value'=>$this->input->post('party_value')
    );
    $this->Main_model->insert_party_items_data($data);
    $this->session->flashdata('msg','Data submitted successfully');
    redirect('Admin_c/add_party_items');
  }

  public function view_party_items(){
    $data['res']=$this->Main_model->view_party_items_data();
    $this->load->view('view_party_items',$data);
  }

  public function delete_order_data($del_id){
   $this->Main_model->delete_order_data($del_id);
   $this->session->flashdata('del','Data deleted successfully');
   redirect('Admin_c/view_order');
  }

  public function price_allocate(){
    $data['party']=$this->Main_model->fetch_party_data();
    $data['company']=$this->Main_model->fetch_company_data();
    $data['res']=$this->Main_model->fetch_items_data();

    // print_r($data['res']);
    // die();
    $this->load->view('price_allocate',$data);
  }

  public function insert_price_data(){
    $date=$this->input->post('date');
    $n_date=date('Y-m-d',strtotime($date));
    
    if(preg_match('/\bp-\b/',$this->input->post('party_name')))
    {
      $p=$this->input->post('party_name');
      //$pf=abs (int) filter_var($p, FILTER_SANITIZE_NUMBER_INT);
      $pf=abs((int) filter_var($p,FILTER_SANITIZE_NUMBER_INT));
    }
    else
    {
      $c=$this->input->post('party_name');

    }

    $item=$this->input->post('item_name');
    $price=$this->input->post('cost_rate');
    $code=$this->input->post('code');
    $inserted_data=array(
                        'date'=>$n_date,
                        'p_id'=>$pf,
                        'c_id'=>$c,
                        'item_name'=>$item,
                        // 'unit_price'=>$price,
                        // 'item_code'=>$code,
                        'sale_rate'=>$this->input->post('sale_rate'),
                        'purchase_rate'=>$this->input->post('purchase_rate')
    );
    $this->Main_model->insert_price_data($inserted_data);
    redirect('Admin_c/view_price_allocate');
  } 
  public function view_price_allocate(){
    $data['res']=$this->Main_model->view_price_allocate();
    // echo '<pre>';
    // print_r($data); die();
    $this->load->view('view_price_allocate',$data);
  }

  public function edit_allocate_price($id){
   $data['company']=$this->Main_model->fetch_company_data();
   $data['party']=$this->Main_model->fetch_party_data();
   $data['item']=$this->Main_model->fetch_items_data();
   // print_r($data['item']); die();
   $data['ap']=$this->Main_model->edit_allocate_price($id);
   $this->load->view('update_price_data',$data);
  }

  public function update_price_allocate(){
    $id=$this->input->post('id');
     $date=$this->input->post('date');
    $n_date=date('Y-m-d',strtotime($date));
    
    if(preg_match('/\bp-\b/',$this->input->post('party_name')))
    {
      $p=$this->input->post('party_name');
      //$pf=abs (int) filter_var($p, FILTER_SANITIZE_NUMBER_INT);
      $pf=abs((int) filter_var($p,FILTER_SANITIZE_NUMBER_INT));
    }
    else
    {
      $c=$this->input->post('party_name');

    }

    $item=$this->input->post('item_name');
    $price=$this->input->post('cost_rate');
    $code=$this->input->post('code');
    $inserted_data=array(
                        'date'=>$n_date,
                        'p_id'=>$pf,
                        'c_id'=>$c,
                        'item_name'=>$item,
                        // 'unit_price'=>$price,
                        // 'item_code'=>$code,
                        'sale_rate'=>$this->input->post('sale_rate'),
                        'purchase_rate'=>$this->input->post('purchase_rate')
    );
    $this->Main_model->update_price_allocate($id,$inserted_data);
    redirect('Admin_c/view_price_allocate');
  }

  public function fetch_unique_code(){
    $item_name=$this->input->post('item_name');
    $sql="SELECT code FROM items WHERE item_id = '".$item_name."'";
    $sql=$this->db->query($sql);
    $row=$sql->row();
    echo json_encode($row);
  }

  public function getPrice(){
    $id = $this->input->post('id');
    $com_id = $this->input->post('com_id');
    // echo $id;
    // echo $com_id;
    //  die();
   // $i = $this->input->post('i');
    //print_r($id); 
    // print_r($com_id); 
    // die();
    //$com_id = @end($com_id);
    // $sql = $this->db->query("SELECT * FROM price  WHERE item_name = '".$id."' AND party_name = '".$com_id."' ");
    $sql=$this->db->select('*')
                  ->from('multiple_items')
                  ->where('item_m_id',$id)
                  ->where('party_m_id',$com_id)
                  ->join('items','items.item_id=multiple_items.item_m_id')
                  //->limit('1')
                  ->order_by('date','desc')
                  ->get();
    if($sql->num_rows() > 0)
    {
       $row=$sql->row();
    }
    else
    {
     $row = FALSE;
    }
    // print_r($row); 
    // die();\
    echo json_encode($row);
  }
  public function fetch_stock_in_hand(){
    $id = $this->input->post('id');
    $com_id = $this->input->post('com_id');
   // $i = $this->input->post('i');
    //print_r($id); 
    // print_r($com_id); 
    // die();
    $com_id = @end($com_id);
    // $sql = $this->db->query("SELECT * FROM price  WHERE item_name = '".$id."' AND party_name = '".$com_id."' ");
    $sql=$this->db->select('SUM(quantity) as stock_total')
                  ->from('stock')
                  ->where('item_name',$id)
                  ->or_where('company_name',$com_id)
                  ->limit('1')
                  ->order_by('date','desc')
                  ->get();
    $row = $sql->row();
    // print_r($row); 
    // die();
    echo json_encode($row); 
  }

  public function stock_difference_report(){
    $data['res']=$this->Main_model->fetchStock();
    $this->load->view('stock_difference_report_pdf',$data);
  }

  public function delete_row(){
    $id = $this->input->post('row_id');
    //$invoice_id=$this->input->post('invoice_id');
    // echo $invoice_id; die();
    $this->db->query("DELETE FROM invoice WHERE id = '".(int)$id."'");
  }

  public function delete_invoice($id){
    $this->Main_model->delete_invoice($id);
    redirect('Admin_c/view_sale_invoice');
  }

  public function price_allocate_pdf(){
    $data['res']=$this->Main_model->price_allocate_pdf();
    $this->load->view('price_allocate_pdf',$data);
  }

  public function addBrand(){
    $data['id']=$this->Main_model->fetch_last_brand_code();
    if($data['id'])
    {
     $id=$data['id'];
     $id++;
    }
    else
    {
     $data['id']=0;
     $id=$data['id'];
     $id++;
    }
    $data['last']=$id;
    $this->load->view('brand',$data);
  }

  public function brandData(){
    $name=$this->input->post('brand_name');
    $code=$this->input->post('brand_code');
    $data=array(
                'brand_name'=>$name,
                'brand_code'=>$code
    );
    $this->Main_model->brandData($data);
    redirect('Admin_c/viewBrand');
  }

  public function viewBrand(){
    $data['res']=$this->Main_model->viewBrand();
    $this->load->view('viewBrand',$data);
  }

  public function editBrand($brand_id){
     $data['res']=$this->Main_model->editBrand($brand_id);
     $this->load->view('update_brand_data',$data);
  }

  public function updateBrand(){
    $id=$this->input->post('brand_id');
    $name=$this->input->post('brand_name');
    $code=$this->input->post('brand_code');
    $data=array(
                'brand_name'=>$name,
                'brand_code'=>$code
    );
    $this->Main_model->updateBrandData($id,$data);
    redirect('Admin_c/viewBrand');
  }

  public function deleteBrand($id){
   $data=array(
              'is_delete'  => 1
   );
   $this->db->where('brand_id',$id);
   $this->db->update('brand',$data);
   redirect('Admin_c/viewBrand');
  }

 public function fetch_unique_brand(){
    $brand_id=$this->input->post('brand_id');
    $data=$this->Main_model->editBrand($brand_id);
    echo json_encode($data);
  }

  public function add_sale_invoice(){
     $data['res']=$this->Main_model->invoice();
     $this->load->view('view_sale_invoice',$data);
  }
  public function view_sale_invoice(){
    $data['res']=$this->Main_model->sale_invoice();
      $this->load->view('view_data_sale_invoice',$data);
  }

    public function view_printed_sale_invoice(){
    $data['res']=$this->Main_model->printed_invoice();
      $this->load->view('view_data_printed_sale_invoice',$data);
  }

  public function received_voucher(){
    $data['num']=$this->Main_model->fetch_received_voucher_last_id();
    if($data['num']!='')
    {
       $id=$data['num'];
       $id++;
    } 
    else
    {
       $data['num']='0';
       $id=$data['num'];
       $id++;
    }
    $data['last_id']=$id;
    //print_r($data['last_id']); die();
    $data['party']=$this->Main_model->fetch_party_data();
    $this->load->view('received_voucher',$data);
  }

  public function insertReceivedVoucher(){
    $date=$this->input->post('date');
    $valid_date=date("Y-m-d",strtotime($date));
    $data=array(
                'number'  =>  $this->input->post('number'),
                'date'  =>  $valid_date,
                'party'  =>  $this->input->post('party_name'),
                'total_amount'  =>  $this->input->post('t_amount'),
                'paid'  =>  $this->input->post('t_paid'),
                'remaining'  =>  $this->input->post('rb'),
                'discount'  =>  $this->input->post('discount'),
                'balance'  =>  $this->input->post('t_remain')
    );
    $id = $this->Main_model->insertReceivedVoucher($data);
    //print_r($data); die();
    $paid=$this->input->post('t_paid');
     $data1=array(
               'company_id'     =>  $this->input->post('party_name'),
               'remaining' => (-1) * $paid
  );
  $this->Main_model->insertPartyPaid($data1);
  redirect("Admin_c/received_voucher_pdf/$id");
  }

  public function received_voucher_pdf($id)
  {
    $data['row']=$this->Main_model->fetch_received_voucher_pdf($id);
    //print_r($data['res']); die();
    $this->load->view('received_voucher_pdf',$data);
  }

  public function view_received_voucher(){
    $data['res']=$this->Main_model->fetch_received_voucher();
    $this->load->view('view_received_voucher',$data);
  }

  public function payment_voucher(){
    $data['res']=$this->Main_model->fetch_party_data();
     $data['num']=$this->Main_model->fetch_payment_voucher_last_id();
    if($data['num']!='')
    {
       $id=$data['num'];
       $id++;
    } 
    else
    {
       $data['num']='0';
       $id=$data['num'];
       $id++;
    }
    $data['last_id']=$id;
    $this->load->view('payment_voucher',$data);
  }

  public function insertPaymentVoucher(){
    $date=$this->input->post('date');
    $valid_date=date("Y-m-d",strtotime($date));
    $data=array(
                'number'  =>  $this->input->post('number'),
                'date'  =>  $valid_date,
                'company'  =>  $this->input->post('company_id'),
                'total_amount'  =>  $this->input->post('t_amount'),
                'paid'  =>  $this->input->post('t_paid'),
                'remaining'  =>  $this->input->post('t_remain')
    );
    $id=$this->Main_model->insertPaymentVoucher($data);
    $paid=$this->input->post('t_paid');
    $data1=array(
                 'company_id' => $this->input->post('company_id'),
                 'remaining'  => (-1) * $paid
    );
    $this->Main_model->insertCompanyPaid($data1);
    redirect("Admin_c/payment_voucher_pdf/$id");
    }

    public function payment_voucher_pdf($id)
    {
           $data['row']=$this->Main_model->fetch_payment_voucher_data($id);
           $this->load->view('payment_voucher_pdf',$data);
    }

    public function view_payment_voucher(){
      $data['res']=$this->Main_model->fetch_payment_voucher();
      $this->load->view('view_payment_voucher',$data);
    }

    public function fetch_unique_party_pending(){
      $party_name=$this->input->post('party_name');
      $data=$this->Main_model->fetch_unique_party_pending($party_name);
      echo json_encode($data);
    }

    public function fetch_unique_company_pending(){
      $company_id=$this->input->post('company_id');
      $data=$this->Main_model->fetch_unique_company_pending($company_id);
      echo json_encode($data);
    }

    public function show_party_report(){
    $data['show']=$this->Main_model->fetch_party_data();
    $this->load->view('order_party_report_view',$data);
    }

    public function add_region(){
      $data['id']=$this->Main_model->fetch_last_region_code();
      if($data['id']==null){
        $id=0;
        $id++;
      }
      elseif($data['id']!=null){
        $id=$data['id'];
        $id++; 
      }
      $this->load->view('add_region',$data);
    }

    public function insertRegion(){
      $string=$this->input->post('code');
      $c = ltrim($string,'0');
      $data=array(
                 'region_name'=>$this->input->post('name'),
                 'region_code'=>$this->input->post('code'),
                 'code2'      => $c
      );
      $this->Main_model->insert_region_data($data);
      redirect('Admin_c/view_region');
    }

    public function view_region(){
      $data['res']=$this->Main_model->fetch_region();
      $this->load->view('view_region',$data);
    }

    public function deleteRegion($del_id){
      $data=array(
                  'is_delete' => 1
      );
      $this->db->where('region_id',$del_id);
      $this->db->update('region',$data);
      redirect('Admin_c/view_region');
    }

    public function editRegion($edit_id){
      $data['res']=$this->Main_model->edit_region_data($edit_id);
      $this->load->view('update_region',$data);
    }

    public function updateRegion(){
      $edit_id=$this->input->post('id');
      $string=$this->input->post('code');
      $c = ltrim($string,'0');
      $data=array(
                 'region_name'=>$this->input->post('name'),
                 'region_code'=>$this->input->post('code'),
                 'code2'      => $c
      );
      $this->Main_model->update_region_data($edit_id,$data);
      redirect('Admin_c/view_region');
    }

    public function fetch_unique_region_code(){
      $region_id=$this->input->post('region_id');
      $data=$this->Main_model->fetch_unique_region_code($region_id);
      echo json_encode($data);
    }

    public function view_trial_balance(){
      $data['region']=$this->Main_model->fetch_region_data();
     // $data['company']=$this->Main_model->fetch_all_company_details();
      $data['company']=$this->Main_model->fetch_all_party_details_data();
      // print_r($data['company']); die();
      $data['party']=$this->Main_model->fetch_all_party_details();
      $this->load->view('view_trial_balance',$data);
    }

     public function view_trial_credit_balance(){
      $data['region']=$this->Main_model->fetch_region_data();
      $data['company']=$this->Main_model->fetch_all_company_details();
      $data['party']=$this->Main_model->fetch_all_party_details();
      $this->load->view('view_trial_credit_balance',$data);
    }

    public function delete_allocate_price($del_id){
      $this->Main_model->delete_allocate_price($del_id);
      redirect('Admin_c/view_price_allocate');
    }

    public function daily_based_orders(){
      $data['daily']=$this->Main_model->daily_based_orders();
      $this->load->view('daily_based_orders',$data);
    }
    public function Profile()
    {
      $data['profile']=$this->Main_model->profile_data($this->session->userdata('admin_id'));
      $this->load->view('profile',$data);
    }
    public function updateProfile()
    {
      $id=$this->input->post('id');
      $data=array(
                  'admin_name'  => $this->input->post('name'),
                  'admin_email' => $this->input->post('email'),
                  'admin_password' =>$this->input->post('password')
      );
      $this->db->where('admin_id',$id);
      $this->db->update('admin',$data);
      redirect('Admin_c/Profile');
    }
    public function fetch_unique_party_items(){
      $party_id=$this->input->post('party_id');
      // var_dump($party_id); die();
      $data=$this->Main_model->fetch_unique_party_items($party_id);
      echo json_encode($data);
    }

    public function party_ledger($party_id){
                    $data['party_id']=$party_id;
                    $this->load->view('party_ledger',$data);
    }
    public function party_ledger_report(){
                    $start=$this->input->post('start_date');
                    $end=$this->input->post('end_date');
                    $start_date=date('Y-m-d',strtotime($start));
                    $end_date=date('Y-m-d',strtotime($end));
                    $party_id=$this->input->post('party_id');
                    $data['order']=$this->Main_model->fetch_order_party_ledger($start_date,$end_date,$party_id);
                    // echo "<pre>";
                    // print_r($data['order']); die();
                     $data['stock']=$this->Main_model->fetch_stock_party_ledger($start_date,$end_date,$party_id);
                    $data['start_date']=$start_date;
                    $data['end_date']=$end_date;
                    $data['party_id']=$party_id;
                    $this->load->view('party_ledger_report',$data);
    }
    public function party_ledger_pdf($start_date,$end_date,$party_id){
            $data['stock']=$this->Main_model->get_company_ledger_stock($start_date,$end_date,$party_id);
            $data['order']=$this->Main_model->get_party_ledger_stock($start_date,$end_date,$party_id);
            $data['party_id']=$party_id;
            $data['start_date'] = $start_date;
            $data['end_date']   = $end_date;
            $this->load->view('party_ledger_pdf',$data);
    }
    public function item_code_check(){
            $code=$this->input->post('code');
            $data=$this->Main_model->item_code_check($code);
            echo $data;
    }

    public function check_brand_code(){
            $code=$this->input->post('code');
            $data=$this->Main_model->check_brand_code($code);
            echo $data;
    }

    public function check_region_code(){
            $code=$this->input->post('code');
            // print_r($code); die();
            $data=$this->Main_model->check_region_code($code);
            echo json_encode($data);
    }

    public function fecth_party_remain_balance(){
            $party_id= $this->input->post('party_id');
            $data1= $this->Main_model->fecth_party_remain_balance($party_id);
            $data2= $this->Main_model->get_party_remaining_balance($party_id);
            // print_r($data2); die();
            echo json_encode(array('data1'=>$data1,'data2'=>$data2));
    }

    public function balance_sheet_report(){
            $data['res']=$this->Main_model->fetch_party_balance_data(); //ye 
            $this->load->view('balance_sheet_report',$data);
    }

    public function daily_sale_report(){
            $data['daily']=$this->Main_model->daily_order_report();
            $this->load->view('daily_sale_report',$data);
    }

    public function daily_stock_report(){
            $data['daily']=$this->Main_model->fetch_daily_stock_report();
            $this->load->view('daily_stock_report',$data);
    }

    public function return_order(){
            $data['res']=$this->Main_model->fetch_party_data_order();
            $data['show']=$this->Main_model->fetch_items();
            $data['id'] = $this->Main_model->get_order_Invoice_id();
            if ($data['id']==null) {
            $id=0;
            $id++;
            } 
            elseif ($data['id']!=null) {
            $id=$data['id'];
            $id++;
            }
            $data['order_invoice_id'] = $id;
            $this->load->view('return_order',$data);
    }

    public function daily_stock_added_report(){
            $this->load->view('daily_stock_added_report');
    }

    public function daily_purchase_report(){
            $start=$this->input->post('start_date');
            $end  =$this->input->post('end_date');
            $start_date=date('Y-m-d',strtotime($start));
            $end_date  =date('Y-m-d',strtotime($end));
            $data['start_date']=$start_date;
            $data['end_date']  =$end_date;
            $data['res']=$this->Main_model->fetch_daily_purchase_report_data($start_date,$end_date);
            $this->load->view('daily_purchase_report_pdf',$data);
    }

    public function daily_sale_data_report(){
            $this->load->view('daily_sale_data_report');
    }

    public function daily_sale_report_pdf(){
            $start=$this->input->post('start_date');
            $end  =$this->input->post('end_date');
            $start_date=date('Y-m-d',strtotime($start));
            $end_date  =date('Y-m-d',strtotime($end));
            $data['start_date']=$start_date;
            $data['end_date']  =$end_date;
            $data['res']=$this->Main_model->fetch_sale_report_data($start_date,$end_date);
            $this->load->view('daily_sale_report_pdf',$data);
    }

    public function return_order_report(){
            $this->load->view('return_order_report');
    }

    public function return_order_pdf(){
             $start_date=date('Y-m-d',strtotime($this->input->post('start_date')));
             $end_date=date('Y-m-d',strtotime($this->input->post('end_date')));
             $data['start_date']=$start_date;
             $data['end_date']  =$end_date;
             $data['res']       =$this->Main_model->fetch_return_order_bill_by_date($start_date,$end_date);
             $this->load->view('return_order_invoices_pdf',$data);
    }

    public function return_stock_report(){
            $this->load->view('return_stock_report');
    }

    public function return_stock_pdf(){
             $start_date=date('Y-m-d',strtotime($this->input->post('start_date')));
             $end_date=date('Y-m-d',strtotime($this->input->post('end_date')));
             $data['start_date']=$start_date;
             $data['end_date']  =$end_date;
             $data['res']       =$this->Main_model->fetch_return_stock_bill_by_date($start_date,$end_date);
             $this->load->view('return_stock_pdf',$data);
    }

    public function add_party_multiple_items()
    {
            $data['item']=$this->Main_model->fetch_items_data();
            $data['party']=$this->Main_model->fetch_party_data();
            $this->load->view('add_party_multiple_items',$data);
    }

    public function add_multiple_party_items()
    {
            $data=array(
                        'item_m_id'    =>$this->input->post('item_id'),
                        'party_m_id'   =>$this->input->post('party_id'),
                        'sale'    =>$this->input->post('sale'),
                        'purchase'    =>$this->input->post('purchase')
                        //'party_m_code' =>$this->input->post('party_code')
            );
            $this->Main_model->add_multiple_party_items($data);
            redirect('Admin_c/view_party_multiple_items');
    }

    public function view_party_multiple_items()
    {
            $data['multiple']=$this->Main_model->fetch_party_multiple_items();
            // print_r($data['multiple']); die();
            $this->load->view('view_party_multiple_items',$data);
    }

    public function party_items_list()
    {
            $data['party']=$this->Main_model->fetch_party_data();
            $this->load->view('party_items_list',$data);
    }

    public function view_party_items_list()
    {
            $party=$this->input->post('party_id');
            $data['multiple']=$this->Main_model->fetch_unique_party_list_data($party);
            $this->load->view('view_party_items_list',$data);
    }

    public function add_company(){
            $data['id'] = $this->Main_model->fetch_last_company_code();
            //print_r($data['id']); die();
            if($data['id'])
            {
             $id=$data['id'];
             $id++;
            }
            else
            {
             $data['id']=0;
             $id=$data['id'];
             $id++;
            }
            $data['last_inserted_code']=$id;
            $data['res']=$this->Main_model->fetch_region_data();
            $this->load->view('add_company.php',$data);
  }

  public function insert_company(){
          $data=array(
                      'company_code'=>$this->input->post('company_code'),
                      'company_name'=>$this->input->post('company_name'),
                     
                     );
          $this->Main_model->insert_company($data);
          $this->session->set_flashdata('error',' your data has been Submitted successfully.');
          redirect('Admin_c/view_company');
  }

  public function delete_party($id)
  {
          $data=array(
                      'is_delete'=>1
          );
          $this->db->where('party_id',$id);
          $this->db->update('party',$data);
          redirect('Admin_c/view_party');
  }

  public function edit_party($id)
  {
          $data['show']=$this->Main_model->fetch_region_data();
          $data['res']=$this->Main_model->fetch_unique_party_data($id);
          $this->load->view('update_party',$data);
  }

  public function update_party_data()
  {
          $id=$this->input->post('id');
          $region_id=$this->input->post('region_id');
          $region_code=$this->input->post('region_code');
          $code=$this->input->post('code');
          $name=$this->input->post('name');
          $one=$this->input->post('one');
          $two=$this->input->post('two');
          $phone=$this->input->post('phone');

          $data=array(
                     'region_party_name'=>$region_id,
                     'region_party_code'=>$region_code,
                     'party_code'=>$code,
                     'party_name'=>$name,
                     'address_1'=>$one,
                     'address_2'=>$two,
                     'phone'=>$phone,
                     'debit'=>$this->input->post('debit'),
                     'credit'=>$this->input->post('credit')
          );
          $this->Main_model->update_party_date($id,$data);
          redirect('Admin_c/view_party');
  }

  public function delete_company($id)
  {
          $data=array(
                      'is_delete' => 1
          );
          $this->db->where('company_id',$id);
          $this->db->update('company',$data);
          redirect('Admin_c/view_company');
  }

  public function edit_company($id)
  {
          $data['res']=$this->Main_model->fetch_unique_company_data($id);
          $this->load->view('update_company',$data);
  }

  public function update_company()
  {
          $id=$this->input->post('id');
          $data=array(
                      'company_code'=>$this->input->post('company_code'),
                      'company_name'=>$this->input->post('company_name'),
                     
                     );
          $this->Main_model->update_company($id,$data);
  }

  public function delete_multile_item($id)
  {
          $this->db->select('*')->from('multiple_items')->where('id',$id)->delete();
          redirect('Admin_c/view_party_multiple_items');
  }
  public function fetch_company_item()
  {
    $company=$this->input->post('company');
    // echo $company; die();
    $output='';
    $data=$this->Main_model->fetch_company_item($company);
    print_r($data); die();
    $output.='<option value="" selected="">Select state</option>';
    foreach ($data as $row) { 

      $output.='<option value="'.$row->items_id.'">'.$row->item_name.'</option>';
        }
    
    echo $output;
  }

  public function search_party_list()
  {
    $search=$this->input->post('search');
    $data=$this->Main_model->fetch_filterd_data($search);
    echo json_encode($data);
  }

  public function check_party_code()
  {
    $party_code=$this->input->post('party_code');
    $data=$this->Main_model->check_party_code($party_code);
    echo json_encode($data);
  }

  public function check_party_items_list()
  {
    $item_id=$this->input->post('item_id');
    $com_id=$this->input->post('com_id');
    $data=$this->Main_model->check_party_items_list($item_id,$com_id);
    echo json_encode($data);
  }
  public function item_details()
  {
    $item_id=$this->input->post('item_id');
    $data=$this->Main_model->item_details($item_id);
    echo json_encode($data);
  }
  public function generate_price_check()
  {
    $party=$this->input->post('party');
    $item=$this->input->post('item');
    $data=$this->Main_model->generate_price_check($party,$item);
    echo json_encode($data);
  }
  public function edit_multiple_items($id)
  {
    $data['items']=$this->Main_model->fetch_items_data();
    $data['party']=$this->Main_model->fetch_party_data();
    $data['res']=$this->Main_model->fetch_unique_multiple_item($id);
    $this->load->view('update_multiple_items',$data);
  }
  public function update_multiple_party_items()
  {
    $id=$this->input->post('id');
    $data=array(
               'sale'  => $this->input->post('sale'),
               'purchase'  => $this->input->post('purchase')
    );
    $this->db->where('id',$id);
    $this->db->update('multiple_items',$data);
    redirect('Admin_c/view_party_multiple_items');
  }
  public function fetch_party_by_code()
  {
    $c=$this->input->post('c');
    $data=$this->Main_model->fetch_party_by_code($c);

    echo json_encode($data);
  }

}
?>