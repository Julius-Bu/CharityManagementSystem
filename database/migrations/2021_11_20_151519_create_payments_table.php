<?php
use System\Database\Schema\BluePrint;
use System\Database\Schema\Schema;


 class CreatePaymentsTable
 { 
		/**
		* Run the Migrations
		*
		* @return void
		*/ 
		public function up()
		{

			Schema::create('payments', function (BluePrint $table) {

				$table->id();
				$table->string('email',60);
				$table->foreign('email')->references('users')->on('email')->cascadeOnDelete();
				$table->integer('amount');
				$table->string('txt_ref');
				$table->string('transaction_id');
				$table->dateTime('donated_at');
				$table->string('month', 2);
				$table->boolean('is_anonymous')->default(1);
				$table->timestamps();
				$table->softDeletes(); 
			}); 

		} 

		/**
		* Modify Migrations
		*
		* @return void
		*/ 
		public function alter()
		{

			Schema::modify('payments', function (BluePrint $table) {

				 
			}); 

		} 

		/**
		* Reverse the migrations.
		*
		* @return void
		*/

		public function down()
		{

			Schema::dropIfExists('payments');
     
		} 

}