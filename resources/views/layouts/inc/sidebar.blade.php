<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Team A<sup><i class="fa-solid fa-heart"></i></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('hocsinh') }}">
            <i class="fa-solid fa-users"></i>
            <span>Students</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('kurasu') }}">
            <i class="fa-solid fa-book-user"></i>
            <span>Class</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('subject') }}">
            <i class="fa-solid fa-book-user"></i>
            <span>Subjects</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('type') }}">
            <i class="bi bi-book fs-5"></i>
            <span>Type Of Grades</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('attendance') }}">
            <i class="fa-solid fa-book-user"></i>
            <span>Attendances</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('grades') }}">
            <i class="bi bi-mortarboard-fill fs-5"></i>
            <span>Grades</span>
        </a>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
