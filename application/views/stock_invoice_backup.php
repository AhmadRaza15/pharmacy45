<?php 
class Admin_c extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Main_model');
	}
	public function index()
	{
		$this->load->view('Admin_dashboard.php');
		// $data['eee'] = $this->Main_model->getItem();
		// print_r($data);
		// die();
	}
	public function master_title_account()
	{
		$this->load->view('master_title_account');
	}
	public function add_items()
	{
		$data['show']=$this->Main_model->fetch_company_data();
		$this->load->view('add_items',$data);
	}
	public function insert_items()
	{
		$data=array(
              'code'=>$this->input->post('code'),
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
              'exp_date1'=>$this->input->post('exp_date1'),
              'exp_date2'=>$this->input->post('exp_date2'),
              'company_name'=>$this->input->post('company_name'),
              'company_value'=>$this->input->post('company_value'),
              'stock_in_hand'=>$this->input->post('stock_in_hand'),
              'debit'=>$this->input->post('debit'),
              'credit'=>$this->input->post('cost_rate') * $this->input->post('packing_unit'), 
              'balance'=>$this->input->post('cost_rate') * $this->input->post('packing_unit') + $this->input->post('debit')

		);
		// echo print_r($data);
		// die();
		$this->Main_model->insert_items($data);
		$this->session->set_flashdata('error',' your data has been Submitted successfully.');
    redirect('Admin_c/add_items');
	}
	public function view_items()
	{
		$data['res']=$this->Main_model->fetch_items();
		$this->load->view('view_items',$data);
	}
	public function add_company()
	{
		$this->load->view('add_company.php');
	}
	public function insert_company()
	{
		$data=array(
              'com_name'=>$this->input->post('com_name'),
              'come_code'=>$this->input->post('code'),
              'come_address1'=>$this->input->post('com_address'),
              'com_address2'=>$this->input->post('com_address2'),
              'phone'=>$this->input->post('phone'),
              'debit'=>$this->input->post('debit'),
              'credit'=>$this->input->post('credit'),
              'balance'=>$this->input->post('credit') + $this->input->post('debit')
		);
		$this->Main_model->insert_company($data);
		$this->session->set_flashdata('error',' your data has been Submitted successfully.');
    redirect('Admin_c/add_company');
	}
	public function view_company()
	{
		$data['res']=$this->Main_model->fetch_company_data();
		$this->load->view('view_company',$data);
	}
	public function add_order()
	{
		$data['res']=$this->Main_model->fetch_company_data();
		$data['show']=$this->Main_model->fetch_items();
		$this->load->view('add_order',$data);
	}
	public function get_company_detail()
	{
		$com_id=$this->input->post('com_id');
		$data=$this->Main_model->get_unique_company($com_id);
		echo json_encode($data);
	}
	public function get_item_detail()
	{
		$item_id=$this->input->post('item_id');
		$data=$this->Main_model->get_unique_item($item_id);
		echo json_encode($data);
	}
   

	 public function getRows()
    {
    	$i = $this->input->post('i');
    	//$data['getItems'] = $this->Main_model->getItem();

    	$table='<tr style="display:table;table-layout:fixed;">';
        
         $table .=           '<td width="11%" style="border-bottom:1px  solid;vertical-align:middle;padding-top:0;padding-bottom:0;">
                             <select class="form-control input-sm item_name" name="item_name[]">
                             <option>--</option>';
                             foreach(getItems() as $item)                             
                             {
               $table .= '<option value="'.$item->item_name.'">'.$item->item_name.'</option>';
                             }
                $table .=               '</select>';
                 $table .=            '</td>';
                 $table .=             '<td class="text-center" width="7.5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="q_order[]" class="form-control qo input-sm q_order'.$i.'">
                             </td>
                             <td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text"  name="u_p[]" class="form-control input-sm up u_p'.$i.'"></td>
                             <td class="text-center" width="2%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="t_p[]" class="form-control con input-sm t_p'.$i.'"></td>
                             <input type="hidden" name="a_p[]" class="form-control ss input-sm a_p'.$i.'">
                             </tr>';
                             echo json_encode(array('table'=>$table,'i'=>$i)); 
    }
     public function getRows_item()
    {
      $i = $this->input->post('i');
      //$data['getItems'] = $this->Main_model->getItem();

      $table='<tr style="display:table;table-layout:fixed;">';
        
         $table .=           '<td width="11%" style="border-bottom:1px  solid;vertical-align:middle;padding-top:0;padding-bottom:0;">
                             <select class="form-control input-sm item_name" name="item_name[]">
                             <option>--</option>';
                             foreach(getItems() as $item)                             
                             {
               $table .= '<option value="'.$item->item_name.'">'.$item->item_name.'</option>';
                             }
                $table .=             '</select>';
                 $table .=            '</td>';
                 $table .=             '
                  <td class="text-center" width="7.5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="unit[]" class="form-control qo input-sm unit'.$i.'">
                             </td>
                 <td class="text-center" width="7.5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="q_order[]" class="form-control qo input-sm q_order'.$i.'">
                             </td>
                            
                             <td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text"  name="u_p[]" class="form-control input-sm up u_p'.$i.'"></td>

                             <td class="text-center" width="2%" style="vertical-align: middle;padding-top:0;padding-bottom:0;">
                             <input type="text" name="t_p[]" class="form-control con input-sm t_p'.$i.'"></td>
                             <input type="hidden" name="a_p[]" class="form-control ss input-sm a_p'.$i.'">
                             </tr>';
                             echo json_encode(array('table'=>$table,'i'=>$i)); 
    }
	public function save_data()
    {
    	$number 	 = $this->input->post('number');
    	$company_id = $this->input->post('company_id');
    	$item_name   = $this->input->post('item_name'); 
    	$q_order     = $this->input->post('q_order');
    	$unit_price  = $this->input->post('u_p');
    	$total_price = $this->input->post('t_P');
    	$debit=$this->input->post('debit');
    	$credit=$this->input->post('credit');
    	$phone=$this->input->post('phone');
    	$date=$this->input->post('date');
    	for($i=0;$i<sizeof($q_order);$i++)
    	{
    		$insert = array(
    						
    							'quantity'   =>    $q_order[$i],
    							'total'      =>    $total_price,
    							'unit_price'	   =>    $unit_price[$i],
    							'number'		   =>    $number,
    							'com_name'      =>     $company_id,
    							'item_name'      =>    $item_name[$i],
    							'debit'         =>$debit,
    							'credit'        =>$credit,
    							'date'          =>$date,
    							'phone'         =>$phone
    			           );
    		$this->Main_model->insertInvoce($insert);
    	}

    			redirect("Admin_c/add_order");
    }
    public function save_data_stock()
    {
      $number    = $this->input->post('number');
      $item_name = $this->input->post('item_name'); 
      $code=$this->input->post('code');
      $category=$this->input->post('category');
      $pre_stock=$this->input->post('pre_stock');
      $date=$this->input->post('date');
      $q_order     = $this->input->post('q_order');
      $unit_price  = $this->input->post('u_p');
      $total_price = $this->input->post('t_p');
      $unit=$this->input->post('unit');
      
      
      for($i=0;$i<sizeof($q_order);$i++)
      {
        $insert = array(
                
                  'quantity'   =>    $q_order[$i],
                  'stock_id'       =>    $number,
                  'item_name'      =>    $item_name[$i],
                  'rate'         => $unit_price[$i],
                  'date'          =>$date,
                  'balance'         => $total_price[$i],
                  'unit'         => $unit[$i],
                  'previous_stock' => $pre_stock,
                   'updated_stock' => $pre_stock + $q_order[$i]
                     );
        $this->Main_model->insertStock($insert);
      }

          redirect("Admin_c/add_stock");
    }
    public function invoice_view()
    {
    	$data['res']=$this->Main_model->invoice();
    	$this->load->view('invoice_view.php',$data);
    }
    public function view_order()
    {
    	$data['res']=$this->Main_model->invoice();
    	$this->load->view('view_order',$data);
    }
    public function add_stock()
    {
      $data['res']=$this->Main_model->fetch_items();
      $this->load->view('add_stock',$data);
    }
    public function view_Stock()
    {
      $data['res']=$this->Main_model->fetchStock();
      $this->load->view('view_Stock',$data);
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
    
    //$end_date = $this->input->post('end_date');
    //echo"$start_date";
    //echo"$end_date";
    //die();
    $end_date     = date("Y-m-d",strtotime($this->input->post('end_date')));
    $data['items'] = $this->Main_model->getItemsReport($start_date,$end_date);
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
    
   // $start_date   = date("Y-m-d",strtotime($start_date);
   // $end_date     = date("Y-m-d",strtotime($end_date);
    $data['items'] = $this->Main_model->getItemsReport($start_date,$end_date);
    $data['total']   = $this->Main_model->getTotalBalance($start_date,$end_date);
    // print_r($data);
    // die();
    // // $data['start_date'] = $start_date;
    // $data['end_date']   = $end_date;
    $this->load->view('item_pdf',$data);
   }


}