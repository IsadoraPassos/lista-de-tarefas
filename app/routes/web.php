<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $tasks = session('tasks', []);
    return view('tasks', compact('tasks'));
});

Route::post('/add', function (Request $request) {
    $tasks = session('tasks', []);
    $tasks[] = $request->task;
    session(['tasks' => $tasks]);
    return redirect('/');
});

Route::post('/remove', function (Request $request) {
    $tasks = session('tasks', []);
    unset($tasks[$request->index]);
    session(['tasks' => array_values($tasks)]);
    return redirect('/');
});

