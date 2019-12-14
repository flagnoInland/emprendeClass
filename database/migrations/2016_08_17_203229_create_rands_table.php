<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profeplus_rands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('accesscode');
			$table->integer('disabled');
			$table->timestamps();
		});
		DB::statement('ALTER TABLE `profeplus_rands` 
		CHANGE `accesscode` `accesscode` INT( 6 ) 
		UNSIGNED ZEROFILL NOT NULL ;');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('profeplus_rands');
	}

}
