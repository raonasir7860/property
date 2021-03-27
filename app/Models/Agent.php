<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
	public $table = 'agents';
     protected $fillable = [
'full_name','total','phone_number','card_number','email','city','area','address','details','image'];
    use HasFactory;
    public function plots()
    {
        return $this->hasMany('App\Plot');
    }
}
