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
        Schema::create('data_recovery_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('created_by')->unsigned();
            $table->bigInteger('branch_id')->unsigned();
            $table->integer('employer_id')->unsigned();
            $table->date('date_of_inspection');
            $table->decimal('debt_established');
            $table->decimal('debt_paid');
            $table->decimal('total_debt_paid');
            $table->decimal('balance');
            $table->date('date_of_payment');
            $table->string('rrr_receipt_number');
            $table->string('nsitf_receipt_number');
            $table->text('remark');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('employer_id')->references('id')->on('employers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_recovery_reports');
    }
};
