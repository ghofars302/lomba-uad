<?php
    require __DIR__ . '/../vendor/autoload.php';

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;

    if (isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
        define('PROTOCOL', 'https://');
    } else {
        define('PROTOCOL', 'http://');
    }

    $fetch = function($url) {
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'php');
        $query = curl_exec($curl_handle);
        curl_close($curl_handle);

        if ($query == false) {
            throw new Exception("Failed to fetch $url");
        }

        return $query;
    };

    $app = AppFactory::create();
    $app->addErrorMiddleware(true, true, true);

    $app->get('/api/get-guru-list', function (Request $request, Response $response, array $args) {
        require '../api/get-guru-list.php';
        $contents = ob_get_contents();
        ob_end_clean();

        $response->getBody()->write($contents, strlen($contents));
        return $response->withHeader('Content-Type', 'application/json');
    });

    $app->get('/api/get-prestasi-list', function (Request $request, Response $response, array $args) {
        require '../api/get-prestasi-list.php';
        $contents = ob_get_contents();
        ob_end_clean();

        $response->getBody()->write($contents, strlen($contents));
        return $response->withHeader('Content-Type', 'application/json');
    });

    $app->get('/api/change-theme', function (Request $request, Response $response, array $args) {
        if (isset($_SERVER['HTTP_REFERER'])) {
            $theme_enum = $_COOKIE['theme'] ?? 1;

            if ($theme_enum == 1) {
                setcookie('theme', 2, time() + (86400 * 30), '/');
            } else {
                setcookie('theme', 1, time() + (86400 * 30), '/');
            }

            $response->getBody()->write('Theme changed, click <a href="' . $_SERVER['HTTP_REFERER'] . '">here</a> to go back.');

            return $response->withHeader('Location', $_SERVER['HTTP_REFERER'])
                ->withHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0, post-check=0, pre-check=0')
                ->withHeader('Pragma', 'no-cache')
                ->withStatus(301);
        } else {
            return $response->withHeader('Location', 'home.php')
                ->withHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0, post-check=0, pre-check=0')
                ->withHeader('Pragma', 'no-cache')
                ->withStatus(301);
        }
    });

    $app->get('/api/logo-img', function (Request $request, Response $response, array $args) {
        $theme_enum = $_COOKIE['theme'] ?? 1;

        if ($theme_enum == 2) {
            $img = file_get_contents('./img/logo_dark.png');
            $response->getBody()->write($img);
            return $response->withHeader('Content-Type', 'image/png');
        } else {
            $img = file_get_contents('./img/logo_light.png');
            $response->getBody()->write($img);
            return $response->withHeader('Content-Type', 'image/png');
        }
    });

    $app->get('/api/background-img', function (Request $request, Response $response, array $args) {
        $theme_enum = $_COOKIE['theme'] ?? 1;

        if ($theme_enum == 2) {
            $img = file_get_contents('./img/background.png');
            $response->getBody()->write($img);
            return $response->withHeader('Content-Type', 'image/png');
        } else {
            $img = file_get_contents('./img/background2.png');
            $response->getBody()->write($img);
            return $response->withHeader('Content-Type', 'image/png');
        }
    });

    $app->get('/[{path:.*}]', function(Request $request, Response $response, array $args) {
        if (count($args) > 0) {
            $bool_found = false;
            $contents = "";

            $path = explode("/", $args['path']);
            switch ($path[0]) {
                case "ekstrakurikuler": {
                    require '../page/ekstrakurikuler.php';
                    break;
                }
    
                case "berita": {
                    require '../page/berita.php';
                    break;
                }
    
                case "profile": {
                    if (count($path) > 1) {
                        switch ($path[1]) {
                            case "sejarah": {
                                require '../page/profile/sejarah.php';
                                $bool_found = true;
                                break;
                            }

                            case "visi-misi": {
                                require '../page/profile/visi-misi.php';
                                $bool_found = true;
                                break;
                            }

                            case "struktur-organisasi": {
                                require '../page/profile/struktur-organisasi.php';
                                $bool_found = true;
                                break;
                            }

                            case "profile-guru": {
                                require '../page/profile/profile-guru.php';
                                $bool_found = true;
                                break;
                            }
                        }

                        if ($bool_found) {
                            break;
                        }
                    }
                }

                case "prestasi": {
                    require '../page/prestasi.php';
                    break;
                }

                default: {
                    define("MISSING_PAGE", $args['path']);
                    require '../page/404.php';
                    break;
                }
            }

            $contents = ob_get_contents();
            ob_end_clean();
            $response->getBody()->write($contents, strlen($contents));
        } else {
            require '../page/home.php';
            $contents = ob_get_clean();
            ob_end_clean();
            $response->getBody()->write($contents, strlen($contents));
        }

        return $response->withHeader('Content-Type', 'text/html');
    });

    $app->run();
?>