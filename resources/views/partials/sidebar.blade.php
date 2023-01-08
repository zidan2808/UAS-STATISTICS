<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-white sidebar sidebar-light accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
        <div class="sidebar-brand-icon text-info">
            <!-- <i class="fa fa-layer-group "></i> -->
            <img src="{{ asset('backend/img/CS LOGO.png') }}" width="70px" alt="">
        </div>
        <img class="sidebar-brand-text" src="{{ asset('backend/img/CS.png') }}" alt="">
        <!-- <div class="sidebar-brand-text">DASHBOARD STUDENTS TI</div> -->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active ">
        <a class="nav-link text-dark" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt text-dark"></i>
            <span class="text-uppercase">Dashboard Admin</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-secondary">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog text-dark"></i>
            <span class="text-dark font-weight-bold">Management Tables</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded text-dark">
                <h6 class="collapse-header text-dark">Tables</h6>
                <a class="collapse-item text-secondary" href="{{ route('categories.index')}}">Study Program</a>
                <a class="collapse-item text-secondary" href="{{ route('tags.index')}}">Class</a>
                <a class="collapse-item text-secondary" href="{{ route('products.index')}}">Students</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Message -->
    <!-- <div class="sidebar-card d-none d-lg-flex bg-light">
        <p class="text-center text-dark mb-2"><strong>Copyright</strong> <br> Darmawan Jiddan <br> 2115101013 <br> IKI/SMT 3</p>
    </div> -->
</ul>
<!-- End of Sidebar -->
