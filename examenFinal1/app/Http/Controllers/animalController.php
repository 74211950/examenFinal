<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\animalController as animalControllerRequest;

class animalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param animalControllerRequest\animalControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(animalControllerRequest\animalControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param animalControllerRequest\animalControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(animalControllerRequest\animalControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param animalControllerRequest\animalControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(animalControllerRequest\animalControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param animalControllerRequest\animalControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(animalControllerRequest\animalControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param animalControllerRequest\animalControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(animalControllerRequest\animalControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
