<?php

namespace Baslat\Http\Controllers;

use Baslat\Http\Resources\UserResource;
use Baslat\User;
use Illuminate\Routing\Controller;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return UserResource::collection(User::all());
        return view('home');
    }

    public function getFriends()
    {
        return UserResource::collection(User::where('id', '!=', auth()->id())->get());
    }
}
