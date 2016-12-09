<?php

namespace App\Http\Controllers;

use App\Repository\GroupRepository;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    /**
     * @var GroupRepository
     */
    private $groupRepository;

    public function __construct(GroupRepository $groupRepository)
    {

        $this->groupRepository = $groupRepository;
    }

    public function index()
    {
        $group = $this->groupRepository->all();
        return view('about',compact('group'));
    }
}
