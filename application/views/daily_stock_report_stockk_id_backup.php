
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
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    font-size:12px;
}
th, td {
    padding: 0px;
    text-align: left;
}
   table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }
     
   

  </style>
</head>
<body onload="window.print();">




  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->

   <section class="invoice">
<div class="wrapper">

    <!-- Main content -->
   <div class="container">
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
                            <i  aria-hidden="true"></i> DAILY PURCHASE REPORT</h3>
                        <h3 style="margin-top:0px;margin-bottom:0; text-align: center;  font-size:14px; font-weight: bold;">
                           <!--  <i  aria-hidden="true"></i>FROM: <?php echo  $start_date;?>  TO: <?php echo  $end_date;?></h3> -->
              </div>
          </div>
          <div class="col-xs-2">
                 <!-- <h3 style="margin-top:0px;margin-bottom:0; text-align: center; font-weight: bold; font-size:16px;">
                            <i  aria-hidden="true"></i> Address: Lahore</h3> -->
          </div>
        </div>
        <!-- /.col -->
     
      
   
       <input type="hidden" name="com_id" value="<?php // echo $com_id; ?>">
      
        <div class="col-xs-12">
           <table class="table table-responsive" style="zoom:100%;" >
            <thead  style="background:black; color: white; border:2px solid black; ">
            <tr>
                  <!-- <th>Sr No.</th> -->
              <th>Stock ID</th>
             <!--  <th>Category</th>
              <th>Brand</th> -->
              <th>Item Description</th>
              <th>Date</th>
              <th>Amount</th>
              <th>Paid</th>
              <th>Remaining</th>
            </tr>
            </thead >
            <tbody>
                  <?php $CI=& get_instance(); ?>
                  <?php if (count($daily)) {  $i=1; foreach($daily as $row):?>
                    <?php $CI->load->model('Main_model');
                        $invoices =$this->Main_model->fetch_daily_stock_report_by_stock($row->invoice_id);
                    ?>
                    
                    <?php $grand_total=0;  $i=1; foreach($invoices as $invoice):?>
                    <tr>
                      <td><?php if($i==1){?><br><br><br><?php } ?><?php echo $invoice->stock_id; ?></td>
                       <td><?php if($i==1){?><br><br><br><?php } ?><?php echo $invoice->date; ?></td>
                      <td>
                      <?php if($i==1){?>
                        <?php echo $invoice->party_code?><br>
                        <?php echo $invoice->party_name; ?><br>
                        <?php echo $invoice->address_1 ?><br>
                      <?php } ?>
                      <?php echo $invoice->item_name; ?>
                      </td>
                      <td><?php if($i==1){?><br><br><br><?php } ?><?php echo $invoice->rate; ?></td>
                      <td><?php if($i==1){?><br><br><br><?php } ?><?php echo $invoice->quantity; ?></td>
                      <td><?php if($i==1){?><br><br><br><?php } ?><?php echo $invoice->balance; ?></td>
                    </tr>
                    <?php $grand_total+= $invoice->balance;?> 
                    <?php $i++; endforeach;?> 
                <tr style="border-top:2px solid black;border-bottom:2px solid black;">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td style="text-align: right;">Total:</td>
                  <td><?php echo $grand_total; $grand_total=0; ?></td>
                </tr >
                
                

                </tbody>
                               <?php endforeach; }
  else{
    echo "<h3 style='text-align: center'>No Data Available</h3>";
  }  ?>
          </table>
        </div>
        <!-- /.col -->
      </div>
       </div>
     </div>


      <!-- /.row -->

 
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <!-- <div class="row no-print" style="margin:0px; padding: 0px;">
        <div class="col-xs-12">
          <a href="<?php //echo base_url(); ?>Admin_c/order_pdf/" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
         
        </div>
      </div> -->
    </section>
    <!-- /.content -->
   
    

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
