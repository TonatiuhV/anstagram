<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_send',
        'user_recive'
    ];
    public function userSend()
    {
        return $this->belongsTo(User::class, 'user_send');
    }

    public function userRecive()
    {
        return $this->belongsTo(User::class, 'user_recived');
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
}
