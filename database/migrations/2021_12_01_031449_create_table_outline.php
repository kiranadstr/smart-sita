<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOutline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_outline', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->string('judul', 255);
            $table->string('uploadOutline', 255);
            $table->enum('pilihanPembimbing', [
                'Pembimbing Tunggal', 
                'Team Pembimbing']);
            $table->enum('pilihanTunggal', [
                'Prof. Dr. Iskandar Fitri, ST., MT',
                'Dr. Ucuk Darusalam, ST., MT',
                'Dr. Septi Andryana, S.Kom., MMSI',
                'Dr. Fauziah, MMSI',
                'Dr. Agung Triayudi, S.Kom., M.Kom.',
                'Andrianingsih, S.Kom., MMSI.',
                'Ira Diana Sholihati, S.Si., MMSI.',
                'Agus Iskandar, S.Kom., M.Kom']);
            $table->enum('pilihanTeam1', [
                'Prof. Dr. Iskandar Fitri, ST., MT',
                'Dr. Ucuk Darusalam, ST., MT',
                'Dr. Septi Andryana, S.Kom., MMSI',
                'Dr. Fauziah, MMSI',
                'Dr. Agung Triayudi, S.Kom., M.Kom']);
            $table->enum('pilihanTeam2', [
                'Andrianingsih, S.Kom., MMSI.',
                'Ira Diana Sholihati, S.Si., MMSI.',
                'Agus Iskandar, S.Kom., M.Kom']);
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
        Schema::dropIfExists('table_outline');
    }
}