<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    // configuration for Model

    const CREATED_AT = 'created_at';  // اذا اردنا تغير اسماء الحقول
    const UPDATED_AT = 'updated_at';

    protected $connection = 'mysql'; // نحدد نوع الداتا بيز التي نعمل عليها

    protected $table = 'stores';  // اذا غيرنا اسم الجدول

    protected $primaryKey = 'id';  // uuid

    protected $keyType = 'int';

    public $incrementing = 'true';

    public $timestamps = 'true';
}
