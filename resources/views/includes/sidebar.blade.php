   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
  <div class="sidebar-brand-text mx-3">Trail Finder</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Travel Manager
</div>

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="{{ route('dashboard') }}">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Dashboard</span></a>
</li>

<!-- Nav Item - Paket Travel -->
<li class="nav-item">
  <a class="nav-link" href="{{ route('travel-package.index') }}">
    <i class="fas fa-fw fa-hotel"></i>
    <span>Paket Travel</span></a>
</li>

<!-- Nav Item - Galeri -->
<li class="nav-item">
  <a class="nav-link" href="{{ route('gallery.index') }}">
    <i class="fas fa-fw fa-images"></i>
    <span>Galeri</span></a>
</li>

<!-- Nav Item - Transaksi -->
<li class="nav-item">
  <a class="nav-link" href="{{ route('transaction.index') }}">
    <i class="fas fa-fw fa-dollar-sign"></i>
    <span>Transaksi</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->