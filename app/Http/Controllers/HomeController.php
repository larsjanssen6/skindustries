<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use src\repositories\user\userRepo;

class HomeController extends Controller
{

    public $userRepo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(userRepo $userRepo)
    {
        //$this->middleware('auth');
        $this->userRepo = $userRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function register(Request $request)
    {
        $this->userRepo->register($request);
    }
}
