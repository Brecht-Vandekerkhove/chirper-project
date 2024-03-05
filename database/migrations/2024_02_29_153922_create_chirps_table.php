<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chirps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chirps');



    }
    App\Models\Chirp::all();
    => Illuminate\Database\Eloquent\Collection {#4512
        all: [
          App\Models\Chirp {#4514
            id: 1,
            user_id: 1,
            message: "I'm building Chirper with Laravel!",
            created_at: "2022-08-24 13:37:00",
            updated_at: "2022-08-24 13:37:00",
          },
        ],
      }

};
