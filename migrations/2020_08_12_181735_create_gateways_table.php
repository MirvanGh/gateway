<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gateways', function (Blueprint $table) {
            //
			$table->id();
			$table->enum('name',[
				'zarinpal',
				'mellat',
				'saman',
				'payir',
				'irankish',
				'sadad',
				'parsian',
				'pasargad',
				'asanpardakht',
				'paypal'
			]);
			$table->json('config');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop($this->getTable());

    }
}
