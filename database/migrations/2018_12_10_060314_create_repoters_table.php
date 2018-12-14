<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repoters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('position');

            // $table->decimal('long', 10, 7);
            // $table->decimal('lat', 10, 7);

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repoters');

        Schema::table("repoters", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
