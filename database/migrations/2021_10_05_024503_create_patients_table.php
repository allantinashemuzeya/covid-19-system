<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('firstName');

            $table->string('lastName');

            $table->string('age');

            $table->string('sex');

            $table->string('passportNumber')->nullable();

            $table->string('id_number')->nullable();

            $table->string('laboratoryReferenceNumber');

            $table->string('collection_site')->default('Midrand Johannesburg');

            $table->string('testType')->default('SARS-CoV [COVID-19]');

            $table->string('dob');

            $table->string('email_address');

            $table->string('contact_details');

            $table->string('result')->default('NEGATIVE');

            $table->string('referring_doctor')->default('Dr Yvonne Holt');

            $table->timestamp('receive_date')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('collection_date')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('report_date')->default(DB::raw('CURRENT_TIMESTAMP'));

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
        Schema::dropIfExists('patients');
    }
}
