<?php

namespace App\Models;

use App\Models\User;
use App\Models\LeaveBalance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StaffSalary extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function leaveBalance()
    {
        return $this->belongsTo(LeaveBalance::class);
    }
}
