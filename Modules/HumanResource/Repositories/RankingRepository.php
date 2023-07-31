<?php

namespace Modules\HumanResource\Repositories;

use Modules\HumanResource\Models\Ranking;
use App\Repositories\BaseRepository;


class RankingRepository extends BaseRepository
{
     protected $fieldSearchable = [
    
     ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Ranking::class;
    }

    public function findByBranch($branch_id)
    {
        $query = $this->model->newQuery();

        return $query->where('branch_id', $branch_id)->get();
    }

    public function getById($id)
    {
        $query = $this->model->newQuery();

        return $query->where('id', $id)->first();
    }
    
}
