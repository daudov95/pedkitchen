<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'message', 'topic'];


    public function replies ()
    {
        return $this->hasMany(ReplyContact::class, 'question_id', 'id');
    }
}
