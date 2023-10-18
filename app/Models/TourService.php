<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class TourService extends Model
{
    use HasFactory;
    protected $table = 'tour_service;';

}
