<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'user_id', 'category_id',
        'duration', 'description', 'status',
        'price','picture','features'
    ];
    protected $casts = [
        'features' => 'array',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    


}
