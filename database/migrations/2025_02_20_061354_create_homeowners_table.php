<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('homeowners', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('middle_name');
        $table->string('last_name');
        $table->string('email')->unique();
        $table->string('phone');
        $table->string('address');
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('homeowners');
    }
};