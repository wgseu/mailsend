<?php

namespace App\Http\Controllers;

use App\Events\mandaEmail;
use App\Mail\mailTeste;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function index()
    {
        mandaEmail::dispatch(new mandaEmail());
    }
}