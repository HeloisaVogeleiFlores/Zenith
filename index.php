<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");
// Rotas amigáveis da área pública
$route->group(null);
$route->get("/", "Web:main");
$route->get("/Registro", "Web:register");
$route->get("/contato", "Web:contact");
$route->get("/localizacao", "Web:location");
$route->get("/doutores","Web:doctors");
$route->get("/servicos","Web:services");
$route->get("/horário","Web:time");
$route->get("/login","Web:login");

// Rotas amigáveis da área restrita
$route->group("/app");

$route->get("/", "App:home");
$route->get("/perfil", "App:profile");
$route->get("/carrinho", "App:cart");

$route->group(null);

$route->group("/admin");

$route->get("/", "Admin:home");
$route->get("/servicos", "Admin:services");
$route->get("/produtos", "Admin:products");

$route->group(null);

$route->get("/ops/{errcode}", "Web:error");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();