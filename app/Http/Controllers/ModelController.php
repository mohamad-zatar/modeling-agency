<?php

namespace App\Http\Controllers;

use App\Http\Requests\Model\StoreModelRequest;
use App\Http\Requests\Model\UpdateModelRequest;
use App\Http\Resources\ModelResource;
use App\Services\ModelService;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    protected $modelService;

    public function __construct(ModelService $modelService)
    {
        $this->modelService = $modelService;
    }

    public function index()
    {
        $models = $this->modelService->getAllModels()->load('category');
        return ModelResource::collection($models);
    }

    public function show($id)
    {
        $model = $this->modelService->getModelById($id);
        return new ModelResource($model);
    }

    public function store(StoreModelRequest $request)
    {
        $model = $this->modelService->createModel($request->validated());
        return new ModelResource($model);
    }

    public function update(UpdateModelRequest $request, $id)
    {
        $model = $this->modelService->updateModel($id, $request->validated());
        return new ModelResource($model);
    }

    public function destroy($id)
    {
        $this->modelService->deleteModel($id);
        return response()->json('Successfully Deleted');
    }
}
