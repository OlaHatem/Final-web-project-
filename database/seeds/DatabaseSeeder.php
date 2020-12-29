<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PhoneSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(PaymentSeeder::class);

    }
}
