<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\cuidadorController as cuidadorControllerRequest;

class cuidadorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param cuidadorControllerRequest\cuidadorControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(cuidadorControllerRequest\cuidadorControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param cuidadorControllerRequest\cuidadorControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(cuidadorControllerRequest\cuidadorControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param cuidadorControllerRequest\cuidadorControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(cuidadorControllerRequest\cuidadorControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param cuidadorControllerRequest\cuidadorControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(cuidadorControllerRequest\cuidadorControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param cuidadorControllerRequest\cuidadorControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(cuidadorControllerRequest\cuidadorControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
