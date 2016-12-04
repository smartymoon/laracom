<?php

namespace App\Http\Controllers;

use App\Repositories\AppConfigRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var AppConfigRepository
     */
    private $repository;

    /**
     * Create a new controller instance.
     *
     * @param AppConfigRepository $repository
     */
    public function __construct(AppConfigRepository $repository)
    {
        //$this->middleware('auth');
        $this->repository = $repository;
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
}
