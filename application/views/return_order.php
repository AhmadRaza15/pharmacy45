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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini" >

  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="container" style="width:100%; margin:0px; padding:0px;">
    <!-- Content Header (Page header) -->
   
     <div class="box box-info" >
            <div class="box-header with-border">
              <h3 class="box-title">Return Order</h3>
              <a href="<?php echo base_url('Admin_c')?>" class="pull-right"><button class="btn btn-primary btn-sm" style="margin-left: 20px;">Home</button></a> 

              <a href="<?php echo base_url('Admin_c/view_order')?>" class="pull-right"><button class="btn btn-primary btn-sm">View Orders</button></a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <?php if($this->session->flashdata('error')!=""){?>
                                    <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                     <strong>Congratulation!</strong> <?php echo $this->session->flashdata('error');?>
                                    </div>
                            <?php };?>
            <form class="form-horizontal" style="margin:0px; padding:0px;"   action='<?php echo base_url(); ?>Admin_c/save_data_return_order' method="post">
            <div class="box-body" style="padding:0px; margin-left:0px;">

                 <div class="form-group" >
               <!--    <label for="inputEmail3" class="col-sm-2 control-label" >Order ID</label>
                  <div class="col-sm-2">
                     <input type="text" name="number" class="form-control input-sm num" value="<?php echo $order_invoice_id; ?>" readonly>
                  </div> -->
                
                  <label for="inputEmail3" class="col-sm-1 control-label" style="margin-left:115px;">Date </label>
                  <div class="col-sm-2">
                     <input type="text" name="date" value="<?php echo date('D. M d. Y'); ?>" class="form-control input-sm"  readonly>
                  </div>
                </div>

                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-2 control-label" >Order ID</label>
                  <div class="col-sm-2">
                     <input type="text" name="number" class="form-control input-sm num" value="<?php echo $order_invoice_id; ?>" readonly>
                  </div>
                
                 <!--  <label for="inputEmail3" class="col-sm-1 control-label" style="margin-left:425px;">Date </label>
                  <div class="col-sm-2">
                     <input type="text" name="date" value="<?php echo date('D. M d. Y'); ?>" class="form-control input-sm"  readonly>
                  </div> -->
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Party</label>
                  <div class="col-sm-4">
                    <select class="form-control party_id" name="party" style="width:306px;" required="">
               
                    <option>Select Party Name</option>
                    <?php foreach($res as $row) { ?>
                    <option value="<?php echo $row->party_id; ?>"><?php echo $row->party_name; ?></option>
                   <?php } ?>
                  </select>
                  <!-- <input type="hidden" name="item_id" value="<?php echo $row->party_id; ?>"> -->
                  <input type="hidden" name="part_id" class="party_name">
                  </div>

                  <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                  <div class="col-sm-4">
                    <input type="text" name="debit" class="form-control debit" readonly="readonly" style="width:394px; "  >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Contact</label>
                  <div class="col-sm-4">
                    <input type="text" name="phone" class="form-control phone" readonly="readonly"  style="width:306px;" readonly="" >
                  </div>
                 <!--  <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-4">
                    <input type="text" name="desc" class="form-control" value=""   style="width:395px;" required="" >
                  </div> -->
                     <label for="inputEmail3" class="col-sm-2 control-label">Party Balance</label>
                  <div class="col-sm-4">
                    <input type="text" name="pre_balance" class="form-control pre" readonly="readonly"  style="width:394px;" readonly="" >
                  </div>
                  
                </div>
                 <!-- <div class="col-sm-5"></div> -->
                  <div class="form-group">
                <!--   <div class="col-sm-4"></div>
                  <div class="col-sm-3"></div> -->
                  
                  <label class="control-label col-sm-2">Stock In Hand</label>
                   <div class="col-sm-3">
                    <input type="text" name="stock_in_hand" class="form-control pull-right stock_in_hand" readonly="readonly"  style="width:314px; margin-left: 100px;" readonly="" >
                  </div>
               <!--    <label for="inputEmail3" class="col-sm-2 control-label">Party Balance</label>
                  <div class="col-sm-4">
                    <input type="text" name="pre_balance" class="form-control pre" readonly="readonly"  style="width:306px;" readonly="" >
                  </div> -->
               <!--    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-4">
                    <input type="text" name="desc" class="form-control" value=""   style="width:395px;" required="" >
                  </div> -->
                  
                </div>
             
                <br><br><br>
            <table style="margin-top:48px;"  width="100%" class="table table-responsive table-condenced" border="1">
