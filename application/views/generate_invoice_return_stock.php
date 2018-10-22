
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>--</title>
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
          <div class="col-xs-3">
              <div class="">
                        <h3 style="margin-top:15px;margin-bottom:0; text-align: center; font-weight: bold; font-size:20px;">
                            <i  aria-hidden="true"></i>ADDED STOCK REPORT</h3>
                        <h3 style="margin-top:0px;margin-bottom:0; text-align: center;  font-size:14px; font-weight: bold;">
                            <i  aria-hidden="true"></i><?php echo $result[0]->added_stock_date;?></h3>
              </div>
          </div>
          <div class="col-xs-5" style="border:1px solid;">
            <h3 style="margin-top:0;margin-bottom:0; text-align: left; font-size: 14px;">
                                    <i  aria-hidden="true"></i><b>INVOICE ID:</b>   <?php echo $billing->invoice_id?></h3>
            <h3 style="margin-top:0;margin-bottom:0; text-align: left; font-size: 14px; ">
                                    <i  aria-hidden="true"></i><b>COMPANY NAME:</b> <?php echo $billing->party_name?> </h3>
            <h3 style="margin-top:0px;margin-bottom:0; text-align: left; font-size:14px;">
                            <i  aria-hidden="true"></i> <b>COMAPNY PHONE:</b> <?php echo $billing->phone?></h3>
            <h3 style="margin-top:0;margin-bottom:0; text-align: left; font-size: 14px; ">
                                    <i  aria-hidden="true"></i><b>ADDRESS:</b> <?php echo $billing->address_1?></h3>
            <!-- <h3 style="margin-top:0;margin-bottom:0; text-align: left; font-size: 14px;">
                                    <i  aria-hidden="true"></i><b>REMAINING AMOUNT:</b> <?php echo $billing->remaining?> </h3> -->
             
          </div>
        </div>
        <!-- /.col -->
     
      
   
      
      
        <div class="col-xs-12">
          <table class="table" style="zoom:100%; margin-top: 20px;" >
            <thead style="background: black; color:white;">
            <tr style="border-bottom:3px solid black;">
              <th>Sr No.</th>
              <!-- <th>Inv No.</th> -->
              <th>Item Name</th>
              <th>Stock Add Date</th>        
              <th>Description</th>
              <th>Qty</th>
              <th>Unit</th>
              <th>Rate</th>
              <th>Balance</th>
              
            </tr>
           </thead>
            <tbody style="">
                

                  <?php if (count($result)) { $i=1; foreach($result as $row):?>
                  
                <tr>
                  <td><?php echo $i; ?></td>
                  <!-- <td><?php echo $row->stock_id?></td> -->
                  <td><?php echo $row->item_name; ?></td>
                  <td><?php echo $row->added_stock_date; ?></td> 
                   <td><?php echo $row->desc; ?></td>
                  <td><?php echo (-1) * $row->quantity;?></td>
                   <td><?php echo $row->unit; ?></td>
                  <td><?php echo $row->rate; ?></td>
                  <td><?php echo (-1) * $row->balance; ?></td>
                  <!-- <?php $balance= $row->total + $balance ?>
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
                                    
                                    <!-- </td>
                </tr> -->

                <!-- <tr>
                  <td colspan="3"><b>Total: <?php echo $total->total_amount; ?></b> </td>
                </tr> -->
                </tbody>
                               
          </table>
        </div>
          <div class="col-xs-12">
          <table class="table" style="zoom:100%; margin-top: 20px;" >
            <thead style="background: black; color:white;">
            <tr style="border-bottom:3px solid black;">
              <th>Total Amount</th>
              <th>Paid</th>
              <th>Remaining</th>
              
            </tr>
           </thead>
            <tbody style="">
                

                 
                <tr>
                  <td><?php echo (-1) * $billing->total_amount?></td>
                  <td><?php echo (-1) * $billing->paid?></td>
                  <td><?php echo (-1) * $billing->remaining?></td>
      
                  
                  
                </tr>
                
               
                </tbody>
                               
          </table>
                     
        </div>
        <!-- /.col -->
      </div>
       </div>
     </div>


     <a href="<?php echo base_url('Admin_c/add_stock')?>" class="pull-right" ><button style="margin-right:70px; " class="btn btn-primary btn-sm"> Generate New Stock</button></a>
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
<script type="text/javascript">
  (function (global) { 

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {            
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }

})(window);
</script>