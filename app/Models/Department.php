<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    // 2. **Department**:
    // - Has many: Employee
    // - Has many: PositionList
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    // public function positionLists()
    // {
    //     return $this->hasMany(PositionList::class);
    // }
}
