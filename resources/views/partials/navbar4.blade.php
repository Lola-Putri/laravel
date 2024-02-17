{{-- <img src="Image/background-data.png" class="background-page4"> --}}
<img src="Image/bg-loket1.png" class="bg-loket1">
<img src="Image/bg-loket2.png" class="bg-loket2">
<img src="Image/kotak-loket.png" class="kotak-loket">
<nav>
    <ul class="nav p-3 justify-content-between">
        <li class="logo-image">
            <img src="Image/Logocontoh.png" />
        </li>
        <ul class="nav nav-underline justify-content-center antrian">
            <li class="nav-item1 me-5">
                <a style="color: #7FA091" class="nav-link {{ request()->is('data') ? 'active' : '' }}"
                    href="/data">Antrian Anda</a>
            </li>
            <li class="nav-item2 ms-5">
                <a style="color: #7FA091" class="nav-link {{ request()->is('hlmantrian') ? 'active' : '' }}"
                    href="/hlmantrian">Lihat Antrian</a>
            </li>
        </ul>
        <li class="antrismart">
            <a><strong>AntriSmart</strong></a>
        </li>
    </ul>
</nav>
