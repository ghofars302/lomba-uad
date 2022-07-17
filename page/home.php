<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>SMA Negeri 1 Pringsewu | Home</title>
        <!-- MDB icon -->
        <link rel="icon" href="https://smansapringsewu.sch.id/wp-content/uploads/2019/07/favicon.png" type="image/x-icon" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- popper.min.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <!-- bootstrap 4 -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- MDB -->
        <?php
            if (isset($_COOKIE['theme']) and $_COOKIE['theme'] == 2) {
                echo '<link rel="stylesheet" href="/css/mdb.dark.min.css" />';
            } else {
                echo '<link rel="stylesheet" href="/css/mdb.light.min.css" />';
            }
        ?>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="/css/theme.css" />
    </head>
    <body>
        <!-- Start your project here-->
        <div class="bg"></div>
        <div id="preview" class="preview">
            <div style="display: none;"></div>
            <div>
                <div data-draggable="true" class="" style="position: relative;" draggable="false">
                    <!---->
                    <!---->
                    <section draggable="false" class="pt-0" data-v-271253ee="">
                        <section class="" style="padding-bottom: 1px;">
                            <!-- Navbar -->
                            <nav id="navbar_top" class="navbar navbar-expand-lg <?php isset($_COOKIE['theme']) and $_COOKIE['theme'] == 2 ? print ' navbar-dark bg-dark' : print 'navbar-light bg-white' ?> shadow-2 rounded-bottom">
                            <!-- Container wrapper -->
                            <div class="container-fluid container">
                                <!-- Toggle button -->
                                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                                </button>
                                <!-- Collapsible wrapper -->
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Navbar brand -->
                                    <a class="navbar-brand mt-2 mt-lg-0" draggable="false">
                                        <img src="/api/logo-img" height="50" alt="Logo" loading="lazy" aria-controls="#picker-editor" draggable="false">
                                    </a>
                                    <!-- Left links -->
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/" aria-controls="#picker-editor" draggable="false">Beranda</a>
                                        </li>
                                        <li class="nav-item dropdown z-index: 2000">
                                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                                <a class="dropdown-item" href="/profile/sejarah">Sejarah</a>
                                                <a class="dropdown-item" href="/profile/visi-misi">Visi & Misi</a>
                                                <a class="dropdown-item" href="/profile/struktur">Struktur Organisasi</a>
                                                <a class="dropdown-item" href="/profile/profile-guru">Profile Guru</a>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="/ekstrakurikuler" aria-controls="#picker-editor" draggable="false">Ektra Kurikuler</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/prestasi" aria-controls="#picker-editor" draggable="false">Prestasi/Berita</a>
                                        </li>
                                    </ul>
                                    <!-- Left links -->
                                </div>
                                <!-- Collapsible wrapper -->
                                <!-- Right elements -->
                                <div class="d-flex align-items-center">
                                    <!-- Icon -->
                                    <a class="text-reset me-3" href="https://mobile.twitter.com/smansa363" draggable="false">
                                        <i class="fab fa-twitter" aria-controls="#picker-editor"></i>
                                    </a>
                                    <a class="text-reset me-3" href="https://www.instagram.com/smansapringsewu/" draggable="false">
                                        <i class="fab fa-instagram" aria-controls="#picker-editor"> SMA Negeri 1 Pringsewu</i>
                                    </a>
                                </div>
                                <!-- Right elements -->
                            </div>
                            <!-- Container wrapper -->
                            </nav>
                            <!-- Navbar -->
                        </section>
                    </section>
                    <!---->
                </div>
                <div class="container <?php isset($_COOKIE['theme']) and $_COOKIE['theme'] == 2 ? print ' navbar-dark bg-dark' : print 'navbar-light bg-white' ?>">
                    <div id="carouselSchoolImages" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button
                                type="button"
                                data-mdb-target="#carouselSchoolImages"
                                data-mdb-slide-to="0"
                                class="active"
                                aria-current="true"
                                aria-label="Slide 1"
                                ></button>
                            <button
                                type="button"
                                data-mdb-target="#carouselSchoolImages"
                                data-mdb-slide-to="1"
                                aria-label="Slide 2"
                                ></button>
                            <button
                                type="button"
                                data-mdb-target="#carouselSchoolImages"
                                data-mdb-slide-to="2"
                                aria-label="Slide 3"
                                ></button>
                        </div>
                        <!-- Inner -->
                        <div class="carousel-inner shadow-4-strong parrallax-header">
                            <!-- Single item -->
                            <div class="carousel-item active">
                                <img src="/img/home-bg1.png" style="background-size: contain; height: 50%" class="d-block w-100" alt="Gerbang Sekolah"/>
                                <div class="carousel-caption">
                                    <h5 class="display-4" style="text-shadow: 1px 1px black">SEKOLAH PARA JUARA 363</h5>
                                    <p style="text-shadow: 1px 1px black">Akreditasi A, Address: Jl. Olahraga No.1, Pringsewu Bar., Kec. Pringsewu, Kabupaten Pringsewu, Lampung 35373</p>
                                </div>
                            </div>
                            <!-- Single item -->
                            <div class="carousel-item">
                                <img src="/img/home-bg2.png" style="background-size: contain; height: 70%" class="d-block w-100" alt="Guru dan OSIS senam"/>
                                <div class="carousel-caption">
                                <h5 class="display-4" style="text-shadow: 1px 1px black">SEKOLAH PARA JUARA 363</h5>
                                    <p style="text-shadow: 1px 1px black">Akreditasi A, Address: Jl. Olahraga No.1, Pringsewu Bar., Kec. Pringsewu, Kabupaten Pringsewu, Lampung 35373</p>
                                </div>
                            </div>
                            <!-- Single item -->
                            <div class="carousel-item">
                                <img src="/img/home-bg3.png" style="background-size: contain; height: 70%" class="d-block w-100" alt="Pemilihan ketua osis"/>
                                <div class="carousel-caption">
                                <h5 class="display-4" style="text-shadow: 1px 1px black">SEKOLAH PARA JUARA 363</h5>
                                    <p style="text-shadow: 1px 1px black">Akreditasi A, Address: Jl. Olahraga No.1, Pringsewu Bar., Kec. Pringsewu, Kabupaten Pringsewu, Lampung 35373</p>
                                </div>
                            </div>
                        </div>
                        <!-- Inner -->
                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselSchoolImages" data-mdb-slide="prev">
                            <span class="display-4">❮</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-mdb-target="#carouselSchoolImages" data-mdb-slide="next">
                            <span class="display-4">❯</span>
                        </button>
                    </div>
                </div>
                <div class="container pt-5 <?php isset($_COOKIE['theme']) and $_COOKIE['theme'] == 2 ? print ' navbar-dark bg-dark' : print 'navbar-light bg-white' ?>">
                    <h2 class="fw-bold mb-5 text-center">Organisasi Sekolah</h2>
                    <div class="row gx-lg-5 align-items-center mb-5">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light">
                                <img src="/img/osis.jpg" class="w-100" alt="" aria-controls="#picker-editor">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h3 class="fw-bold">OSIS (Organisasi Intra Sekolah)</h3>
                            <p class="text-muted">OSIS sebagai wadah bagi peserta didik di sekolah untuk mencapai tujuan pembinaan dan pengembangan siswa yang sesuai dengan visi-misi sekolah. Pengurus OSIS adalah peserta didik yang dipilih berdasarkan prestasi, dan keaktifan peserta didik di lingkungan sekolah. Menjadi pengurus OSIS harus mempunyai wawasan yang luas, pandai berinteraksi.</p>
                        </div>
                    </div>
                    <div class="row gx-lg-5 align-items-center mb-5 flex-lg-row-reverse">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="bg-image hover-overlay ripple shadow-4-strong rounded-4 mb-4" data-mdb-ripple-color="light">
                                <img src="/img/pramuka.jpg" class="w-100" alt="" aria-controls="#picker-editor">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h3 class="fw-bold">Pramuka</h3>
                            <p class="text-muted">Gerakan Pramuka Indonesia adalah nama organisasi pendidikan nonformal yang menyelenggarakan pendidikan kepanduan di Indonesia. Kata "Pramuka" merupakan singkatan dari Praja Muda Karana, yang memiliki arti Jiwa Muda yang Suka Berkarya. Tapi sebelum singkatan ini ditetapkan, kata Pramuka asalnya diambil oleh Sultan Hamengkubuwono IX dari kata "Poromuko" yang berarti pasukan terdepan dalam perang.</p>
                        </div>
                    </div>
                </div>
                <div class="container <?php isset($_COOKIE['theme']) and $_COOKIE['theme'] == 2 ? print ' navbar-dark bg-dark' : print 'navbar-light bg-white' ?> pt-5">
                    <h2 class="fw-bold mb-7 text-center">Berita Sekolah</h2>
                    <?php
                        $raw_json = file_get_contents("./js/news.json");
                        $file_contents = json_decode($raw_json, true);
                    ?>
                    <div class="row gx-lg-5">
                        <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">
                            <div class="card shadow-2-strong">
                                <div class="bg-image hover-overlay ripple shadow-4-strong rounded mx-3" data-mdb-ripple-color="light" style="margin-top: -15px">
                                    <?php
                                        $img = $file_contents[0]['Image'];
                                        echo '<img src="'.$img.'" class="card-img-top" alt="'.$file_contents[0]['Title'].'" aria-controls="#picker-editor">';
                                    ?>
                                </div>
                                <div class="card-body">
                                    <?php
                                        $title = $file_contents[0]['Title'];
                                        $desc = $file_contents[0]['Deskripsi'];

                                        echo '<h5 class="card-title">' . $title . '</h5>';
                                        echo '<p class="card-text">' . $desc . '</p>';
                                    ?>
                                    <a href="#!" class="btn  btn-primary btn-rounded" aria-controls="#picker-editor">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-6 mb-lg-0">
                            <div class="card shadow-2-strong">
                                <div class="bg-image hover-overlay ripple shadow-4-strong rounded mx-3" data-mdb-ripple-color="light" style="margin-top: -15px">
                                    <?php
                                        $img = $file_contents[1]['Image'];
                                        echo '<img src="'.$img.'" class="card-img-top" alt="'.$file_contents[1]['Title'].'" aria-controls="#picker-editor">';
                                    ?>
                                </div>
                                <div class="card-body">
                                    <?php
                                        $title = $file_contents[1]['Title'];
                                        $desc = $file_contents[1]['Deskripsi'];

                                        echo '<h5 class="card-title">' . $title . '</h5>';
                                        echo '<p class="card-text">' . $desc . '</p>';
                                    ?>
                                    <a href="#!" class="btn  btn-primary btn-rounded" aria-controls="#picker-editor">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-6 mb-lg-0">
                            <div class="card shadow-2-strong">
                                <div class="bg-image hover-overlay ripple shadow-4-strong rounded mx-3" data-mdb-ripple-color="light" style="margin-top: -15px">
                                    <?php
                                        $img = $file_contents[2]['Image'];
                                        echo '<img src="'.$img.'" class="card-img-top" alt="'.$file_contents[2]['Title'].'" aria-controls="#picker-editor">';
                                    ?>
                                </div>
                                <div class="card-body">
                                    <?php
                                        $title = $file_contents[2]['Title'];
                                        $desc = $file_contents[2]['Deskripsi'];

                                        echo '<h5 class="card-title">' . $title . '</h5>';
                                        echo '<p class="card-text">' . $desc . '</p>';
                                    ?>
                                    <a href="#!" class="btn  btn-primary btn-rounded" aria-controls="#picker-editor">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-draggable="true" class="" style="position: relative;">
                    <!---->
                    <!---->
                    <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
                        <section class="" style="padding-top: 1px;">
                            <!-- Navbar -->
                            <nav id="navbar_top" class="navbar navbar-expand-lg container <?php isset($_COOKIE['theme']) and $_COOKIE['theme'] == 2 ? print ' navbar-dark bg-dark' : print 'navbar-light bg-white' ?> shadow-2 rounded-bottom">
                            <!-- Container wrapper -->
                            <div class="container-fluid rounded-up">
                                <!-- Toggle button -->
                                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                                </button>
                                <!-- Collapsible wrapper -->
                                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                                    <!-- Left links -->
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" aria-controls="#picker-editor">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="" aria-controls="#picker-editor">Github</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="" aria-controls="#picker-editor">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/api/change-theme" aria-controls="#picker-editor">
                                            <?php
                                                if(isset($_COOKIE['theme']) and $_COOKIE['theme'] == 2){
                                                    echo 'Switch to 🔆 Light Theme';
                                                }else{
                                                    echo 'Switch to 🌙 Dark Theme';
                                                }
                                            ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Collapsible wrapper -->
                            </div>
                            <!-- Container wrapper -->
                            </nav>
                            <!-- Navbar -->
                        </section>
                    </section>
                    <!---->
                </div>
            </div>
        </div>
        <!-- End your project here-->
        <!-- MDB -->
        <script type="text/javascript" src="/js/mdb.min.js"></script>
        <!-- theme_check.js -->
        <script type="text/javascript" src="/js/theme_check.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript">
            
        </script>
    </body>
</html>