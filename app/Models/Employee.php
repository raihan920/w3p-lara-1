<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    //use this method to override `id` as primary `employee_id`
    public function getRouteKeyName(){  //it is a predefined method
        return 'employee_id';
    }
}
