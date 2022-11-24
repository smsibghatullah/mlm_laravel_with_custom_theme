<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMLMMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mlm_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_name');
            $table->string('email')->unique();
            $table->string('fund_password');
            $table->string('phone');
            $table->string('code');
            $table->string('parent_code');
            $table->string('password');
            $table->boolean('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_l_m_members');
    }
}
