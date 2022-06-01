<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('company_name');
            $table->string('headline');
            $table->string('subheadline');
            $table->text('about_us');
            $table->string('service1');
            $table->string('service2');
            $table->string('service3');
            $table->string('email');
            $table->string('phone');
            $table->string('instagram');
            $table->boolean('is_public')->default(false);
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('theme_id')->constrained('themes', 'id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sites');
    }
};
