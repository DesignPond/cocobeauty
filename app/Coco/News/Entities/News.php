<?php

namespace App\Coco\News\Entities;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table    = 'news';
	protected $fillable = ['titre','texte','date'];
    protected $dates    = ['date'];

    public $timestamps  = false;

}