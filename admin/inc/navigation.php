<style>
.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}
.clearfix {
    *zoom: 1;
}

.sidebar{
    position: relative;
    margin: 0px auto;
    padding: 50px 0;
    clear: both;
}
  @media only screen and (min-width: 1200px) {
  .sidebar {
    /*background-color: #343a40; Background color of the sidebar */
    width: 250px; /* Width of the sidebar */
    }
}
@media only screen and (min-width: 960px) and (max-width: 1199px){
  .sidebar {
    /*background-color: #343a40;  Background color of the sidebar */
    width: 1030px; /* Width of the sidebar */
 }
}

@media only screen and (min-width: 768px) and (max-width: 959px) {
  .sidebar {
    /*background-color: #343a40; Background color of the sidebar */
    width: 682px; /* Width of the sidebar */
  }
}
@media only screen and (min-width: 480px) and (max-width: 767px) {
  .sidebar {
    /*background-color: #343a40;  Background color of the sidebar */
    width: 428px; /* Width of the sidebar */
    margin: 0 auto;
  }
}
@media only screen and (max-width: 479px) {
  .sidebar {
    /background-color: #343a40; / Background color of the sidebar */
    width: 320px; /* Width of the sidebar */
    margin: 0 auto;
  }
}


  .nav-pills.nav-sidebar {
    /*flex-direction: column; Display menu items vertically */
    list-style: none;
  padding: 0;
  margin: 0;
  background: #FFF;
  /*height: 100px;*/
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  
  /* == */
  width: 250px;
  /* == */
  }

  .nav-pills.nav-sidebar li {
    position: relative;
  /*float:left;*/
  }

  .nav-pills.nav-sidebar li a{
    display: block;
  text-decoration: none;
  padding: 12px 20px;
  color: #777;
  /*text-align: center;
  border-right: 1px solid #E7E7E7;*/
  
  /* == */
  text-align: left;
  height: 80px;
  position: relative;
  border-bottom: 1px solid #EEE;
  /* == */
  }


  .nav-pills.nav-sidebar li a i{
      /*display: block;
  font-size: 30px;
  margin-bottom: 10px;*/
  
  /* == */
  float: left;
  font-size: 40px;
  margin: 0 25px 0 0;
  /* == */
  }

  .nav-pills.nav-sidebar li a p {
  float: left;
  margin: 0 ;
}

