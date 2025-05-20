<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return
         view('front/head_view').
         view('front/navbar_view').
         view('front/principal').
         view('front/footer_view');
    }
}
