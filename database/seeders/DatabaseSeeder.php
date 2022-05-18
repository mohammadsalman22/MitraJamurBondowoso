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

                    'whatsapp' => '6281252600127',

                    'instagram' => 'https://www.instagram.com/syair_devinci/',

                    'twitter' => 'https://twitter.com/SyairV',

                    'facebook' => 'https://www.facebook.com/Mitra-Jamur-Bondowoso-593256841159383',

                    'youtube' => 'https://www.youtube.com/channel/UCCLLUq6aN0wXKeabf9tRb5Q',

                    'gmail' => 'syairadirawan96@gmail.com'
                ]
            );
        }
    }
}
