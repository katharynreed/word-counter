<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';
    session_start();
    if (empty($_SESSION['list_of_matches'])) {
        $_SESSION['list_of_matches'] = array();
    }
    $app['debug'] = true;
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), ['twig.path' => __DIR__.'/../views']);


    $app->get('/', function() use ($app) {
        return $app['twig']->render('homepage.html.twig');
    });

    $app->post('/count', function() use ($app){
        $newRepeatCounter = new RepeatCounter;
        $string = ($_POST['string']);
        $word = ($_POST['word']);

        $results = $newRepeatCounter->count_repeats($string, $word);

        return $app['twig']->render('results.html.twig', array('results' => $results));
    });


    return $app;
?>
