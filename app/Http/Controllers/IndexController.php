<?php

namespace App\Http\Controllers;

use App\Jobs\TextJob;

class IndexController extends Controller
{
    public static function index()
    {
        $job = new TextJob();
        dispatch($job);

        return ['this is sb'];
    }
}
