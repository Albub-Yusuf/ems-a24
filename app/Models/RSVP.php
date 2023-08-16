<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSVP extends Model
{
    use HasFactory;

    protected $fillable = ['response','event_id','host_id','guest_id'];

    public function event(){
        return $this->belongsTo(Event::class);
    }
}
