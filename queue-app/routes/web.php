<?php
use App\Jobs\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Job::dispatch()->onQueue('job');
    Job::dispatch();
    return view('welcome');
});


