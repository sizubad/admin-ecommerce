@include('admin.include.css')
@include('admin.include.script')     
      <!-- Sidebar Start -->
       <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <a href="{{ url('admin.include.index') }}" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Jhon Doe</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="{{ url('/') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    
                </div>
                <a href="{{ url('admin/produk') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Produk</a>
                <a href="{{ url('admin/kategori') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Kategori</a>
                <a href="{{ url('admin/transaksi') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Transaksi</a>
                <a href="{{ url('admin/akun') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Akun</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->