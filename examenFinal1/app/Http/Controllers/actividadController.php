<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\actividadController as actividadControllerRequest;

class actividadController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param actividadControllerRequest\actividadControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(actividadControllerRequest\actividadControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param actividadControllerRequest\actividadControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(actividadControllerRequest\actividadControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param actividadControllerRequest\actividadControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(actividadControllerRequest\actividadControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param actividadControllerRequest\actividadControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(actividadControllerRequest\actividadControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param actividadControllerRequest\actividadControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(actividadControllerRequest\actividadControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
