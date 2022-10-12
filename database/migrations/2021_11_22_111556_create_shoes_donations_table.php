<?php
use System\Database\Schema\BluePrint;
use System\Database\Schema\Schema;


 class CreateShoesDonationsTable
 { 
		/**
		* Run the Migrations
		*
		* @return void
		*/ 
		public function up()
		{

			Schema::create('shoes_donations', function (BluePrint $table) {

				$table->id();
				$table->string('email', 50);
				$table->integer('quantity');
				$table->timestamp('donated_at');
				$table->string('renew', 20)->nullable();
				$table->dateTime('expected_on');
				$table->string('month', 2);
				$table->boolean('is_public')->default(0);
				$table->string('donation_status', 20)->default('pending');
				$table->foreign('email')->references('users')->on('email')->cascadeOnDelete();
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

			Schema::modify('shoes_donations', function (BluePrint $table) {

				 
			}); 

		} 

		/**
		* Reverse the migrations.
		*
		* @return void
		*/

		public function down()
		{
			Schema::table('shoes_donations', function(BluePrint $table){
				$table->dropConstrainedForeignId('email');
			});
			Schema::dropIfExists('shoes_donations');
     
		} 

}