<thead style="display:block;background:#0097AC;">
<tr style="display:table;table-layout:fixed;">
<td width="11%" style="vertical-align:middle;">
<div class="form-group" style="padding:0;margin:0;">
<label>Item Name</label>
</div>
</td>

<td class="text-center" width="7.5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Quantity Ordered</label></td>
<td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Unit Price</label></td>
<td class="text-center"  width="2%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Total Price</label></td>
<!-- <td width="1%" class="text-center" style="padding-left:9px;vertical-align:middle;background:#000;border:0;color:#fff;"> -->
<!-- <i class="fa fa-star-o" style="position:absolute;top:30px;right:4px;"> </i> -->

</tr>
</thead>

<tbody style="background:#fff;overflow-y:scroll;height:195px;overflow-x:hidden;display:block;margin-top:5px;">

</tbody>

</table>
               
                  
<div class="col-md-12" style="border-bottom:2px solid;border-left:2px solid;border-right:2px solid;padding:0; margin:0px;background:#0097AC;">
<div class="col-md-12" style="height:85px;">
<div class="form-group"> 
<div class="col-md-4" style="margin-top:20px;"> <button type="button" class="btn btn-success add_row" disabled="">Add Row</button> </div>
<div class="col-md-8" style="margin-top:0px;">
<!--   <div class="col-md-2"><label>Discount(In %)</label>
<input type="text" name="discount" class="form-control discount" placeholder="Discount"></div> -->
<div class="col-md-4"><label>Total Price</label>
<input type="text" name="tt_P" class="form-control t_price" placeholder="Total Price" ></div>
<!-- <div class="col-md-2"><label>Paid</label>
<input type="text" name="pt_P" class="form-control t_paid" placeholder="Paid" id="t_paid">
</div> -->
<!-- <div class="col-md-2" >
  <label>Remaining</label>
<input type="text" name="rt_P" class="form-control t_remain" placeholder="Remaining" readonly="">
</div> -->
<!-- <div class="col-md-3">
<input type="text" name="t_P" class="form-control t_paid" placeholder="Paid">
</div>
<div class="col-md-3">
<input type="text" name="t_P" class="form-control t_remain" placeholder="Remaining">
</div>  -->
<div class="col-md-2" style="margin-top: 25px; margin-left:400px;"> 
<button type="submit" class="btn btn-success pull-right btn_save">Save</button>
</div>
</div>
</div>
</div>
<!-- <div class="form-group"> 
<div class="col-md-6"> </div>
<div class="col-md-6"> 
<input type="text" name="t_P" class="form-control t_p">
</div>
</div> -->
</div>          
               
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Total Price</label>
                  <div class="col-sm-6">
                    <input type="text" name="com_code" class="form-control" id="inputEmail3" style="width:506px;" >
                  </div>
                  
                </div> -->
              
               
              </div>
              <!-- /.box-body -->
            
              <!-- /.box-footer -->
            </form>
          </div>

    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->
 <!--  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="<?php echo base_url(); ?>assets/https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer> -->

  

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
<script src="<?php echo base_url(); ?>assets/dist/js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script type="text/javascript">
    $(document).ready(function(){
    // alert('ajhfgy');
    $('.com_id').bind('keyup , change',function () {
        var com_id=$(this).val();
        if(com_id!=""){
        $.ajax({
                        method   :  "POST",
                        url      :  "<?php echo base_url(); ?>Admin_c/get_company_detail",
                        dataType :  "JSON",
                        data     :  {com_id:com_id},
                        success  :  function (data) {
                          // alert(company_name);
                             $('.company_name').val(data.data.com_id);
                            //$('.company_name').val(data.data.com_name);
$('.com_id').attr('disabled', true);
                          
                            $('.phone').val(data.data.phone);
                            $('.debit').val(data.data.come_address1);
                            // $('.credit').html(data.customer_name);
                            $('.credit').val(data.data1.remaining);
                            $(".add_row").prop('disabled',false);
                            $(".add_row").attr('disabled',false);
                        },

        });
        }
          else
        {
          alert("Select Company Please");
        }
        
    });

   

  });

</script> -->
<script type="text/javascript"> 
    var party = [];
    //$(document).ready(function(){
    
    // alert('ajhfgy');
    $('.party_id').bind('keyup , change',function () {
        var party_id=$(this).val();
        party.push(party_id);
        //alert(party_id);
        if(party_id!=""){
        $.ajax({
                        method   :  "POST",
                        url      :  "<?php echo base_url(); ?>Admin_c/get_party_details",
                        dataType :  "JSON",
                        data     :  {party_id:party_id},
                        success  :  function (data) {
                             //alert(data);
                             // $('.party_id').val(data.party_id);
                             // $('.party_id').attr('disabled', true);
                          
                            $('.phone').val(data.phone);
                            $('.debit').val(data.address_1);

                           
                            $(".add_row").prop('disabled',false);
                            $(".add_row").attr('disabled',false);
                        }

        });
        }
          else
        {
          alert("Select Party Please");
        }
        
    });

   

  //});

