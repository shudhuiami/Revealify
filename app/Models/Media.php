<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    protected $appends = ['full_file_path'];
    public function getFullFilePathAttribute( $value ) {
        return asset('storage/'.$this->attributes['file_path']);
    }
}
