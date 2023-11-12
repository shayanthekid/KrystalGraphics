<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoversrcToProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
      {
        Schema::table('product_images', function (Blueprint $table) {
            $table->string('coversrc')->nullable()->after('type'); // Add the 'coversrc' column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
   {
        Schema::table('product_images', function (Blueprint $table) {
            $table->dropColumn('coversrc'); // Drop the 'coversrc' column
        });
    }
}
