<div class="d-flex flex-column flex-shrink-0 sidebar p-3 text-white" style="width: 280px;">
    <div class="sidebar-header d-flex flex-column justify-content-center align-items-center">
        <img src="Image/profil-admin.png" class="profil-admin text-center">
        Admin Loket 1
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/panggil" class="nav-link text-white {{ Request::is('panggil') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="/panggil"></use>
                </svg>
                Panggil Antrian
            </a>
        </li>
        
        <li>
            <a href="/Login" class="nav-link text-white {{ Request::is('Login') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="/Login"></use>
                </svg>
                Keluar
            </a>
        </li>
    </ul>
    <hr>
</div>
