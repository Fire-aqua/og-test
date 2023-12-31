<?php

namespace App\Models;

use App\Enums\GoodStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;

    protected $table = 'goods';

    protected $fillable = ['count'];

    protected $casts = [
        'active',
        'status' => GoodStatus::class,
        'created_at' => 'Y-m-d H:i:s',
        'updated_at' => 'Y-m-d H:i:s',
        'deleted_at' => 'Y-m-d H:i:s',
    ];
}
