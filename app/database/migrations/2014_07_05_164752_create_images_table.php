<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('images', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('projects_id')->nullable()->unsigned();
            $table->string('image');
			$table->timestamps();
	    });
		 
		Schema::table('images', function($table) {
    		$table->foreign('projects_id')
	    		->references('id')
	    		->on('projects')
	    		->onDelete('cascade');
 		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('images');
	}

}
