<img src="Image/background-antri.png" class="background-page5">
<nav>
    <ul class="nav p-3 justify-content-between">
        <li class="logo-image">
            <img src="Image/Logocontoh.png" />
        </li>
        <ul class="nav nav-underline justify-content-center antrian">
            <li class="nav-item me-5">
                <a style="color: #7FA091" class="nav-link {{ request()->is('data') ? 'active' : '' }}"
                    href="/data">Antrian Anda</a>
            </li>
            <li class="nav-item ms-5">
                <a style="color: #7FA091" class="nav-link {{ request()->is('hlmantrian') ? 'active' : '' }}"
                    href="/hlmantrian">Lihat Antrian</a>
            </li>
        </ul>
        <li class="antrismart">
            <a><strong>AntriSmart</strong></a>
        </li>
    </ul>
</nav>
