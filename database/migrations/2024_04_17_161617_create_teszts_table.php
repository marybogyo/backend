<?php

use App\Models\Teszt;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Event\Code\Test;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->boolean('helyes');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });

        Teszt::create([
            'kerdes'=>'A papírt milyen színű szelektív kukába gyűkjtjük?',
            'v1'=> "kék", 
            'v2'=> "piros", 
            'v3'=> "szürke", 
            'v4'=> "sárga", 
            'helyes'=> true,
            'kategoriaId'=> 1,
        ]);

        Teszt::create([
            'kerdes'=>'Melyek komposztálhatóak?',
            'v1'=> "zöldség-gyümölcs ", 
            'v2'=> "nagy ágak", 
            'v3'=> "fém, műanyg", 
            'v4'=> "ruhanemű", 
            'helyes'=> true,
            'kategoriaId'=> 1,
        ]);

        Teszt::create([
            'kerdes'=>'Fogmosásnál...',
            'v1'=> "elzárom a csapot ", 
            'v2'=> "nem zárom el a csapot", 
            'v3'=> "kitekerem a csapot", 
            'v4'=> "akkor zárom al, amikor végeztem a fogmosással", 
            'helyes'=> false,
            'kategoriaId'=> 1,
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
