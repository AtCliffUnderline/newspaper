<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading', 255);
            $table->longText('text');
            $table->unsignedInteger('category_id');
            $table->timestamps();
        });

		Schema::table('news', function (Blueprint $table) {
			$table->foreign('category_id')
				->references('id')
				->on('categories')
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
		Schema::table('news', function (Blueprint $table) {
			$table->dropForeign('news_category_id_foreign');
		});
        Schema::dropIfExists('news');
    }
}
