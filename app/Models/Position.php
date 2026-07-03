<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Employee;

class Position extends Model

{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function employee(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class)->using(EmployeePosition::class)->withPivot('id');
    }
}
