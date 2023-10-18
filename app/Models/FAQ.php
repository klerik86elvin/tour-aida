<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class FAQ extends Model
{
    use HasFactory, Translatable;
    protected $table = 'faq';
    public $translatable = ['question', 'answer'];
}
