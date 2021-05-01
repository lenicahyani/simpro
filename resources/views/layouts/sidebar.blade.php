<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">SIMPRO</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a  href="{{route('dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                  <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul>
              </li>
              <li class="menu-header">Master</li>              
                <!-- {{route('worker')}} agar jika routnya di ganti nama routnya tidak masalah tidak diganti  -->
                </li><li class="active"><a class="nav-link" href="{{route('worker')}}"><i class="far fa-square"></i> <span>Worker</span></a></li> 
                </li><li class="active"><a class="nav-link" href="{{route('customer')}}"><i class="far fa-square"></i> <span>Customer</span></a></li> 
                </li><li class="active"><a class="nav-link" href="{{route('proyek')}}"><i class="far fa-square"></i> <span>Proyek</span></a></li> 
                </li><li class="active"><a class="nav-link" href="{{route('pembayaran')}}"><i class="far fa-square"></i> <span>Pembayaran</span></a></li>                      
                </li><li class="active"><a class="nav-link" href="{{route('gaji')}}"><i class="far fa-square"></i> <span>Gaji Pegawai</span></a></li>                              
                
        </aside>
      </div>