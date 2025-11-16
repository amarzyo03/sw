<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
    <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
            <svg class="sidebar-brand-full" width="88" height="32" alt="CoreUI Logo">
                <use xlink:href="/assets/brand/coreui.svg#full"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
                <use xlink:href="/assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
    </div>

    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item">
            <a class="nav-link" href="{{ session()->has('admin_id') ? '/dashboard' : '/user-siswa/dashboard' }}">
                <svg class="nav-icon">
                    <use xlink:href="/node_modules/free.svg#cil-speedometer"></use>
                </svg> Dashboard
            </a>
        </li>

        {{-- user admin --}}
        @if (session()->has('admin_id'))
            <li class="nav-title">PENILAIAN GANJIL</li>

            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-book"></use>
                    </svg>PSTS</a>
                <ul class="nav-group-items compact">
                    <li class="nav-item">
                        <a class="nav-link" href="/ganjil/psts/nilai-murni">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span> Nilai Murni
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-book"></use>
                    </svg>PSAS</a>
                <ul class="nav-group-items compact">
                    <li class="nav-item">
                        <a class="nav-link" href="/psts-ganjil">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span> Nilai Murni
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-book"></use>
                    </svg>RAPOR</a>
                <ul class="nav-group-items compact">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span> Recap
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nilai-rapor-ganjil">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span> Nilai
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/psts-ganjil">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span> Extra
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/psts-ganjil">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span> Ketidakhadiran
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-title">PENILAIAN GENAP</li>

            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-book"></use>
                    </svg>PSTS</a>
                <ul class="nav-group-items compact">
                    <li class="nav-item">
                        <a class="nav-link" href="/psts-ganjil">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span> Nilai Murni
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-book"></use>
                    </svg>PSAS</a>
                <ul class="nav-group-items compact">
                    <li class="nav-item">
                        <a class="nav-link" href="/psts-ganjil">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span> Nilai Murni
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/psts-ganjil">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span> DAFTAR NILAI
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-user"></use>
                    </svg> RAPORT
                </a>
            </li>

            <li class="nav-title">MASTER</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('siswa.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-user"></use>
                    </svg> Siswa
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('mapel.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-user"></use>
                    </svg> Mapel
                </a>
            </li>
        @endif
        {{-- End user admin --}}

        {{-- user --}}
        @if (session()->has('siswa_id'))
            <li class="nav-title">SCHOOL</li>

            <li class="nav-item">
                <a class="nav-link" href="/user-siswa/show">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-user"></use>
                    </svg> Profile
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/user-siswa/nilai-murni-psts-ganjil">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-book"></use>
                    </svg> Nilai PSTS Ganjil
                </a>
            </li>
        @endif
        {{-- end user --}}

    </ul>

    <div class="sidebar-footer border-top d-none d-md-flex">
        <a href="/logout" class="btn btn-sm btn-danger w-100 text-white">Logout</a>
    </div>

</div>
