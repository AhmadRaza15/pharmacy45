
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
          <table class="table" style="zoom:100%; margin-top: 20px;" >
            <thead style="background: black; color:white;">
            <tr style="border-bottom:3px solid black;">
              <th>Sr No.</th>
              <th>Stock ID</th>
             <!--  <th>Category</th>
              <th>Brand</th> -->
              <th>Party Name</th>
              <th>Date</th>
              <th>Amount</th>
              <th>Paid</th>
              <th>Remaining</th>

              
            </tr>
           </thead>
            <tbody style="">
        

                  <?php if (count($daily)) { $i=1; foreach($daily as $row):?>
                  
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row->invoice_id; ?></td>
                  <td><?php echo $row->party_name; ?></td>
                  <td><?php echo $row->date;?></td>
                  <td><?php echo $row->total_amount;?></td>
                  <td><?php echo $row->paid;?></td>
                  <td><?php echo $row->remaining; ?></td>
           
                 <!--  <?php $balance= $row->total + $balance ?>
                  <?php $total += $balance ?> -->
                  
                  
                </tr>
                <?php $i++; endforeach; }
  else{
    echo "<h3 style='text-align: center'>No Data Available</h3>";
  }  ?>
                <!-- <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                    <!-- <b>Total: <?php echo $total; ?></b>  -->
                                    
                                    <!-- </td> -->
                <!-- </tr> --> 

                <!-- <tr>
                  <td colspan="3"><b>Total: <?php echo $total->total_amount; ?></b> </td>
                </tr> -->
                </tbody>
                               
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
