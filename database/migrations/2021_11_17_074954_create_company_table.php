<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');

            $table->decimal('sharePrice', 8, 2)->nullable();
            $table->decimal('availableShares', 8, 2)->nullable();
            $table->decimal('noOfShares', 8, 2)->nullable();
            $table->decimal('totalShares', 8, 2)->nullable();
            $table->string('photo')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
