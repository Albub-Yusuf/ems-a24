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
        Schema::create('r_s_v_p_s', function (Blueprint $table) {
            $table->id();
            $table->enum('response',['attending','not_attending','maybe']);
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('host_id');
            $table->integer('guest_id')->default(1);
            $table->foreign('event_id')->references('id')->on('events')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('host_id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_s_v_p_s');
    }
};
