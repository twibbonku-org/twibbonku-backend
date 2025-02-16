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
        Schema::create('twibbons', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default("");
            $table->string('description')->default("");
            $table->string('slug')->unique();
            $table->string('keyword')->default("");
            $table->bigInteger('image_id')->nullable();
            $table->smallInteger('twibbon_visibility_status')->default(0);
            $table->smallInteger('commentar_visibility_status')->default(0);
            $table->smallInteger('viewer_visibility_status')->default(0);
            $table->smallInteger('status')->default(0);
            $table->bigInteger('created_by');
            $table->timestamps();
            $table->bigInteger('deleted_by')->nullable();
            $table->string('deleted_role')->nullable();
            $table->string('deleted_reason')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('twibbons');
    }
};
