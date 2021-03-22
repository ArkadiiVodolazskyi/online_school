<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRolesTable extends Migration
{
    public function up()
    {
        if (Schema::hasTable('roles') && !Schema::hasColumn('roles', 'description')) {
            Schema::table('roles', function (Blueprint $table) {
                $table->string('description')->nullable();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('roles') && Schema::hasColumn('roles', 'description')) {
            Schema::table('roles', function (Blueprint $table) {
                $table->dropColumn('description');
            });
        }
    }
}
