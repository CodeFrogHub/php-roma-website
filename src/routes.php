<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("roma-website '/' route");

    // Render index view
    return $this->view->render($response, 'index.html', $args);
});

$app->post('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("roma-website '/' route");

    // TODO: convert number/roman and added it to the $args
    $parsedBody = $request->getParsedBody();
    try {
        $roma = new Roma(intval($parsedBody["q"]) > 0 ? intval($parsedBody["q"]) : strtoupper($parsedBody["q"]));
        $args["roma"] = array(
            "number" => $roma->getNumber(),
            "roman" => $roma->getRoman()
        );
    } catch (Exception $e) {
        $args["error"] = $e;
    }

    // Render index view
    return $this->view->render($response, 'index.html', $args);
});