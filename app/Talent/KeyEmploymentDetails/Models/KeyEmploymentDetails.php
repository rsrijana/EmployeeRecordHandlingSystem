<?php

namespace App\Talent\KeyEmploymentDetails\Models;

use App\Talent\Manages\Models\Manages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Talent\Manages\Models\Manages;

class KeyEmploymentDetails extends Model
{
    use HasFactory;

    protected $casts = [
       'superpowers' => 'array'
    ];

    protected $fillable = [
        'employee_id',
        'organization',
        'join_date',
        'current_position',
        'work_schedule',
        'team',
        'manager',
        'superpowers',
    ];

    public function manages(): HasMany
    {
        return $this->hasMany(Manages::class);
    }
}
