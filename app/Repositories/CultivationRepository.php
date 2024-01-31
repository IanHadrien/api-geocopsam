<?php

namespace App\Repositories;

use App\Models\Cultivation;

class CultivationRepository
{
    protected $model;

    public function __construct(Cultivation $cultivation) {
        $this->model = $cultivation;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function getAll($request = null)
    {
        return $this->model->filter($request)->orderBy('name')->paginate(15);
    }

    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($data, $model)
    {
        return $model->update($data);
    }

    public function destroy($model)
    {
        return $model->delete();
    }

}

?>
