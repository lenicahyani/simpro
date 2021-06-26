<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">SIMPRO</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Home</li>
              <li class="nav-item dropdown">
                <a  href="{{route('dashboard')}}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>                
              </li>
              <li class="menu-header">Master</li>              
                <!-- {{route('worker')}} agar jika routnya di ganti nama routnya tidak masalah tidak diganti  -->
                </li><li class="active"><a class="nav-link" href="{{route('worker')}}"><i class="fas fa-cong"></i> <span>Worker</span></a></li> 
                </li><li class="active"><a class="nav-link" href="{{route('customer')}}"><i class="fas fa-users"></i> <span>Customer</span></a></li> 
                </li><li class="active"><a class="nav-link" href="{{route('proyek')}}"><i class="fas fa-book"></i> <span>Proyek</span></a></li> 
                </li><li class="active"><a class="nav-link" href="{{route('pembayaran')}}"><i class="fas fa-credit-card"></i> <span>Pembayaran</span></a></li>                      
                </li><li class="active"><a class="nav-link" href="{{route('indexgaji')}}"><i class="fas fa-money-bill-alt"></i> <span>Gaji Pegawai</span></a></li>                              
                <!-- </li><li class="active"><a class="nav-link" href="{{route('upload')}}"><i class="far fa-square"></i> <span>Upload</span></a></li>                               -->
                
        </aside>
      </div>