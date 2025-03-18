<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = [
        'responsible_id',
        'title',
        'description',
        'status',
        'ia_manager',
        'ia_path',
        'priority',
        'deadline'
    ];


    public function responsible()
    {
        return $this->belongsTo(Responsible::class);
    }
}
