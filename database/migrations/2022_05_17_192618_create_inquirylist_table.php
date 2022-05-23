<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquirylistTable extends Migration
{
    public function up()
    {
        Schema::table('inquirylist', function(Blueprint $table) {
            $sql = 'ALTER TABLE inquirylist ADD last_code INT ZEROFILL';
            DB::statement($sql);
        });
        Schema::create('inquirylist', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('first_code')->index()->length(3);
            $table->unsignedInteger('last_code')->index()->length(4);
            $table->string('prefecture',10);
            $table->string('city')->length(191);
            $table->string('address')->length(191);
            $table->string('inquiry_content')->length(191);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inquirylist');
    }
}
