
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trial Balance Report</title>
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
  
    <!-- Content Header (Page header) window.print();-->

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
                            <i  aria-hidden="true"></i> TRIAL DEBIT BALANCE REPORT</h3>
                      <!--   <h3 style="margin-top:0px;margin-bottom:0; text-align: center;  font-size:14px; font-weight: bold;">
                            <i  aria-hidden="true"></i>FROM: <?php echo  $start_date;?>  TO: <?php echo  $end_date;?></h3> -->
              </div>
          </div>
          <div class="col-xs-2">
                 <!-- <h3 style="margin-top:0px;margin-bottom:0; text-align: center; font-weight: bold; font-size:16px;">
                            <i  aria-hidden="true"></i> Address: Lahore</h3> -->
          </div>
        </div>
        <!-- /.col -->
     
      
   
      
     <!--  <input type="hidden" name="com_id" value="<?php echo $com_id; ?>"> -->
        <div class="col-xs-12">
          <table class="table" style="zoom:100%; margin-top: 20px;" >
            <thead style="background: black; color:white;">
            <tr style="border-bottom:3px solid black;">
              <th>Code</th>
              <th>Name</th>
              <th>Address</th>  
              <th>Phone</th>
              <th>Debit</th>
            </tr>
           </thead>
            <tbody style="">
               
                <tr >
                  <?php foreach($region as $res) { ?>
                  <td style="background: grey;"><?php echo $res->region_code; ?></td>
                  <td  style="background: grey;" colspan="4"><?php echo $res->region_name; ?></td>
                

                 </tr>
                 <?php $debit=0; ?>
                 <?php if (count($company)) { $i=2; foreach($company as $row):?>

                 <?php if($res->region_code == $row->region_party_code ) { ?>
                <tr>
                 <!--  <td><?php echo $i; ?></td> -->
                 <td><?php echo ($res->region_code. '-' . $row->party_code); ?></td>
                 <td><?php echo  $row->party_name; ?></td>
                  <td><?php echo $row->address_1.$row->address_2; ?></td>
                  <td><?php echo $row->phone; ?></td>
                  <td><?php if($row->remaining > 0 ) { echo $row->remaining; } else{ echo "0"; }?></td>
                  <?php if ($row->remaining > 0) {$debit += $row->remaining;}  ?> 
                <!-- </tr> -->
                <?php } ?>
                 <?php $i++; endforeach; } ?>
                 
                  <?php if (count($party)) { $i=2; foreach($party as $row):?>
                 <?php if($res->region_code == $row->region_party_code ) { ?>
                <!-- <tr> -->
                 <!--  <td><?php echo $i; ?></td> -->
               <!--  <td><?php echo ($res->region_code. '-' . $row->party_code); ?></td>
                 <td><?php echo  $row->party_name; ?></td>
                  <td><?php echo $row->address_1; ?></td>
                  <td><?php echo $row->phone; ?></td>
                  <td><?php if($row->remaining > 0 ) { echo $row->remaining; } else { echo "0"; }?></td> -->
                   <?php if ($row->remaining > 0) {$debit += $row->remaining;} ?>  
                <!-- </tr> -->
                <?php } ?>
                 <?php $i++; endforeach; } ?>
                 <tr>
                  <td colspan="4"></td>
                   <td  ><?php echo $debit; ?></td>
                 </tr>
                 <?php } ?>
               

                </tbody>
                               
          </table>

<!-- 
        </div>
         /.col -->
      </div>
       </div>
     </div>

    </section>
    <!-- /.content -->
   
    

</div>
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
