<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
	public $table = 'plots';
     protected $fillable = ['p_number','p_area','p_rate','total_amont','customer_id','agent_id','advance_amount_customer','remaining_amount_customer','remaining_amount_date','total_commission','advance_commission','remaining_commission','remaining_commission_date','resold','details','not_sold','c_method_pay','advance_amount_date','a_method_pay','a_advance_amount_date','image'];
    use HasFactory;
     public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
      public function agent()
    {
        return $this->belongsTo('App\Models\Agent', 'agent_id', 'id');
    }
}
