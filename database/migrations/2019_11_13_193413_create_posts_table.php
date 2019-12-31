<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('Last_Name');
            $table->string('Middle_Name');
            $table->string('First_Name'); 
            $table->string('Contact_Number');
            $table->string('Organization_Name');
            $table->string('Organization_Head');
            $table->string('Country_Origin');
            $table->string('Business_Type');
            $table->string('Business_Area');
            $table->string('Organization_Address');
            $table->string('Address');
            $table->string('LastName');
            $table->string('MiddleName');
            $table->string('FirstName');
            $table->string('Age');
            $table->string('Nationality');
            $table->string('Birth_Date');
            $table->string('Ages');
            $table->string('First_Referee');
            $table->string('FirstRef_Contact');
            $table->string('Second_Referee');
            $table->string('SecondRef_Contact');
            $table->string('Operating_Bank');
            $table->string('Marital_Status');
            $table->string('Bank_Name');
            $table->string('Account_Number');
            $table->string('Statutory_Position');
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
        Schema::dropIfExists('posts');
    }
}
