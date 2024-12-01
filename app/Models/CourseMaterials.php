<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseMaterials extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'course_materials';

    public const TYPE_FILE = 1;
    public const TYPE_URL = 2;

    public const UPLOAD_TYPE = [
        CourseMaterials::TYPE_FILE     => 'File',
        CourseMaterials::TYPE_URL     => 'URL',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'course_id',
        'title',
        'type',
        'file',
        'url',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
