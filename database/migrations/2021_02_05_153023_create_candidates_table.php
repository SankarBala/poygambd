<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void       
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('father')->nullable();
            $table->string('present_address')->nullable();
            $table->string('parmanent_address')->nullable();
            $table->string('fb_id')->nullable();
            $table->string('religion')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('body_color')->nullable();
            $table->string('phone')->nullable();
            $table->string('profession')->nullable();
            $table->string('education')->nullable();
            $table->string('father_profession')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_profession')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('siblings')->nullable();
            $table->string('extra_virtue')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('images')->nullable();
            $table->enum('status', ['active', 'inactive', 'engaged', 'rejected', 'married'])->default('active');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->boolean('premarried')->default(false);
            $table->string('pre_spouse_name')->nullable();
            $table->string('pre_spouse_father')->nullable();
            $table->string('divorce_details')->nullable();
            $table->string('divorce_proof')->nullable();
            $table->string('pre_spouse_address')->nullable();
            $table->date('dob')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
