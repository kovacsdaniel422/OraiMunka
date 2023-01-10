<?php

use App\Models\Macska;
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
        Schema::create('macskas', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->boolean('nem');
            $table->dateTime('szuletes');
            $table->timestamps();
        });
        Macska::create(['nev' => 'Aron', 'nem' => 1, 'szuletes' => '2021-03-05']);
        Macska::create(['nev' => 'David', 'nem' => 0, 'szuletes' => '2001-04-30']);
        Macska::create(['nev' => 'Gergo', 'nem' => 1, 'szuletes' => '2011-05-12']);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('macskas');
    }
};
