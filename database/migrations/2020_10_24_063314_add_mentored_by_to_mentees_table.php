<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMentoredByToMenteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mentees', function (Blueprint $table) {
            $table->unsignedBigInteger('mentored_by')->index()->after('nim_mentee');

            $table->foreign('mentored_by')->references('id')->on('mentors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mentees', function (Blueprint $table) {
            $table->dropColumn('mentored_by');
        });
    }
}
