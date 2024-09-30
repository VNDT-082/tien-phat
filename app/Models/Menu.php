<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table='menus';
    protected $primarykey='id';
    protected $fillable = [
        'menu_name',
        'menu_name_eng',
        'menu_link',
        'menu_parent',
        'menu_icon',
        'menu_permission',
        'menu_index',
        'author_status',
        'maker_id',
        'checker_id',
        'created_at',
        'updated_at'
    ];
    protected $appends=['maker_name','checker_name'];
}