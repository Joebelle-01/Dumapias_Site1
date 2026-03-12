<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\User2Service;

class User2Controller extends Controller
{
    use ApiResponser;

    public $user2Service;

    public function __construct(User2Service $user2Service)
    {
        $this->user2Service = $user2Service;
    }

    public function index()
    {
        $response = $this->user2Service->obtainUsers2();
        return $this->successResponse($response);
    }

    public function add(Request $request)
    {
        $response = $this->user2Service->createUser2($request->all());
        return $this->successResponse($response, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $response = $this->user2Service->obtainUser2($id);
        return $this->successResponse($response);
    }

    public function update(Request $request, $id)
    {
        $response = $this->user2Service->editUser2($request->all(), $id);
        return $this->successResponse($response);
    }

    public function delete($id)
    {
        $response = $this->user2Service->deleteUser2($id);
        return $this->successResponse($response);
    }
}