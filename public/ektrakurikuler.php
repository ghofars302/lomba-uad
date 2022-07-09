<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SMA Negeri 1 Pringsewu</title>
    <!-- MDB icon -->
    <link rel="icon" href="https://smansapringsewu.sch.id/wp-content/uploads/2019/07/favicon.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <?php
        if (isset($_COOKIE['theme'])) {
            if ($_COOKIE['theme'] == 2) {
                echo '<link rel="stylesheet" href="css/mdb.dark.min.css" />';
            } else {
                echo '<link rel="stylesheet" href="css/mdb.light.min.css" />';
            }
        } else {
            echo '<link rel="stylesheet" href="css/mdb.light.min.css" />';
        }
    ?>
  </head>
  <body>
    <!-- Start your project here-->
    <div id="preview" class="preview">
      <div style="display: none;"></div>
      <div>
        <div data-draggable="true" class="" style="position: relative;" draggable="false">
          <!---->
          <!---->
          <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
            <section class="" style="padding-bottom: 1px;">
              <!-- Navbar -->
              <?php
                if (isset($_COOKIE['theme'])) {
                    if ($_COOKIE['theme'] == 2) {
                        echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-2">';
                    } else {
                        echo '<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-2">';
                    }
                } else {
                    echo '<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-2">';
                }
              ?>
                <!-- Container wrapper -->
                <div class="container-fluid">
                  <!-- Toggle button -->
                  <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                  </button>
                  <!-- Collapsible wrapper -->
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0" draggable="false">
                    <?php
                        if (isset($_COOKIE['theme'])) {
                            if ($_COOKIE['theme'] == 2) {
                                echo '<img src="img/logo_dark.png" height="50" alt="Logo" loading="lazy" aria-controls="#picker-editor" draggable="false">';
                            } else {
                                echo '<img src="img/logo_light.png" height="50" alt="Logo" loading="lazy" aria-controls="#picker-editor" draggable="false">';
                            }
                        } else {
                            echo '<img src="img/logo_light.png" height="50" alt="Logo" loading="lazy" aria-controls="#picker-editor" draggable="false">';
                        }
                      ?>
                    </a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="/" aria-controls="#picker-editor" draggable="false">Beranda</a>
                      </li> 
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/ortom" aria-controls="#picker-editor" draggable="false">Organisasi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/ektrakurikuler" aria-controls="#picker-editor" draggable="false">Ektra Kurikuler</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/berita" aria-controls="#picker-editor" draggable="false">Berita</a>
                      </li>
                    </ul>
                    <!-- Left links -->
                  </div>
                  <!-- Collapsible wrapper -->
                  <!-- Right elements -->
                  <div class="d-flex align-items-center">
                    <!-- Icon -->
                    <a class="text-reset me-3" draggable="false">
                      <i class="fab fa-facebook" href="https://www.instagram.com/smansapringsewu/" aria-controls="#picker-editor"></i>
                    </a>
                    <a class="text-reset me-3" draggable="false">
                      <i class="fab fa-instagram" href="https://www.instagram.com/smansapringsewu/" aria-controls="#picker-editor"> SMA Negeri 1 Pringsewu</i>
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
        <!-- Content -->

        <div class="container">
            <table class="table">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Nama Estrakurikuler</th>
                    <th scope="col">Deskripsi</th>
                </thead>
                <tbody>
                    <?php
                        $json = file_get_contents('js/ektrakurikuler.json');
                        $ekstrakurikuler = json_decode($json, true);
                        foreach ($ekstrakurikuler as $key => $value) {
                            echo '<tr>';
                            echo '<th scope="row">'.$key.'</th>';
                            echo '<td>'.$value['Nama'].'</td>';
                            echo '<td>'.$value['Deskripsi'].'</td>';
                            echo '</tr>';
                        }
                    ?>
            </table>
        </div>

        <div data-draggable="true" class="" style="position: relative;">
          <!---->
          <!---->
          <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
            <section class="" style="padding-bottom: 1px;">
              <!-- Navbar -->
              <?php
                if (isset($_COOKIE['theme'])) {
                    if ($_COOKIE['theme'] == 2) {
                        echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-2">';
                    } else {
                        echo '<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-2">';
                    }
                } else {
                    echo '<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-2">';
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
                        <a class="nav-link" href="/change-theme" aria-controls="#picker-editor">
                            <?php
                                if(isset($_COOKIE['theme'])){
                                    if($_COOKIE['theme'] == 2){
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>