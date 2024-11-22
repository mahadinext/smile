<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'student_id',
        // 'course_id',
        'coupon_id',
        'order_type',
        'gateway',
        'transaction_id',
        'tracking_no',
        'total',
        'discount',
        'commission',
        'grand_total',
        'status',
        'remarks',
        'created_by',
    ];

    public const STATUS_DISABLE = 0;
    public const STATUS_ENABLE  = 1;
    public const STATUS_PENDING = 2;
}
