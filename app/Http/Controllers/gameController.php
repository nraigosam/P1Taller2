<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class gameController extends Controller
{
    public function initialicer(){
        $_POST['answer'] = "Your answer: ";
        $_POST['CorrectAnswer'] = "Correct answer: ";
        $_POST['mensaje'] =" ";
    }
    public function play()
    {
        $_POST['mensaje'] =" ";
        $ruleta = array(0=>"Black", 1=>"Red",2=>"Black", 3=>"Red", 4=>"Black", 5=>"Red", 6=>"Black",7=>"Red", 8=>"Black", 9=>"Red", 10=>"Green");
        $dato;
        $num = rand(0,10);
        if (isset($_POST['campo1'])) {
            $dato = $_POST['campo1'];
            $random = $ruleta[$num];
        }else {
            $random ="";
        }
      
        if (isset($_POST['campo1'])) {
            $_POST['answer'] = "Your answer: ".$_POST['campo1']."<br />";
            $_POST['CorrectAnswer'] = "Correct answer: ".$random."<br />";
            $data=array('yourColor'=>$_POST['campo1'],"color"=>$random);
            DB::table('historials')->insert($data);
        }

        $random = strtolower($random);
        $dato = strtolower($dato);
        if ($random == $dato) {
            $res = 1;
        } else {
            $res = 0;
        }
        
        if ($res == 0) {
            $_POST['mensaje'] = "try again";
        } elseif (isset($random)) {
            $_POST['mensaje'] = "you win";
        } 
        return  view('game', [$_POST]);
    }

    public function index()
    {
        return view('game',[$this->initialicer()]);
    }
}
