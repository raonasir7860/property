<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	public $table = 'customers';
     protected $fillable = [
'full_name','phone_number','card_number','email','city','area','address','details','image'];
    use HasFactory;
     public function plots()
    {
        return $this->hasMany('App\Plot');
    }
}
