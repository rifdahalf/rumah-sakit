<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Antrian;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->string('no_antrian');
            $table->foreignId('user_id')->nullable();
            $table->string('nama');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('no_hp');
            $table->string('no_ktp');
            $table->enum('poli', ['anak', 'kandungan', 'neonatologi']);
            $table->enum('dokter', ['Dr. Martha', 'Dr. Lubis', 'Dr. Fanani', 'Dr. Aurellia', 'Dr. Wiratna', 'Dr. Alifia', 'Dr. Sion', 'Dr. Rifdah', 'Dr. Samuel']);
            $table->boolean('is_call')->default(false);
            $table->date('tanggal_antrian')->default(Carbon::now());
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
        Schema::dropIfExists('antrians');
    }
};
