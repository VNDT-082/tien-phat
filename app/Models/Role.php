<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey='id';

    protected $fillable = [
        'role_name',
        'is_deleted',
        'display_name',
        'maker_id',
        'checker_id',
        'created_at',
        'updated_at'
    ];

    public function UserRole(){
        return $this->HasMany(User::class,);
    }
}