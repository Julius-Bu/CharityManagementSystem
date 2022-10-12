<?php
use System\Database\Schema\BluePrint;
use System\Database\Schema\Schema;


 class CreateClothesDonationsTable
 { 
		/**
		* Run the Migrations
		*
		* @return void
		*/ 
		public function up()
		{

			Schema::create('clothes_donations', function (BluePrint $table) {

				$table->id();
				$table->string('email', 50);
				$table->text('categories');
				$table->timestamp('donated_at');
				$table->string('renew', 20)->nullable();
				$table->date('expected_on');
				$table->string('month', 2);
				$table->string('donation_status', 20)->default('pending');
				$table->boolean('is_public')->default(0);
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

			Schema::modify('clothes_donations', function (BluePrint $table) {

				 
			}); 

		} 

		/**
		* Reverse the migrations.
		*
		* @return void
		*/

		public function down()
		{

			Schema::dropIfExists('clothes_donations');
     
		} 

}