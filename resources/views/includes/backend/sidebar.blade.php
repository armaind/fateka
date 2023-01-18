<div class="sidebar-wrapper h-100">
    <nav class="sidebar-main">
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn">
                    <a href="#">
                        <img class="img-fluid" src="#" alt="">
                    </a>
                    <div class="mobile-back text-right">
                        <span>Back</span>
                        <i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="sidebar-list">
                      <a class="sidebar-link sidebar-title link-nav" href="{{url('/')}}">
                        <img src="\landio\assets\img\logotk.png" alt="logo" width="60">
                      </a>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('dashboard')}}">
                        <i data-feather="grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Informasi Alumni</h6>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="users"></i>
                        <span>Data Alumni</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/dataAlumni')}}">
                                <i data-feather="server"></i>
                                Tabel Data Alumni
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/data-alumni/tambah-data-alumni')}}">
                                <i data-feather="plus-circle"></i>
                                Tambah Data 
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Publikasi</h6>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="file-text"></i>
                        <span>Berita</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/berita')}}">
                                <i data-feather="list"></i>
                                List Berita
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/berita/tambah-berita')}}">
                                <i data-feather="file-plus"></i>
                                Tambah Berita 
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="book-open"></i>
                        <span>Artikel</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/artikel')}}">
                                <i data-feather="list"></i>
                                List Artikel
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/')}}">
                                <i data-feather="file-plus"></i>
                                Tambah Artikel 
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Karir</h6>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="briefcase"></i>
                        <span>Lowongan Kerja</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/lowonganKerja')}}">
                                <i data-feather="server"></i>
                                Tabel Loker
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/')}}">
                                <i data-feather="plus-circle"></i>
                                Tambah Loker
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Program</h6>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="cast"></i>
                        <span>Kegiatan</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/kegiatan')}}">
                                <i data-feather="server"></i>
                                Daftar Kegiatan
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dashboard/kegiatan')}}">
                                <i data-feather="plus-circle"></i>
                                Tambah Kegiatan
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Pertemuan</h6>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="video"></i>
                        <span>Virtual Meeting</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{url('/dashboard/virtual-meeting/skyoffice')}}">Skyoffice</a></li>
                    </ul>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Survei</h6>
                    </div>
                </li>
                
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="edit"></i>
                        <span>Kuisioner</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/')}}">
                                <i data-feather="plus-circle"></i>
                                Tambah Kuisioner
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>