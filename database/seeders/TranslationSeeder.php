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
            
            // Home page - German
            ['key' => 'home.welcome_main', 'language' => 'de', 'section' => 'home', 'value' => 'Mundial Freizeitcenter', 'type' => 'text'],
            ['key' => 'home.welcome_sub', 'language' => 'de', 'section' => 'home', 'value' => 'Spaß für die ganze Familie', 'type' => 'text'],
            ['key' => 'home.welcome_title', 'language' => 'de', 'section' => 'home', 'value' => 'Willkommen im Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_text', 'language' => 'de', 'section' => 'home', 'value' => 'Das Mundial Freizeitcenter ist ein moderner und wunderschöner Ort mitten in der Natur. Unser Angebot umfasst sowohl Sport als auch Entspannung. Darüber hinaus bietet unser Bistro feine Speisen und edle Getränke.', 'type' => 'textarea'],
            
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
            
            // Navigation - German
            ['key' => 'nav.offers', 'language' => 'de', 'section' => 'navigation', 'value' => 'Unsere Angebote', 'type' => 'text'],
            ['key' => 'nav.prices', 'language' => 'de', 'section' => 'navigation', 'value' => 'Abos & Preise', 'type' => 'text'],
            ['key' => 'nav.contact', 'language' => 'de', 'section' => 'navigation', 'value' => 'Kontakt', 'type' => 'text'],
            ['key' => 'nav.task', 'language' => 'de', 'section' => 'navigation', 'value' => 'Aufgabe', 'type' => 'text'],
        ];

        foreach ($translations as $translation) {
            Translation::updateOrCreate(
                ['key' => $translation['key'], 'language' => $translation['language']],
                $translation
            );
        }
    }
}

