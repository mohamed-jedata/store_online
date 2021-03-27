<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->longText("description");
            $table->string("price");
            $table->string("country");
            $table->string("main_image");
            $table->string("images");
            $table->string("tags");
            $table->boolean("visible")->default(1);
            $table->boolean("allow_comments")->default(1);
            $table->integer("stock");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("cat_id");
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")
            ->onUpdate("cascade")
            ->onDelete("cascade");
            $table->foreign("cat_id")->references("id")->on('categories')
            ->onUpdate('cascade')
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
        Schema::dropIfExists('products');
    }
}
