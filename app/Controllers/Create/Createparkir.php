<?php

namespace App\Controllers\Create;

use App\Controllers\BaseController;

class Createparkir extends BaseController
{
    public function index()
    {
        // echo 'create parkir bisa di akses,tinggal bikin view aja';
        return view('create/createParkir');
    }
}
