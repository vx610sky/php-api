<?php

namespace App\Http\Controllers;

use App\Services\ExampleService;
use Illuminate\Http\Request;
use App\Models\User;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function index()
    {
        //parent::index(); // TODO: Change the autogenerated stub
        return "hello world";
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'title' => 'string'
        ]);

        $example = app(ExampleService::class)->add($request);

        return $this->jsonSuccess($example);
    }

    /**
     * 异步
     */
    public function async()
    {

    }

}
