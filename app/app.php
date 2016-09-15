<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    //Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;
    $app->register (new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get('/see_score', function() use($app) {
        $word_holder = $_GET['word'];
        $my_scrabble = new Scrabble;
        $result = $my_scrabble->returnWord($word_holder);
        return $app['twig']->render('show_score.html.twig', array('results' => $result));
    });

    return $app;
?>
