<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index(){
        $title = "Ini isi dari Function index";
        return $title;
    }
    private function index2(){
        return "Ini isi dari private Function";
    }
    public function private(){
        return $this->index2();
    }
}
