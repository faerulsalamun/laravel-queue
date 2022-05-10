<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessEmail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        ProcessEmail::dispatch('Ini merupakan queue email')->delay(now()->addSecond(5));

        return 'Berhasil register';
    }
}
