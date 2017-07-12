<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    protected $filalabre = ['name','article_id'];

    public function article(){
    	return $this->belongs();
    }
}
