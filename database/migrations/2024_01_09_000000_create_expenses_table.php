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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();

            $table->decimal('amount');
            $table->string('description');
            $table->date('date');
            $table->string('project_id');
            $table->string('cost_center_id');
            $table->boolean('is_indirect');
            $table->decimal('allocation_percentage');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
};
