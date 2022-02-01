<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
		'name',
		'description',
		'image',
		'cookingTime',
		'user_id',
		'category_id',
    ];

    public function user(){

    	return $this->belongsTo(User::class);
	
	}

	public function category(){

    	return $this->belongsTo(Category::class);
	
	}

	public function ingredients(){

    	return $this->hasMany(Ingredient::class);
	
	}

	public function steps(){

    	return $this->hasMany(Step::class);
	
	}

	public function comments(){

    	return $this->hasMany(Comment::class);
	
	}


}
