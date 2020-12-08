<?php

namespace App\Http\Controllers;

class ContactoController
{
     public function index()
    {
        return view('contacto');
    }

    public  function mensaje (){
        return view('home');
    }

}