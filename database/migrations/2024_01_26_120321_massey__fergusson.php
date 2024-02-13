<?php

use App\Http\Controllers\TractorController;
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
        Schema::create('Massey_Fergusson', function (Blueprint $table) {
            $table->id();
            $table->decimal('kods');
            $table->longText('skaidrojums');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
