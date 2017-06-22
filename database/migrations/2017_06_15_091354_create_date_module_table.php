<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDateModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_module', function (Blueprint $table) {
	    $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('date_id');
            $table->string('module_id');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('date_module', function(Blueprint $table)
        {
            $table->foreign('date_id')->references('id')->on('dates')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date_module');
    }
}
