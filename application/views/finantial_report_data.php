
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eagle Homoeo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of down
       loading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body  class="hold-transition skin-blue sidebar-mini"  style="margin:0px; padding: 0px;">




  <!-- Content Wrapper. Contains page content -->
  <div class="container" style="width:100%; margin: 0px; padding: 0px;">
    <!-- Content Header (Page header) -->
    


    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
           <div class="col-xs-12">
          <div class="col-xs-4" style="border:1px solid;">

            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size: 16px; font-weight: bold;">
                                    <i  aria-hidden="true"></i>BHATTI PHARMACY </h3>
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size: 16px; font-weight: bold;">
                                    <i  aria-hidden="true"></i> LAHORE </h3>
                                   
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size:12px;">
                                    <i  aria-hidden="true"></i> Ph: 0323-8881054 </h3>
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size:14px; font-weight: bold;">
                                    <i  aria-hidden="true"></i> Email: bhattipharacy@gmail.com </h3>
          </div>
          <div class="col-xs-6">
              <div class="">
                        <h3 style="margin-top:15px;margin-bottom:0; text-align: center; font-weight: bold; font-size:20px;">
                            <i  aria-hidden="true"></i>PENDING ORDER LEDGER REPORT</h3>
                        <!-- <h3 style="margin-top:0px;margin-bottom:0; text-align: center;  font-size:14px; font-weight: bold;">
                            <i  aria-hidden="true"></i>FROM: <?php echo  $start_date;?>  TO: <?php echo  $end_date;?></h3> -->
              </div>
          </div>
          <div class="col-xs-2">
                 <!-- <h3 style="margin-top:0px;margin-bottom:0; text-align: center; font-weight: bold; font-size:16px;">
                            <i  aria-hidden="true"></i> Address: Lahore</h3> -->
          </div>
        </div>
        </div>
        <!-- /.col -->
      </div>
      
   <!--    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        
        </div>
      
        <div class="col-sm-4 invoice-col">
          
        </div>
   
        <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div>
       
      </div> -->
      <!-- /.row -->

      <!-- Table row -->
      <div class="row" style="margin-top:1%">
        <div class="col-xs-12 table-responsive">
          <table class="table table-responsive" style="zoom:100%;" >
            <thead  style="background:black; color: white; border:2px solid black; ">
            <tr>
        <!--       <th>Code</th> -->
              <th style="border-bottom: 2px solid;">Order</th>
              <th style="border-bottom: 2px solid;">Delivery</th>
              <th style="border-bottom: 2px solid;">Item Description</th>
              <th style="border-bottom: 2px solid;">Unit</th>
              <th style="border-bottom: 2px solid;">Quantity</th>
              <th style="border-bottom: 2px solid;">Amount</th>
            </tr>
            </thead >
            <tbody>
                  <?php $grand_total=0; if (count($res)) { $i=1; foreach($res as $row):?>
                <tr >
                  <?php $numbers = explode(',', $row->number); ?>
                  <td>
                    <br><br><br>
                    <?php foreach($numbers as $number) {
                          echo $number;?>
                          <br>
                    <?php } ?>
                  </td>
                  <?php $dates = explode(',', $row->date); ?>
                  <td>
                    <br><br><br>
                    <?php foreach($dates as $date) {
                          echo $date;?>
                          <br>
                    <?php } ?>
                  </td>

                  <?php $item_names = explode(',', $row->item_name); ?>
                  <td>
                    <?php echo $row->come_code?><br><?php echo $row->com_name; ?><br><?php echo $row->address ?><br>
                    <?php foreach($item_names as $item_name) {
                          echo $item_name;?>
                          <br>
                    <?php } ?>
                  </td>
                  <?php $unit_prices = explode(',', $row->unit_price); ?>
                  <td>
                    <br><br><br>
                    <?php foreach($unit_prices as $unit_price) {
                          echo $unit_price;?>
                          <br>
                    <?php } ?>
                  </td> 
                  <?php $quantities = explode(',', $row->quantity); ?>
                  <td>
                    <br><br><br>
                    <?php foreach($quantities as $quantity) {
                          echo $quantity;?>
                          <br>
                    <?php } ?>
                  </td>   
                  <?php $totals = explode(',', $row->total); ?>
                  <td>
                    <br><br><br>
                    <?php foreach($totals as $total) {
                          echo $total; $grand_total+= $total?>
                          <br>
                    <?php } ?>
                  </td>   
                </tr >
              <!--  <tr style="border-bottom:1px solid black"><td colspan="100%"></td></tr> -->
   
                <tr style="border-top:2px solid black;border-bottom:2px solid black;">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td style="text-align: right;">Total:</td>
                  <td><?php echo $grand_total; $grand_total=0; ?></td>
                </tr >
                
                

                </tbody>
                               <?php $i++; endforeach; }
  else{
    echo "<h3 style='text-align: center'>No Data Available</h3>";
  }  ?>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

 
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <!-- <div class="row no-print" style="margin:0px; padding: 0px;">
        <div class="col-xs-12">
          <a href="<?php echo base_url(); ?>Admin_c/invoice_view" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
         
        </div>
      </div> -->
    </section>
 <!--Delivere order Report -->
       <div class="row">
        <div class="col-xs-12">
           <div class="col-xs-12">
          <div class="col-xs-4" style="border:1px solid;">

            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size: 16px; font-weight: bold;">
                                    <i  aria-hidden="true"></i>BHATTI PHARMACY </h3>
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size: 16px; font-weight: bold;">
                                    <i  aria-hidden="true"></i> LAHORE </h3>
                                   
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size:12px;">
                                    <i  aria-hidden="true"></i> Ph: 0323-8881054 </h3>
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size:14px; font-weight: bold;">
                                    <i  aria-hidden="true"></i> Email: bhattipharacy@gmail.com </h3>
          </div>
          <div class="col-xs-6">
              <div class="">
                        <h3 style="margin-top:15px;margin-bottom:0; text-align: center; font-weight: bold; font-size:20px;">
                            <i  aria-hidden="true"></i>Delivered ORDER LEDGER REPORT</h3>
                        <!-- <h3 style="margin-top:0px;margin-bottom:0; text-align: center;  font-size:14px; font-weight: bold;">
                            <i  aria-hidden="true"></i>FROM: <?php echo  $start_date;?>  TO: <?php echo  $end_date;?></h3> -->
              </div>
          </div>
          <div class="col-xs-2">
                 <!-- <h3 style="margin-top:0px;margin-bottom:0; text-align: center; font-weight: bold; font-size:16px;">
                            <i  aria-hidden="true"></i> Address: Lahore</h3> -->
          </div>
        </div>
        </div>
        <!-- /.col -->
      </div>


            <div class="row" style="margin-top:1%">
        <div class="col-xs-12 table-responsive">
          <table class="table table-responsive" style="zoom:100%;" >
            <thead  style="background:black; color: white; border:2px solid black; ">
            <tr>
        <!--       <th>Code</th> -->
              <th style="border-bottom: 2px solid;">Order</th>
              <th style="border-bottom: 2px solid;">Delivery</th>
              <th style="border-bottom: 2px solid;">Item Description</th>
              <th style="border-bottom: 2px solid;">Unit</th>
              <th style="border-bottom: 2px solid;">Quantity</th>
              <th style="border-bottom: 2px solid;">Amount</th>
            </tr>
            </thead >
            <tbody>
                  <?php $grand_total=0; if (count($dev)) { $i=1; foreach($dev as $row):?>
                <tr >
                  <?php  $numbers = explode(',', $row->number); //print_r($numbers);?>
                  <td>
                    <br><br><br><br>
                    <?php foreach($numbers as $number) {
                          echo $number;?>
                          <br>
                    <?php } ?>
                  </td>
                  <?php $dates = explode(',', $row->date); ?>
                  <td>
                    <br><br><br><br>
                    <?php foreach($dates as $date) {
                          echo $date;?>
                          <br>
                    <?php } ?>
                  </td>

                  <?php $item_names = explode(',', $row->item_name); ?>
                  <td>
                    <?php echo $row->come_code?><br><?php echo $row->com_name; ?><br><?php echo $row->come_address1 ?><br>
                    <?php echo $row->com_address2 ?><br>
                    <?php foreach($item_names as $item_name) {
                          echo $item_name;?>
                          <br>
                    <?php } ?>
                  </td>
                  <?php $unit_prices = explode(',', $row->unit_price); ?>
                  <td>
                    <br><br><br><br>
                    <?php foreach($unit_prices as $unit_price) {
                          echo $unit_price;?>
                          <br>
                    <?php } ?>
                  </td> 
                  <?php $quantities = explode(',', $row->quantity); ?>
                  <td>
                    <br><br><br><br>
                    <?php foreach($quantities as $quantity) {
                          echo $quantity;?>
                          <br>
                    <?php } ?>
                  </td>   
                  <?php $totals = explode(',', $row->total); ?>
                  <td>
                    <br><br><br><br>
                    <?php foreach($totals as $total) {
                          echo $total; $grand_total+= $total?>
                          <br>
                    <?php } ?>
                  </td>   
                </tr >
              <!--  <tr style="border-bottom:1px solid black"><td colspan="100%"></td></tr> -->
   
                <tr style="border-top:2px solid black;border-bottom:2px solid black;">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td style="text-align: right;">Total:</td>
                  <td><?php echo $grand_total; $grand_total=0; ?></td>
                </tr >
                
                

                </tbody>
                               <?php $i++; endforeach; }
  else{
    echo "<h3 style='text-align: center'>No Data Available</h3>";
  }  ?>
          </table>
        </div>
        <!-- /.col -->
      </div>

    <!--Delivere order Report -->






    <!--Total Stock -->
      <div class="row">
        <div class="col-xs-12">
          <div class="col-xs-4" style="border:1px solid;">

            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size: 16px; font-weight: bold;">
                                    <i  aria-hidden="true"></i>BHATTI PHARMACY </h3>
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size: 16px; font-weight: bold;">
                                    <i  aria-hidden="true"></i> LAHORE </h3>
                                   
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size:12px;">
                                    <i  aria-hidden="true"></i> Ph: 0323-8881054 </h3>
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size:14px; font-weight: bold;">
                                    <i  aria-hidden="true"></i> Email: bhattipharacy@gmail.com </h3>
          </div>
          <div class="col-xs-6">
              <div class="">
                        <h3 style="margin-top:15px;margin-bottom:0; text-align: center; font-weight: bold; font-size:20px;">
                            <i  aria-hidden="true"></i>Total Stock Invoice</h3>
                       <!--  <h3 style="margin-top:0px;margin-bottom:0; text-align: center;  font-size:14px; font-weight: bold;">
                            <i  aria-hidden="true"></i>FROM: <?php echo  $start_date;?>  TO: <?php echo  $end_date;?></h3> -->
              </div>
          </div>
          <div class="col-xs-2">
                 <!-- <h3 style="margin-top:0px;margin-bottom:0; text-align: center; font-weight: bold; font-size:16px;">
                            <i  aria-hidden="true"></i> Address: Lahore</h3> -->
          </div>
        </div>
        <!-- /.col -->
     
      
   
      
    <!--   <input type="hidden" name="com_id" value="<?php echo $com_id; ?>"> -->
        <div class="col-xs-12">
          <table class="table" style="zoom:100%; margin-top: 20px;" >
            <thead style="background: black; color:white;">
            <tr style="border:2px solid black;">
                 <th style="border-bottom:3px solid;">#</th>
                   <!-- <th>Item Code</th> -->
                  <th>Item Name</th>
                  <th>Company</th>
                  <th>Qauntity</th>
                  <th>Rate</th>
                  <th>Balance</th>
                  
            </tr>
           </thead>
            <tbody>
                  <?php if (count($stock)) { $i=1; foreach($stock as $row):?>
                <tr style="border-bottom: 2px solid; border-left:2px solid; border-right:2px solid;">
                   <td><?php echo $i; ?></td>
                  <!-- <td><?php echo $row->item_code; ?></td> -->
                  <td><?php echo $row->item_name; ?></td>
                  <td><?php echo $row->company_name; ?></td>
                  <td><?php echo $row->quantity; ?></td>
                  <td><?php echo $row->rate; ?></td>
                  <td><?php echo $row->quantity * $row->rate;  ?></td>
                 
                  
                  
                </tr>

                </tbody>
                               <?php $i++; endforeach; }
  else{
    echo "<h3 style='text-align: center'>No Data Available</h3>";
  }  ?>
          </table>

<!-- 
        </div>
        /.col -->
      </div>
       </div>
    <!--Total Stock Ends-->



    <!-- /.content -->
    <div class="clearfix"></div>
    

  </div>
  <!-- /.content-wrapper -->


<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
</body>
</html>




