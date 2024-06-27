<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('method_configs', function (Blueprint $table) {
            $table->id();
            $table->enum('event', \App\Enums\Event::values());
            $table->string('method')
                ->unique();
            $table->boolean('enabled');
            $table->integer('interval')
                ->nullable();
            $table->json('base_config');
            $table->json('config')
                ->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('method_configs');
    }
};
