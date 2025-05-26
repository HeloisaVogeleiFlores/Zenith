<?php

namespace Source\App;

use League\Plates\Engine;
use Source\App\Api\Faqs;
use Source\Models\Faq\Question;

class Web
{
    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
    }

    public function main ()
    {
        //echo "<h1>Eu sou a Home...</h1>";
        echo $this->view->render("main",[]);
    }

    public function contact ()
    {
        //echo "<h1>Eu sou a Home...</h1>";
        echo $this->view->render("contact",[]);
    }

    public function doctors ()
    {
        echo $this->view->render("doctors",[]);
        //echo "<h1>Olá, eu sou o Contato...</h1>";
    }

    public function login ()
    {
        echo $this->view->render("login",[]);
    }

    public function location ()
    {
        //echo "<h1>Eu sou a Localização</h1>";
        echo $this->view->render("location",[]);
    }

    public function register(): void
    {
        // echo "<h1>Olá, eu sou o carrinho de compras...</h1>";
        echo $this->view->render("register",[]);
    }

    public function services(): void
    {
        // echo "<h1>Olá, eu sou os serviços</h1>";
        echo $this->view->render("services",[]);
    }

     public function time(): void
    {
        // echo "<h1>Olá, eu sou os serviços</h1>";
        echo $this->view->render("time",[]);
    }

    public function faqs(): void
    {
        $question = new Question();
        $questions = $question->selectAll();
        //var_dump($questions);
        echo $this->view->render("faqs",[
            "questions" => $questions
        ]);
    }

    /*public function error (array $data)
    {
        var_dump($data);
    }*/

}