<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DepartmentModel extends Model
{
    protected $table = 'department';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function class_teacher()
    {
        return $this->hasOne(TeacherModel::class, 'id', 'class_teacher');
    }
}
