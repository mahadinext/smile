<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseContents extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'course_contents';

    public const STATUS_COMPLETE = 1;
    public const STATUS_INPROGRESS = 2;
    public const STATUS_INCOMPLETE = 0;

    public const STATUS_SELECT = [
        1 => 'Complete',
        2 => 'In Progress',
        0 => 'Incomplete',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'course_id',
        'title',
        'description',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
