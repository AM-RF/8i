<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/todos/');
        $response = $response->json();
        //SendEmail::dispatch('danniriesthefany96@gmail.com', $response[0]['title']); EJEMPLO
        //SendEmail::dispatch('emailaqui', $response[0]['title']);
        return view('home', compact('response'));
    }
}
