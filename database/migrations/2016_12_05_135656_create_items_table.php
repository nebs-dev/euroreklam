<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('category_id')->unsigned()->default(NULL)->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->string('naziv')->unique();
            $table->string('slika');
            $table->double('cijena_pdv', 16, 6);
            $table->double('cijena_popust', 16, 6)->nullable();
            $table->text('opis');
            $table->string('en_klasa');
            $table->string('kapacitet_hladjenja');
            $table->string('kapacitet_grijanja')->nullable();
            $table->string('rashladno_sredstvo')->nullable();
            $table->string('prikljucak_el_energije_hladjenje');
            $table->string('prikljucak_el_energije_grijanje')->nullable();
            $table->string('eer')->nullable();
            $table->string('cop')->nullable();
            $table->string('odvlazivanje');
            $table->string('napajanje');
            $table->string('buka_un_jedinice');
            $table->string('buka_vanj_jedinice');
            $table->string('dimenzije_un_jedinice');
            $table->string('dimenzije_vanj_jedinice');
            $table->string('tezina_un_jedinice');
            $table->string('tezina_vanj_jedinice')->nullable();
            $table->string('promjer_cijevi_tekuca');
            $table->string('promjer_cijevi_plinska');
            $table->integer('max_duljina_cjevovoda')->nullable();
            $table->integer('max_visinska_razlika')->nullable();
            $table->string('protog_zraka_unutarnja')->nullable();
            $table->string('protog_zraka_vanjska')->nullable();
            $table->string('raspolozivi_pad_tlaka')->nullable();
            $table->string('jamstvo');
            $table->double('seer', 16, 6)->nullable();
            $table->double('scop', 16, 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('items');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
