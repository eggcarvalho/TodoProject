<?php

namespace App\Services\Responsibles;

use App\Models\Responsible;
use App\Services\Services;

class GetListResponsibleService extends Services
{
    public function __construct() {}


    public function getResponsibles()
    {
        return Responsible::get();
    }
}
