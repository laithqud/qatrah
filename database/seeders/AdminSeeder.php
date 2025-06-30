<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the first admin if none exists
        if (Admin::count() === 0) {
            Admin::create([
                'name' => 'مدير النظام',
                'email' => 'admin@qatret-ghaith.com',
                'password' => Hash::make('admin123456'),
            ]);
            
            $this->command->info('تم إنشاء المشرف الأول بنجاح');
            $this->command->info('البريد الإلكتروني: admin@qatret-ghaith.com');
            $this->command->info('كلمة المرور: admin123456');
        } else {
            $this->command->info('المشرفين موجودين بالفعل');
        }
    }
}
