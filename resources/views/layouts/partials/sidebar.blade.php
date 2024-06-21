{{-- Sidebar --}}
<div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Pendataan Pegawai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-lg-flex flex-column pt-3 vh-sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-3 mx-3 mb-3 btn btn-primary" aria-current="page"
                    href="{{ route('dashboard.index') }}">
                    <i class="fa-solid fa-house"></i>
                    <b>Dashboard</b>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-3 mx-3 mb-3 btn btn-primary"
                    href="{{ route('pegawai.index') }}">
                    <i class="fa-solid fa-users"></i>
                    <b>Data Pegawai</b>
                </a>
            </li>
        </ul>
    </div>
    <hr>
    <a class="mx-3 py-2 mb-3 d-flex align-items-center gap-3 btn btn-danger" href="#">
        <i class="fa-solid fa-right-from-bracket"></i>
        <b>Logout</b>
    </a>
</div>
