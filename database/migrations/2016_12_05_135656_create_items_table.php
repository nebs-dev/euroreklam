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
            $table->string('slika')->nullable();
            $table->string('cijena_pdv');
            $table->string('cijena_popust')->nullable();
            $table->text('opis');
            $table->string('en_klasa');
            $table->string('kapacitet_hladjenja');
            $table->string('kapacitet_grijanja')->nullable();
            $table->string('rashladno_sredstvo')->nullable();
            $table->string('prikljucak_el_energije_hladjenje');
            $table->string('prikljucak_el_energije_grijanje')->nullable();            
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
            $table->string('protok_zraka_unutarnja')->nullable();
            $table->string('protok_zraka_vanjska')->nullable();
            $table->string('raspolozivi_pad_tlaka')->nullable();
            $table->string('podrucje_rada')->nullable();
            $table->string('razina_zvucne_snage_u_j')->nullable();
            $table->string('razina_zvucnog_tlaka_u_j')->nullable();
            $table->string('razina_zvucne_snage_v_j')->nullable();
            $table->string('razina_zvucnog_tlaka_v_j')->nullable();
            $table->integer('jamstvo');
            $table->string('seer')->nullable();
            $table->string('scop')->nullable();
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
