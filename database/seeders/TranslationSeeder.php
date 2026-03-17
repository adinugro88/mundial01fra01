<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            // Home page - French
            ['key' => 'home.welcome_main', 'language' => 'fr', 'section' => 'home', 'value' => 'Le Centre de Loisirs Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_sub', 'language' => 'fr', 'section' => 'home', 'value' => 'Du plaisir pour toute la famille', 'type' => 'text'],
            ['key' => 'home.welcome_title', 'language' => 'fr', 'section' => 'home', 'value' => 'Bienvenue au Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_text', 'language' => 'fr', 'section' => 'home', 'value' => 'Le Centre de Loisirs Mundial est un endroit moderne et magnifique, au cœur de la nature. Notre offre comprend à la fois du sport et de la détente. En outre, notre bistrot propose de la bonne nourriture et des boissons raffinées.', 'type' => 'textarea'],
            
            // Home page - English
            ['key' => 'home.welcome_main', 'language' => 'en', 'section' => 'home', 'value' => 'Mundial Leisure Center', 'type' => 'text'],
            ['key' => 'home.welcome_sub', 'language' => 'en', 'section' => 'home', 'value' => 'Fun for the whole family', 'type' => 'text'],
            ['key' => 'home.welcome_title', 'language' => 'en', 'section' => 'home', 'value' => 'Welcome to Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_text', 'language' => 'en', 'section' => 'home', 'value' => 'The Mundial Leisure Center is a modern and magnificent place in the heart of nature. Our offer includes both sport and relaxation. In addition, our bistro offers fine food and refined beverages.', 'type' => 'textarea'],
            
            // Home page - Indonesian
            ['key' => 'home.welcome_main', 'language' => 'id', 'section' => 'home', 'value' => 'Pusat Rekreasi Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_sub', 'language' => 'id', 'section' => 'home', 'value' => 'Kesenangan untuk seluruh keluarga', 'type' => 'text'],
            ['key' => 'home.welcome_title', 'language' => 'id', 'section' => 'home', 'value' => 'Selamat datang di Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_text', 'language' => 'id', 'section' => 'home', 'value' => 'Pusat Rekreasi Mundial adalah tempat modern dan indah di jantung alam. Penawaran kami mencakup olahraga dan relaksasi. Selain itu, bistro kami menyajikan makanan berkualitas dan minuman premium.', 'type' => 'textarea'],
            
            // Navigation - French
            ['key' => 'nav.offers', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Nos offres', 'type' => 'text'],
            ['key' => 'nav.prices', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Abonnements & Prix', 'type' => 'text'],
            ['key' => 'nav.contact', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'nav.task', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Tâche', 'type' => 'text'],
            
            // Navigation - English
            ['key' => 'nav.offers', 'language' => 'en', 'section' => 'navigation', 'value' => 'Our Offers', 'type' => 'text'],
            ['key' => 'nav.prices', 'language' => 'en', 'section' => 'navigation', 'value' => 'Subscriptions & Prices', 'type' => 'text'],
            ['key' => 'nav.contact', 'language' => 'en', 'section' => 'navigation', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'nav.task', 'language' => 'en', 'section' => 'navigation', 'value' => 'Task', 'type' => 'text'],
            
            // Navigation - Indonesian
            ['key' => 'nav.offers', 'language' => 'id', 'section' => 'navigation', 'value' => 'Penawaran Kami', 'type' => 'text'],
            ['key' => 'nav.prices', 'language' => 'id', 'section' => 'navigation', 'value' => 'Langganan & Harga', 'type' => 'text'],
            ['key' => 'nav.contact', 'language' => 'id', 'section' => 'navigation', 'value' => 'Kontak', 'type' => 'text'],
            ['key' => 'nav.task', 'language' => 'id', 'section' => 'navigation', 'value' => 'Tugas', 'type' => 'text'],
            
            // Offers - Back link (French, English, Indonesian)
            ['key' => 'offer.back_to_offers', 'language' => 'fr', 'section' => 'offers', 'value' => 'À la liste des offres', 'type' => 'text'],
            ['key' => 'offer.back_to_offers', 'language' => 'en', 'section' => 'offers', 'value' => 'Back to offers', 'type' => 'text'],
            ['key' => 'offer.back_to_offers', 'language' => 'id', 'section' => 'offers', 'value' => 'Kembali ke penawaran', 'type' => 'text'],
            
            // Sauna Offer - French
            ['key' => 'offer.sauna.title', 'language' => 'fr', 'section' => 'offers', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'offer.sauna.intro', 'language' => 'fr', 'section' => 'offers', 'value' => 'Si vous aimez la chaleur, vous êtes exactement au bon endroit dans le sauna du Centre de Loisirs Mundial.', 'type' => 'textarea'],
            ['key' => 'offer.sauna.desc1', 'language' => 'fr', 'section' => 'offers', 'value' => 'Notre espace sauna s\'étend sur environ 1\'500 m². Vivez la fascination de la chaleur dans l\'un de nos cinq saunas aux températures différentes.', 'type' => 'textarea'],
            ['key' => 'offer.sauna.desc2', 'language' => 'fr', 'section' => 'offers', 'value' => 'Que ce soit en hiver ou en été, le sauna est une forme particulière d\'application chaud-froid qui favorise la santé et sert à se détendre. Entre autres, le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire.', 'type' => 'textarea'],
            ['key' => 'offer.sauna.recommendation', 'language' => 'fr', 'section' => 'offers', 'value' => 'Nous vous recommandons de bénéficier de trois intercirculations, car plus n\'apporte pas de bénéfices pour la santé et peuvent conduire à la fatigue des fonctions corporelles.', 'type' => 'textarea'],
            
            // Sauna Offer - English
            ['key' => 'offer.sauna.title', 'language' => 'en', 'section' => 'offers', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'offer.sauna.intro', 'language' => 'en', 'section' => 'offers', 'value' => 'If you love heat, you are in exactly the right place in the sauna of the Mundial Leisure Center.', 'type' => 'textarea'],
            ['key' => 'offer.sauna.desc1', 'language' => 'en', 'section' => 'offers', 'value' => 'Our sauna facilities cover approximately 1,500 m². Experience the fascination of heat in one of our five saunas with different temperatures.', 'type' => 'textarea'],
            ['key' => 'offer.sauna.desc2', 'language' => 'en', 'section' => 'offers', 'value' => 'Whether in winter or summer, the sauna is a special form of hot-cold application that promotes health and serves to relax. Among other things, the sauna stimulates metabolism, stabilizes the cardiovascular system and helps train the vascular system.', 'type' => 'textarea'],
            ['key' => 'offer.sauna.recommendation', 'language' => 'en', 'section' => 'offers', 'value' => 'We recommend enjoying three circuits, as more does not provide health benefits and can lead to fatigue of body functions.', 'type' => 'textarea'],
            
            // Sauna Offer - Indonesian
            ['key' => 'offer.sauna.title', 'language' => 'id', 'section' => 'offers', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'offer.sauna.intro', 'language' => 'id', 'section' => 'offers', 'value' => 'Jika Anda menyukai panas, Anda berada di tempat yang tepat di sauna Pusat Rekreasi Mundial.', 'type' => 'textarea'],
            ['key' => 'offer.sauna.desc1', 'language' => 'id', 'section' => 'offers', 'value' => 'Fasilitas sauna kami mencakup sekitar 1.500 m². Rasakan keindahan panas di salah satu dari lima sauna kami dengan suhu yang berbeda.', 'type' => 'textarea'],
            ['key' => 'offer.sauna.desc2', 'language' => 'id', 'section' => 'offers', 'value' => 'Baik di musim dingin maupun musim panas, sauna adalah bentuk khusus aplikasi panas-dingin yang mempromosikan kesehatan dan berfungsi untuk bersantai. Antara lain, sauna merangsang metabolisme, menstabilkan sistem kardiovaskular dan membantu melatih sistem vaskular.', 'type' => 'textarea'],
            ['key' => 'offer.sauna.recommendation', 'language' => 'id', 'section' => 'offers', 'value' => 'Kami merekomendasikan menikmati tiga sirkuit, karena lebih banyak tidak memberikan manfaat kesehatan dan dapat menyebabkan kelelahan fungsi tubuh.', 'type' => 'textarea'],
            
            // Minigolf Offer - French
            ['key' => 'offer.minigolf.title', 'language' => 'fr', 'section' => 'offers', 'value' => 'Minigolf', 'type' => 'text'],
            ['key' => 'offer.minigolf.desc1', 'language' => 'fr', 'section' => 'offers', 'value' => 'Profitez d\'une partie de mini-golf sur notre terrain de mini-golf. Notre mini-golf de 20 trous est situé au cœur de notre parc naturel. Nature et plaisir pour toute la famille ! La longueur supplémentaire de certains trous est un défi particulier et garantit le plaisir de jouer !', 'type' => 'textarea'],
            ['key' => 'offer.minigolf.desc2', 'language' => 'fr', 'section' => 'offers', 'value' => 'Vous avez une occasion spéciale ? Pas de problème, car avec nous, vous pouvez aussi faire la fête ensemble. Des fêtes d\'anniversaire inoubliables pour les enfants ou un événement d\'entreprise sont possibles sur demande.', 'type' => 'textarea'],
            
            // Minigolf Offer - English
            ['key' => 'offer.minigolf.title', 'language' => 'en', 'section' => 'offers', 'value' => 'Minigolf', 'type' => 'text'],
            ['key' => 'offer.minigolf.desc1', 'language' => 'en', 'section' => 'offers', 'value' => 'Enjoy a game of mini-golf on our mini-golf course. Our 20-hole mini-golf course is located in the heart of our natural park. Nature and fun for the whole family! The extra length of some holes is a special challenge and guarantees fun!', 'type' => 'textarea'],
            ['key' => 'offer.minigolf.desc2', 'language' => 'en', 'section' => 'offers', 'value' => 'Do you have a special occasion? No problem, because with us you can also celebrate together. Unforgettable birthday parties for children or a corporate event are possible upon request.', 'type' => 'textarea'],
            
            // Minigolf Offer - Indonesian
            ['key' => 'offer.minigolf.title', 'language' => 'id', 'section' => 'offers', 'value' => 'Minigolf', 'type' => 'text'],
            ['key' => 'offer.minigolf.desc1', 'language' => 'id', 'section' => 'offers', 'value' => 'Nikmati permainan mini-golf di lapangan mini-golf kami. Lapangan mini-golf 20 lubang kami terletak di jantung taman alami kami. Alam dan kesenangan untuk seluruh keluarga! Panjang ekstra beberapa lubang adalah tantangan khusus dan menjamin kesenangan bermain!', 'type' => 'textarea'],
            ['key' => 'offer.minigolf.desc2', 'language' => 'id', 'section' => 'offers', 'value' => 'Apakah Anda memiliki acara khusus? Tidak masalah, karena dengan kami Anda juga bisa merayakan bersama. Pesta ulang tahun yang tak terlupakan untuk anak-anak atau acara perusahaan tersedia atas permintaan.', 'type' => 'textarea'],
            
            // Bowling Offer - French
            ['key' => 'offer.bowling.title', 'language' => 'fr', 'section' => 'offers', 'value' => 'Bowling', 'type' => 'text'],
            ['key' => 'offer.bowling.subtitle1', 'language' => 'fr', 'section' => 'offers', 'value' => 'Le jeu pour le sport et le plaisir entre amis ou en famille.', 'type' => 'text'],
            ['key' => 'offer.bowling.desc1', 'language' => 'fr', 'section' => 'offers', 'value' => 'Le bowling est une manière classique de combiner sport et socialisation. Vous pouvez profiter d\'une soirée décontractée entre amis dans une atmosphère détendue dans notre grande installation avec restauration et coin salon confortable. Que ce soit une fête de famille ou de Noël, une fête d\'anniversaire pour les enfants, entre amis ou parents, notre piste de bowling offre un sport détendu et un confort convivial.', 'type' => 'textarea'],
            ['key' => 'offer.bowling.subtitle2', 'language' => 'fr', 'section' => 'offers', 'value' => 'Le plaisir ultime de la fête pour petits et grands.', 'type' => 'text'],
            ['key' => 'offer.bowling.desc2', 'language' => 'fr', 'section' => 'offers', 'value' => 'Vivez la sensation spéciale du bowling avec de la musique entraînante, des boissons fraîches et un fantastique spectacle de lumières ! Pistes lumineuses, boules colorées et épingles rayonnantes ... L\'expérience du bowling en lumière noire !', 'type' => 'textarea'],
            ['key' => 'offer.bowling.birthday_title', 'language' => 'fr', 'section' => 'offers', 'value' => 'Combiner son anniversaire avec le bowling', 'type' => 'text'],
            ['key' => 'offer.bowling.birthday_desc', 'language' => 'fr', 'section' => 'offers', 'value' => 'Pas d\'envie de préparer, cuisiner, faire de la pâtisserie et tout nettoyer après ? Le bowling chez Mundial offre de nombreuses variantes pour passer un anniversaire sociable et actif. Quel que soit le temps, avec musique et gastronomie en arrière-plan, votre fête d\'anniversaire au bowling est garantie d\'être très amusante. Le bowling fonctionne pour les petits et grands invités et ne nécessite aucune compétence particulière. Laissez-vous inspirer par nos idées pour votre anniversaire au bowling.', 'type' => 'textarea'],
            
            // Bowling Offer - English
            ['key' => 'offer.bowling.title', 'language' => 'en', 'section' => 'offers', 'value' => 'Bowling', 'type' => 'text'],
            ['key' => 'offer.bowling.subtitle1', 'language' => 'en', 'section' => 'offers', 'value' => 'The game for sport and fun with friends or family.', 'type' => 'text'],
            ['key' => 'offer.bowling.desc1', 'language' => 'en', 'section' => 'offers', 'value' => 'Bowling is a classic way to combine sport and socializing. You can enjoy a relaxed evening with friends in a relaxed atmosphere in our large facility with refreshments and comfortable lounge area. Whether it\'s a family or Christmas party, a birthday party for children, with friends or family, our bowling lane offers relaxed sport and friendly comfort.', 'type' => 'textarea'],
            ['key' => 'offer.bowling.subtitle2', 'language' => 'en', 'section' => 'offers', 'value' => 'The ultimate fun of the party for young and old.', 'type' => 'text'],
            ['key' => 'offer.bowling.desc2', 'language' => 'en', 'section' => 'offers', 'value' => 'Experience the special sensation of bowling with upbeat music, fresh drinks and a fantastic light show! Illuminated lanes, colorful balls and shimmering pins... The black light bowling experience!', 'type' => 'textarea'],
            ['key' => 'offer.bowling.birthday_title', 'language' => 'en', 'section' => 'offers', 'value' => 'Combine your birthday with bowling', 'type' => 'text'],
            ['key' => 'offer.bowling.birthday_desc', 'language' => 'en', 'section' => 'offers', 'value' => 'Don\'t feel like preparing, cooking, baking and cleaning everything up afterwards? Bowling at Mundial offers many options for a sociable and active birthday. No matter what the weather, with music and gastronomy in the background, your birthday party at the bowling alley is guaranteed to be great fun. Bowling works for small and large guests and requires no special skills. Get inspired by our ideas for your bowling birthday.', 'type' => 'textarea'],
            
            // Bowling Offer - Indonesian
            ['key' => 'offer.bowling.title', 'language' => 'id', 'section' => 'offers', 'value' => 'Bowling', 'type' => 'text'],
            ['key' => 'offer.bowling.subtitle1', 'language' => 'id', 'section' => 'offers', 'value' => 'Permainan untuk olahraga dan kesenangan bersama teman atau keluarga.', 'type' => 'text'],
            ['key' => 'offer.bowling.desc1', 'language' => 'id', 'section' => 'offers', 'value' => 'Bowling adalah cara klasik untuk menggabungkan olahraga dan bersosialisasi. Anda dapat menikmati malam santai dengan teman di suasana yang rileks di fasilitas besar kami dengan penyegaran dan area lounge yang nyaman. Baik itu pesta keluarga atau Natal, pesta ulang tahun untuk anak-anak, dengan teman atau keluarga, lapangan bowling kami menawarkan olahraga santai dan kenyamanan yang bersahabat.', 'type' => 'textarea'],
            ['key' => 'offer.bowling.subtitle2', 'language' => 'id', 'section' => 'offers', 'value' => 'Kesenangan sempurna pesta untuk tua dan muda.', 'type' => 'text'],
            ['key' => 'offer.bowling.desc2', 'language' => 'id', 'section' => 'offers', 'value' => 'Rasakan sensasi khusus bowling dengan musik yang meriah, minuman segar dan pertunjukan cahaya yang fantastis! Lintasan yang terang, bola-bola berwarna dan pin yang bersinar... Pengalaman bowling cahaya hitam!', 'type' => 'textarea'],
            ['key' => 'offer.bowling.birthday_title', 'language' => 'id', 'section' => 'offers', 'value' => 'Gabungkan ulang tahun Anda dengan bowling', 'type' => 'text'],
            ['key' => 'offer.bowling.birthday_desc', 'language' => 'id', 'section' => 'offers', 'value' => 'Tidak ingin mempersiapkan, memasak, memanggang dan membersihkan semuanya sesudahnya? Bowling di Mundial menawarkan banyak pilihan untuk pesta ulang tahun yang ramah dan aktif. Tidak peduli bagaimana cuacanya, dengan musik dan gastronomi di latar belakang, pesta ulang tahun Anda di bowling dijamin akan sangat menyenangkan. Bowling cocok untuk tamu kecil dan besar serta tidak memerlukan keahlian khusus. Dapatkan inspirasi dari ide-ide kami untuk pesta ulang tahun bowling Anda.', 'type' => 'textarea'],
            
            // Button translations
            ['key' => 'offer.button_book', 'language' => 'fr', 'section' => 'offers', 'value' => 'Réserver', 'type' => 'text'],
            ['key' => 'offer.button_book', 'language' => 'en', 'section' => 'offers', 'value' => 'Book', 'type' => 'text'],
            ['key' => 'offer.button_book', 'language' => 'id', 'section' => 'offers', 'value' => 'Pesan', 'type' => 'text'],
            ['key' => 'offer.button_book_track', 'language' => 'fr', 'section' => 'offers', 'value' => 'Réserver une piste', 'type' => 'text'],
            ['key' => 'offer.button_book_track', 'language' => 'en', 'section' => 'offers', 'value' => 'Book a lane', 'type' => 'text'],
            ['key' => 'offer.button_book_track', 'language' => 'id', 'section' => 'offers', 'value' => 'Pesan lintasan', 'type' => 'text'],
            ['key' => 'offer.button_birthday_offers', 'language' => 'fr', 'section' => 'offers', 'value' => 'Afficher les offres d\'anniversaire', 'type' => 'text'],
            ['key' => 'offer.button_birthday_offers', 'language' => 'en', 'section' => 'offers', 'value' => 'Show birthday offers', 'type' => 'text'],
            ['key' => 'offer.button_birthday_offers', 'language' => 'id', 'section' => 'offers', 'value' => 'Tampilkan penawaran ulang tahun', 'type' => 'text'],
            
            // Birthday Offer - French
            ['key' => 'offer.birthday.title', 'language' => 'fr', 'section' => 'offers', 'value' => 'Fête d\'Anniversaire', 'type' => 'text'],
            ['key' => 'offer.birthday.intro', 'language' => 'fr', 'section' => 'offers', 'value' => 'Célébrez votre anniversaire au Centro de Loisirs Mundial ! Nous proposons des forfaits d\'anniversaire personnalisés avec diverses activités.', 'type' => 'textarea'],
            ['key' => 'offer.birthday.packages', 'language' => 'fr', 'section' => 'offers', 'value' => 'Choisissez parmi nos différents forfaits d\'anniversaire incluant piscine, bowling, sauna ou minigolf. Des packages personnalisés sont disponibles pour tous les âges et budgets.', 'type' => 'textarea'],
            
            // Birthday Offer - English
            ['key' => 'offer.birthday.title', 'language' => 'en', 'section' => 'offers', 'value' => 'Birthday Party', 'type' => 'text'],
            ['key' => 'offer.birthday.intro', 'language' => 'en', 'section' => 'offers', 'value' => 'Celebrate your birthday at the Mundial Leisure Center! We offer personalized birthday packages with various activities.', 'type' => 'textarea'],
            ['key' => 'offer.birthday.packages', 'language' => 'en', 'section' => 'offers', 'value' => 'Choose from our different birthday packages including swimming pool, bowling, sauna or mini-golf. Customized packages are available for all ages and budgets.', 'type' => 'textarea'],
            
            // Birthday Offer - Indonesian
            ['key' => 'offer.birthday.title', 'language' => 'id', 'section' => 'offers', 'value' => 'Pesta Ulang Tahun', 'type' => 'text'],
            ['key' => 'offer.birthday.intro', 'language' => 'id', 'section' => 'offers', 'value' => 'Rayakan ulang tahun Anda di Pusat Rekreasi Mundial! Kami menawarkan paket ulang tahun yang dipersonalisasi dengan berbagai kegiatan.', 'type' => 'textarea'],
            ['key' => 'offer.birthday.packages', 'language' => 'id', 'section' => 'offers', 'value' => 'Pilih dari berbagai paket ulang tahun kami termasuk kolam renang, bowling, sauna atau mini-golf. Paket yang disesuaikan tersedia untuk semua usia dan anggaran.', 'type' => 'textarea'],
            
            // Restaurant Offer - French
            ['key' => 'offer.restaurant.title', 'language' => 'fr', 'section' => 'offers', 'value' => 'Restaurant', 'type' => 'text'],
            ['key' => 'offer.restaurant.intro', 'language' => 'fr', 'section' => 'offers', 'value' => 'Profitez de notre restaurant au Centro de Loisirs Mundial avec une cuisine délicieuse et une ambiance agréable.', 'type' => 'textarea'],
            ['key' => 'offer.restaurant.menu', 'language' => 'fr', 'section' => 'offers', 'value' => 'Notre menu varie et propose des plats traditionnels ainsi que des spécialités régionales. Tous les plats sont préparés avec des ingrédients frais et de qualité.', 'type' => 'textarea'],
            ['key' => 'offer.restaurant.ambiance', 'language' => 'fr', 'section' => 'offers', 'value' => 'Que ce soit pour un déjeuner rapide, un dîner en famille ou une célébration spéciale, notre restaurant offre le cadre idéal avec une vue magnifique sur nos installations de loisirs.', 'type' => 'textarea'],
            ['key' => 'offer.button_reservation', 'language' => 'fr', 'section' => 'offers', 'value' => 'Faire une réservation', 'type' => 'text'],
            
            // Restaurant Offer - English
            ['key' => 'offer.restaurant.title', 'language' => 'en', 'section' => 'offers', 'value' => 'Restaurant', 'type' => 'text'],
            ['key' => 'offer.restaurant.intro', 'language' => 'en', 'section' => 'offers', 'value' => 'Enjoy our restaurant at the Mundial Leisure Center with delicious cuisine and a pleasant atmosphere.', 'type' => 'textarea'],
            ['key' => 'offer.restaurant.menu', 'language' => 'en', 'section' => 'offers', 'value' => 'Our varied menu offers traditional dishes as well as regional specialties. All dishes are prepared with fresh and quality ingredients.', 'type' => 'textarea'],
            ['key' => 'offer.restaurant.ambiance', 'language' => 'en', 'section' => 'offers', 'value' => 'Whether for a quick lunch, a family dinner or a special celebration, our restaurant offers the ideal setting with a magnificent view of our leisure facilities.', 'type' => 'textarea'],
            ['key' => 'offer.button_reservation', 'language' => 'en', 'section' => 'offers', 'value' => 'Make a reservation', 'type' => 'text'],
            
            // Restaurant Offer - Indonesian
            ['key' => 'offer.restaurant.title', 'language' => 'id', 'section' => 'offers', 'value' => 'Restoran', 'type' => 'text'],
            ['key' => 'offer.restaurant.intro', 'language' => 'id', 'section' => 'offers', 'value' => 'Nikmati restoran kami di Pusat Rekreasi Mundial dengan masakan lezat dan suasana yang menyenangkan.', 'type' => 'textarea'],
            ['key' => 'offer.restaurant.menu', 'language' => 'id', 'section' => 'offers', 'value' => 'Menu kami yang bervariasi menawarkan hidangan tradisional serta spesialisasi regional. Semua hidangan disiapkan dengan bahan-bahan segar dan berkualitas.', 'type' => 'textarea'],
            ['key' => 'offer.restaurant.ambiance', 'language' => 'id', 'section' => 'offers', 'value' => 'Baik untuk makan siang cepat, makan malam keluarga atau perayaan khusus, restoran kami menawarkan suasana yang ideal dengan pemandangan indah ke fasilitas rekreasi kami.', 'type' => 'textarea'],
            ['key' => 'offer.button_reservation', 'language' => 'id', 'section' => 'offers', 'value' => 'Buat reservasi', 'type' => 'text'],
            
            // Offers Page - French
            ['key' => 'page.offers.title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Nos offres', 'type' => 'text'],
            ['key' => 'page.offers.intro', 'language' => 'fr', 'section' => 'pages', 'value' => 'Nous avons de nombreuses activités de loisirs pour vous, vos amis et votre famille. Notre but est de rendre votre temps libre amusant. Nous organisons également des fêtes de Noël et des anniversaires d\'enfants. Découvrez maintenant notre centre de loisirs sur Internet. Laissez-vous surprendre par notre grande offre.<br><br>', 'type' => 'textarea'],
            
            // Offers Page - English
            ['key' => 'page.offers.title', 'language' => 'en', 'section' => 'pages', 'value' => 'Our Offers', 'type' => 'text'],
            ['key' => 'page.offers.intro', 'language' => 'en', 'section' => 'pages', 'value' => 'We have many leisure activities for you, your friends and your family. Our goal is to make your free time fun. We also organize Christmas parties and children\'s birthdays. Discover our leisure center on the Internet now. Let yourself be surprised by our great offer.<br><br>', 'type' => 'textarea'],
            
            // Offers Page - Indonesian
            ['key' => 'page.offers.title', 'language' => 'id', 'section' => 'pages', 'value' => 'Penawaran Kami', 'type' => 'text'],
            ['key' => 'page.offers.intro', 'language' => 'id', 'section' => 'pages', 'value' => 'Kami memiliki banyak kegiatan rekreasi untuk Anda, teman dan keluarga Anda. Tujuan kami adalah membuat waktu luang Anda menyenangkan. Kami juga mengorganisir pesta Natal dan perayaan ulang tahun anak-anak. Temukan pusat rekreasi kami di Internet sekarang. Biarkan diri Anda terkejut oleh penawaran besar kami.<br><br>', 'type' => 'textarea'],
            
            // Card - Hallenbad - French
            ['key' => 'card.hallenbad.title', 'language' => 'fr', 'section' => 'cards', 'value' => 'Piscine', 'type' => 'text'],
            ['key' => 'card.hallenbad.desc', 'language' => 'fr', 'section' => 'cards', 'value' => 'La natation est saine et renforce le corps et l\'âme de nous, humains. Profitez de la baignade dans une atmosphère agréable dans notre piscine intérieure. Il y en a pour tous les goûts, des jeunes aux moins jeunes.', 'type' => 'textarea'],
            
            // Card - Hallenbad - English
            ['key' => 'card.hallenbad.title', 'language' => 'en', 'section' => 'cards', 'value' => 'Swimming Pool', 'type' => 'text'],
            ['key' => 'card.hallenbad.desc', 'language' => 'en', 'section' => 'cards', 'value' => 'Swimming is healthy and strengthens the body and mind of us humans. Enjoy swimming in a pleasant atmosphere in our indoor pool. There is something for everyone, from young to young at heart.', 'type' => 'textarea'],
            
            // Card - Hallenbad - Indonesian
            ['key' => 'card.hallenbad.title', 'language' => 'id', 'section' => 'cards', 'value' => 'Kolam Renang', 'type' => 'text'],
            ['key' => 'card.hallenbad.desc', 'language' => 'id', 'section' => 'cards', 'value' => 'Berenang sehat dan memperkuat tubuh dan pikiran kami, manusia. Nikmati berenang di suasana yang menyenangkan di kolam renang dalam ruangan kami. Ada sesuatu untuk semua orang, dari muda hingga tua.', 'type' => 'textarea'],
            
            // Card - Sauna - French
            ['key' => 'card.sauna.title', 'language' => 'fr', 'section' => 'cards', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'card.sauna.desc', 'language' => 'fr', 'section' => 'cards', 'value' => 'Que ce soit en hiver ou en été, le sauna est une forme particulière de traitement chaud-froid qui favorise la santé et la détente. Entre autres, le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire.', 'type' => 'textarea'],
            
            // Card - Sauna - English
            ['key' => 'card.sauna.title', 'language' => 'en', 'section' => 'cards', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'card.sauna.desc', 'language' => 'en', 'section' => 'cards', 'value' => 'Whether in winter or summer, the sauna is a special form of hot-cold treatment that promotes health and relaxation. Among other things, the sauna stimulates metabolism, stabilizes the cardiovascular system and helps train the vascular system.', 'type' => 'textarea'],
            
            // Card - Sauna - Indonesian
            ['key' => 'card.sauna.title', 'language' => 'id', 'section' => 'cards', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'card.sauna.desc', 'language' => 'id', 'section' => 'cards', 'value' => 'Baik di musim dingin maupun musim panas, sauna adalah bentuk khusus perawatan panas-dingin yang mempromosikan kesehatan dan relaksasi. Antara lain, sauna merangsang metabolisme, menstabilkan sistem kardiovaskular dan membantu melatih sistem vaskular.', 'type' => 'textarea'],
            
            // Card - Minigolf - French
            ['key' => 'card.minigolf.title', 'language' => 'fr', 'section' => 'cards', 'value' => 'Minigolf', 'type' => 'text'],
            ['key' => 'card.minigolf.desc', 'language' => 'fr', 'section' => 'cards', 'value' => 'Profitez d\'une partie de mini-golf sur notre terrain de mini-golf. Notre mini-golf de 20 trous est situé au cœur de notre parc naturel. Nature et plaisir pour toute la famille.', 'type' => 'textarea'],
            
            // Card - Minigolf - English
            ['key' => 'card.minigolf.title', 'language' => 'en', 'section' => 'cards', 'value' => 'Minigolf', 'type' => 'text'],
            ['key' => 'card.minigolf.desc', 'language' => 'en', 'section' => 'cards', 'value' => 'Enjoy a game of mini-golf on our mini-golf course. Our 20-hole mini-golf course is located in the heart of our natural park. Nature and fun for the whole family.', 'type' => 'textarea'],
            
            // Card - Minigolf - Indonesian
            ['key' => 'card.minigolf.title', 'language' => 'id', 'section' => 'cards', 'value' => 'Minigolf', 'type' => 'text'],
            ['key' => 'card.minigolf.desc', 'language' => 'id', 'section' => 'cards', 'value' => 'Nikmati permainan mini-golf di lapangan mini-golf kami. Lapangan mini-golf 20 lubang kami terletak di jantung taman alam kami. Alam dan kesenangan untuk seluruh keluarga.', 'type' => 'textarea'],
            
            // Card - Bowling - French
            ['key' => 'card.bowling.title', 'language' => 'fr', 'section' => 'cards', 'value' => 'Bowling', 'type' => 'text'],
            ['key' => 'card.bowling.desc', 'language' => 'fr', 'section' => 'cards', 'value' => 'Le bowling est un jeu qui s\'apparente au jeu de quilles. Il combine le sport et le plaisir. Vous pouvez y jouer avec des amis ou en famille. C\'est pourquoi les gens aiment jouer au bowling. Le centre de loisirs Mundial dispose d\'une grande installation avec de nombreuses pistes de bowling.', 'type' => 'textarea'],
            
            // Card - Bowling - English
            ['key' => 'card.bowling.title', 'language' => 'en', 'section' => 'cards', 'value' => 'Bowling', 'type' => 'text'],
            ['key' => 'card.bowling.desc', 'language' => 'en', 'section' => 'cards', 'value' => 'Bowling is a game that is similar to bowling. It combines sport and fun. You can play it with friends or family. This is why people love to bowl. The Mundial Leisure Center has a large facility with many bowling lanes.', 'type' => 'textarea'],
            
            // Card - Bowling - Indonesian
            ['key' => 'card.bowling.title', 'language' => 'id', 'section' => 'cards', 'value' => 'Bowling', 'type' => 'text'],
            ['key' => 'card.bowling.desc', 'language' => 'id', 'section' => 'cards', 'value' => 'Bowling adalah permainan yang mirip dengan permainan pin bowling. Ini menggabungkan olahraga dan kesenangan. Anda dapat memainkannya dengan teman atau keluarga. Itulah mengapa orang menyukai bowling. Pusat Rekreasi Mundial memiliki fasilitas besar dengan banyak lintasan bowling.', 'type' => 'textarea'],
            
            // Card - Birthday - French
            ['key' => 'card.birthday.title', 'language' => 'fr', 'section' => 'cards', 'value' => 'Fête d\'Anniversaire', 'type' => 'text'],
            ['key' => 'card.birthday.desc', 'language' => 'fr', 'section' => 'cards', 'value' => 'Commencez la nouvelle année de votre vie sportive et active. Célébrez les fêtes d\'anniversaire sur la piste de bowling. Venez vous amuser sur notre piste de bowling!', 'type' => 'textarea'],
            
            // Card - Birthday - English
            ['key' => 'card.birthday.title', 'language' => 'en', 'section' => 'cards', 'value' => 'Birthday Party', 'type' => 'text'],
            ['key' => 'card.birthday.desc', 'language' => 'en', 'section' => 'cards', 'value' => 'Start the new year of your active and sporty life. Celebrate birthday parties on the bowling lane. Come have fun on our bowling lane!', 'type' => 'textarea'],
            
            // Card - Birthday - Indonesian
            ['key' => 'card.birthday.title', 'language' => 'id', 'section' => 'cards', 'value' => 'Pesta Ulang Tahun', 'type' => 'text'],
            ['key' => 'card.birthday.desc', 'language' => 'id', 'section' => 'cards', 'value' => 'Mulai tahun baru kehidupan aktif dan olahraga Anda. Rayakan pesta ulang tahun di lintasan bowling. Datang bersenang-senang di lintasan bowling kami!', 'type' => 'textarea'],
            
            // Card - Restaurant - French
            ['key' => 'card.restaurant.title', 'language' => 'fr', 'section' => 'cards', 'value' => 'Restaurant', 'type' => 'text'],
            ['key' => 'card.restaurant.desc', 'language' => 'fr', 'section' => 'cards', 'value' => 'Le mouvement donne faim et soif. C\'est pourquoi il y a aussi un restaurant et un bar dans le centre de loisirs Mundial où vous pouvez bien manger et boire des boissons raffinées. Cela vous donnera une nouvelle énergie. Nous nous réjouissons de votre visite. Bon appétit et santé!', 'type' => 'textarea'],
            
            // Card - Restaurant - English
            ['key' => 'card.restaurant.title', 'language' => 'en', 'section' => 'cards', 'value' => 'Restaurant', 'type' => 'text'],
            ['key' => 'card.restaurant.desc', 'language' => 'en', 'section' => 'cards', 'value' => 'Activity makes you hungry and thirsty. That\'s why there is also a restaurant and bar in the Mundial Leisure Center where you can eat well and drink refined drinks. This will give you new energy. We look forward to your visit. Bon appétit and good health!', 'type' => 'textarea'],
            
            // Card - Restaurant - Indonesian
            ['key' => 'card.restaurant.title', 'language' => 'id', 'section' => 'cards', 'value' => 'Restoran', 'type' => 'text'],
            ['key' => 'card.restaurant.desc', 'language' => 'id', 'section' => 'cards', 'value' => 'Aktivitas membuat Anda lapar dan haus. Itulah mengapa ada juga restoran dan bar di Pusat Rekreasi Mundial di mana Anda dapat makan dengan baik dan minum minuman premium. Ini akan memberikan Anda energi baru. Kami menantikan kunjungan Anda. Selamat makan dan kesehatan!', 'type' => 'textarea'],
            
            // Card - More Link - French
            ['key' => 'card.more_link', 'language' => 'fr', 'section' => 'cards', 'value' => 'En savoir plus', 'type' => 'text'],
            
            // Card - More Link - English
            ['key' => 'card.more_link', 'language' => 'en', 'section' => 'cards', 'value' => 'Learn more', 'type' => 'text'],
            
            // Card - More Link - Indonesian
            ['key' => 'card.more_link', 'language' => 'id', 'section' => 'cards', 'value' => 'Pelajari lebih lanjut', 'type' => 'text'],
            
            // Prices Page - French
            ['key' => 'page.prices.title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Abonnements & Prix', 'type' => 'text'],
            ['key' => 'page.prices.card_title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Mundial Card - Abonnement annuel', 'type' => 'text'],
            ['key' => 'page.prices.card_desc', 'language' => 'fr', 'section' => 'pages', 'value' => 'Vous êtes souvent chez nous ? Avec la Carte Mundial, vous pouvez profiter de toutes les offres du Centre de Loisirs Mundial pendant toute une année. Cela comprend le mini golf, le bowling, le sauna et la piscine. Vous n\'avez plus à vous soucier de l\'entrée. Montrez votre carte à l\'entrée et entrez. Commandez votre abonnement annuel personnel Mundial dès aujourd\'hui. <br>​<br>CHF <strong>1\'420.-</strong><br> ', 'type' => 'textarea'],
            ['key' => 'page.prices.buy_now', 'language' => 'fr', 'section' => 'pages', 'value' => 'Acheter maintenant', 'type' => 'text'],
            ['key' => 'page.prices.pool_admission', 'language' => 'fr', 'section' => 'pages', 'value' => 'Entrée piscine', 'type' => 'text'],
            ['key' => 'page.prices.sauna_admission', 'language' => 'fr', 'section' => 'pages', 'value' => 'Entrée sauna et douche à vapeur', 'type' => 'text'],
            ['key' => 'page.prices.table_service', 'language' => 'fr', 'section' => 'pages', 'value' => 'Service', 'type' => 'text'],
            ['key' => 'page.prices.table_adults', 'language' => 'fr', 'section' => 'pages', 'value' => 'Dès 18 ans', 'type' => 'text'],
            ['key' => 'page.prices.table_children', 'language' => 'fr', 'section' => 'pages', 'value' => '6-17 ans', 'type' => 'text'],
            ['key' => 'page.prices.table_under_6', 'language' => 'fr', 'section' => 'pages', 'value' => 'Moins de 6 ans', 'type' => 'text'],
            ['key' => 'page.prices.pool_note', 'language' => 'fr', 'section' => 'pages', 'value' => 'Les enfants de moins de 12 ans doivent être accompagnés par un adulte dans la piscine intérieure.', 'type' => 'text'],
            ['key' => 'page.prices.sauna_note', 'language' => 'fr', 'section' => 'pages', 'value' => 'Les enfants de moins de 16 ans doivent être accompagnés par un adulte dans le sauna et la douche à vapeur.', 'type' => 'text'],
            ['key' => 'page.prices.bowling_admission', 'language' => 'fr', 'section' => 'pages', 'value' => 'Entrée piste de Bowling', 'type' => 'text'],
            ['key' => 'page.prices.bowling_admission_desc', 'language' => 'fr', 'section' => 'pages', 'value' => 'Les enfants de moins de 12 ans doivent être accompagnés par un adulte sur la piste de bowling.', 'type' => 'text'],
            ['key' => 'page.prices.minigolf_admission', 'language' => 'fr', 'section' => 'pages', 'value' => 'Entrée Mini-Golf', 'type' => 'text'],
            ['key' => 'page.prices.minigolf_admission_desc', 'language' => 'fr', 'section' => 'pages', 'value' => 'Les enfants de moins de 12 ans doivent être accompagnés d\'un adulte lorsqu\'ils jouent au mini-golf.', 'type' => 'text'],
            ['key' => 'page.prices.all_offers_admission', 'language' => 'fr', 'section' => 'pages', 'value' => 'Entrée pour l\'ensemble du centre de loisirs (Toutes les offres)', 'type' => 'text'],
            ['key' => 'page.prices.all_offers_admission_desc', 'language' => 'fr', 'section' => 'pages', 'value' => 'Dans le sauna et dans la douche à vapeur, les enfants de moins de 16 ans doivent être accompagnés d\'une personne adulte.', 'type' => 'text'],
            
            // Prices Page - English
            ['key' => 'page.prices.title', 'language' => 'en', 'section' => 'pages', 'value' => 'Subscriptions & Prices', 'type' => 'text'],
            ['key' => 'page.prices.card_title', 'language' => 'en', 'section' => 'pages', 'value' => 'Mundial Card - Annual Subscription', 'type' => 'text'],
            ['key' => 'page.prices.card_desc', 'language' => 'en', 'section' => 'pages', 'value' => 'Are you often with us? With the Mundial Card, you can enjoy all the offers of the Mundial Leisure Center for an entire year. This includes mini golf, bowling, sauna and swimming pool. You no longer have to worry about admission. Show your card at the entrance and you\'re in. Order your personal annual Mundial subscription today. <br>​<br>CHF <strong>1\'420.-</strong><br> ', 'type' => 'textarea'],
            ['key' => 'page.prices.buy_now', 'language' => 'en', 'section' => 'pages', 'value' => 'Buy now', 'type' => 'text'],
            ['key' => 'page.prices.pool_admission', 'language' => 'en', 'section' => 'pages', 'value' => 'Pool admission', 'type' => 'text'],
            ['key' => 'page.prices.sauna_admission', 'language' => 'en', 'section' => 'pages', 'value' => 'Sauna and steam shower admission', 'type' => 'text'],
            ['key' => 'page.prices.table_service', 'language' => 'en', 'section' => 'pages', 'value' => 'Service', 'type' => 'text'],
            ['key' => 'page.prices.table_adults', 'language' => 'en', 'section' => 'pages', 'value' => 'From 18 years', 'type' => 'text'],
            ['key' => 'page.prices.table_children', 'language' => 'en', 'section' => 'pages', 'value' => '6-17 years', 'type' => 'text'],
            ['key' => 'page.prices.table_under_6', 'language' => 'en', 'section' => 'pages', 'value' => 'Under 6 years', 'type' => 'text'],
            ['key' => 'page.prices.pool_note', 'language' => 'en', 'section' => 'pages', 'value' => 'Children under 12 must be accompanied by an adult in the indoor pool.', 'type' => 'text'],
            ['key' => 'page.prices.sauna_note', 'language' => 'en', 'section' => 'pages', 'value' => 'Children under 16 must be accompanied by an adult in the sauna and steam shower.', 'type' => 'text'],
            ['key' => 'page.prices.bowling_admission', 'language' => 'en', 'section' => 'pages', 'value' => 'Bowling alley admission', 'type' => 'text'],
            ['key' => 'page.prices.bowling_admission_desc', 'language' => 'en', 'section' => 'pages', 'value' => 'Children under 12 must be accompanied by an adult on the bowling alley.', 'type' => 'text'],
            ['key' => 'page.prices.minigolf_admission', 'language' => 'en', 'section' => 'pages', 'value' => 'Mini-Golf admission', 'type' => 'text'],
            ['key' => 'page.prices.minigolf_admission_desc', 'language' => 'en', 'section' => 'pages', 'value' => 'Children under 12 must be accompanied by an adult when playing mini-golf.', 'type' => 'text'],
            ['key' => 'page.prices.all_offers_admission', 'language' => 'en', 'section' => 'pages', 'value' => 'Admission for the entire leisure center (All offers)', 'type' => 'text'],
            ['key' => 'page.prices.all_offers_admission_desc', 'language' => 'en', 'section' => 'pages', 'value' => 'In the sauna and steam shower, children under 16 must be accompanied by an adult.', 'type' => 'text'],
            
            // Prices Page - Indonesian
            ['key' => 'page.prices.title', 'language' => 'id', 'section' => 'pages', 'value' => 'Langganan & Harga', 'type' => 'text'],
            ['key' => 'page.prices.card_title', 'language' => 'id', 'section' => 'pages', 'value' => 'Kartu Mundial - Langganan Tahunan', 'type' => 'text'],
            ['key' => 'page.prices.card_desc', 'language' => 'id', 'section' => 'pages', 'value' => 'Apakah Anda sering bersama kami? Dengan Kartu Mundial, Anda dapat menikmati semua penawaran Pusat Rekreasi Mundial selama satu tahun penuh. Ini termasuk mini golf, bowling, sauna dan kolam renang. Anda tidak perlu khawatir tentang biaya masuk. Tunjukkan kartu Anda di pintu masuk dan Anda akan masuk. Pesan langganan tahunan personal Mundial Anda hari ini. <br>​<br>CHF <strong>1\'420.-</strong><br> ', 'type' => 'textarea'],
            ['key' => 'page.prices.buy_now', 'language' => 'id', 'section' => 'pages', 'value' => 'Beli sekarang', 'type' => 'text'],
            ['key' => 'page.prices.pool_admission', 'language' => 'id', 'section' => 'pages', 'value' => 'Biaya masuk kolam renang', 'type' => 'text'],
            ['key' => 'page.prices.sauna_admission', 'language' => 'id', 'section' => 'pages', 'value' => 'Biaya masuk sauna dan kamar uap', 'type' => 'text'],
            ['key' => 'page.prices.table_service', 'language' => 'id', 'section' => 'pages', 'value' => 'Layanan', 'type' => 'text'],
            ['key' => 'page.prices.table_adults', 'language' => 'id', 'section' => 'pages', 'value' => 'Dari 18 tahun', 'type' => 'text'],
            ['key' => 'page.prices.table_children', 'language' => 'id', 'section' => 'pages', 'value' => '6-17 tahun', 'type' => 'text'],
            ['key' => 'page.prices.table_under_6', 'language' => 'id', 'section' => 'pages', 'value' => 'Di bawah 6 tahun', 'type' => 'text'],
            ['key' => 'page.prices.pool_note', 'language' => 'id', 'section' => 'pages', 'value' => 'Anak-anak di bawah 12 tahun harus didampingi oleh orang dewasa di kolam renang dalam ruangan.', 'type' => 'text'],
            ['key' => 'page.prices.sauna_note', 'language' => 'id', 'section' => 'pages', 'value' => 'Anak-anak di bawah 16 tahun harus didampingi oleh orang dewasa di sauna dan kamar uap.', 'type' => 'text'],
            ['key' => 'page.prices.bowling_admission', 'language' => 'id', 'section' => 'pages', 'value' => 'Tiket masuk arena Bowling', 'type' => 'text'],
            ['key' => 'page.prices.bowling_admission_desc', 'language' => 'id', 'section' => 'pages', 'value' => 'Anak-anak di bawah 12 tahun harus didampingi oleh orang dewasa di arena bowling.', 'type' => 'text'],
            ['key' => 'page.prices.minigolf_admission', 'language' => 'id', 'section' => 'pages', 'value' => 'Tiket masuk Mini-Golf', 'type' => 'text'],
            ['key' => 'page.prices.minigolf_admission_desc', 'language' => 'id', 'section' => 'pages', 'value' => 'Anak-anak di bawah 12 tahun harus didampingi oleh orang dewasa saat bermain mini-golf.', 'type' => 'text'],
            ['key' => 'page.prices.all_offers_admission', 'language' => 'id', 'section' => 'pages', 'value' => 'Tiket masuk untuk seluruh pusat rekreasi (Semua penawaran)', 'type' => 'text'],
            ['key' => 'page.prices.all_offers_admission_desc', 'language' => 'id', 'section' => 'pages', 'value' => 'Di sauna dan shower uap, anak-anak di bawah 16 tahun harus didampingi oleh orang dewasa.', 'type' => 'text'],
            
            // Contact Page - French
            ['key' => 'page.contact.title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'page.contact.intro', 'language' => 'fr', 'section' => 'pages', 'value' => 'Saisissez votre prénom, votre nom, votre numéro de téléphone et votre adresse électronique dans le formulaire de contact ci-dessous. Et posez-nous vos questions dans le formulaire de contact. Nous serons heureux de vous répondre personnellement.<br><br>Nous organisons également des fêtes d\'anniversaire et des événements qui vous plaisent. La musique, la restauration et les boissons sont bien sûr incluses. Voulez-vous faire une telle fête ? Alors, écrivez-nous également dans le formulaire de contact. La carte ci-dessus vous indique le chemin pour nous rejoindre.', 'type' => 'textarea'],
            ['key' => 'page.contact.form_title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Formulaire de contact', 'type' => 'text'],
            ['key' => 'page.contact.form_instructions', 'language' => 'fr', 'section' => 'pages', 'value' => '* Champs obligatoires', 'type' => 'text'],
            ['key' => 'page.contact.reason_label', 'language' => 'fr', 'section' => 'pages', 'value' => 'La raison pour le contact *', 'type' => 'text'],
            ['key' => 'page.contact.reason_placeholder', 'language' => 'fr', 'section' => 'pages', 'value' => 'Veuillez choisir...', 'type' => 'text'],
            ['key' => 'page.contact.reason_general', 'language' => 'fr', 'section' => 'pages', 'value' => 'Questions générales', 'type' => 'text'],
            ['key' => 'page.contact.reason_subscription', 'language' => 'fr', 'section' => 'pages', 'value' => 'Questions sur les abonnements', 'type' => 'text'],
            ['key' => 'page.contact.reason_booking', 'language' => 'fr', 'section' => 'pages', 'value' => 'Réservations', 'type' => 'text'],
            ['key' => 'page.contact.reason_feedback', 'language' => 'fr', 'section' => 'pages', 'value' => 'Eloges et plaintes', 'type' => 'text'],
            ['key' => 'page.contact.reason_other', 'language' => 'fr', 'section' => 'pages', 'value' => 'Autres', 'type' => 'text'],
            ['key' => 'page.contact.first_name', 'language' => 'fr', 'section' => 'pages', 'value' => 'Prénom *', 'type' => 'text'],
            ['key' => 'page.contact.last_name', 'language' => 'fr', 'section' => 'pages', 'value' => 'Nom de famille *', 'type' => 'text'],
            ['key' => 'page.contact.email', 'language' => 'fr', 'section' => 'pages', 'value' => 'E-mail *', 'type' => 'text'],
            ['key' => 'page.contact.phone', 'language' => 'fr', 'section' => 'pages', 'value' => 'Numéro de téléphone', 'type' => 'text'],
            ['key' => 'page.contact.message', 'language' => 'fr', 'section' => 'pages', 'value' => 'Message *', 'type' => 'text'],
            ['key' => 'page.contact.submit_button', 'language' => 'fr', 'section' => 'pages', 'value' => 'Soumettre le formulaire', 'type' => 'text'],
            ['key' => 'page.contact.form_success', 'language' => 'fr', 'section' => 'pages', 'value' => 'Merci! Votre message a été reçu!', 'type' => 'text'],
            ['key' => 'page.contact.form_error', 'language' => 'fr', 'section' => 'pages', 'value' => 'Oops! Quelque chose s\'est mal passé lors de la soumission du formulaire.', 'type' => 'text'],
            ['key' => 'page.contact.opening_hours_title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Horaires d\'ouvertures', 'type' => 'text'],
            ['key' => 'page.contact.opening_hours', 'language' => 'fr', 'section' => 'pages', 'value' => 'Lundi - Jeudi : 08h00 - 19h00<br>Vendredi : 08h00 - 21h00<br>Samedi : 09h00 - 17h00<br>Dimanche : 09h00 - 12h00', 'type' => 'text'],
            ['key' => 'page.contact.contact_info_title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'page.contact.contact_info', 'language' => 'fr', 'section' => 'pages', 'value' => 'Centre de loisirs Mundial<br>Frohstrasse 32<br>21362 Bringels<br>Télephone: 0041 870 23 57 48', 'type' => 'text'],
            
            // Contact Page - English
            ['key' => 'page.contact.title', 'language' => 'en', 'section' => 'pages', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'page.contact.intro', 'language' => 'en', 'section' => 'pages', 'value' => 'Enter your first name, last name, phone number and email address in the contact form below. Please ask us your questions in the contact form. We will be happy to answer you personally.<br><br>We also organize birthday parties and events that you like. Music, catering and drinks are of course included. Would you like to have such a party? Then write to us also in the contact form. The map above shows you the way to reach us.', 'type' => 'textarea'],
            ['key' => 'page.contact.form_title', 'language' => 'en', 'section' => 'pages', 'value' => 'Contact Form', 'type' => 'text'],
            ['key' => 'page.contact.form_instructions', 'language' => 'en', 'section' => 'pages', 'value' => '* Required fields', 'type' => 'text'],
            ['key' => 'page.contact.reason_label', 'language' => 'en', 'section' => 'pages', 'value' => 'Reason for contact *', 'type' => 'text'],
            ['key' => 'page.contact.reason_placeholder', 'language' => 'en', 'section' => 'pages', 'value' => 'Please choose...', 'type' => 'text'],
            ['key' => 'page.contact.reason_general', 'language' => 'en', 'section' => 'pages', 'value' => 'General questions', 'type' => 'text'],
            ['key' => 'page.contact.reason_subscription', 'language' => 'en', 'section' => 'pages', 'value' => 'Questions about subscriptions', 'type' => 'text'],
            ['key' => 'page.contact.reason_booking', 'language' => 'en', 'section' => 'pages', 'value' => 'Reservations', 'type' => 'text'],
            ['key' => 'page.contact.reason_feedback', 'language' => 'en', 'section' => 'pages', 'value' => 'Compliments and complaints', 'type' => 'text'],
            ['key' => 'page.contact.reason_other', 'language' => 'en', 'section' => 'pages', 'value' => 'Other', 'type' => 'text'],
            ['key' => 'page.contact.first_name', 'language' => 'en', 'section' => 'pages', 'value' => 'First name *', 'type' => 'text'],
            ['key' => 'page.contact.last_name', 'language' => 'en', 'section' => 'pages', 'value' => 'Last name *', 'type' => 'text'],
            ['key' => 'page.contact.email', 'language' => 'en', 'section' => 'pages', 'value' => 'Email *', 'type' => 'text'],
            ['key' => 'page.contact.phone', 'language' => 'en', 'section' => 'pages', 'value' => 'Phone number', 'type' => 'text'],
            ['key' => 'page.contact.message', 'language' => 'en', 'section' => 'pages', 'value' => 'Message *', 'type' => 'text'],
            ['key' => 'page.contact.submit_button', 'language' => 'en', 'section' => 'pages', 'value' => 'Submit Form', 'type' => 'text'],
            ['key' => 'page.contact.form_success', 'language' => 'en', 'section' => 'pages', 'value' => 'Thank you! Your message has been received!', 'type' => 'text'],
            ['key' => 'page.contact.form_error', 'language' => 'en', 'section' => 'pages', 'value' => 'Oops! Something went wrong when submitting the form.', 'type' => 'text'],
            ['key' => 'page.contact.opening_hours_title', 'language' => 'en', 'section' => 'pages', 'value' => 'Opening Hours', 'type' => 'text'],
            ['key' => 'page.contact.opening_hours', 'language' => 'en', 'section' => 'pages', 'value' => 'Monday - Thursday: 08:00 - 19:00<br>Friday: 08:00 - 21:00<br>Saturday: 09:00 - 17:00<br>Sunday: 09:00 - 12:00', 'type' => 'text'],
            ['key' => 'page.contact.contact_info_title', 'language' => 'en', 'section' => 'pages', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'page.contact.contact_info', 'language' => 'en', 'section' => 'pages', 'value' => 'Mundial Leisure Center<br>Frohstrasse 32<br>21362 Bringels<br>Phone: 0041 870 23 57 48', 'type' => 'text'],
            
            // Contact Page - Indonesian
            ['key' => 'page.contact.title', 'language' => 'id', 'section' => 'pages', 'value' => 'Kontak', 'type' => 'text'],
            ['key' => 'page.contact.intro', 'language' => 'id', 'section' => 'pages', 'value' => 'Masukkan nama depan, nama belakang, nomor telepon dan alamat email Anda di formulir kontak di bawah ini. Tanyakan pertanyaan Anda kepada kami di formulir kontak. Kami akan dengan senang hati menjawab Anda secara pribadi.<br><br>Kami juga mengadakan pesta ulang tahun dan acara yang Anda sukai. Musik, catering dan minuman tentu saja disertakan. Apakah Anda ingin mengadakan pesta semacam itu? Kemudian tulis kepada kami juga di formulir kontak. Peta di atas menunjukkan kepada Anda jalan menuju kami.', 'type' => 'textarea'],
            ['key' => 'page.contact.form_title', 'language' => 'id', 'section' => 'pages', 'value' => 'Formulir Kontak', 'type' => 'text'],
            ['key' => 'page.contact.form_instructions', 'language' => 'id', 'section' => 'pages', 'value' => '* Bidang wajib', 'type' => 'text'],
            ['key' => 'page.contact.reason_label', 'language' => 'id', 'section' => 'pages', 'value' => 'Alasan untuk menghubungi *', 'type' => 'text'],
            ['key' => 'page.contact.reason_placeholder', 'language' => 'id', 'section' => 'pages', 'value' => 'Silakan pilih...', 'type' => 'text'],
            ['key' => 'page.contact.reason_general', 'language' => 'id', 'section' => 'pages', 'value' => 'Pertanyaan umum', 'type' => 'text'],
            ['key' => 'page.contact.reason_subscription', 'language' => 'id', 'section' => 'pages', 'value' => 'Pertanyaan tentang langganan', 'type' => 'text'],
            ['key' => 'page.contact.reason_booking', 'language' => 'id', 'section' => 'pages', 'value' => 'Reservasi', 'type' => 'text'],
            ['key' => 'page.contact.reason_feedback', 'language' => 'id', 'section' => 'pages', 'value' => 'Pujian dan keluhan', 'type' => 'text'],
            ['key' => 'page.contact.reason_other', 'language' => 'id', 'section' => 'pages', 'value' => 'Lainnya', 'type' => 'text'],
            ['key' => 'page.contact.first_name', 'language' => 'id', 'section' => 'pages', 'value' => 'Nama depan *', 'type' => 'text'],
            ['key' => 'page.contact.last_name', 'language' => 'id', 'section' => 'pages', 'value' => 'Nama belakang *', 'type' => 'text'],
            ['key' => 'page.contact.email', 'language' => 'id', 'section' => 'pages', 'value' => 'Email *', 'type' => 'text'],
            ['key' => 'page.contact.phone', 'language' => 'id', 'section' => 'pages', 'value' => 'Nomor telepon', 'type' => 'text'],
            ['key' => 'page.contact.message', 'language' => 'id', 'section' => 'pages', 'value' => 'Pesan *', 'type' => 'text'],
            ['key' => 'page.contact.submit_button', 'language' => 'id', 'section' => 'pages', 'value' => 'Kirim Formulir', 'type' => 'text'],
            ['key' => 'page.contact.form_success', 'language' => 'id', 'section' => 'pages', 'value' => 'Terima kasih! Pesan Anda telah diterima!', 'type' => 'text'],
            ['key' => 'page.contact.form_error', 'language' => 'id', 'section' => 'pages', 'value' => 'Oops! Terjadi kesalahan saat mengirim formulir.', 'type' => 'text'],
            
            // Contact Page - Hours - French
            ['key' => 'page.contact.hours_title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Horaires d\'ouvertures', 'type' => 'text'],
            ['key' => 'page.contact.hours_text', 'language' => 'fr', 'section' => 'pages', 'value' => 'Lundi - Jeudi : 08h00 - 19h00<br>Vendredi : 08h00 - 21h00<br>Samedi : 09h00 - 17h00<br>Dimanche : 09h00 - 12h00', 'type' => 'text'],
            ['key' => 'page.contact.info_title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'page.contact.info_address', 'language' => 'fr', 'section' => 'pages', 'value' => 'Centre de loisirs Mundial<br>Frohstrasse 32<br>21362 Bringels<br>Téléphone: 0041 870 23 57 48', 'type' => 'text'],
            
            // Contact Page - Hours - English
            ['key' => 'page.contact.hours_title', 'language' => 'en', 'section' => 'pages', 'value' => 'Opening Hours', 'type' => 'text'],
            ['key' => 'page.contact.hours_text', 'language' => 'en', 'section' => 'pages', 'value' => 'Monday - Thursday: 08:00 - 19:00<br>Friday: 08:00 - 21:00<br>Saturday: 09:00 - 17:00<br>Sunday: 09:00 - 12:00', 'type' => 'text'],
            ['key' => 'page.contact.info_title', 'language' => 'en', 'section' => 'pages', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'page.contact.info_address', 'language' => 'en', 'section' => 'pages', 'value' => 'Mundial Leisure Center<br>Frohstrasse 32<br>21362 Bringels<br>Phone: 0041 870 23 57 48', 'type' => 'text'],
            
            // Contact Page - Hours - Indonesian
            ['key' => 'page.contact.hours_title', 'language' => 'id', 'section' => 'pages', 'value' => 'Jam Operasional', 'type' => 'text'],
            ['key' => 'page.contact.hours_text', 'language' => 'id', 'section' => 'pages', 'value' => 'Senin - Kamis: 08:00 - 19:00<br>Jumat: 08:00 - 21:00<br>Sabtu: 09:00 - 17:00<br>Minggu: 09:00 - 12:00', 'type' => 'text'],
            ['key' => 'page.contact.info_title', 'language' => 'id', 'section' => 'pages', 'value' => 'Kontak', 'type' => 'text'],
            ['key' => 'page.contact.info_address', 'language' => 'id', 'section' => 'pages', 'value' => 'Pusat Rekreasi Mundial<br>Frohstrasse 32<br>21362 Bringels<br>Telepon: 0041 870 23 57 48', 'type' => 'text'],

            ['key' => 'page.contact.opening_hours_title', 'language' => 'id', 'section' => 'pages', 'value' => 'Jam Operasional', 'type' => 'text'],
            ['key' => 'page.contact.opening_hours', 'language' => 'id', 'section' => 'pages', 'value' => 'Senin - Kamis: 08:00 - 19:00<br>Jumat: 08:00 - 21:00<br>Sabtu: 09:00 - 17:00<br>Minggu: 09:00 - 12:00', 'type' => 'text'],
            ['key' => 'page.contact.contact_info_title', 'language' => 'id', 'section' => 'pages', 'value' => 'Kontak', 'type' => 'text'],
            ['key' => 'page.contact.contact_info', 'language' => 'id', 'section' => 'pages', 'value' => 'Pusat Rekreasi Mundial<br>Frohstrasse 32<br>21362 Bringels<br>Telepon: 0041 870 23 57 48', 'type' => 'text'],

            // Payment Mode Section
            ['key' => 'page.prices.payment_title', 'language' => 'fr', 'section' => 'pages', 'value' => 'Mode de paiement', 'type' => 'text'],
            ['key' => 'page.prices.payment_title', 'language' => 'en', 'section' => 'pages', 'value' => 'Payment Method', 'type' => 'text'],
            ['key' => 'page.prices.payment_title', 'language' => 'id', 'section' => 'pages', 'value' => 'Cara Pembayaran', 'type' => 'text'],

            ['key' => 'page.prices.payment_description', 'language' => 'fr', 'section' => 'pages', 'value' => 'Tous les prix sont en francs suisses. Les changements de prix sont possibles. Vous pouvez payer le tarif d\'entrée en espèces (francs ou euros), ou par carte bancaire.', 'type' => 'text'],
            ['key' => 'page.prices.payment_description', 'language' => 'en', 'section' => 'pages', 'value' => 'All prices are in Swiss francs. Price changes are possible. You can pay the entrance fee in cash (francs or euros), or by bank card.', 'type' => 'text'],
            ['key' => 'page.prices.payment_description', 'language' => 'id', 'section' => 'pages', 'value' => 'Semua harga dalam franc Swiss. Perubahan harga dimungkinkan. Anda dapat membayar biaya masuk dengan tunai (franc atau euro), atau dengan kartu bank.', 'type' => 'text'],

            // Home Page - Additional
            ['key' => 'home.discover_all_offers', 'language' => 'fr', 'section' => 'home', 'value' => 'Découvrez toutes nos offres', 'type' => 'text'],
            ['key' => 'home.discover_all_offers', 'language' => 'en', 'section' => 'home', 'value' => 'Discover all our offers', 'type' => 'text'],
            ['key' => 'home.discover_all_offers', 'language' => 'id', 'section' => 'home', 'value' => 'Temukan semua penawaran kami', 'type' => 'text'],

            // Card - Birthday - French
            ['key' => 'card.birthday.title', 'language' => 'fr', 'section' => 'cards', 'value' => 'Fête d\'Anniversaire', 'type' => 'text'],
            ['key' => 'card.birthday.desc', 'language' => 'fr', 'section' => 'cards', 'value' => 'Commencez la nouvelle année de votre vie sportive et active. Célébrez les fêtes d\'anniversaire sur la piste de bowling. Venez vous amuser sur notre piste de bowling!', 'type' => 'textarea'],

            // Card - Birthday - English
            ['key' => 'card.birthday.title', 'language' => 'en', 'section' => 'cards', 'value' => 'Birthday Party', 'type' => 'text'],
            ['key' => 'card.birthday.desc', 'language' => 'en', 'section' => 'cards', 'value' => 'Start the new year of your active and sports life. Celebrate birthday parties on the bowling lane. Come have fun on our bowling lane!', 'type' => 'textarea'],

            // Card - Birthday - Indonesian
            ['key' => 'card.birthday.title', 'language' => 'id', 'section' => 'cards', 'value' => 'Pesta Ulang Tahun', 'type' => 'text'],
            ['key' => 'card.birthday.desc', 'language' => 'id', 'section' => 'cards', 'value' => 'Mulai tahun baru kehidupan olahraga Anda yang aktif. Rayakan pesta ulang tahun di lintasan bowling. Mari bersenang-senang di lintasan bowling kami!', 'type' => 'textarea'],

            // Card - More Link - French
            ['key' => 'card.more_link', 'language' => 'fr', 'section' => 'cards', 'value' => 'En savoir plus', 'type' => 'text'],

            // Card - More Link - English
            ['key' => 'card.more_link', 'language' => 'en', 'section' => 'cards', 'value' => 'Learn more', 'type' => 'text'],

            // Card - More Link - Indonesian
            ['key' => 'card.more_link', 'language' => 'id', 'section' => 'cards', 'value' => 'Pelajari lebih lanjut', 'type' => 'text'],

            // Task Page - French
            ['key' => 'task.heading', 'language' => 'fr', 'section' => 'pages', 'value' => 'Tâche 1', 'type' => 'text'],
            ['key' => 'task.description', 'language' => 'fr', 'section' => 'pages', 'value' => 'Un ami vous a dit à quel point le sauna aromatique du centre de loisirs Mundial est bénéfique. Vous aimeriez le voir par vous-même la semaine prochaine. <br>Utilisez le site web de Mundial pour savoir si le sauna aromatique est ouvert en hiver.', 'type' => 'text'],
            ['key' => 'task.skip_button', 'language' => 'fr', 'section' => 'pages', 'value' => 'Sauter la tâche', 'type' => 'text'],
            ['key' => 'task.continue_button', 'language' => 'fr', 'section' => 'pages', 'value' => 'Continuer', 'type' => 'text'],

            // Task Page - English
            ['key' => 'task.heading', 'language' => 'en', 'section' => 'pages', 'value' => 'Task 1', 'type' => 'text'],
            ['key' => 'task.description', 'language' => 'en', 'section' => 'pages', 'value' => 'A friend told you how beneficial the aromatic sauna at the Mundial leisure center is. You would like to see it for yourself next week. <br>Use the Mundial website to find out if the aromatic sauna is open in winter.', 'type' => 'text'],
            ['key' => 'task.skip_button', 'language' => 'en', 'section' => 'pages', 'value' => 'Skip task', 'type' => 'text'],
            ['key' => 'task.continue_button', 'language' => 'en', 'section' => 'pages', 'value' => 'Continue', 'type' => 'text'],

            // Task Page - Indonesian
            ['key' => 'task.heading', 'language' => 'id', 'section' => 'pages', 'value' => 'Tugas 1', 'type' => 'text'],
            ['key' => 'task.description', 'language' => 'id', 'section' => 'pages', 'value' => 'Seorang teman memberi tahu Anda betapa bermanfaatnya sauna aromatik di pusat rekreasi Mundial. Anda ingin melihatnya sendiri minggu depan. <br>Gunakan situs web Mundial untuk mengetahui apakah sauna aromatik buka di musim dingin.', 'type' => 'text'],
            ['key' => 'task.skip_button', 'language' => 'id', 'section' => 'pages', 'value' => 'Lewati tugas', 'type' => 'text'],
            ['key' => 'task.continue_button', 'language' => 'id', 'section' => 'pages', 'value' => 'Lanjutkan', 'type' => 'text'],
        ];

        foreach ($translations as $translation) {
            Translation::updateOrCreate(
                ['key' => $translation['key'], 'language' => $translation['language']],
                $translation
            );
        }
    }
}

