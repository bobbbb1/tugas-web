<?php

namespace App\Controllers;

class Tugas extends BaseController
{
    public function index()
    {
        return view('tugas/index');
    }

    public function kuadrat()
    {
        return view('tugas/kuadrat');
    }

    public function diskon()
    {
        return view('tugas/diskon');
    }

    public function nilai()
    {
        return view('tugas/nilai');
    }

    public function login()
    {
        return view('tugas/login');
    }
}
