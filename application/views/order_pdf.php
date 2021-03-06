
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Show Order Report</title>
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
    <div class="container" style="width:100%; margin: 0px; padding: 0px;">
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
           <div class="col-xs-12">
          <div class="col-xs-4" style="border:1px solid;">

            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size: 16px; font-weight: bold;">
                                    <i  aria-hidden="true"></i>EAGLE HOMEO PHARMA </h3>
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size: 16px; font-weight: bold;">
                                    <i  aria-hidden="true"></i> SAHIWAL </h3>
                                   
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size:12px;">
                                    <i  aria-hidden="true"></i> Ph: 0323-8881054 </h3>
            <h3 style="margin-top:0;margin-bottom:0; text-align: center; font-size:14px; font-weight: bold;">
                                    <i  aria-hidden="true"></i> Email: bhattipharacy@gmail.com </h3>
          </div>
          <div class="col-xs-6">
              <div class="">
                        <h3 style="margin-top:15px;margin-bottom:0; text-align: center; font-weight: bold; font-size:20px;">
                            <i  aria-hidden="true"></i>ORDER REPORT</h3>
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
                  <?php $CI=& get_instance(); ?>
                  <?php if (count($order)) {  $i=1; foreach($order as $row):?>
                    <?php $CI->load->model('Main_model');
                        $invoices =$this->Main_model->fecth_ivoices_by_number_order_pdf($row->invoice_id);
                    ?>
                    
                    <?php $grand_total=0;  $i=1; foreach($invoices as $invoice):?>
                    <tr>
                      <td><?php if($i==1){?><br><br><br><?php } ?><?php echo $invoice->number; ?></td>
                      <td><?php if($i==1){?><br><br><br><?php } ?><?php echo $invoice->date; ?></td>
                      <td>
                      <?php if($i==1){?>
                        <?php echo $invoice->party_code?><br>
                        <?php echo $invoice->party_name; ?><br>
                        <?php echo $invoice->address_1 ?><br>
                      <?php } ?>
                      <?php echo $invoice->item_name; ?>
                      </td>
                      <td><?php if($i==1){?><br><br><br><?php } ?><?php echo $invoice->unit_price; ?></td>
                      <td><?php if($i==1){?><br><br><br><?php } ?><?php echo $invoice->quantity; ?></td>
                      <td><?php if($i==1){?><br><br><br><?php } ?><?php echo $invoice->total; ?></td>
                    </tr>
                    <?php $grand_total+= $invoice->total;?> 
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
      <!-- /.row -->

 
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <!-- <div class="row no-print" style="margin:0px; padding: 0px;">
        <div class="col-xs-12">
          <a href="<?php echo base_url(); ?>Admin_c/invoice_view" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Print</a>
         
        </div>
      </div> -->
    </section>

   
  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) window.print();-->

  
   
    

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
