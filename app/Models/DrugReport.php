<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugReport extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function polies(){
        return $this->belongsTo(Polies::class);
    }
    public function drug(){
        return $this->belongsTo(Drug::class);
    }
    public function queues(){
        return $this->belongsTo(Queue::class);
    }
}
