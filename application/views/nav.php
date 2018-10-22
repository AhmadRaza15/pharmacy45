  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/1.gif" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ahmad Raza</p>
          <a href=""><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
  
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url(); ?>Admin_c">
            <i class="glyphicon glyphicon-home "></i> <span>Dashboard</span>
            <span class="pull-right-container">
            <!--   <i class="fa fa-angle-left pull-right"></i>  -->
            </span>
          </a>
        </li>




         <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu">

           <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i>
            <span>Master Group Of Account</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/add_region"><i class="fa fa-circle-o"></i> Add Region</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_region"><i class="fa fa-circle-o"></i> View Region</a></li>
          </ul> 
        </li>

         <li class="treeview">
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-plus"></i>
            <span>Master Title Of Account</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/add_party"><i class="fa fa-circle-o"></i> Add Party</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_party"><i class="fa fa-circle-o"></i> View Party</a></li>
          </ul> 
        </li>

        <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i>
            <span>Master Company Product</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/add_company"><i class="fa fa-circle-o"></i> Add Company</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_company"><i class="fa fa-circle-o"></i> View Company</a></li>
          </ul> 
        </li>

         <li class="treeview">
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-plus"></i>
            <span>Master Brand</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="<?php echo base_url(); ?>Admin_c/addBrand"><i class="fa fa-circle-o"></i> Add Brand </a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/viewBrand"><i class="fa fa-circle-o"></i> View Brand</a></li>
          </ul> 
        </li>
           

          <!--   <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Generate Price</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu"> -->
            <!-- <li class="active"><a href="<?php echo base_url(); ?>Admin_c/add_items/"><i class="fa fa-circle-o"></i> Add Company items</a></li> -->
            <!--  <li><a href="<?php echo base_url(); ?>Admin_c/view_items"><i class="fa fa-circle-o"></i> View Company Items</a></li> -->
         <!--    <li class="active"><a href="<?php echo base_url(); ?>Admin_c/price_allocate"><i class="fa fa-circle-o"></i>Generate Price</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>Admin_c/view_price_allocate"><i class="fa fa-circle-o"></i>View Generate Price</a></li>
          </ul>
        </li> -->


            <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Master Item Of Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu">
            <!-- <li class="active"><a href="<?php echo base_url(); ?>Admin_c/add_items/"><i class="fa fa-circle-o"></i> Add Company items</a></li> -->
            <!--  <li><a href="<?php echo base_url(); ?>Admin_c/view_items"><i class="fa fa-circle-o"></i> View Company Items</a></li> -->
            <li class="active"><a href="<?php echo base_url(); ?>Admin_c/add_items/"><i class="fa fa-circle-o"></i> Add items</a></li>
             <li><a href="<?php echo base_url(); ?>Admin_c/view_items"><i class="fa fa-circle-o"></i> View Items</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/show_items_report"><i class="fa fa-circle-o"></i> Show Items Report</a></li>
           
           

          </ul>
        </li>


            <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Generate Item For Customer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu">
            <!-- <li class="active"><a href="<?php echo base_url(); ?>Admin_c/add_items/"><i class="fa fa-circle-o"></i> Add Company items</a></li> -->
            <!--  <li><a href="<?php echo base_url(); ?>Admin_c/view_items"><i class="fa fa-circle-o"></i> View Company Items</a></li> -->
            <li class="active"><a href="<?php echo base_url(); ?>Admin_c/add_party_multiple_items/"><i class="fa fa-circle-o"></i> Add Item For Customer</a></li>
             <li><a href="<?php echo base_url(); ?>Admin_c/view_party_multiple_items"><i class="fa fa-circle-o"></i> View Item For Customer</a></li>
             <li><a href="<?php echo base_url(); ?>Admin_c/party_items_list"><i class="fa fa-circle-o"></i> Party Items List</a></li>
             <!--  <li class="active"><a href="<?php echo base_url(); ?>Admin_c/price_allocate"><i class="fa fa-circle-o"></i>Generate Price</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>Admin_c/view_price_allocate"><i class="fa fa-circle-o"></i>View Generate Price</a></li> -->
           

          </ul>
        </li>


       

        


            
          </ul>
        </li>

        <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Add Record</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu">

           <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i>
            <span>Cash Receipt</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/received_voucher"><i class="fa fa-circle-o"></i>Add Cash Receipt</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_received_voucher"><i class="fa fa-circle-o"></i> View Cash Receipt</a></li>
          </ul> 
        </li>

         <li class="treeview">
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-plus"></i>
            <span>Payment Receipt</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/payment_voucher"><i class="fa fa-circle-o"></i> Add Payment Receipt</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_payment_voucher"><i class="fa fa-circle-o"></i> View Payment Receipt</a></li>
          </ul> 
        </li>

        <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i>
            <span>Purchase Invoice</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/add_stock"><i class="fa fa-circle-o"></i> Add Purchase Invoice</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_Stock"><i class="fa fa-circle-o"></i> View Purchase Invoice</a></li>
          </ul> 
        </li>

         <li class="treeview">
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-plus"></i>
            <span>Sale Invoice</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="<?php echo base_url(); ?>Admin_c/view_sale_invoice"><i class="fa fa-circle-o"></i> Add Sale Invoice </a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_printed_sale_invoice"><i class="fa fa-circle-o"></i> View Sale Invoice</a></li>
          </ul> 
        </li>
           
            <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Order Booking</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>Admin_c/add_order/"><i class="fa fa-circle-o"></i> Add Order Booking</a></li>
             <li><a href="<?php echo base_url(); ?>Admin_c/view_order"><i class="fa fa-circle-o"></i> View Order Booking</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Voucher Editing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu">
         
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Add Voucher Editing</a></li>
             <li><a href="#"><i class="fa fa-circle-o"></i> View Voucher Editing</a></li>
             

          </ul>
        </li>

          <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Purchase Return</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu">
         
            <li class="active"><a href="<?php echo base_url(); ?>Admin_c/add_return_stock/"><i class="fa fa-circle-o"></i> Add Purchase Return</a></li>
             <!-- <li><a href="<?php echo base_url(); ?>Admin_c/view_party_multiple_items"><i class="fa fa-circle-o"></i> View Purchase Return</a></li> -->
          </ul>
        </li>

          <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Sale Return</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu">
         
            <li class="active"><a href="<?php echo base_url(); ?>Admin_c/return_order/"><i class="fa fa-circle-o"></i>Add Sale Return</a></li>
            <!--  <li><a href="<?php echo base_url(); ?>Admin_c/view_party_multiple_items"><i class="fa fa-circle-o"></i>View Sale Return</a></li> -->
             

          </ul>
        </li>


       

        


            
          </ul>
        </li>

















       <!--  <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu">
          
            <li class="active"><a href="<?php echo base_url(); ?>Admin_c/add_items/"><i class="fa fa-circle-o"></i> Add items</a></li>
             <li><a href="<?php echo base_url(); ?>Admin_c/view_items"><i class="fa fa-circle-o"></i> View Items</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/show_items_report"><i class="fa fa-circle-o"></i> Show Items Report</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/addBrand"><i class="fa fa-circle-o"></i> Add Brand </a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/viewBrand"><i class="fa fa-circle-o"></i> View Brand</a></li>

          </ul>
        </li> -->
        <!--  <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i> <span>Generate Price</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i> 
            </span>
          </a>
         <ul class="treeview-menu">
            
            <li class="active"><a href="<?php echo base_url(); ?>Admin_c/price_allocate"><i class="fa fa-circle-o"></i>Generate Price</a></li>
            <li class="active"><a href="<?php echo base_url(); ?>Admin_c/view_price_allocate"><i class="fa fa-circle-o"></i>View Generate Price</a></li>
          </ul>
        </li> -->
  <!--       <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i>
            <span>Company</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/add_company"><i class="fa fa-circle-o"></i> Add Company</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_company"><i class="fa fa-circle-o"></i> View Company</a></li>
          </ul> 
        </li> -->
         <!-- <li class="treeview">
          <a href="">
            <i class="fa fa-plus"></i>
            <span>Region</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/add_region"><i class="fa fa-circle-o"></i> Add Region</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_region"><i class="fa fa-circle-o"></i> View Region</a></li>
          </ul> 
        </li> -->
         <!-- <li class="treeview">
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-plus"></i>
            <span>Party</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/add_party"><i class="fa fa-circle-o"></i> Add Party</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_party"><i class="fa fa-circle-o"></i> View Party</a></li>
          </ul> 
        </li> -->


        

        <li class="treeview hidden">
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-plus"></i>
            <span>Order Invoice</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/add_order"><i class="fa fa-circle-o"></i> Add Order Invoice</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_order"><i class="fa fa-circle-o"></i> View Order Invoice</a></li>
           <li><a href="<?php echo base_url(); ?>Admin_c/return_order"><i class="fa fa-circle-o"></i> Return Order Invoice</a></li>
           <li><a href="<?php echo base_url(); ?>Admin_c/return_order_report"><i class="fa fa-circle-o"></i> Return Order Report</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/show_order_report"><i class="fa fa-circle-o"></i> Show Order Invoice Report</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/show_item_report"><i class="fa fa-circle-o"></i> Show Items Order  Report</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>Admin_c/show_company_report"><i class="fa fa-circle-o"></i> Show Company Report</a></li> -->
            <li><a href="<?php echo base_url(); ?>Admin_c/show_party_report"><i class="fa fa-circle-o"></i> Show Party Order Report</a></li>
           <!--   <li><a href="<?php echo base_url(); ?>Admin_c/daily_sale_report"><i class="fa fa-circle-o"></i> Daily Sale Report</a></li> -->
           <li><a href="<?php echo base_url(); ?>Admin_c/daily_sale_data_report"><i class="fa fa-circle-o"></i> Daily Sale Report</a></li> 
          </ul> 
        </li>
           <li class="treeview hidden">
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-plus"></i>
            <span>Purchase Invoice</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a> 
          <ul class="treeview-menu">
           <!--  <li><a href="<?php echo base_url(); ?>Admin_c/add_sale_invoice"><i class="fa fa-circle-o"></i> Add Sale Invoice</a></li> -->
            <li><a href="<?php echo base_url(); ?>Admin_c/view_sale_invoice"><i class="fa fa-circle-o"></i> Add Purchase Invoice</a></li>
                        <li><a href="<?php echo base_url(); ?>Admin_c/view_printed_sale_invoice"><i class="fa fa-circle-o"></i> View Purchase Invoice</a></li>

            <li><a href="<?php echo base_url(); ?>Admin_c/show_order_report"><i class="fa fa-circle-o"></i> Show Sale Report</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/show_item_report"><i class="fa fa-circle-o"></i> Show Items Sale Report</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>Admin_c/show_company_report"><i class="fa fa-circle-o"></i> Show Company Report</a></li> -->
            <li><a href="<?php echo base_url(); ?>Admin_c/show_party_report"><i class="fa fa-circle-o"></i> Show Party Sale Report</a></li>

           <!--  <li><a href="<?php echo base_url(); ?>Admin_c/show_order_report"><i class="fa fa-circle-o"></i> Show Order Report</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/show_item_report"><i class="fa fa-circle-o"></i> Show Items Report</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/show_company_report"><i class="fa fa-circle-o"></i> Show Company Report</a></li> -->
          </ul> 
        </li>
           <li class="treeview hidden">
          <a href="">
            <i class="glyphicon glyphicon-check"></i>
            <span>Vouchers</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a> 
          <ul class="treeview-menu">
             <li><a href="<?php echo base_url(); ?>Admin_c/received_voucher"><i class="fa fa-circle-o"></i>Cash Receipt Voucher</a></li>
              <li><a href="<?php echo base_url(); ?>Admin_c/view_received_voucher"><i class="fa fa-circle-o"></i>View Cash Receipt Voucher</a></li>
              <li><a href="<?php echo base_url(); ?>Admin_c/payment_voucher"><i class="fa fa-circle-o"></i>Cash Payment Voucher</a></li>
               <li><a href="<?php echo base_url(); ?>Admin_c/view_payment_voucher"><i class="fa fa-circle-o"></i>View Cash Payment Voucher</a></li> 
          </ul> 
        </li>
        <li class="treeview hidden">
          <a href="">
            <i class="fa fa-database"></i>
            <span>Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/add_stock"><i class="fa fa-circle-o"></i> Add Stock</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_Stock"><i class="fa fa-circle-o"></i>View Stock</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/add_return_stock"><i class="fa fa-circle-o"></i>Return Stock Invoice</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/return_stock_report"><i class="fa fa-circle-o"></i>Return Stock Report</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/total_Stock"><i class="fa fa-circle-o"></i>Total Stock</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/show_com_stock_report"><i class="fa fa-circle-o"></i>Party Stock Report</a></li>
             <!-- <li><a href="<?php echo base_url(); ?>Admin_c/show_com_stock_report"><i class="fa fa-circle-o"></i>Company Stock Demo Report</a></li> -->
            <li><a href="<?php echo base_url(); ?>Admin_c/stock_item_report"><i class="fa fa-circle-o"></i>Item Stock Report</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>Admin_c/daily_stock_report"><i class="fa fa-circle-o"></i>Daily Purchase Report</a></li> -->
            <li><a href="<?php echo base_url(); ?>Admin_c/daily_stock_added_report"><i class="fa fa-circle-o"></i>Daily Purchase Report</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>assets/pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li> -->
          </ul>
        </li>
         
        <li class="treeview hidden">
          <a href="">
            <i class="glyphicon glyphicon-file"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/finantial_report"><i class="fa fa-circle-o"></i>Finantial Report</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>Admin_c/finantial_report_data"><i class="fa fa-circle-o"></i>Finantial Report Dat</a></li> -->
           <!--  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-circle-o"></i>Purchase Report</a></li> -->
           <!--  <li><a href="<?php echo base_url(); ?>Admin_c/sales_report"><i class="fa fa-circle-o"></i>Sales Report</a></li> -->
            <li><a href="<?php echo base_url(); ?>Admin_c/invoice_total_Stock"><i class="fa fa-circle-o"></i>Stock Report</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/stock_difference_report"><i class="fa fa-circle-o"></i>Stock Difference Report</a></li>
            <li><a href="<?php echo base_url(); ?>Admin_c/view_trial_balance"><i class="fa fa-circle-o"></i>Trial Debit Balance Report</a></li>
             <li><a href="<?php echo base_url(); ?>Admin_c/view_trial_credit_balance"><i class="fa fa-circle-o"></i>Trial Credit Balance Report</a></li>
              <li><a href="<?php echo base_url(); ?>Admin_c/balance_sheet_report"><i class="fa fa-circle-o"></i>Balance Sheet Report</a></li>
              <!--  <li><a href="<?php echo base_url(); ?>Admin_c/f_report"><i class="fa fa-circle-o"></i>Finantial  Report 2</a></li> -->
            <!-- <li><a href="<?php echo base_url(); ?>Admin_c/autofill"><i class="fa fa-circle-o"></i>Autofill Report</a></li>s -->
            <!--  <li><a href="<?php echo base_url(); ?>Admin_c/received_voucher"><i class="fa fa-circle-o"></i>Cash Received Voucher</a></li>
              <li><a href="<?php echo base_url(); ?>Admin_c/view_received_voucher"><i class="fa fa-circle-o"></i>View Cash Received Voucher</a></li>
              <li><a href="<?php echo base_url(); ?>Admin_c/payment_voucher"><i class="fa fa-circle-o"></i>Cash Payment Voucher</a></li>
               <li><a href="<?php echo base_url(); ?>Admin_c/view_payment_voucher"><i class="fa fa-circle-o"></i>View Cash Payment Voucher</a></li> -->
          
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>Admin_c/Profile">
            <i class="glyphicon glyphicon-user"></i>
            <span>Profile</span>
            <span class="pull-right-container">
              <i class=""></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Admin_c/Profile"><i class="fa fa-circle-o"></i>Update Profile</a></li>
          </ul>
        </li>
     <!--    <li class="treeview">
          <a href="<?php echo base_url(); ?>assets/#">
            <i class="fa fa-circle-o"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>assets/pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li> -->
     <!--    <li class="treeview">
          <a href="<?php echo base_url(); ?>assets/#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>assets/pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li> -->
      <!--   <li class="treeview">
          <a href="<?php echo base_url(); ?>assets/#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>assets/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li> -->
     <!--    <li>
          <a href="<?php echo base_url(); ?>assets/pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li> -->
        <!-- <li>
          <a href="<?php echo base_url(); ?>assets/pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li> -->
       <!--  <li class="treeview">
          <a href="<?php echo base_url(); ?>assets/#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>assets/pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="<?php echo base_url(); ?>assets/pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li> -->
        <!-- <li class="treeview">
          <a href="<?php echo base_url(); ?>assets/#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> -->
        <!-- <li><a href="<?php echo base_url(); ?>assets/https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
