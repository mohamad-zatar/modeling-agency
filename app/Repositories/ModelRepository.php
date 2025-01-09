<?php

namespace App\Repositories;

use App\Models\Model;

class ModelRepository extends BaseRepository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

}
