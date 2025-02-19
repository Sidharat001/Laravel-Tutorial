<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // Add New Columns To existing table
            $table->string('address');
            $table->char('status', 1)->default(0);
            // drop column 
            $table->dropColumn('address'); // drop single column
            $table->dropColumn(['status','address']); // drop multiple column
            
            // Modify existing column by change() method
            $table->string('lname')->nullable()->comment('last name is required')->change();

            // Rename column 
            $table->renameColumn('lname', 'last_name');

            // Rename Table name
            $table->rename('students');

            // Change column Order
            $table->after('phone', function (Blueprint $table) {
                $table->string('address');
                $table->char('status', 1)->default(0);
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
