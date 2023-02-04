<div class="sidebar-wrapper h-100">
    <nav class="sidebar-main m-b-25">
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
                        <h6>Data</h6>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="users"></i>
                        <span>Data Alumni</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{url('/dashboard/dataalumni')}}">
                                
                                Tabel Data Alumni
                            </a>
                        </li>
                        @can('create data alumni')
                        <li>
                            <a href="{{url('/dashboard/dataalumni/tambah-data-alumni')}}">
                                
                                Tambah Data 
                            </a>
                        </li>
                        @endcan
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
                                
                                Daftar Berita
                            </a>
                        </li>
                        @can('create berita')
                        <li>
                            <a href="{{url('/dashboard/berita/tambah-berita')}}">
                                
                                Tambah Berita 
                            </a>
                        </li>
                            
                        @endcan
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
                                
                                Daftar Artikel
                            </a>
                        </li>
                        @can('create artikel')
                        <li>
                            <a href="{{url('/dashboard/artikel/tambah-artikel')}}">
                                Tambah Artikel 
                            </a>
                        </li>
                            
                        @endcan
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
                                
                                Daftar Lowongan Kerja
                            </a>
                        </li>
                        @can('create lowongan kerja')
                        <li>
                            <a href="{{url('/dashboard/lowonganKerja/tambah-lowongan-kerja')}}">
                                
                                Tambah Lowongan Kerja
                            </a>
                        </li>
                            
                        @endcan
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
                                
                                Daftar Kegiatan
                            </a>
                        </li>
                        @can('create kegiatan')
                        <li>
                            <a href="{{url('/dashboard/kegiatan/tambah-kegiatan')}}">
                                
                                Tambah Kegiatan
                            </a>
                        </li>
                            
                        @endcan
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
                            <a href="{{url('dashboard/kuisioner')}}">
                                Beranda
                            </a>
                        </li>
                        @can('create kuisioner')
                        <li>
                            <a href="{{url('#')}}">
                                Tambah Kuisioner
                            </a>
                        </li>
                        @endcan
                    </ul>
                        
                    
                </li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>