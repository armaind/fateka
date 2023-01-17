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
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/schedules')}}">
                        <i data-feather="users"></i>
                        <span>Data Alumni</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/jadwal-pelajaran/atur-jadwal')}}">
                        <i data-feather="users"></i>
                        <span>Tambah Data Alumni</span>
                    </a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Publikasi</h6>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/artikel')}}">
                        <i data-feather="file-text"></i>
                        <span>Artikel</span>
                    </a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Karir</h6>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard/notes')}}">
                        <i data-feather="briefcase"></i>
                        <span>Lowongan Kerja</span>
                    </a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Kegiatan</h6>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <i data-feather="mic"></i>
                        <span>Alumni Sharing Session</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <i data-feather="gift"></i>
                        <span>Charity</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <i data-feather="share-2"></i>
                        <span>Pengabdian</span>
                    </a>
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
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <i data-feather="edit"></i>
                        <span>Kuisioner</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>