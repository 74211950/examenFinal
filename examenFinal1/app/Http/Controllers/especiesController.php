<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\especiesController as especiesControllerRequest;

class especiesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param especiesControllerRequest\especiesControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(especiesControllerRequest\especiesControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param especiesControllerRequest\especiesControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(especiesControllerRequest\especiesControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param especiesControllerRequest\especiesControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(especiesControllerRequest\especiesControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param especiesControllerRequest\especiesControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(especiesControllerRequest\especiesControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param especiesControllerRequest\especiesControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(especiesControllerRequest\especiesControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
