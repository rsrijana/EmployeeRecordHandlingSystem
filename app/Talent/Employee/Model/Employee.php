<?php

namespace App\Talent\Employee\Model;

use App\Talent\Documents\Model\Document;
use App\Talent\EducationalDetails\Models\EducationalDetails;
use App\Talent\KeyEmploymentDetails\Models\KeyEmploymentDetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_number',
        'date_of_birth',
        'current_address',
        'pan_number',
        'bank_account_number',
        'avatar',
        'status',
        'user_id',
    ];

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function education():HasMany
    {
        return $this ->hasMany(EducationalDetails::class);
    }
    public function employment():HasOne
    {
        return $this ->hasOne(KeyEmploymentDetails::class);
    }
}
