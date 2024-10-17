<?php

namespace App\Models\Student;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teachers extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'teachers';

    protected $fillable = [
        'user_id',
        'bio',
        'dob',
        'gender',
        'marital_status',
        'religion',
        'nid_no',
        'image',
        'experience',
        'intro_video',
        'address',
        'phone_no',
        'verification_document',
        'status',
        'terms_and_condition_agreement',
        'privacy_and_policy_agreement',
        'status',
        'remarks',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
