<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Form Pengajuan Sertifikasi Kelompok 2 | PERDAMI | Resertifikasi Dokter Spesialis Mata</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url() ?>assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/plugins/sweetalert2/sweetalert2.min.css">

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url() ?>assets/css/codebase.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/basic.min.css') ?>">

        <script type="text/javascript" src="<?php echo base_url('assets/jquery.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/dropzone.min.js') ?>"></script>

        <style type="text/css">

        body{
            background-color: #E8E9EC;
        }

        .dropzone {
            margin-top: 100px;
            border: 2px dashed #0087F7;
        }

        </style>
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-inverse main-content-boxed">

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="index">
                                        <img class="img-logo-login" src="<?php echo base_url() ?>assets/media/logo-login.png">
                                        <span class="font-size-xl text-primary-dark">PERDAMI </span><br/>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <?php
                                        if(!empty($profil))
                                            foreach ($profil as $row){ ?>
                                                <img class="img-avatar" src="<?php echo base_url('Upload/foto/'.$row->foto)?>" alt="Foto">
                                            <?php } else { ?>
                                                <img class="img-avatar" src="<?php echo base_url() ?>assets/media/avatars/avatar-full.jpg" alt="" style="height: 270px;object-fit: cover;">
                                            <?php } ?> alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="profil">
                                    <?php
                                        if(!empty($profil))
                                            foreach ($profil as $row){ ?>
                                                <img class="img-avatar" src="<?php echo base_url('Upload/foto/'.$row->foto)?>" alt="Foto">
                                            <?php } else { ?>
                                                <img class="img-avatar" src="<?php echo base_url() ?>assets/media/avatars/avatar-full.jpg" alt="" style="height: 270px;object-fit: cover;">
                                            <?php } ?>
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="profil"><?php echo $this->session->userdata("user_nama") ?></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/dashboard/profil"><i class="si si-user"></i><span class="sidebar-mini-hide">Profil anda</span></a>
                                </li>
                                <li>
                                    <a class="active" href="<?php echo base_url() ?>index.php/dashboard/pengajuan_sertifikasi"><i class="fa fa-file-text-o"></i><span class="sidebar-mini-hide">Pengajuan sertifikasi</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/dashboard/status_pengajuan"><i class="si si-check"></i><span class="sidebar-mini-hide">Status pengajuan</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/dashboard/pengaturan"><i class="si si-settings"></i><span class="sidebar-mini-hide">Pengaturan</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block"><?php echo $this->session->userdata("user_nama") ?></span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                                <a class="dropdown-item" href="profil">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <a class="dropdown-item" href="pengaturan" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-flag"></i>
                                <span class="badge badge-danger badge-pill"><?php 
                                                $sesi =  $this->session->userdata("user_id");
                                                $condition = " id_status='$sesi' ";     
                                                $this->db->select('COUNT');
                                                $this->db->like('tanggal');
                                                $this->db->from('status');
                                                $this->db->where($condition);
                                                echo $this->db->count_all_results();
                                                ?></span></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                                <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                                <ul class="list-unstyled my-20">
                                    <?php
                                    if(!empty($cek_notifikasi))
                                    foreach ($cek_notifikasi as $row){ ?> 
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <b class="mb-0">Status Pengajuan</b>
                                                <p class="mb-0"><?php echo $row->status; ?></p>
                                                <p class="mb-0"><?php echo $row->keterangan; ?></p>   
                                                <div class="text-muted font-size-sm font-italic"><?php echo $row->tanggal; ?></div>
                                            </div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center mb-0" href="status_pengajuan">
                                    <i class="fa fa-flag mr-5"></i> View All
                                </a>
                            </div>
                        </div>
                        <!-- END Notifications -->

                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <nav class="breadcrumb bg-white push">
                        <a class="breadcrumb-item" href="pengajuan_sertifikasi">Pengajuan Sertifikasi</a>
                        <span class="breadcrumb-item active">Form pengajuan sertifikasi (Kelompok 2)</span>
                    </nav>
                    <h2 class="content-heading" style="padding-top: 15px;">Form pengajuan sertifikasi (Kelompok 2)</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Progress Wizard -->
                            <div class="js-wizard-simple block">
                                <!-- Step Tabs -->
                                <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#wizard-progress-step1" data-toggle="tab">Rekomendasi Ketua Cabang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#wizard-progress-step2" data-toggle="tab">Kursus/Pelatihan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#wizard-progress-step3" data-toggle="tab">Karya Ilmiah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#wizard-progress-step4" data-toggle="tab">Jumlah Operasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#wizard-progress-step5" data-toggle="tab">Kualitas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#wizard-progress-step6" data-toggle="tab">Konfirmasi kebenaran data</a>
                                    </li>
                                </ul>
                                <!-- END Step Tabs -->

                                <!-- Form -->
                                <?php if(isset($error)) { echo $error; }; ?>
                                 <form action="<?php echo base_url() ?>index.php/dashboard/submit_status_kelompok_2" onsubmit="return confirm('Apakah data anda sudah benar, ingin mengunggahnya sekarang?')" method="post">
                                    <!-- Wizard Progress Bar -->
                                    <div class="block-content block-content-sm">
                                        <div class="progress" data-wizard="progress" style="height: 8px;">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!-- END Wizard Progress Bar -->

                                    <!-- Steps Content -->
                                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                                        <!-- Step 1 -->
                                        <div class="tab-pane active" id="wizard-progress-step1" role="tabpanel">
                                            <h2 class="content-heading">Rekomendasi Ketua Perdami Cabang</h2>
                                            <p class="text-muted">Silakan upload rekomendasi dari Ketua Perdami Cabang</p>
            <!-- DropZone JS -->            <p class="dropzone" id="dropzone_ketua_cabang"></p>
                                            <div class="form-group row"></div>
                                            <hr/>
                                            <div id="tabel-ketua-cabang"></div>
                                        </div>
                                        <!-- END Step 1 -->

                                        <!-- Step 2 -->
                                        <div class="tab-pane" id="wizard-progress-step2" role="tabpanel">
                                            <h2 class="content-heading">Kursus/ Pelatihan di Bidang Fakoemulsifikasi</h2>
                                            <p class="text-muted">Silakan upload sertifikat kursus atau pelatihan di bidang fakoemulsifikasi</p>
            <!-- DropZone JS -->            <p class="dropzone" id="dropzone_kursus"></p>               
                                            <div class="form-group row">
                                            </div>
                                            <hr/>
                                            <div id="tabel-kursus"></div>
                                        </div>
                                        <!-- END Step 2 -->

                                        <!-- Step 3 -->
                                        <div class="tab-pane" id="wizard-progress-step3" role="tabpanel">
                                            <h2 class="content-heading">Karya Ilmiah</h2>
                                            <p class="text-muted">Silakan upload karya ilmiah terkait yang pernah dipublikasikan</p>
            <!-- DropZone JS -->            <p class="dropzone" id="dropzone_karya_ilmiah"></p>                           
                                            <div class="form-group row">
                                            </div>
                                            <hr/>
                                            <div id="tabel-karya-ilmiah"></div>
                                        </div>
                                        <!-- END Step 3 -->
                                        <!-- Step 4 -->
                                        <div class="tab-pane" id="wizard-progress-step4" role="tabpanel">
                                            <h2 class="content-heading">Jumlah Operasi Fakoemulsifikasi</h2>
                                            <p class="text-muted">Silakan upload bukti jumlah tindakan bedah fakoemulsifikasi yang pernah dilakukan, dengan pengesahan dari Direktur rumah sakit. (<b>Pengesahan dari Direktur RS di atas materai 6000</b>)</p>
            <!-- DropZone JS -->            <p class="dropzone" id="dropzone_jumlah_operasi"></p>
                                            <div class="form-group row">
                                            </div>
                                            <hr/>
                                            <div id="tabel-jumlah-operasi"></div>
                                        </div>
                                        <!-- END Step 4 -->
                                       <!-- Step 5 -->
                                        <div class="tab-pane" id="wizard-progress-step5" role="tabpanel">
                                            <h2 class="content-heading">Frekuensi Komplikasi dan Komplain dari pasien</h2>
                                            <p class="text-muted">Silakan upload surat keterangan dari Direktur RS dengan <b>pengesahan di atas materai 6000</b></p>
            <!-- DropZone JS -->            <p class="dropzone" id="dropzone_kualitas"></p>
                                            <div class="form-group" style="margin-bottom:30px;">
                                            </div>
                                            <div class="form-group row">
                                            </div>
                                            <hr/>
                                            <div id="tabel-kualitas"></div>
                                        </div>
                                        <!-- END Step 5 -->
                                       <!-- Step 6 -->
                                        <div class="tab-pane" id="wizard-progress-step6" role="tabpanel">
                                            <h2 class="content-heading">Konfirmasi kebenaran data</h2>
                                            <p class="text-muted">Semua informasi yang saya sampaikan adalah benar, apabila di kemudian hari terdapat ketidaksesuaian informasi saya bersedia menerima sangsi berupa pencabutan sertifikat kompetensi.</p>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                                <input type="checkbox" class="custom-control-input" id="signup-terms" name="term" value="<?=set_value('term')?>" required>
                                                <small class="text-danger"><?=form_error('term')?></small>
                                                <label class="custom-control-label" for="signup-terms">Saya menyetujuinya dan saya menjamin bahwa data yang saya upload adalah benar</label>
                                                </div>
                                        </div>
                                        <!-- END Step 6 -->
                                    </div>
                                    <!-- END Steps Content -->

                                    <!-- Steps Navigation -->
                                    <div class="block-content block-content-sm block-content-full bg-body-light">
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                                    <i class="fa fa-angle-left mr-5"></i> Sebelumnya
                                                </button>
                                            </div>
                                            <div class="col-6 text-right">
                                                <button type="button" class="btn btn-primary" data-wizard="next">
                                                    Selanjutnya <i class="fa fa-angle-right ml-5"></i>
                                                </button>
                                                <input class=" btn btn-success" data-wizard="finish" type="submit" name="submit" value="submit">  
                                                <!-- <a href="<?php echo base_url() ?>index.php/dashboard/submit_status_kelompok_2" class="js-swal-success btn btn-success" data-wizard="finish" ><i class="fa fa-check mr-5"></i> Submit</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo form_close();?>
                                    <!-- END Steps Navigation -->
                                </form>
                                <!-- END Form -->
                            </div>
                            <!-- END Progress Wizard -->
                        </div>
                    </div>

                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        <a class="font-w600" href="" target="_blank">Gamatechno</a> &copy; <span class="js-year-copy">2018</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->
        <!-- refresh tabel otomatis -->
        <script>
           $(document).ready(function() {
               $("#tabel-ketua-cabang").load("<?php echo base_url() ?>index.php/dashboard/tabel_ketua_cabang");
               var refreshId = setInterval(function() {
                  $("#tabel-ketua-cabang").load('<?php echo base_url() ?>index.php/dashboard/tabel_ketua_cabang?randval='+ Math.random());
              }, 1000);
               $.ajaxSetup({ cache: false });
           });
        </script>
        <script>
           $(document).ready(function() {
               $("#tabel-kursus").load("<?php echo base_url() ?>index.php/dashboard/tabel_kursus");
               var refreshId = setInterval(function() {
                  $("#tabel-kursus").load('<?php echo base_url() ?>index.php/dashboard/tabel_kursus?randval='+ Math.random());
              }, 1000);
               $.ajaxSetup({ cache: false });
           });
        </script>
        <script>
           $(document).ready(function() {
               $("#tabel-karya-ilmiah").load("<?php echo base_url() ?>index.php/dashboard/tabel_karya_ilmiah");
               var refreshId = setInterval(function() {
                  $("#tabel-karya-ilmiah").load('<?php echo base_url() ?>index.php/dashboard/tabel_karya_ilmiah?randval='+ Math.random());
              }, 1000);
               $.ajaxSetup({ cache: false });
           });
        </script>
        <script>
           $(document).ready(function() {
               $("#tabel-jumlah-operasi").load("<?php echo base_url() ?>index.php/dashboard/tabel_jumlah_operasi");
               var refreshId = setInterval(function() {
                  $("#tabel-jumlah-operasi").load('<?php echo base_url() ?>index.php/dashboard/tabel_jumlah_operasi?randval='+ Math.random());
              }, 1000);
               $.ajaxSetup({ cache: false });
           });
        </script>
        <script>
           $(document).ready(function() {
               $("#tabel-kualitas").load("<?php echo base_url() ?>index.php/dashboard/tabel_kualitas");
               var refreshId = setInterval(function() {
                  $("#tabel-kualitas").load('<?php echo base_url() ?>index.php/dashboard/tabel_kualitas?randval='+ Math.random());
              }, 1000);
               $.ajaxSetup({ cache: false });
           });
        </script>
        <!-- End tabel refresh otomatis -->

        <script>
            Dropzone.autoDiscover = false;

            var file_upload= new Dropzone("#dropzone_ketua_cabang",{
                url: "<?php echo base_url('index.php/dashboard/proses_upload_4') ?>",
                maxFilesize: 10,
                method:"post",
                acceptedFiles:"application/pdf,.psd,.doc,.docx,.jpg,.jpeg,.png",
                paramName:"userfile",
                dictInvalidFileType:"Type file ini tidak dizinkan",
                addRemoveLinks:false,
            });

            var file_upload= new Dropzone("#dropzone_kursus",{
                url: "<?php echo base_url('index.php/dashboard/proses_upload_5') ?>",
                maxFilesize: 10,
                method:"post",
                acceptedFiles:"application/pdf,.psd,.doc,.docx,.jpg,.jpeg,.png",
                paramName:"userfile",
                dictInvalidFileType:"Type file ini tidak dizinkan",
                addRemoveLinks:false,
            });

            var file_upload= new Dropzone("#dropzone_karya_ilmiah",{
                url: "<?php echo base_url('index.php/dashboard/proses_upload_6') ?>",
                maxFilesize: 10,
                method:"post",
                acceptedFiles:"application/pdf,.psd,.doc,.docx,.jpg,.jpeg,.png",
                paramName:"userfile",
                dictInvalidFileType:"Type file ini tidak dizinkan",
                addRemoveLinks:false,
            });

            var file_upload= new Dropzone("#dropzone_jumlah_operasi",{
                url: "<?php echo base_url('index.php/dashboard/proses_upload_7') ?>",
                maxFilesize: 10,
                method:"post",
                acceptedFiles:"application/pdf,.psd,.doc,.docx,.jpg,.jpeg,.png",
                paramName:"userfile",
                dictInvalidFileType:"Type file ini tidak dizinkan",
                addRemoveLinks:false,
            });

            var file_upload= new Dropzone("#dropzone_kualitas",{
                url: "<?php echo base_url('index.php/dashboard/proses_upload_8') ?>",
                maxFilesize: 10,
                method:"post",
                acceptedFiles:"application/pdf,.psd,.doc,.docx,.jpg,.jpeg,.png",
                paramName:"userfile",
                dictInvalidFileType:"Type file ini tidak dizinkan",
                addRemoveLinks:false,
            });

        </script>

        <!-- Codebase Core JS -->
        <script src="<?php echo base_url() ?>assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery-scrollLock.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/codebase.js"></script>


        <!-- Page JS Plugins -->
        <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
        <script src="<?php echo base_url() ?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/plugins/jquery-validation/additional-methods.js"></script>
        <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/plugins/es6-promise/es6-promise.auto.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/plugins/sweetalert2/sweetalert2.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url() ?>assets/js/pages/be_forms_wizard.js"></script>
        <script src="<?php echo base_url() ?>assets/js/pages/be_ui_activity.js"></script>

        <!-- Page JS Helpers (BS Notify Plugin) -->
        <script>jQuery(function(){ Codebase.helpers('notify'); });</script>

    </body>
</html>