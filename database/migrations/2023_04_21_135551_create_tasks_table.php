<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_done')->default(false);
            $table->string('title');
            $table->string('description');
            $table->dateTime('due_date');

            $table->foreignIdFor(\App\Models\User::class)
                    ->references('id')
                    ->on('users')
                    ->onDelete('CASCADE');

            $table->foreignIdFor(\App\Models\Category::class)
                    ->references('id')
                    ->on('categories')
                    ->onDelete('CASCADE');

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
        Schema::table('tasks', function (Blueprint $table){
            $table->dropForeignIdFor(\App\Models\User::class);
            $table->dropForeingIdFor(\App\Models\Category::class);
        });
        Schema::dropIfExists('tasks');
    }
}
