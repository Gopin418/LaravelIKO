<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">
        Main Navigation
      </li>
      <li>
          <a href="/admin">
              <i class="fa fa-dashboard"></i><span>Dashboard</span>
          </a>
      </li>

      {{-- IKO --}}
      @if( Auth::user()->hasRole('Admin Developer') || Auth::user()->hasRole('Admin Utama'))
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cogs"></i> <span>IKO</span>
          <span class="pull-right-container">
            @if($IKO_pending == 0)
              <i class="fa fa-angle-left pull-right"></i>
            @else
              <small class="label pull-right bg-yellow">{{ $IKO_pending }}</small>
            @endif
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="/admin/IKO/pending"><i class="fa fa-clock-o"></i> Pending
              <span class="pull-right-container">
                @if($IKO_pending == 0)
                  <small class="label pull-right bg-yellow"></small>
                @else
                  <small class="label pull-right bg-yellow">{{ $IKO_pending }}</small>
                @endif
              </span>
            </a>
          </li>
          <li>
            <a href="/admin/IKO/approved">
              <i class="fa fa-check-square-o"></i> Approved
            </a>
          </li>
        </ul>
      </li>
      @elseif(Auth::user()->hasRole('Admin Biasa') )
      <li>
        <a href="/admin/IKO/approved"><i class="fa fa-cogs"></i> IKO</a>
      </li>
      @endif

      {{-- JSA --}}
      @if( Auth::user()->hasRole('Admin Developer') || Auth::user()->hasRole('Admin Utama'))
      <li class="treeview">
        <a href="#">
          <i class="fa fa-plus"></i> <span>JSA</span>
          <span class="pull-right-container">
              @if($JSA_pending == 0)
              <i class="fa fa-angle-left pull-right"></i>
            @else
              <small class="label pull-right bg-yellow">{{ $JSA_pending }}</small>
            @endif
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="/admin/JSA/pending"><i class="fa fa-clock-o"></i> Pending
              <span class="pull-right-container">
                @if($JSA_pending == 0)
                  <small class="label pull-right bg-yellow"></small>
                @else
                  <small class="label pull-right bg-yellow">{{ $JSA_pending }}</small>
                @endif
              </span>
            </a>
              </span>
            </a>
          </li>
          <li>
            <a href="/admin/JSA/approved">
              <i class="fa fa-check-square-o"></i> Approved
            </a>
          </li>
        </ul>
      </li>
      @elseif(Auth::user()->hasRole('Admin Biasa'))
      <li>
        <a href="/admin/JSA/approved"><i class="fa fa-plus"></i> JSA</a>
      </li>
      @endif

      {{-- ADL --}}
      @if( Auth::user()->hasRole('Admin Developer') || Auth::user()->hasRole('Admin Utama'))
      <li class="treeview">
        <a href="#">
          <i class="fa fa-envira"></i> <span>ADL</span>
          <span class="pull-right-container">
            @if($ADL_pending == 0)
              <i class="fa fa-angle-left pull-right"></i>
            @else
              <small class="label pull-right bg-yellow">{{ $ADL_pending }}</small>
            @endif
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="/admin/ADL/pending"><i class="fa fa-clock-o"></i> Pending
              <span class="pull-right-container">
                @if($ADL_pending == 0)
                  <small class="label pull-right bg-yellow"></small>
                @else
                  <small class="label pull-right bg-yellow">{{ $ADL_pending }}</small>
                @endif
              </span>
            </a>
          </li>
          <li>
            <a href="/admin/ADL/approved">
              <i class="fa fa-check-square-o"></i> Approved
            </a>
          </li>
        </ul>
      </li>
      @elseif(Auth::user()->hasRole('Admin Biasa'))
      <li>
        <a href="/admin/ADL/approved"><i class="fa fa-envira"></i> ADL</a>
      </li>
      @endif

      {{-- IPB --}}
      @if(Auth::user()->hasRole('Admin Developer') || Auth::user()->hasRole('Admin Utama'))
      <li class="treeview">
        <a href="#">
          <i class="fa fa-fire"></i> <span>IPB</span>
          <span class="pull-right-container">
            @if( $IPB_pending == 0)
              <i class="fa fa-angle-left pull-right"></i>
            @else
              <small class="label pull-right bg-yellow">{{ $IPB_pending }}</small>
            @endif
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="/admin/IPB/pending"><i class="fa fa-clock-o"></i> Pending
              <span class="pull-right-container">
                @if($IPB_pending == 0)
                  <small class="label pull-right bg-yellow"></small>
                @else
                  <small class="label pull-right bg-yellow">{{ $IPB_pending }}</small>
                @endif
              </span>
            </a>
          </li>
          <li>
            <a href="/admin/IPB/approved">
              <i class="fa fa-check-square-o"></i> Approved
            </a>
          </li>
        </ul>
      </li>
      @elseif(Auth::user()->hasRole('Admin Biasa'))
      <li>
        <a href="/admin/IPB/approved"><i class="fa fa-fire"></i> IPB</a>
      </li>
      @endif
      {{-- Other Navigation --}}
      <li class="header">
        Other Navigation
      </li>
      <li>
        <a href="/admin/utility">
          <i class="fa fa-flash"></i> Approval Utility
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-envelope"></i><span>Mailbox</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="#"><i class="fa fa-inbox"></i> Inbox</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-pencil-square-o"></span> Compose</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-envelope-o"></span> Sent</a>
          </li>
        </ul>
      </li>
      {{-- User Navigation --}}
      <li class="header">
        User Navigation
      </li>
      @if( Auth::user()->hasRole('Admin Developer') || Auth::user()->hasRole('Admin Utama') )
      <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i><span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="/admin/list"><i class="fa fa-user"></i> Users</a>
            </li>
            @if(Auth::user()->hasRole('Admin Developer'))
              <li>
                <a href="/admin/role"><i class="fa fa-briefcase"></i> Roles</a>
              </li>
            @else
            @endif
            <li>
              <a href="/admin/add"><i class="fa fa-user-plus"></i> Add User</a>
            </li>
          </ul>
        </li>
      @elseif(Auth::user()->hasRole('Admin Biasa'))
      <li>
        <a href="/admin/list"><i class="fa fa-users"></i> Users</a>
      </li>
      @endif
    
    </ul>
  </section>
