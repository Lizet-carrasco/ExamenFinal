<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateAusers extends Migration{
	public function up(){ 
 		Schema::create('ausers', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->Integer('dni');
			$table->String('name');
			$table->String('lastName');
			$table->Integer('age');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}