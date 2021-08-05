<div class="wrapper">
    <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
      <!-- Right navbar links -->   
        </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <div class="sidebar"> 
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if((session()->get('logininfo.type'))=="admin")
                <li class="nav-item">
                  <a href="{{url('/blog-posting') }}" class="nav-link">
                    <i class="fab fa-product-hunt"></i>
                    <p>
                      Blog Posting
                    </p>
                  </a>
                </li>
                @endif
                @if((session()->get('logininfo.type'))=="admin"||(session()->get('logininfo.type'))=="user")
                <li class="nav-item">
                  <a href="{{url('/quotesshow') }}" class="nav-link">
                    <i class="fa fa-user"></i>
                    <p>
                     Quotes Requests
                    </p>
                  </a>
                </li>
                @endif
                @if((session()->get('logininfo.type'))=="admin"||(session()->get('logininfo.type'))=="user")
                <li class="nav-item">
                  <a href="{{route('contactadmin') }}" class="nav-link">
                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                    <p>
                      Contact Us
                    </p>
                  </a>
                </li>
                @endif
                <li class="nav-item">
                  <a href="{{route('logout')}}" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>
                      Signout
                    </p>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </aside>