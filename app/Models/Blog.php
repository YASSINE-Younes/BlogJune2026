<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'description' ,'image' ,'category_id' ,'user_id' ];

    //Relation Belongs To
    // One Blog Belongs To One  Category 
   
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    //Relation Belongs To
    // One Blog Belongs To One  User 
   
    public function user()
    {
        return $this->belongsTo(User::class);
    }

        
}
