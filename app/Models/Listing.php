<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Listing extends Model
{
    use HasFactory,Searchable;

    protected $fillable=['title','company','location','website','email','description','tags','user_id','logo','logo_path']; 

    public $timestamps=true;

    // Relationship to User
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function scopeFilter($query, array $filters){
        if ($filters['tag']?? false){
            $query->where('tags','like','%' .request('tag'). '%');
        }
        if ($filters['search']?? false){
            $query->where('title','like','%' .request('search'). '%')
            ->orWhere('company','like','%' .request('search'). '%')
            ->orWhere('location','like','%' .request('search'). '%');
        }

    }
}
