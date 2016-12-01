<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ExamplePicCreateRequest;
use App\Http\Requests\ExamplePicUpdateRequest;
use App\Repositories\ExamplePicRepository;
use App\Validators\ExamplePicValidator;


class ExamplePicsController extends Controller
{

    /**
     * @var ExamplePicRepository
     */
    protected $repository;

    /**
     * @var ExamplePicValidator
     */
    protected $validator;

    public function __construct(ExamplePicRepository $repository, ExamplePicValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $examplePics = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $examplePics,
            ]);
        }

        return view('examplePics.index', compact('examplePics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ExamplePicCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ExamplePicCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $examplePic = $this->repository->create($request->all());

            $response = [
                'message' => 'ExamplePic created.',
                'data'    => $examplePic->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $examplePic = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $examplePic,
            ]);
        }

        return view('examplePics.show', compact('examplePic'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $examplePic = $this->repository->find($id);

        return view('examplePics.edit', compact('examplePic'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ExamplePicUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(ExamplePicUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $examplePic = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'ExamplePic updated.',
                'data'    => $examplePic->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'ExamplePic deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'ExamplePic deleted.');
    }
}
