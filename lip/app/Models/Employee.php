<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $table = 'employees';

    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'surname',

        'dept_id',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
