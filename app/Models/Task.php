<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'is_done',
        'description',
        'due_date',
        'user_id',
        'category_id'
    ];

    // Relacionamentos

    // Uma task pertence a um usuario
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Uma Task pertence a uma categoria
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
