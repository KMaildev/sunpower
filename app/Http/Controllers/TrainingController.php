<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        return view('training.index');
    }

    public function SpecifiedSkilled()
    {
        return view('training.specified_skilled');
    }
}
