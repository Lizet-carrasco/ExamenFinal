<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateFcabins extends Migration{
	public function up(){ 
 		Schema::create('fcabins', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->Integer('code');
			$table->String('location');
			$table->unsignedBigInteger('id_eclassroom');
			$table->foreign('id_eclassroom')->references('id')->on('eclassrooms');
			$table->unsignedBigInteger('id_dpavilions');
			$table->foreign('id_dpavilions')->references('id')->on('dpavilions');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}