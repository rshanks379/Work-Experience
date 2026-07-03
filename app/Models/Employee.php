<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use App\Models\Position;


class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'hobby',
        'dob'
    ];

    protected $casts = [
        'dob' => 'date'
    ];

    public function positions()
    {
        return $this->belongsToMany(
            Position::class,
            'employee_positions',
            'employee_id',
            'position_id'
        );
    }
    
    protected function position(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return \Illuminate\Database\Eloquent\Casts\Attribute::make(
            get: fn () => $this->positions()->first()
        );
    }

    public function getDob() 
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->dob)->format('d/m/Y');
    }
}
