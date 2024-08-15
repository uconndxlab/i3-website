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
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('saml_users', function (Blueprint $table) {
            $table->id();
            $table->string('netid')->unique();
            $table->string('first_name');
            $table->string('full_name');
            $table->string('payroll_id')->nullable();
            $table->string('affiliation')->nullable();
            $table->string('email');
            $table->boolean('admin')->default(false);
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->foreignId('user_id')->constrained('saml_users');
            $table->string('status')->default('proposed');
            $table->timestamps();
        });

        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->foreignId('user_id')->constrained('saml_users');
            $table->foreignId('post_id')->constrained('posts');
            $table->boolean('deleted')->default(false);
            $table->boolean('hidden')->default(false);
            $table->timestamps();
        });

        Schema::create('post_upvotes', function(Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->contained('saml_users');
            $table->foreignId('post_id')->contained('posts');
            $table->boolean('upvote')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comments');
        Schema::dropIfExists('post_upvotes');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('saml_users');
    }
};
