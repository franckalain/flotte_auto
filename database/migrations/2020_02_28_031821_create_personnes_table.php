<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type_client',['P','M']);
            $table->string('code')->nullable();
            $table->string('gpe_international')->nullable();
            $table->string('ancienne_ref')->nullable();
            $table->string('ide_email')->nullable();
            $table->string('nom')->nullable();
            $table->string('mobile')->nullable();
            $table->string('segment')->nullable();
            $table->string('charge_client')->nullable();
            $table->string('city_adreferentress')->nullable();
            $table->string('ide_intitule')->nullable();
            $table->string('ide_qualite')->nullable();
            $table->string('ide_domaine')->nullable();
            $table->string('ide_prospect')->nullable();
            $table->string('ide_statut')->nullable();
            $table->string('ide_client_inactif')->nullable();
            $table->string('ide_n_voie')->nullable();
            $table->string('ide_adresse1')->nullable();
            $table->string('ide_adresse2')->nullable();
            $table->string('ide_adresse3')->nullable();
            $table->string('ide_code_post')->nullable();
            $table->string('ide_ville')->nullable();
            $table->string('ide_pays')->nullable();
            $table->string('ide_longitude')->nullable();
            $table->string('ide_latitude')->nullable();
            $table->string('ide_telephone')->nullable();
            $table->string('ide_phone')->nullable();
            $table->string('ide_fax')->nullable();
            $table->string('ide_n_sms')->nullable();
            $table->string('ide_n_nci')->nullable();
            $table->string('ide_n_taxe')->nullable();
            $table->string('ent_n_rcs')->nullable();
            $table->string('ent_longitude')->nullable();
            $table->string('ent_latitude')->nullable();
            $table->string('ent_description')->nullable();
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
        Schema::dropIfExists('personnes');
    }
}
