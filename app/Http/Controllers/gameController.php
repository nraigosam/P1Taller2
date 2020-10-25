<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

$ruleta = array(0=>"Black", 1=>"Red",2=>"Black", 3=>"Red", 4=>"Black", 5=>"Red", 6=>"Black",7=>"Red", 8=>"Black", 9=>"Red", 10=>"Green");
$dato;

class gameController extends Controller
{
    public function play()
    {
        global $ruleta, $dato;

        if (isset($_POST['campo1'])) {
            $dato = $_POST['campo1'];
            $random = $ruleta[rand(0,10)];
        }else {
            $random ="";
        }
      
        if (isset($_POST['campo1'])) {
            $_POST['answer'] = "Your answer: ".$_POST['campo1']."<br />";
            $_POST['CorrectAnswer'] = "Correct answer: ".$random."<br />";
        }

        $random = strtolower($random);
        $dato = strtolower($dato);
        if ($random == $dato) {
            $res = 1;
        } else {
            $res = 0;
        }
        
        if ($res == 0) {
            $_POST['mensaje1'] = "try again";
        } elseif (isset($random)) {
            $_POST['mensaje2'] = "you win";
        }  
    }


    public function index()
    {
        return view('game', [$this->play()]);
    }
}
