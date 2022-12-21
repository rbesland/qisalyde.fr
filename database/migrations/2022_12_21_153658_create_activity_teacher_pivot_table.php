<?php

use App\Models\Activity;
use App\Models\Teacher;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('activity_teacher', static function (Blueprint $table): void {
            $table->foreignIdFor(Activity::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Teacher::class)->constrained()->cascadeOnDelete();
            $table->primary(['activity_id', 'teacher_id']);

            $table->index('activity_id');
            $table->index('teacher_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_teacher');
    }
};
