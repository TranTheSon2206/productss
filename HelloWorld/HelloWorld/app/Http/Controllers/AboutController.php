<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showsubject($subject){
        return "Details information of $subject";
    }
}
