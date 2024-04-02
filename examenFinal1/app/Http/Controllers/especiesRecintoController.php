<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\especiesRecintoController as especiesRecintoControllerRequest;

class especiesRecintoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param especiesRecintoControllerRequest\especiesRecintoControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(especiesRecintoControllerRequest\especiesRecintoControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param especiesRecintoControllerRequest\especiesRecintoControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(especiesRecintoControllerRequest\especiesRecintoControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param especiesRecintoControllerRequest\especiesRecintoControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(especiesRecintoControllerRequest\especiesRecintoControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param especiesRecintoControllerRequest\especiesRecintoControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(especiesRecintoControllerRequest\especiesRecintoControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param especiesRecintoControllerRequest\especiesRecintoControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(especiesRecintoControllerRequest\especiesRecintoControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
