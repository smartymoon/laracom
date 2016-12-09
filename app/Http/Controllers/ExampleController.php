<?php

namespace App\Http\Controllers;

use App\Repository\ExampleRepository;

class ExampleController extends Controller
{
    //
    /**
     * @var ExampleRepository
     */
    private $repository;

    public function __construct(ExampleRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
       $examples  = $this->repository->exampleWithImages();
       return view('example',compact('examples'));
    }
}
