<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quantity extends Model
{
    protected $quantities;
    protected $fillable = ['product_id', 'quantity', 'kcal'];

    public function getAll()
    {
        return $this->with('product')->get();
    }

    public function saveItem($params)
    {
        $new = $this->create($params);
        $new = $this->with('product')->latest()->first();
        return $new;

    }

    public function getHistoric($day, $month, $year){
        
        return $this->whereYear('created_at', '=', $year)
                    ->whereMonth('created_at', '=', $month)
                    ->whereDay('created_at', '=', $day)
                    ->with('product')
                    ->get();
    }

    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }
}
