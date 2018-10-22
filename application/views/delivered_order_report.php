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
            <thead style="background:black; color: white; border:2px solid black; ">
            <tr style="border-bottom:2px solid black;">
        <!--       <th>Code</th> -->
              <th>Order</th>
              <th>Delivery</th>
              <th>Item Description</th>
              <th>Unit</th>
              <th>Quantity</th>
              <th>Amount</th>
            </tr>
            </thead>
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