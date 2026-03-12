<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\User1Service;

class User1Controller extends Controller
{
    use ApiResponser;

    public $user1Service;

    public function __construct(User1Service $user1Service)
    {
        $this->user1Service = $user1Service;
    }

    public function index()
    {
        $response = $this->user1Service->obtainUsers1();
        return $this->successResponse($response);
    }

    public function add(Request $request)
    {
        $response = $this->user1Service->createUser1($request->all());
        return $this->successResponse($response, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $response = $this->user1Service->obtainUser1($id);
        return $this->successResponse($response);
    }

    public function update(Request $request, $id)
    {
        $response = $this->user1Service->editUser1($request->all(), $id);
        return $this->successResponse($response);
    }

    public function delete($id)
    {
        $response = $this->user1Service->deleteUser1($id);
        return $this->successResponse($response);
    }
}