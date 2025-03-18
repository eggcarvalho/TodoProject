<?php

namespace App\Services\Task;

use App\Models\Task;
use App\Services\Services;


class GetListTaskService extends Services
{
    public function getList($data)
    {

        $tasks = Task::query();

        foreach ($data as $field => $value) {
            $tasks->when($value !== null, function ($query) use ($field, $value) {
                if ($field === 'title') {
                    return $query->where($field, 'LIKE', '%' . $value . '%');
                }

                return $query->where($field, $value);
            });
        }


        $tasks = $tasks->orderBy('id', 'asc')->paginate(7);


        return $tasks;
    }
}
