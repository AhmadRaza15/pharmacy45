
  <header class="main-header">
    <a href="<?php echo base_url();?>/Admin_c" class="logo">
      <span class="logo-mini"><b>P</b></span>
      <span class="logo-lg" style="margin-left:-30px;">PHARMA</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="active"><a href="#" onclick="return false">Date<span class="sr-only">(current)</span></a></li>
            <li> <input  type="text" style="height: 50px;  min-width:175px;" value="<?php echo date("Y-m-d H:i:s")?>" class="form-control pull-right"></li>
          </ul>
        </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/1.gif" class="user-image" alt="User Image">
              <span class="hidden-xs">Ahmad Raza</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/1.gif" class="img-circle" alt="User Image">

                <p>
                  
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                
                <!-- /.row -->
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>Admin_c/Profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>Project/sign_out" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        
        </ul>
      </div>
    </nav>
  </header>
