<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','status','user_id'
    ];
    public function users(){
        return $this->belongsToMany(User::class,'assign');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
