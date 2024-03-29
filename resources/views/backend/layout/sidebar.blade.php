<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index') }}" class="brand-link">
      
      <span class="brand-text font-weight-light"> Appoinrment dashboard - Connect With Dr. Atiq</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
      @php
      $prefix = Request::route()->getPrefix();
      $route = Request::route()->getName();
      @endphp
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link active" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>


            </ul>
          </li>
         <hr>
        <li class="nav-item">
            <a href="{{route('doctor.index')}}" class="nav-link {{$route == 'doctor.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Doctor List
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link {{$route == 'category.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                category List
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('slot.index')}}" class="nav-link {{$route == 'slot.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Slot List
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('package.index')}}" class="nav-link {{$route == 'package.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Package List
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('payment.index')}}" class="nav-link {{$route == 'payment.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Payment Method List
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('appointment.index')}}" class="nav-link {{$route == 'appointment.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Appointment List
                
              </p>
            </a>
          </li>

         <hr>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>