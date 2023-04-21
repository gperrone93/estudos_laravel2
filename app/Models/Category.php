<?php

namespace App\Models;

use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Preenchiveis via model::create
    protected $fillable = [
        'title', 'color', 'user_id'
    ];

    // Relacionamentos

    // Relacionamento com user_id
    public function user() {
        // Pertence há
        return $this->belongsTo(User::class);
    }

    //Retornas as categorias
    public function tasks() {
        return $this->hasMany(Tasks::class);
    }


}
