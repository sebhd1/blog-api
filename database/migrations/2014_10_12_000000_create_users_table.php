<?php

    use App\Enums\ProfileStatus;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('full_name')
                ->nullable()
                ->virtualAs("TRIM(CONCAT(name, ' ', surname))");

            $table->string('profile_image')->nullable();
            $table->string('email')->unique();
            $table->boolean('is_admin')->default(false);
            $table->text('description')->nullable();
            $table->json('socials')->nullable();
            $table->enum('status', ProfileStatus::values())->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
