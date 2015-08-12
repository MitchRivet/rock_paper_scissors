<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    //Routes
    $app->get("/", function() use ($app) {
        return $app['twig']->render('rps_input.html.twig');
    });

    $app->get("/rps_results", function() use ($app) {
        $new_game = new RockPaperScissors;
        $game_result = $new_game->playRockPaperScissors($_GET['first_input'], $_GET['second_input']);
        return $app ['twig']->render('rps_result.html.twig', array('result' => $game_result));
    });

    return $app;

?>