.nav-pills.nav-sidebar li a strong {
  display: block;
  text-transform: uppercase;
}

  .nav-pills.nav-sidebar li a i, .nav-pills.nav-sidebar li a strong{
    position: relative;
  
  transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -webkit-transition: all 300ms linear;
  }

  .nav-pills.nav-sidebar li:hover > a i{
    opacity: 1;
    -webkit-animation: moveFromTop 300ms ease-in-out;
    -moz-animation: moveFromTop 300ms ease-in-out;
    -ms-animation: moveFromTop 300ms ease-in-out;
    -o-animation: moveFromTop 300ms ease-in-out;
    animation: moveFromTop 300ms ease-in-out;
  }

  .nav-pills.nav-sidebar li:hover a strong{
    opacity: 1;
    -webkit-animation: moveFromLeft 300ms ease-in-out;
    -moz-animation: moveFromLeft 300ms ease-in-out;
    -ms-animation: moveFromLeft 300ms ease-in-out;
    -o-animation: moveFromLeft 300ms ease-in-out;
    animation: moveFromLeft 300ms ease-in-out;
  }

  .nav-pills.nav-sidebar li:hover > a{
    color: #e67e22;
  }
  
  .nav-pills.nav-sidebar li a.active{
    position: relative;
  color: #e67e22;
  border:0;
  /*border-top: 4px solid #e67e22;
  border-bottom: 4px solid #e67e22;
  margin-top: -4px;*/
  box-shadow: 0 0 5px #DDD;
  -moz-box-shadow: 0 0 5px #DDD;
  -webkit-box-shadow: 0 0 5px #DDD;
  
  /* == */
  border-left: 4px solid #e67e22;
  border-right: 4px solid #e67e22;
  margin: 0 -4px;
  /* == */
  }

  .nav-pills.nav-sidebar li a.active:before{
    content: "";
  position: absolute;
  /*top: 0;
  left: 45%;
  border-top: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/
  
  /* == */
  top: 42%;
  left: 0;
  border-left: 5px solid #e67e22;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  /* == */
  }

  .nav-pills.nav-sidebar li a.active:after{
    content: "";
  position: absolute;
  top: 42%;
  right: 0;
  border-right: 5px solid #e67e22;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  }


.nav-pills.nav-sidebar li ul,  .nav-pills.nav-sidebar li ul li ul{
  position: absolute;
  height: auto;
  min-width: 200px;
  padding: 0;
  margin: 0;
  background: #FFF;
  /*border-top: 4px solid #e67e22;*/
  opacity: 0;
  visibility: hidden;
  transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -webkit-transition: all 300ms linear;
  /*top: 130px;*/
  z-index: 1000;
  
  /* == */
  left:280px;
  top: 0px;
  border-left: 4px solid #e67e22;
  /* == */
}

.nav-pills.nav-sidebar li ul:before{
  content: "";
  position: absolute;
  /*top: -8px;
  left: 23%;
  border-bottom: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/
  
  /* == */
  top: 25px;
  left: -9px;
  border-right: 5px solid #e67e22;
  border-bottom: 5px solid transparent;
  border-top: 5px solid transparent;
  /* == */
}

.nav-pills.nav-sidebar li:hoevr > ul,.nav-pills.nav-sidebar li ul li:hoevr > ul{
  display: block;
  opacity: 1;
  visibility: visible;
  /*top: 100px;*/
  
  /* == */
  left:250px;
  /* == */
}

.nav-pills.nav-sidebar li ul li a{
  padding: 10px;
  text-align: left;
  border: 0;
  border-bottom: 1px solid #EEE;
  
  /* == */
  height: auto;
  /* == */
}
.nav-pills.nav-sidebar li ul li a i{
  font-size: 16px;
  display: inline-block;
  margin: 0 10px 0 0;
}

.nav-pills.nav-sidebar li ul li ul{
  left: 230px;
  top: 0;
  border: 0;
  border-left: 4px solid #e67e22;
}

.nav-pills.nav-sidebar li ul li ul:before{
  content: "";  
  position: absolute;
  top: 15px;
  /*left: -14px;*/
  /* == */
  left: -9px;
  /* == */
  border-right: 5px solid #e67e22;
  border-bottom: 5px solid transparent;
  border-top: 5px solid transparent;
}

.nav-pills.nav-sidebar li ul li:hover > ul{
  top: 0px;
  left: 200px;
}

</style>
<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary text-white bg-lightblue disabled elevation-4 sidebar-no-expand">
        <!-- Brand Logo -->
        <a href="<?php echo base_url ?>admin" class="brand-link bg-lightblue text-sm">
        <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Store Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 1.7rem;height: 1.7rem;max-height: unset">
        <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="clearfix"></div>
                <!-- Sidebar Menu -->
                <nav class="mt-4">
                   <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                    <li>
                      <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        <Strong>
                          Dashboard
                         </Strong></p>
                      </a>
                    </li> 
                    <?php if($_settings->userdata('type') == 3): ?>
                    <li>
                      <a href="<?php echo base_url ?>admin/?page=employees/records&id=<?php echo $_settings->userdata('id') ?>" class="nav-link nav-records">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                        <Strong>
                          My Records
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <?php else: ?>
                    <li>
                      <a href="<?php echo base_url ?>admin/?page=employees" class="nav-link nav-employees">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                        <Strong>
                          Employees List
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <?php endif; ?>
                    <li>
                      <a href="<?php echo base_url ?>admin/?page=leave_applications" class="nav-link nav-leave_applications">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                        <Strong>
                          Application List
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url ?>admin/?page=employees/mail" class="nav-link nav-maintenance_credintials">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                        <Strong>
                          Creditinal Details
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url ?>admin/?page=employees/phpmailer/pdf" class="nav-link nav-maintenance_Mailing">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>
                        <Strong>
                          Mailing
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <?php if($_settings->userdata('type') != 3): ?>
                    <?php if($_settings->userdata('type') == 1): ?>
                    
                    <li>
                      <a href="<?php echo base_url ?>admin/?page=maintenance/department" class="nav-link nav-maintenance_department">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                        <Strong>
                          Department List
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url ?>admin/?page=maintenance/designation" class="nav-link nav-maintenance_designation">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                        <Strong>
                          Designation List
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url ?>admin/?page=maintenance/leave_type" class="nav-link nav-maintenance_leave_type">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                        <Strong>
                          Leave Type List
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url ?>admin/?page=user/list" class="nav-link nav-user_list">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                        <Strong>
                          User List
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <?php endif; ?>

                    <li>
                      <a href="<?php echo base_url ?>admin/?page=reports" class="nav-link nav-reports">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                        <Strong>
                          Reports
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <?php if($_settings->userdata('type') == 1): ?>

                    <li>
                      <a href="<?php echo base_url ?>admin/?page=system_info" class="nav-link nav-system_info">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                        <Strong>
                          Settings
                    </Strong>
                    </p>
                      </a>
                    </li>
                    <?php endif; ?>
                    <?php endif ?>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      page = page.split('/');
      page = page.join('_');

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
     
    })
  </script>