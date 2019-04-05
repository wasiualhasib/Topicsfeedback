 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../asset/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="admin.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
      
         <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>FrontView</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
                    <li>
                      <a href="admin_create_course.php">
                        <i class="fa fa-link"></i> 
                        <span>Create Course</span>
                      </a> 
                    </li>
                    <li>
                      <a href="admin_teacher_rules.php">
                        <i class="fa fa-link"></i> 
                        <span>Create Teacher</span></a> 
                    </li>
                    <li>
                      <a href="admin_student_rules.php">
                        <i class="fa fa-link"></i> 
                        <span>Create Student</span>
                      </a> 
                    </li>
          </ul>
        </li>
      </ul>

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>