 <!-- Logo -->
 <a href="/admin" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>HSE</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>HSE</b>Admin</span>
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
        <li class="user-menu">
          <a href="#">
            <img src="/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
        </li>
            
            
        <!-- Logout Button -->
        <li>
          <a href="{{ route('logout') }}" 
            onclick="event.preventDefault();
                      document.getElementById('logout-form').submit()">
            <i class="fa fa-sign-out"></i> logout
          </a>
          <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display:none">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </div>

  </nav>