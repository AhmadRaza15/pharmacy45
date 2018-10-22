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

    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">
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
            <div class="box-header with-border well">
              <h3 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order Booking</h3>
              <a href="<?php echo base_url('Admin_c')?>" class="pull-right"><button class="btn btn-primary btn-sm" style="margin-left: 20px;">Home</button></a> 

              <a href="<?php echo base_url('Admin_c/view_order')?>" class="pull-right"><button class="btn btn-primary btn-sm">View Orders</button></a>
            </div>
           
             <?php if($this->session->flashdata('error')!=""){?>
                                    <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                     <strong>Congratulation!</strong> <?php echo $this->session->flashdata('error');?>
                                    </div>
                            <?php };?>
            <form class="form-horizontal" style="margin:0px; padding:0px;"   action='<?php echo base_url(); ?>Admin_c/save_data' method="post">
            <div class="box-body" style="padding:0px; margin-left:0px;">
            

             <div class="box-body">
                <div class="row">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-1 control-label" >Date </label>
                  <div class="col-sm-2">
                    <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                  <input type="text" name="date" class="form-control pull-right input-sm" id="datepicker2" value="<?php echo date('m/d/Y'); ?>" autocomplete="off" >
                </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-1 control-label" >Order No</label>
                  <div class="col-sm-2">
                     <input type="text" name="number" class="form-control input-sm num" value="<?php echo $order_invoice_id; ?>" readonly>
                  </div>
                 
         <!--          <div class="form-group"> -->
                 
               <!--  </div>
                 -->
                  
                </div></div>
              <div class="row">
               <div class="form-group" >
                  <label for="inputEmail3" class="col-sm-1 control-label" >Party Code</label>
                  <div class="col-sm-2">
                     <input type="text" name="code" class="form-control input-sm c" autocomplete="off" >
                  </div>
                </div>
      
              </div>
            <!--   </div> -->
                 <div class="row">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label " >Party</label>
                  <div class="col-sm-3">
                    <select class="form-control party_id"  name="p"   required="" >
               
                    <option value=""   id="opt">Select Party Name</option>
                    <?php foreach($res as $row) { ?>
                    <option value="<?php echo $row->party_id?>"><?php echo $row->party_name.' '.$row->address_1.' '.$row->address_2;?></option>
                   <?php } ?>
                  </select>
                  <input type="hidden" name="com_name" class="company_name">
                  </div>
                 <!--  <div class="col-sm-2"></div>

                  <label for="inputEmail3" class="col-sm-1 control-label">Code</label>
                  <div class="col-sm-3">
                    <input type="text" name="com_code" class="form-control code"  readonly >
                  </div> -->
                </div> 
              </div>
            <!--     <input type="hidden" name="company_id" class="form-control company_id"><br> -->
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Select Item Name</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="company_name" style="width:506px;">
                   
                    <option value="" required="" selected="">Select Item Name</option>
                    <?php foreach($show as $row) { ?>
                    <option value="<?php echo $row->item_name?>"><?php echo $row->item_name?></option>
                   <?php } ?>
                  </select>
                  </div>

                </div> -->
                  <div class="row">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label" >Contact</label>
                  <div class="col-sm-3">
                    <input type="text" name="phone" class="form-control phone input-sm"   readonly>
                  </div>
                </div>
                 </div>

                 <div class="row">
                  <div class="form-group">
                   <label for="inputEmail3" class="col-sm-1 control-label credit">Balance</label>
                  <div class="col-sm-3">
                    <input type="text" name="pre_balance" class="form-control pre input-sm"   readonly="" >
                  </div>
                </div>
                 </div>

                  
                 </div>
             
                <br><br><br>
            <table style="margin-top:08px;"  width="100%" class="table table-responsive table-condenced" border="1">
