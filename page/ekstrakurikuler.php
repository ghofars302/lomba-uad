<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>SMA Negeri 1 Pringsewu | Ekstrakurikuler</title>
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
            if (isset($_COOKIE['theme'])) {
                if (isset($_COOKIE['theme']) and $_COOKIE['theme'] == 2) {
                    echo '<link rel="stylesheet" href="/css/mdb.dark.min.css" />';
                } else {
                    echo '<link rel="stylesheet" href="/css/mdb.light.min.css" />';
                }
            } else {
                echo '<link rel="stylesheet" href="/css/mdb.light.min.css" />';
            }
        ?>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="/css/theme.css" />
    </head>
    <body>
        <!-- Start your project here-->
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
                    <br/>
                    <p class="fs-1 text-center">Daftar - Daftar Ekstrakurikuler di SMA Negeri 1 Pringsewu</p>
                    <br/>
                    <table class="table">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Nama Estrakurikuler</th>
                            <th scope="col">Deskripsi</th>
                        </thead>
                        <tbody>
                            <?php
                                $json = file_get_contents('./js/ektrakurikuler.json');
                                $ekstrakurikuler = json_decode($json, true);
                                foreach ($ekstrakurikuler as $key => $value) {
                                echo '<tr>';
                                echo '<th scope="row">'.($key + 1).'</th>';
                                echo '<td>'.$value['Nama'].'</td>';
                                echo '<td>'.$value['Deskripsi'].'</td>';
                                echo '</tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                    <br/>
                </div>
                <div data-draggable="true" class="" style="position: relative;">
                    <!---->
                    <!---->
                    <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
                        <section class="" style="padding-top: 1px;">
                            <!-- Navbar -->
                            <?php
                                if (isset($_COOKIE['theme'])) {
                                    if (isset($_COOKIE['theme']) and $_COOKIE['theme'] == 2) {
                                        echo '<nav class="navbar navbar-expand navbar-dark bg-dark shadow-2 container">';
                                    } else {
                                        echo '<nav class="navbar navbar-expand navbar-light bg-white shadow-2 container">';
                                    }
                                } else {
                                    echo '<nav class="navbar navbar-expand navbar-light bg-white shadow-2 container">';
                                }
                            ?>
                            <!-- Container wrapper -->
                            <div class="container-fluid">
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
                                                if(isset($_COOKIE['theme'])){
                                                    if(isset($_COOKIE['theme']) and $_COOKIE['theme'] == 2){
                                                        echo 'Switch to 🔆 Light Theme';
                                                    }else{
                                                        echo 'Switch to 🌙 Dark Theme';
                                                    }
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
            $(document).ready(function() {
                $(".dropdown-toggle").dropdown();
            });
        </script>
    </body>
</html>