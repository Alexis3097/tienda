<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\IRepository\ITestRepository;
use CloudCreativity\LaravelJsonApi\Http\Requests\FetchResources;
use CloudCreativity\LaravelJsonApi\Contracts\Store\StoreInterface;
use CloudCreativity\LaravelJsonApi\Http\Controllers\JsonApiController;

class TestController extends JsonApiController
{
    protected $useTransactions = false;
    protected $ITestRepository;
    function __construct(ITestRepository $ITestRepository){
        $this->middleware('auth:api');
        $this->ITestRepository = $ITestRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StoreInterface $store, FetchResources $request)
    {
        try{
            $tests = $this->ITestRepository->all();
            return $this->reply()->content($tests);
        }catch(Throwable $e){

        }
    }

   
}
