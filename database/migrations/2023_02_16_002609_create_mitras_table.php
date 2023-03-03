<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();
            $table->string('namamitra');
            $table->string('kodemitra');
            // $table->enum('regional', ["Tuban", "Gresik", "Lamongan", "Madura", "Bojonegoro"]);
            $table->string('catatan')->nullable();
            // $table->string('datalengkap')->nullable()->default("Tidak Ada File");
            // $table->string('proposal')->nullable()->default("Tidak Ada File");
            // $table->string('sp3k')->nullable()->default("Tidak Ada File");
            // $table->string('agunan')->nullable()->default("Tidak Ada File");
            // $table->string('tempatlahir');
            // $table->date('tanggallahir');
            // $table->enum('gender', ["Laki-Laki", "Perempuan"]);
            // $table->bigInteger('nokartukeluarga');
            // $table->string('pekerjaan');
            // $table->enum('pendidikanterakhir', ["SD", "SMP", "SMA", "S1/S2/S3"]);
            // $table->string('alamat');
            // $table->string('provinsi');
            // $table->string('kabupatenkota');
            // $table->string('kecamatan');
            // $table->string('desakelurahan');
            // $table->integer('kodepos');
            // $table->enum('agama', ["Islam", "Kristen", "Hindu", "Buddha", "Katolik", "Konghucu"]);
            // $table->bigInteger('notelepon');
            // $table->bigInteger('nohp');
            // $table->string('emailumkm');
            // $table->enum('regional', ["Tuban", "Gresik", "Lamongan", "Madura", "Bojonegoro"]);
            // $table->boolean('sudahmenikah')->unsigned()->nullable()->default('0');
            // $table->string('namapendamping')->nullable();
            // $table->bigInteger('nomorsuratmenikah')->nullable();
            // $table->bigInteger('nomorktp')->nullable();
            // $table->string('alamatpendamping')->nullable();
            // $table->string('provinsipendamping')->nullable();
            // $table->string('kabupatenkotapendamping')->nullable();
            // $table->string('desakelurahanpendamping')->nullable();
            // $table->integer('kodepospendamping')->nullable();
            // $table->bigInteger('noteleponpendamping')->nullable();
            // $table->string('form_pengajuan');
            // $table->string('siupsku');
            // $table->string('suratpernyataanbinaanbumn');
            // $table->string('suratpersetujuansuamiistri');
            // $table->string('fotokopiktppemohon');
            // $table->string('fotokopiktpsuamiistri');
            // $table->string('fotokopiksk');
            // $table->string('fotokopisuratnikah');
            // $table->string('fotokopibankmandiri');
            // $table->string('fotokopiagunan');
            // $table->string('persetujuantertulis');
            // $table->string('pasfotopemohon');
            // $table->string('pasfotosuamiistri');
            // $table->string('denahlokasi');
            // $table->string('fotokegiatan');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitras');
    }
}
