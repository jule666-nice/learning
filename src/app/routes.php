<?php
$app->get("/", function ($request, $response) {
   return $this->view->render($response, "login.twig");
});
$app->get("/login", function ($request, $response) {
   return $this->view->render($response, "login.twig");
});
$app->get("/logintest", function ($request, $response) {
   return $this->view->render($response, "logintest.twig");
});
$app->post("/home", function ($request, $response) {
   return $this->view->render($response, "home.twig");
});
$app->get("/test", function ($request, $response) {
   return $this->view->render($response, "test.twig");
});
$app->get("/myspace", function ($request, $response) {
   return $this->view->render($response, "myspace.twig");
});
$app->get("/changepw", function ($request, $response) {
   return $this->view->render($response, "changepw.twig");
});
$app->get("/game", function ($request, $response) {
   return $this->view->render($response, "game.twig");
});
$app->get("/newpage", function ($request, $response) {
   return $this->view->render($response, "new.twig");
});
$app->get("/new", "HomeController:index");
$app->post("/loginAuth", "ApiLogin:auth");
$app->get("/ApiStudent", "ApiStudent:init");