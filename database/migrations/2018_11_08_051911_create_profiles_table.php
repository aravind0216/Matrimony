<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date')->nullable();
            $table->string('userid')->nullable();
            $table->string('profilefor')->nullable();
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('subcaste')->nullable();
            $table->string('education')->nullable();
            $table->string('educationdes')->nullable();
            $table->string('empolyedin')->nullable();
            $table->string('jobdes')->nullable();
            $table->string('compayname')->nullable();
            $table->string('company_address')->nullable();
            $table->string('income')->nullable();
            $table->string('blood')->nullable();
            $table->string('martialstatus')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('colour')->nullable();
            $table->string('language')->nullable();
            $table->string('physicalstatus')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('altmobile')->nullable();
            $table->string('address')->nullable();
            $table->string('pincode')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('fathername')->nullable();
            $table->string('fatherwork')->nullable();
            $table->string('mothername')->nullable();
            $table->string('motherwork')->nullable();
            $table->string('nativeplace')->nullable();
            $table->string('nativedistrict')->nullable();
            $table->string('noofbrothers')->nullable();
            $table->string('noofbrothersmarried')->nullable();
            $table->string('noofsisters')->nullable();
            $table->string('noofsistersmarried')->nullable();
            $table->string('familystatus')->nullable();
            $table->string('star')->nullable();
            $table->string('rasi')->nullable();
            $table->string('laknam')->nullable();
            $table->string('thisaiirupu')->nullable();
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->string('day')->nullable();
            $table->text('rasi1')->nullable();
            $table->text('rasi2')->nullable();
            $table->text('rasi3')->nullable();
            $table->text('rasi4')->nullable();
            $table->text('rasi5')->nullable();
            $table->text('rasi6')->nullable();
            $table->text('rasi7')->nullable();
            $table->text('rasi8')->nullable();
            $table->text('rasi9')->nullable();
            $table->text('rasi10')->nullable();
            $table->text('rasi11')->nullable();
            $table->text('rasi12')->nullable();
            $table->text('am1')->nullable();
            $table->text('am2')->nullable();
            $table->text('am3')->nullable();
            $table->text('am4')->nullable();
            $table->text('am5')->nullable();
            $table->text('am6')->nullable();
            $table->text('am7')->nullable();
            $table->text('am8')->nullable();
            $table->text('am9')->nullable();
            $table->text('am10')->nullable();
            $table->text('am11')->nullable();
            $table->text('am12')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('placeofbirth')->nullable();
            $table->string('timeofbirth')->nullable();
            $table->string('url')->nullable();
            $table->string('status')->default('0');
            $table->string('plan_id')->nullable();
            $table->string('plan')->nullable();
            $table->string('planstartdate')->nullable();
            $table->string('nextduedate')->nullable();
            $table->string('role')->default('0');
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
        Schema::dropIfExists('profiles');
    }
}
