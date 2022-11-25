<?php

use App\Models\Artist\Artist;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_presentations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Artist::class);
            $table->integer('base_time')->default(120);
            $table->integer('max_time')->default(300);
            $table->double('base_fee', 8, 2);
            $table->double('half_hour_extra_fee', 8, 2);
            $table->double('hour_extra_fee', 8, 2);
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
        Schema::dropIfExists('artist_presentations');
    }
};
