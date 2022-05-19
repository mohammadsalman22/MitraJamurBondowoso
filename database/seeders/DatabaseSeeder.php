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

                    'alamat' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d783.9491361847279!2d113.87259173399515!3d-8.013780070569595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x60ec956105b54ae5!2zOMKwMDAnNDkuNyJTIDExM8KwNTInMjIuNSJF!5e0!3m2!1sid!2sid!4v1652963542933!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',

                    'logo' => 'frontend/img/logo.png',

                    'deskripsi' => 'Website ini adalaha Website Profile',

                    'whatsapp' => '6282244112791',

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
