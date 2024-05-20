<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemendsTable extends Migration
{
    public function up()
    {
        Schema::create('demends', function (Blueprint $table) {
            $table->id();
            $table->string('nom_collier');
            $table->unsignedBigInteger('transport_id');
            $table->string('distination');
            $table->date('date');
            $table->string('nom');
            $table->string('prenom');
            $table->string('type_collier');
            $table->date('date_demande');
            $table->timestamps();
            $table->foreign('transport_id')->references('id')->on('transports')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('demends');
    }
}