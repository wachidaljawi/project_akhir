<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://ui-avatars.com/api/?name=Best+Travel" height="35" class="brand-image img-circle elevation-3">
      {{-- <img src="{{asset ('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light ml-1">Best Travel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link @yield('Dashboard')">
                <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('Travel_package')" href="{{ route('travel_package.index') }}">
                <i class="nav-icon fas fa-fw fa-hotel"></i>
                <p>
                    Paket Travel
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('Gallery')" href="{{ route('gallery.index') }}">
                  <i class="nav-icon fas fa-fw fa-images"></i>
                  <p>Galeri Travel</p>
                </a>
            </li>
            
              <li class="nav-item">
                <a class="nav-link @yield('Transaction')" href="{{ route('transaction.index') }}">
                  <i class="nav-icon fas fa-fw fa-dollar-sign"></i>
                  <p>Transaksi</p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>