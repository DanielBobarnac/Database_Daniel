<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'description',
        'author',
        'img'
    ];

    public function getDescriptionSubstring(){
        if(strlen($this->description) > 15){
            return substr($this->description , 0 , 15).'...';
        }else{
            return $this->description;
        }
    }

    public function getFormattedDate(){
        return $this->created_at->format('d/m/Y');
    }
}
