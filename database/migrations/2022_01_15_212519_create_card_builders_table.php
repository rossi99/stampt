<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_builders', function (Blueprint $table) {
            $table->id();
            $table->string('card_title');
            $table->string('business_id');
            $table->string('card_bucket_a');
            $table->string('card_bucket_b');
            $table->string('card_bucket_c');
            $table->string('card_bucket_d');
            $table->string('card_bucket_e');
            $table->string('card_bucket_f');
            $table->string('card_bucket_g');
            $table->string('card_bucket_h');
            $table->string('card_bucket_i');
            $table->string('card_bucket_j');
            $table->string('card_bucket_k');
            $table->string('card_bucket_l');
            $table->string('card_bucket_m');
            $table->string('card_bucket_n');
            $table->string('card_bucket_0');
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
        Schema::dropIfExists('card_builders');
    }
}
