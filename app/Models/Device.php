<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Device;

class Device extends Model
{
    use HasFactory;
    protected $table="device";
    protected $primaryKey="id";
    public $timestamps=false;
}
