<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HtmlModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount'
    ];

    protected $table = "html";
    protected $primaryKey = "id";
}
