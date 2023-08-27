<?php

namespace App\Models;

use App\Models\Training;
use App\Models\Department;
use App\Models\LeavesAdmin;
use App\Models\StaffSalary;
use App\Models\PerformanceAppraisal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    //     3. **Employee**:
    // - Belongs to: Department
    // - Belongs to: PositionList
    // - Belongs to: User
    // - Has many: PerformanceAppraisal
    // - Has many: LeavesAdmin
    // - Has many: StaffSalary
    // - Has many: Training (as Trainer and Trainee)



    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Department()
    {
        return $this->belongsTo(Department::class);
    }
    // public function PositionList()
    // {
    //     return $this->belongsTo(PositionList::class);
    // }
    public function leavesAdmins()
    {
        return $this->hasMany(LeavesAdmin::class);
    }
    public function staffSalarys()
    {
        return $this->hasMany(StaffSalary::class);
    }
    public function performanceAppraisals()
    {
        return $this->hasMany(PerformanceAppraisal::class);

    }
    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}
