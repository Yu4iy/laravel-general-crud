<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

				$table->string('first_name', 50);
				$table->string('last_name', 50);
				$table->tinyInteger('age');
				$table->date('date_of_birth'); 
				$table->string('gender', 10);
				$table->string('country', 30);
				$table->string('city', 30);
				$table->string('address', 100);
				$table->string('cell', 25);
				$table->boolean('criminal');
				$table->boolean('active_warants');
				$table->string('slug');
				
				$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
