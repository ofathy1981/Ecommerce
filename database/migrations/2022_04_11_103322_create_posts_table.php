<?php
//this three libraries needed to convert phpcode that describe the table into real database table
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //this function for creation of tables 
    public function up()
    {
        // THIS TABLE CREATED BY: php artisan make:migration create_posts_table  then   : php artisan migrate
        //php artisan make:migration add_field_to_poststable --table=posts   to add new fields
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();//create 2 column created at and updated at
            $table->string('name');
            $table->text('sub');
            $table->boolean('is_approved');
            $table->string('age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //this function for deletion of tables
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
