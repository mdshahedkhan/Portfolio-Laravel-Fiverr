<?php

namespace Database\Seeders;

use App\Models\AboutMe;
use Illuminate\Database\Seeder;

class AboutMeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = "waltercore";
        AboutMe::create([
            'create_by'       => 1,
            'name'            => $name,
            'short_story'     => "Florian Lafay Lead Designer, Account Manager, Art Director & mehr",
            'email_address'   => "lafayflorian@gmail.com",
            'mobile'          => '49 175 208 79 62',
            'about_me'        => "Als Digital Native blicke ich auf mittlerweile 10 erfolgreiche Jahre in der Werbe- und Marketingbranche zurück. Dabei begleitete ich bisher Marken wie Fujitsu, LOTTO Bayern und F-Secure als Senior Project-Manager, digitaler Designer und auf Art-Direktions-Basis.",
            'download_resume' => "index.php",
            'signature'       => "https://via.placeholder.com/150/92c952",
            'avatar'          => "https://via.placeholder.com/150/92c952"
        ]);
    }
}