</script>

<script>

$(document).ready(function() {
   

$('.select2').select2();

date_input.datepicker({
format: 'mm/dd/yyyy',
container: container,
todayHighlight: true,
autoclose: true,
});
      
    




            
});
                
</script>


<script type="text/javascript">
   $(document).ready(function() {
    var i = 1;
    
    $('.add_row').click(function(){
      var com_id=$('.party_id').val();
      $('.party_id').prop('disabled',true);
      // var i=0;
      //  alert(i);
      //alert(com_id);
      $.ajax({
                      url     :   '<?php echo base_url(); ?>Admin_c/getRows/',
                      type    :   'POST',
                      dataType:   'JSON',
                      data    :   {i:i++,com_id:com_id},
                      success : function(data){
                          //alert(da);
                          $('.table').append(data.table); 
                          $('.q_search'+data.i).keyup(function(){
                                      var search = $(this).val();
                                      if(search!=""){
                                        $.ajax({
                                          url : '<?php echo site_url("Admin_c/load_search_list"); ?>',
                                          type : 'POST',
                                          data : {com_id:com_id,search:search,i:data.i},
                                          success : function(d){
                                            $('.search_list'+data.i).html(d);
                                            $('.get_search'+data.i).click(function(){
                                                var id = $(this).data('item-id');
                                                // alert(id);
                                                $.ajax({
                                                  url : '<?php echo site_url("Admin_c/getPrice"); ?>',
                                                  type : 'POST',
                                                  data : {id:id,com_id:com_id},
                                                  dataType : 'JSON',
                                                  success: function(price){
                                                    console.log(price);
                                                    //alert(price);
                                                    $('.u_p'+data.i).val(price.sale_rate);
                                                  }
                                                });
                                                $.ajax({
                                                  url:"<?php echo base_url(); ?>Admin_c/fetch_stock_in_hand",
                                                  type:"POST",
                                                  data:{id:id,com_id:com_id},
                                                  dataType:"JSON",
                                                  success:function(stock){
                                                    $('.stock_in_hand').val(stock.stock_total);
                                                  }
                                                });
                                                $('.q_search'+data.i).val($(this).text());
                                                $('.q_search_item_ids'+data.i).val($(this).attr("data-id"));
                                                //alert(w);
                                                
                                                $('.search_list'+data.i).html('');
                                              });
                                          }
                                        });
                                    }else{
                                      $('.search_list'+data.i).html('');
                                    }
                                  });
                          $('.q_order' +data.i+', .u_p' + data.i).keyup(function(){
                                       var sum = 0;
                                       var up  = 0;
                                       var q_order = $('.q_order' +data.i).val(); 
                                       var u_price = $('.u_p' +data.i).val(); 
                                       $('.t_p' + data.i).val(q_order * u_price);
                                       $('.con').each(function(){
                                        sum += +$(this).val();
                                       
                                       });   
                                      $('.t_price').val(sum);
                                       
                                       $('.up').each(function(){
                                        up += +$(this).val();
                                       
                                       }); 
                                        
                                       // $('.t_paid').val(up);

                                       // var t = $('.t_price').val();
                                       // var p = $('.t_paid').val();
                                       // $('.t_remain').val(t - p);

                                        $('.t_paid').keyup(function(){
                                       var t = $('.t_price').val();
                                       var p = $('.t_paid').val();
                                       $('.t_remain').val(t - p);
                                     });

                                  });
                          
                      }
                }); 
           });           
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
  $('.discount').change(function(){
                                       var all = $('.t_price').val();
                                       //alert(all);
                                       var discount = $('.discount').val();
                                       var dis=(all * discount)/100;
                                       if (dis) {
                                        $('.t_price').val(all - dis);
                                        $('.discount').attr('readonly',true);
                                       }
                                       
                                     }); 
  });
 
</script>
</body>
</html>
<script type="text/javascript">
  //alert(7);
   $(document).ready(function(){
   $('.party_id').bind('keyup , change',function(){
   var party_id=$('.party_id').val();
    //alert(party_id);
   $.ajax({
    url:"<?php echo base_url(); ?>Admin_c/fecth_party_remain_balance",
    method:"POST",
    dataType:"JSON",
    data:{party_id:party_id},
    success:function(data){
     $('.pre').val(data.data1.remain); 
    },

   });
   });
   });
</script>