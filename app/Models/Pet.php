<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'breeds', 'species', 'age','size','email', 'user_id', 'website', 'phone', 'description', 'petImg'];

    public function scopeFilter($query, array $filters){
        if($filters['breed'] ?? false){
            $query->where('breeds', 'like', '%' . request('breed') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('name', 'like', '%' . request('search') . '%')
             ->orWhere('description', 'like', '%' . request('search') . '%')
             ->orWhere('breeds', 'like', '%' . request('search') . '%');
        }
    }
    //relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