<thead style="display:block;background:#0097AC;">
<tr style="display:table;table-layout:fixed;">
<td width="7%" style="vertical-align:middle;">
<div class="form-group" style="padding:0;margin:0;">
<label>Item Description</label>
</div>
</td>
<td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Packing</label></td>
<td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Particular</label></td>
<td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Quantity Ordered</label></td>
<td class="text-center" width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Unit Price</label></td>
<td class="text-center"  width="5%" style="vertical-align: middle;padding-top:0;padding-bottom:0;"><label>Total Price</label></td>
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
<div class="col-md-4" style="margin-top:20px;"> <button type="button" class="btn btn-success add_row" >Add Row</button> </div>
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
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- <script src="<?php // echo base_url(); ?>assets/dist/js/jquery.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
</body>
</html>

<script type="text/javascript">

  
    $(document).ready(function(){
    $('#datepicker').datepicker({
      autoclose: true
    })
     $('#datepicker2').datepicker({
      autoclose: true
    })

    });
  </script>
<script type="text/javascript"> 
    

    $(document).ready(function(){

    
    // alert('ajhfgy');
    $('.party_id').bind('keyup , change',function () {
        var party_id=$(this).val();
        //party.push(party_id);
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
                            //$('.debit').val(data.address_1);
                            $('.c').val(data.party_code);

                           
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
  });
</script>

<script type="text/javascript">

$(document).ready(function(){


    $('select').select2();
    var i = 1;
    
    $('.add_row').click(function(){

      var com_id=$('.party_id').val();
      //$( ".party_id" ).prop( "disabled", true );
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
                          $('.q_order' +data.i+', .u_p' +data.i).keyup(function(){
                            // alert('qq');
                                       var sum = 0;
                                       var up  = 0;
                                       var q_order = $('.q_order' +data.i).val(); 
                                       var u_price = $('.u_p' +data.i).val(); 
                                        //alert(q_order);
                                       $('.t_p' +data.i).val(q_order * u_price);
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

                                     //   $('.t_paid').keyup(function(){
                                     //   var t = $('.t_price').val();
                                     //   var p = $('.t_paid').val();
                                     //   $('.t_remain').val(t - p);
                                     // });

                                  });
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
                                                    $('.u_p'+data.i).val(price.sale);
                                                    $('.packing'+data.i).val(price.packing_unit);

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
                               }
                });
       });


                          
                  
            // });           

 

   $('.party_id').bind('keyup , change',function(){
   var party_id=$('.party_id').val();
    //alert(party_id);
   $.ajax({
    url:"<?php echo base_url(); ?>Admin_c/fecth_party_remain_balance",
    method:"POST",
    dataType:"JSON",
    data:{party_id:party_id},
    success:function(data){
    if(data == null )
    {
     $('.pre').html('0'); 
    }
    else
    {
     $('.pre').val(data.data2.remaining);
    }
   
    }
   

   });
   });

   });
</script>
<script type="text/javascript">
  $(document).ready(function(){
   $('.c').bind('keyup , change , mouseleave',function(){
              var c=$('.c').val();
              // alert(c);
              $.ajax({
              url:"<?php echo base_url(); ?>Admin_c/fetch_party_by_code",
              method:"POST",
              dataType:"JSON",
              data:{c:c},
              success:function(data)
              {
                if(data != '')
                {
                  // $('.p').val(data.party_name);
                  $('.party_id option').each(function(){
                  if (this.value == data.party_id) {
                  $('#opt').prop('selected',false);
                  $(this).select2().attr('selected','selected');
                  //$('.com_id').prop('disabled', true);
                  $('.phone').val(data.phone);
                  
                  // $('.balance').val(parseFloat(data.remaining) + parseFloat(data.remaining));
                  // $(".party_name").val().change();
                  // $('.party_name').val($(this));
                }
            });
                }
                else
                {
                  $('.party_id').val('');
                  $('.phone').val('');
                  //$('.balance').val('');
                }

              }
              });
              });
  });
</script>