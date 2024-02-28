<?php

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
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            //persona juridica
            $table->string('legal_name');
            //nombre del representante
            $table->string('representative_name')->nullable();
            //nit
            $table->string('nit');
            //tipo de afiliacion
            $table->string('affiliation_type');
            //rubro
            $table->string('business');
            //activo
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('organizations');
    }
};
