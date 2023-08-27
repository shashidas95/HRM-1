<?php

namespace App\Models;

use App\Models\LeaveApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeaveCategory extends Model
{
    use HasFactory;
    public function leaveApplications()
    {
        return $this->hasMany(LeaveApplication::class);
    }
}
