<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="">
        <a href="<?php echo site_url();?>" target="_blank">
          <i class="fa fa-home"></i> <span>ไปหน้าหลัก</span>
        </a>
      </li>
      <li class="">
        <a href="<?php echo site_url('admin');?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="">
        <a href="<?php echo site_url('admin/banner');?>">
          <i class="fa fa-th"></i>
          <span>แบนเนอร์</span>
        </a>
      </li>

      <li class="">
        <a href="<?php echo site_url('admin/news');?>">
          <i class="fa fa-edit"></i> <span>ข่าว</span>
        </a>
      </li>


      <li class="treeview">
        <a href="widgets.html">
          <i class="fa fa-users"></i> <span>การลงทะเบียน</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
          <li><a href="charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
          <li><a href="charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
          <li><a href="charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>UI Elements</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
          <li><a href="UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
          <li><a href="UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
          <li><a href="UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
          <li><a href="UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
          <li><a href="UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Forms</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
          <li><a href="forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
          <li><a href="forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Tables</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
          <li><a href="tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
        </ul>
      </li>
      <li>
        <a href="calendar.html">
          <i class="fa fa-calendar"></i> <span>Calendar</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-red">3</small>
            <small class="label pull-right bg-blue">17</small>
          </span>
        </a>
      </li>
      <li>
        <a href="mailbox/mailbox.html">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow">12</small>
            <small class="label pull-right bg-green">16</small>
            <small class="label pull-right bg-red">5</small>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Examples</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
          <li><a href="examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
          <li><a href="examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
          <li><a href="examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
          <li><a href="examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
          <li><a href="examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
          <li><a href="examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
          <li><a href="examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
          <li><a href="examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
        </ul>
      </li>
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> Level One
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
              <li>
                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        </ul>
      </li>
       -->
      <!-- <li><a href="<?php echo base_url();?>assets/backend/documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>