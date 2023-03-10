<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'value', 'status', 'date_acquired'];

    public function office() {
        return $this->belongsTo('App\Models\Office', 'office_id', 'id');
    }
}
