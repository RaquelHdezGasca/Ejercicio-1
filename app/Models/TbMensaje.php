<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbMensaje extends Model
{
    use HasFactory;
    protected $table ='tb_mensaje';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name','lastname','desc_mensaje'];
}
