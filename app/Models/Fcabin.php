<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Generated By PlantUML Command
class Fcabin extends Model{
public function eclassroom(){ return $this->belongsTo('App\Models\Eclassroom'); }
public function gvote(){ return $this->hasMany('App\Models\gvote'); }
}