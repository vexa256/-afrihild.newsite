<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_africhild', function (Blueprint $table) {
            $table->id();
            $table->string('PageTitle');
            $table->string('UID');
            $table->text('Vision');
            $table->text('Mission');
            $table->string('AboutUsPhoto');

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
        //
    }
};
