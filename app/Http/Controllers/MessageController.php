<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Mail\MessageRecieved;
use App\Repository\MessageRepository;
use Illuminate\Http\Request;
use Mail;

class MessageController extends Controller
{
    /**
     * @var MessageRepository
     */
    private $repository;

    public function __construct(MessageRepository $repository)
    {

        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        $data =  $request->all();
        if($request->file('file'))
        {
            $path = $request->file('file')->store('/');
            $data['image'] = $path;
        }
        $message  = $this->repository->create($data);
        Mail::to('smartymoon@qq.com')->send(new MessageRecieved($message));

        if($message)
        {
            return ['status'=>1];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
