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
            <a class="nav-link" href="{{ session()->has('admin_id') ? route('dashboard.index') : (session()->has('siswa_id') ? route('siswa.dashboard') : '#') }}">
                <svg class="nav-icon">
                    <use xlink:href="/node_modules/free.svg#cil-speedometer"></use>
                </svg> Dashboard
            </a>
        </li>

        {{-- user admin --}}
        {{-- ================= PENILAIAN GANJIL ================= --}}
        @if (session()->has('admin_id') || session()->has('siswa_id'))
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-book"></use>
                    </svg>
                    Penilaian Ganjil
                </a>
                <ul class="nav-group-items compact">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ session()->has('admin_id') ? route('ganjil.nilai-murni') : (session()->has('siswa_id') ? route('siswa.ganjil-nilai-murni') : '#') }}">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span>
                            PSTS : Nilai Murni
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ session()->has('admin_id') ? route('ganjil.rapor') : (session()->has('siswa_id') ? route('siswa.ganjil-rapor') : '#') }}">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span>
                            PSAS : Rapor
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-book"></use>
                    </svg>
                    Penilaian Genap
                </a>
                <ul class="nav-group-items compact">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ session()->has('admin_id') ? route('genap.nilai-murni') : (session()->has('siswa_id') ? route('siswa.genap-nilai-murni') : '#') }}">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span>
                            PSTS : Nilai Murni
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ session()->has('admin_id') ? route('genap.rapor') : (session()->has('siswa_id') ? route('siswa.genap-rapor') : '#') }}">
                            <span class="nav-icon">
                                <span class="nav-icon-bullet"></span>
                            </span>
                            PSAS : Rapor
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        {{-- ================= MASTER (ADMIN ONLY) ================= --}}
        @if (session()->has('admin_id'))
            <li class="nav-title text-white mt-0">MASTER</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('presensi.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-speedometer"></use>
                    </svg>
                    Presensi
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('siswa.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="/node_modules/free.svg#cil-user"></use>
                    </svg>
                    Siswa
                </a>
            </li>
        @endif

    </ul>

    <div class="sidebar-footer border-top d-none d-md-flex">
        <a href="/logout" class="btn btn-sm btn-danger w-100 text-white">Logout</a>
    </div>

</div>
