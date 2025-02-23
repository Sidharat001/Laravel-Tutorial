<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $StudentList = collect([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '1234567890',
                'address' => '123 Main St',
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob@example.com',
                'phone' => '5555555555',
                'address' => '789 Oak St',
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'phone' => '1111111111',
                'address' => '321 Pine St',
            ],
        ]);

        // For Single record Insert
        Student::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '1234567890',
            'address' => '123 Main St',
        ]);

        // For multiple record inserts
        $StudentList->each(function ($Student) {
            Student::insert($Student); // Insert without create date and modify date by using insert method
        });
    }
}
