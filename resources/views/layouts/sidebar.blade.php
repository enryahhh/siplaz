<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{route('dashboard-admin')}}">SIPLAZ</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('dashboard-admin')}}">LJ</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Menu</li>
              <li class="nav-item  @if(Route::currentRouteName() == 'dashboard-admin') active @endif">
                <a href="{{route('dashboard-admin')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="nav-item">
                <a href="{{route('barang.index')}}" class="nav-link"><i class="fas fa-list-alt"></i></i><span>Data Barang</span></a>
              </li>
              <li class="nav-item">
                <a href="{{route('pembeli.index')}}" class="nav-link"><i class="fas fa-users"></i><span>Data Pelanggan</span></a>
              </li>
              {{-- <li class="nav-item  @if(Route::currentRouteName() == 'transaksi-admin') active @endif"> --}}
                <li><a href="{{route('tagihan.index')}}" class="nav-link"><i class="fas fa-money-bill-wave"></i><span>Data Tagihan</span></a>
              </li>
              <li class="nav-item">
                <a href="{{route('pengaturan')}}" class="nav-link"><i class="fas fa-cog"></i><span>Pengaturan</span></a>
              </li>
              {{-- <li class="nav-item  @if(Route::currentRouteName() == 'admin.checkout-view') active @endif">
                <a href="{{route('ongkir.view')}}" class="nav-link"><i class="fas fa-truck-moving"></i><span>Ongkir</span></a>
              </li> --}}
            </ul>           
        </aside>
      </div>