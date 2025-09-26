<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Adding a new column to store user roles
            $table->string('role')->default('user'); // Default role is 'user'
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Remove the role column if the migration is rolled back
            $table->dropColumn('role');
        });
    }
}