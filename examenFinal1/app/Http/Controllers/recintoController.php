<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\recintoController as recintoControllerRequest;

class recintoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param recintoControllerRequest\recintoControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(recintoControllerRequest\recintoControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param recintoControllerRequest\recintoControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(recintoControllerRequest\recintoControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param recintoControllerRequest\recintoControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(recintoControllerRequest\recintoControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param recintoControllerRequest\recintoControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(recintoControllerRequest\recintoControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param recintoControllerRequest\recintoControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(recintoControllerRequest\recintoControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
