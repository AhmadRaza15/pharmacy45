<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pharma</title>
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
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Header file -->
  <?php $this->load->view('header_file'); ?>

  <!-- Navbar -->
  <?php $this->load->view('nav'); ?>
  
   
  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
            
           <section class="content-header">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-body " style="background-color: white;">
                            <div class="well"><h3 style="margin-top:0;margin-bottom:0; text-align: center;">
                                    <i  aria-hidden="true"></i> View Order List </h3>
                            </div>
                            <!-- <a href="<?php echo base_url(); ?>Admin_dashboard/newuser" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Add User
                            </a> --> <br>

            <div class="box-body">
              <a href="<?php echo base_url(); ?>Admin_c/add_order" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Add Order
                            </a>
              <a href="<?php echo base_url(); ?>Admin_c/invoice/0" target="_blank" class="btn btn-primary col-md-offset-7 " ><i class="fa fa-print"></i>Pending Orders</a>
              <a href="<?php echo base_url(); ?>Admin_c/invoice/1" target="_blank" class="btn btn-primary pull-right" ><i class="fa fa-print"></i>Delivered Orders</a>
                             <br><br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  
                  <th>Order ID</th>
                  <th>Company Name</th>
               <!--    <th>Item Name</th> -->
                 <!--  <th>Quantity</th>
                  <th>Cost Rate</th>
                  <th>Total Amount</th> -->
                  <!-- <th>Status</th> -->
                 <!--  <th>Delivery Date</th> -->
                  <th style="text-align:center;">Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php if (count($res)) { $i=1; foreach($res as $row):?>
                <tr>
                  <td><?php echo $i; ?></td>
                  
                  <td><?php echo $row->number; ?></td>
                  <td><?php echo $row->com_name; ?></td>
                  <!-- <td><?php echo $row->item_name; ?></td> -->
                   
                <!--   <td><?php echo $row->quantity ?></td>
                  <td><?php echo $row->unit_price?></td>
                  <td><?php echo $row->total; ?></td> -->
                 <!--  <td><?php if ($row->status==0) {
                    echo "Pending";
                  }
                  else{
                    echo "Deliver";
                  }
                  ?></td> -->
<!--                   <td><?php echo $row->deliver_date; ?></td> -->
                  <td style="text-align: center;" >
                                <a href="<?php echo base_url(); ?>Admin_c/sale_invoice/<?php echo $row->number; ?>"><button class="btn btn-info" type="submit" ><i class="fa fa-pencil"> Edit Sale Invoice </i></button></a> <!-- <a href="" ><button class="btn btn-primary" type="submit" ><i class="fa fa-pencil"> Edit</i></button></a>  --><a href="<?php ?>" class="del"><button class="btn btn-danger" type="submit" ><i class="fa fa-trash"> Delete</i></button></a>
                                
                                <div class="modal fade" id="myModal<?php echo $row->id; ?>" role="dialog">
                                    <div class="modal-dialog">
                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Status Update</h4>
                                            </div>
                                            
                                              
                                                <div class="modal-body">
                                                
                                                    <div class="form-group">
                                                      <select class="form-control status" required="" >
                                                        <option value="" selected="" disabled="">Please Select Status</option>
                                                         <option value="0">Pending</option>
                                                         <option value="1">Delivered</option>
                                                      </select>
                                                    </div>
                                                    <div>
                                                      <input type="date" name="" class="form-control deliver_date" value="<?php echo $row->deliver_date; ?>">
                                                    </div>
                                                  <!--   <div class="date hidden">
                                                      <input type="date" class="deliver_date" value="" name="deliver_date">
                                                    </div> -->

                                                </div>


                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary " onclick="confirm_status(<?=$row->id?>)">Update</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            
                                        </div>  
                                    </div>
                                </div>

                                </td>
                  
                </tr>

                </tbody>
                               <?php $i++; endforeach; }
  else{
    echo "<h3 style='text-align: center'>No Data Available</h3>";
  }  ?>
               <!--  <tfoot>
                <tr>
                   <th>#</th>
                   <th>Number</th>
                  <th>Company Name</th>
                  <th>Item Name</th>
                  <th>Total Amount</th>                
                </tr>
                </tfoot> -->
 
              </table>
            </div>
                                 </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">



            </div>
            <!-- /.row -->


            <div class="row">

                <div class="col-md-12">


                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong>Copyright &copy;<a href="<?php echo base_url(); ?>assets/https://adminlte.io">Aun Solutions</a>.</strong> All rights
    reserved.
  </footer>

  </div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/jquery.js"></script>
 -->

</body>
</html>

<!-- <script type="text/javascript">
  $(document).ready(function(){
  $('.status').mouseleave(function(){
     var status = $('.status').val();
    // alert(status);
      if (status==1) {
          //$('.date').hide();
        $(".date").removeClass('hidden').show();
          // d_date= $('.deliver_date').val();
         }
         else{
            $(".date").hide();
         }
    });     
  });
</script> -->
<script type="text/javascript">
  function confirm_status(id){
         var id = id;
         var status = $('.status').val();
         if (status!= null) {
         var d_date = $(".deliver_date").val();
         //if (status==0) {d_date="";}
         // alert(status);
         //  alert(d_date);
         //  alert(id);
         
         $.ajax({
               type : "POST",
               url : "<?php echo base_url('')?>/Admin_c/update_status",
               data : { id:id,status:status,d_date:d_date },
               success: function(result){
                      if (result==1) {location.reload();}
               }
            });
  }
  else
    {
     alert("PLEASE SELECT STATUS");
    }
}

</script>
