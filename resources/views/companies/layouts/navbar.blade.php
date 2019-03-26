<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Q</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Quick Price</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset("assets/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Sentinel::getUser()->last_name }} {{ Sentinel::getUser()->first_name }} </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset("assets/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">

                <p>
                  {{ Sentinel::getUser()->last_name }} {{ Sentinel::getUser()->first_name }} - Admin
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <form action="{{ route('logout') }}" method="POST" id="form-logout">
                    {{ csrf_field() }}

                    <a href="javascript:void(0)" onclick="document.getElementById('form-logout').submit()" class="btn btn-default btn-flat">Sign out</a>
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>