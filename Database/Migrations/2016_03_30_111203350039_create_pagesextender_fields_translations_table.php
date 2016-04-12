<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesExtenderFieldsTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagesextender__fields_translations', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('commercial');
            $table->text('self_storage');
            $table->text('packing_materials');

            $table->integer('fields_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['fields_id', 'locale'],'fields_id_local_unique');
            $table->foreign('fields_id', 'fields_id_foreign')->references('id')->on('pagesextender__fields')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pagesextender__fields_translations');
	}
}
