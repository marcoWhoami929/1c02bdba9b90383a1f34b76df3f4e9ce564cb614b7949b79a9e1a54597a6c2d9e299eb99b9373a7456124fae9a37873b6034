<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php

            if($_SESSION["foto"] == ""){
                    echo '
                    <img src="vistas/img/administrator/default.jpg" class="img-circle" alt="User Image">';
                }else{
                    echo '
                    <img src="'.$_SESSION["foto"].'" class="img-circle" alt="User Image">';
                }


                ?>
          <!-- <img src="vistas/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
          <?php echo'<p>'; echo $_SESSION["nombre"]; echo '</p>'; ?>
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Lecciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lecciones"><i class="fa fa-circle-o"></i> Lecciones</a></li>
            <li><a href="preguntas"><i class="fa fa-circle-o"></i> Preguntas</a></li>
            <li><a href="respuestas"><i class="fa fa-circle-o"></i> Respuestas</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> ChartJS</a></li>

          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>