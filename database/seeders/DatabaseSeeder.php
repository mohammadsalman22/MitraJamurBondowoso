<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Dashboard;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        {
            User::create(
                [

                    'name' => 'Admin',

                    'email' => 'admin@mail.com',

                    'password' => bcrypt('admin123'),
                ]
            );

            Dashboard::create(
                [

                    'nama' => 'Mitra Jamur Bondowoso',

                    'alamat' => 'Bondowoso',

                    'logo' => 'backend/img/photos/unsplash-3.jpg',

                    'deskripsi' => 'Website ini adalaha Website Profile',

                    'whatsapp' => '6281252600127'
                ]
            );
        }
    }
}
