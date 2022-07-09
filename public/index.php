<?php
    require __DIR__ . '/../vendor/autoload.php';

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;

    function getRequestHeaders() {
        $headers = array();
        foreach($_SERVER as $key => $value) {
            if (substr($key, 0, 5) <> 'HTTP_') {
                continue;
            }
            $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
            $headers[$header] = $value;
        }
        return $headers;
    }

    $app = AppFactory::create();

    $app->addErrorMiddleware(true, true, true);

    $app->get('/', function (Request $request, Response $response, array $args) {
        $response->getBody()->write(require './home.php');
        return $response;
    });

    $app->get('/change-theme', function (Request $request, Response $response, array $args) {
        $theme_enum = $_COOKIE['theme'] ?? 1;

        if ($theme_enum == 1) {
            setcookie('theme', 2, time() + (86400 * 30), '/');
        } else {
            setcookie('theme', 1, time() + (86400 * 30), '/');
        }

        $new = $response->withHeader('Location', 'home.php');
        $new = $new->withStatus(301);

        return $new;    
    });

    $app->run();
?>