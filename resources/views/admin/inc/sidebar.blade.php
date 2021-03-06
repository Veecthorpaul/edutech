<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>EduTech</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_info ml-4" style="text-align: center">
          <span>Welcome</span>
          <h2>{{ ucfirst(Auth()->user()->name) }}</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Menu <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
              <li><a href="{{ route('admin.students')}}">Students</a></li>
              <li><a href="{{ route('admin.teachers')}}">Teachers</a></li>
              <li><a href="{{ route('admin.payments')}}">Payments</a></li>
                <li><a href="{{ route('admin.subjects')}}">Subjects</a></li>
                <li><a href="{{ route('admin.topics')}}">Topics</a></li>
                <li><a href="{{ route('admin.resources')}}">Resources</a></li>

              </ul>
            </li>
          </ul>
        </div>

      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>
