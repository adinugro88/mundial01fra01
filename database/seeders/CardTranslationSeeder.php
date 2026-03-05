<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Seeder;

class CardTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            // Pool Card
            ['key' => 'card.hallenbad.title', 'language' => 'id', 'section' => 'pages', 'value' => 'Kolam Renang', 'type' => 'text'],
            ['key' => 'card.hallenbad.title', 'language' => 'en', 'section' => 'pages', 'value' => 'Swimming Pool', 'type' => 'text'],
            ['key' => 'card.hallenbad.title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Piscine', 'type' => 'text'],
            
            ['key' => 'card.hallenbad.desc', 'language' => 'id', 'section' => 'pages', 'value' => 'Berenang itu sehat dan memperkuat tubuh dan jiwa kita. Nikmati berenang dalam suasana yang menyenangkan di kolam renang dalam ruangan kami. Ada sesuatu untuk semua orang, dari muda hingga tua.', 'type' => 'html'],
            ['key' => 'card.hallenbad.desc', 'language' => 'en', 'section' => 'pages', 'value' => 'Swimming is healthy and strengthens our body and soul. Enjoy swimming in a pleasant atmosphere in our indoor pool. There is something for everyone, from young to old.', 'type' => 'html'],
            ['key' => 'card.hallenbad.desc', 'language' => 'fr', 'section' => 'pages', 'value' => 'La natation est saine et renforce le corps et l\'âme de nous, humains. Profitez de la baignade dans une atmosphère agréable dans notre piscine intérieure. Il y en a pour tous les goûts, des jeunes aux moins jeunes.', 'type' => 'html'],
            
            // Sauna Card
            ['key' => 'card.sauna.title', 'language' => 'id', 'section' => 'pages', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'card.sauna.title', 'language' => 'en', 'section' => 'pages', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'card.sauna.title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Sauna', 'type' => 'text'],
            
            ['key' => 'card.sauna.desc', 'language' => 'id', 'section' => 'pages', 'value' => 'Baik di musim dingin atau musim panas, sauna adalah bentuk khusus dari perawatan panas-dingin yang mendorong kesehatan dan relaksasi. Antara lain, sauna merangsang metabolisme, menstabilkan sistem kardiovaskular, dan membantu melatih sistem vaskular.', 'type' => 'html'],
            ['key' => 'card.sauna.desc', 'language' => 'en', 'section' => 'pages', 'value' => 'Whether in winter or summer, the sauna is a special form of heat-cold treatment that promotes health and relaxation. Among other things, the sauna stimulates metabolism, stabilizes the cardiovascular system, and helps train the vascular system.', 'type' => 'html'],
            ['key' => 'card.sauna.desc', 'language' => 'fr', 'section' => 'pages', 'value' => 'Que ce soit en hiver ou en été, le sauna est une forme particulière de traitement chaud-froid qui favorise la santé et la détente. Entre autres, le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire.', 'type' => 'html'],
            
            // Mini Golf Card
            ['key' => 'card.minigolf.title', 'language' => 'id', 'section' => 'pages', 'value' => 'Minigolf', 'type' => 'text'],
            ['key' => 'card.minigolf.title', 'language' => 'en', 'section' => 'pages', 'value' => 'Mini Golf', 'type' => 'text'],
            ['key' => 'card.minigolf.title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Minigolf', 'type' => 'text'],
            
            ['key' => 'card.minigolf.desc', 'language' => 'id', 'section' => 'pages', 'value' => 'Nikmati permainan mini golf di lapangan mini golf kami. Mini golf 20 lubang kami terletak di jantung taman alam kami. Alam dan kesenangan untuk seluruh keluarga.', 'type' => 'html'],
            ['key' => 'card.minigolf.desc', 'language' => 'en', 'section' => 'pages', 'value' => 'Enjoy a game of mini golf on our mini golf course. Our 20-hole mini golf is located in the heart of our nature park. Nature and fun for the whole family.', 'type' => 'html'],
            ['key' => 'card.minigolf.desc', 'language' => 'fr', 'section' => 'pages', 'value' => 'Profitez d\'une partie de mini-golf sur notre terrain de mini-golf. Notre mini-golf de 20 trous est situé au cœur de notre parc naturel. Nature et plaisir pour toute la famille.', 'type' => 'html'],
            
            // Bowling Card
            ['key' => 'card.bowling.title', 'language' => 'id', 'section' => 'pages', 'value' => 'Bowling', 'type' => 'text'],
            ['key' => 'card.bowling.title', 'language' => 'en', 'section' => 'pages', 'value' => 'Bowling', 'type' => 'text'],
            ['key' => 'card.bowling.title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Bowling', 'type' => 'text'],
            
            ['key' => 'card.bowling.desc', 'language' => 'id', 'section' => 'pages', 'value' => 'Bowling adalah permainan yang mirip dengan permainan kesepin. Ini menggabungkan olahraga dan kesenangan. Anda dapat memainkannya dengan teman atau keluarga. Itulah mengapa orang suka bermain bowling. Pusat rekreasi Mundial memiliki fasilitas besar dengan banyak jalur bowling.', 'type' => 'html'],
            ['key' => 'card.bowling.desc', 'language' => 'en', 'section' => 'pages', 'value' => 'Bowling is a game that is similar to the game of skittles. It combines sport and fun. You can play it with friends or family. That is why people love to play bowling. The Mundial leisure center has a large facility with many bowling lanes.', 'type' => 'html'],
            ['key' => 'card.bowling.desc', 'language' => 'fr', 'section' => 'pages', 'value' => 'Le bowling est un jeu qui s\'apparente au jeu de quilles. Il combine le sport et le plaisir. Vous pouvez y jouer avec des amis ou en famille. C\'est pourquoi les gens aiment jouer au bowling. Le centre de loisirs Mundial dispose d\'une grande installation avec de nombreuses pistes de bowling.', 'type' => 'html'],
            
            // Birthday Card
            ['key' => 'card.birthday.title', 'language' => 'id', 'section' => 'pages', 'value' => 'Pesta Ulang Tahun', 'type' => 'text'],
            ['key' => 'card.birthday.title', 'language' => 'en', 'section' => 'pages', 'value' => 'Birthday Party', 'type' => 'text'],
            ['key' => 'card.birthday.title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Fête d\'Anniversaire', 'type' => 'text'],
            
            ['key' => 'card.birthday.desc', 'language' => 'id', 'section' => 'pages', 'value' => 'Mulai tahun baru kehidupan olahraga dan aktif Anda. Rayakan pesta ulang tahun di jalur bowling kami. Datang dan bersenang-senanglah di jalur bowling kami!', 'type' => 'html'],
            ['key' => 'card.birthday.desc', 'language' => 'en', 'section' => 'pages', 'value' => 'Start the new year of your active and sports life. Celebrate birthday parties on our bowling lane. Come and have fun on our bowling lane!', 'type' => 'html'],
            ['key' => 'card.birthday.desc', 'language' => 'fr', 'section' => 'pages', 'value' => 'Commencez la nouvelle année de votre vie sportive et active. Célébrez les fêtes d\'anniversaire sur la piste de bowling. Venez vous amuser sur notre piste de bowling!', 'type' => 'html'],
            
            // Restaurant Card
            ['key' => 'card.restaurant.title', 'language' => 'id', 'section' => 'pages', 'value' => 'Restoran', 'type' => 'text'],
            ['key' => 'card.restaurant.title', 'language' => 'en', 'section' => 'pages', 'value' => 'Restaurant', 'type' => 'text'],
            ['key' => 'card.restaurant.title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Restaurant', 'type' => 'text'],
            
            ['key' => 'card.restaurant.desc', 'language' => 'id', 'section' => 'pages', 'value' => 'Gerakan membuat lapar dan haus. Itulah sebabnya ada juga restoran dan bar di pusat rekreasi Mundial di mana Anda dapat makan dengan baik dan minum minuman yang halus. Ini akan memberi Anda energi baru. Kami menantikan kunjungan Anda. Selamat makan dan sehat!', 'type' => 'html'],
            ['key' => 'card.restaurant.desc', 'language' => 'en', 'section' => 'pages', 'value' => 'Movement makes you hungry and thirsty. That is why there is also a restaurant and bar in the Mundial leisure center where you can eat well and drink refined beverages. This will give you new energy. We look forward to your visit. Bon appétit and good health!', 'type' => 'html'],
            ['key' => 'card.restaurant.desc', 'language' => 'fr', 'section' => 'pages', 'value' => 'Le mouvement donne faim et soif. C\'est pourquoi il y a aussi un restaurant et un bar dans le centre de loisirs Mundial où vous pouvez bien manger et boire des boissons raffinées. Cela vous donnera une nouvelle énergie. Nous nous réjouissons de votre visite. Bon appétit et santé!', 'type' => 'html'],
            
            // Learn More Link
            ['key' => 'card.more_link', 'language' => 'id', 'section' => 'pages', 'value' => 'En savoir plus', 'type' => 'text'],
            ['key' => 'card.more_link', 'language' => 'en', 'section' => 'pages', 'value' => 'Learn More', 'type' => 'text'],
            ['key' => 'card.more_link', 'language' => 'fr', 'section' => 'pages', 'value' => 'En savoir plus', 'type' => 'text'],
        ];

        foreach ($translations as $trans) {
            Translation::updateOrCreate(
                ['key' => $trans['key'], 'language' => $trans['language']],
                $trans
            );
        }
    }
}
