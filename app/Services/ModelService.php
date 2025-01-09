<?php

namespace App\Services;

use App\Repositories\ModelRepository;

class ModelService
{
    protected $modelRepository;

    public function __construct(ModelRepository $modelRepository)
    {
        $this->modelRepository = $modelRepository;
    }

    public function getAllModels()
    {
        return $this->modelRepository->all();
    }

    public function getModelById($id)
    {
        return $this->modelRepository->find($id);
    }

    public function createModel(array $data)
    {
        return $this->modelRepository->create($data);
    }

    public function updateModel($id, array $data)
    {
        return $this->modelRepository->update($id, $data);
    }

    public function deleteModel($id)
    {
        return $this->modelRepository->delete($id);
    }
}
