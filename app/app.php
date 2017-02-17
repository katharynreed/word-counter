<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";
    session_start();
    if (empty($_SESSION['list_of_matches'])) {
        $_SESSION['list_of_matches'] = array();
    }
    $app["debug"] = true;
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), ['twig.path' => __DIR__.'/../views']);
    $app->get("/", function() use($app) {
        return $app["twig"]->render("homepage.html.twig");
    });
