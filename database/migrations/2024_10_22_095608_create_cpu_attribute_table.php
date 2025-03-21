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
        Schema::create('cpu_attribute', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cpu_id')->constrained()->onDelete('cascade'); // Khóa ngoại tới bảng cpus
            $table->foreignId('attribute_id')->constrained()->onDelete('cascade'); // Khóa ngoại tới bảng attributes
            $table->string('value'); // Giá trị của thuộc tính
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpu_attribute');
    }
};
