<?php

namespace App\Http\Controllers;

use App\Repositories\JobRepository;

class JobController extends Controller
{
    //
    /**
     * @var JobRepository
     */
    private $repository;

    public function __construct(JobRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $jobs = $this->repository->all();
        return view('join',compact('jobs'));
    }
}
