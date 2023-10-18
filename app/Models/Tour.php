<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Tour extends Model
{
    use HasFactory, Translatable;
    public $translatable = ['name', 'text'];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'tour_service');
    }

    public function type()
    {
        return $this->belongsTo(TourType::class, 'tour_type_id', 'id');
    }

}
