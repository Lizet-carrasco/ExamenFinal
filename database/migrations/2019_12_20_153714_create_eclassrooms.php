<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateEclassrooms extends Migration{
	public function up(){ 
 		Schema::create('eclassrooms', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->Integer('code');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}