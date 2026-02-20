<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HardcodedContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            // HOME PAGE - Main content
            ['key' => 'home.welcome_title', 'language' => 'fr', 'section' => 'home', 'value' => 'Le Centre de Loisirs Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_title', 'language' => 'en', 'section' => 'home', 'value' => 'the Mundial Leisure Center', 'type' => 'text'],
            ['key' => 'home.welcome_main', 'language' => 'fr', 'section' => 'home', 'value' => 'Bienvenue au Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_main', 'language' => 'en', 'section' => 'home', 'value' => 'Welcome to Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_main', 'language' => 'de', 'section' => 'home', 'value' => 'Willkommen bei Mundial', 'type' => 'text'],
            ['key' => 'home.tagline', 'language' => 'en', 'section' => 'home', 'value' => 'Fun for all the family', 'type' => 'text'],
            ['key' => 'home.tagline', 'language' => 'de', 'section' => 'home', 'value' => 'Spaß für die ganze Familie', 'type' => 'text'],

            ['key' => 'home.welcome_main', 'language' => 'fr', 'section' => 'home', 'value' => 'Bienvenue au Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_main', 'language' => 'en', 'section' => 'home', 'value' => 'Welcome to Mundial', 'type' => 'text'],
            ['key' => 'home.welcome_main', 'language' => 'de', 'section' => 'home', 'value' => 'Willkommen bei Mundial', 'type' => 'text'],

            ['key' => 'home.intro_description', 'language' => 'fr', 'section' => 'home', 'value' => 'Le Centre de Loisirs Mundial est un endroit moderne et magnifique, au cœur de la nature. Notre offre comprend à la fois du sport et de la détente. En outre, notre bistrot propose de la bonne nourriture et des boissons raffinées. Chez nous, vous trouvez de nombreuses activités de loisirs pour vous, vos amis et votre famille. Nous organisons également des fêtes de Noël et des fêtes d\'anniversaire pour tout le monde. Découvrez maintenant notre centre de loisirs sur Internet. Laissez-vous surprendre par notre grande offre !', 'type' => 'html'],
            ['key' => 'home.intro_description', 'language' => 'en', 'section' => 'home', 'value' => 'The Mundial Leisure Center is a modern and beautiful place, in the heart of nature. Our offer includes both sports and relaxation. In addition, our bistro offers good food and refined drinks. With us, you will find many leisure activities for you, your friends and your family. We also organize Christmas parties and birthday parties for everyone. Discover our leisure center on the Internet now. Be surprised by our wide range of offerings!', 'type' => 'html'],
            ['key' => 'home.intro_description', 'language' => 'de', 'section' => 'home', 'value' => 'Das Mundial Freizeitzentrum ist ein moderner und wunderschöner Ort im Herzen der Natur. Unser Angebot umfasst sowohl Sport als auch Entspannung. Darüber hinaus bietet unser Bistro gute Speisen und edle Getränke. Bei uns findest du viele Freizeitaktivitäten für dich, deine Freunde und deine Familie. Wir organisieren auch Weihnachtsfeiern und Geburtstagsfeiern für alle. Entdecke unser Freizeitzentrum jetzt im Internet. Lass dich von unserem großen Angebot überraschen!', 'type' => 'html'],

            // RELAXATION SECTION
            ['key' => 'home.relax_title', 'language' => 'fr', 'section' => 'home', 'value' => 'Offrez-vous du temps de détente', 'type' => 'text'],
            ['key' => 'home.relax_title', 'language' => 'en', 'section' => 'home', 'value' => 'Treat yourself to relaxation time', 'type' => 'text'],
            ['key' => 'home.relax_title', 'language' => 'de', 'section' => 'home', 'value' => 'Gönnen Sie sich Entspannungszeit', 'type' => 'text'],

            ['key' => 'home.sauna_description', 'language' => 'fr', 'section' => 'home', 'value' => 'Notre espace sauna s\'étend sur environ 1 500 m². Vivez la fascination de la chaleur dans l\'un de nos cinq saunas à température différente (deux saunas intérieurs et trois saunas extérieurs). Que ce soit en hiver ou en été, le sauna est une forme particulière de traitement chaud-froid qui favorise la santé et la détente. Entre autres, les saunas stimulent le métabolisme, stabilisent le système cardiovasculaire et aident à exercer le système vasculaire. Nous vous recommandons de bénéficier de trois passages, car les passages supplémentaires n\'apportent pas d\'autres avantages pour la santé et peuvent conduire à une fatigue des fonctions corporelles.', 'type' => 'html'],
            ['key' => 'home.sauna_description', 'language' => 'en', 'section' => 'home', 'value' => 'Our sauna area extends over about 1,500 m². Experience the fascination of heat in one of our five saunas at different temperatures (two indoor saunas and three outdoor saunas). Whether in winter or summer, the sauna is a special form of hot-cold treatment that promotes health and relaxation. Among other things, saunas stimulate the metabolism, stabilize the cardiovascular system and help exercise the vascular system. We recommend you benefit from three passes, as additional passes do not bring any other health benefits and can lead to fatigue of body functions.', 'type' => 'html'],
            ['key' => 'home.sauna_description', 'language' => 'de', 'section' => 'home', 'value' => 'Unser Saunabereich erstreckt sich über etwa 1.500 m². Erleben Sie die Faszination der Wärme in einer unserer fünf Saunen bei unterschiedlichen Temperaturen (zwei Innensaunen und drei Außensaunen). Ob im Winter oder im Sommer, die Sauna ist eine besondere Form der Warm-Kalt-Behandlung, die Gesundheit und Entspannung fördert. Saunen regen unter anderem den Stoffwechsel an, stabilisieren das Herz-Kreislauf-System und helfen, das Gefäßsystem zu trainieren. Wir empfehlen Ihnen, von drei Durchgängen zu profitieren, da zusätzliche Durchgänge keinen weiteren gesundheitlichen Nutzen bringen und zu einer Ermüdung der Körperfunktionen führen können.', 'type' => 'html'],

            // SWIMMING SECTION
            ['key' => 'home.swimming_title', 'language' => 'fr', 'section' => 'home', 'value' => 'Besoin de changer de décor ?', 'type' => 'text'],
            ['key' => 'home.swimming_title', 'language' => 'en', 'section' => 'home', 'value' => 'Need a change of scenery?', 'type' => 'text'],
            ['key' => 'home.swimming_title', 'language' => 'de', 'section' => 'home', 'value' => 'Brauchen Sie einen Szenenwechsel?', 'type' => 'text'],

            ['key' => 'home.pool_description', 'language' => 'fr', 'section' => 'home', 'value' => 'Notre piscine naturelle offre une eau de baignade qualitativement comparable à celle d\'un lac naturel ou d\'un étang profond. Profitez des plaisirs de la baignade naturelle dans une eau sans chlore ni produits chimiques. Avec une vue imprenable sur la nature, vous pouvez vous détendre ici.', 'type' => 'html'],
            ['key' => 'home.pool_description', 'language' => 'en', 'section' => 'home', 'value' => 'Our natural pool offers bathing water qualitatively comparable to that of a natural lake or deep pond. Enjoy the pleasures of natural bathing in water without chlorine or chemicals. With a breathtaking view of nature, you can relax here.', 'type' => 'html'],
            ['key' => 'home.pool_description', 'language' => 'de', 'section' => 'home', 'value' => 'Unser Naturpool bietet Badewasser, das qualitativ vergleichbar mit dem eines Natursees oder tiefen Teichs ist. Genießen Sie die Freuden des natürlichen Badens in chlor- und chemikalienfreiem Wasser. Mit atemberaubender Aussicht auf die Natur können Sie sich hier entspannen.', 'type' => 'html'],

            // OFFERS SECTION
            ['key' => 'home.offers_title', 'language' => 'fr', 'section' => 'home', 'value' => 'Nos offres', 'type' => 'text'],
            ['key' => 'home.offers_title', 'language' => 'en', 'section' => 'home', 'value' => 'Our Offers', 'type' => 'text'],
            ['key' => 'home.offers_title', 'language' => 'de', 'section' => 'home', 'value' => 'Unsere Angebote', 'type' => 'text'],

            // OFFER CARDS
            ['key' => 'offer.pool_title', 'language' => 'fr', 'section' => 'offers', 'value' => 'Piscine', 'type' => 'text'],
            ['key' => 'offer.pool_title', 'language' => 'en', 'section' => 'offers', 'value' => 'Swimming Pool', 'type' => 'text'],
            ['key' => 'offer.pool_title', 'language' => 'de', 'section' => 'offers', 'value' => 'Schwimmbad', 'type' => 'text'],

            ['key' => 'offer.pool_desc', 'language' => 'fr', 'section' => 'offers', 'value' => 'La natation est saine et renforce le corps et l\'âme de nous, humains. Profitez de la baignade dans une atmosphère agréable dans notre piscine intérieure. Il y en a pour tous les goûts, des jeunes aux moins jeunes.', 'type' => 'html'],
            ['key' => 'offer.pool_desc', 'language' => 'en', 'section' => 'offers', 'value' => 'Swimming is healthy and strengthens both body and soul. Enjoy bathing in a pleasant atmosphere in our indoor pool. There is something for everyone, from young to old.', 'type' => 'html'],
            ['key' => 'offer.pool_desc', 'language' => 'de', 'section' => 'offers', 'value' => 'Schwimmen ist gesund und stärkt Körper und Seele. Genießen Sie das Baden in angenehmer Atmosphäre in unserem Hallenbad. Für jeden ist etwas dabei, von jung bis alt.', 'type' => 'html'],

            ['key' => 'offer.sauna_title', 'language' => 'fr', 'section' => 'offers', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'offer.sauna_title', 'language' => 'en', 'section' => 'offers', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'offer.sauna_title', 'language' => 'de', 'section' => 'offers', 'value' => 'Sauna', 'type' => 'text'],

            ['key' => 'offer.sauna_desc', 'language' => 'fr', 'section' => 'offers', 'value' => 'La sauna nous aide à nous détendre. Avec ses cinq saunas, le centre de loisirs Mundial offre une large sélection de saunas de tous types. Que ce soit dans le sauna finlandais traditionnel chaud, dans le sauna à vapeur humide, dans le sauna à foin ou dans le bain à remous. Tous les saunas sont accessibles gratuitement pour les visiteurs à jour de leurs cotisations d\'adhésion.', 'type' => 'html'],
            ['key' => 'offer.sauna_desc', 'language' => 'en', 'section' => 'offers', 'value' => 'The sauna helps us to relax. With its five saunas, the Mundial leisure center offers a wide selection of saunas of all types. Whether in the traditional hot Finnish sauna, in the humid steam sauna, in the hay sauna or in the hot tub. All saunas are accessible free of charge for visitors up to date with their membership fees.', 'type' => 'html'],
            ['key' => 'offer.sauna_desc', 'language' => 'de', 'section' => 'offers', 'value' => 'Die Sauna hilft uns zu entspannen. Mit seinen fünf Saunen bietet das Mundial Freizeitzentrum eine große Auswahl an Saunen aller Art. Ob in der traditionellen heißen finnischen Sauna, in der feuchten Dampfsauna, in der Heusauna oder im Hot Tub. Alle Saunas sind kostenfrei für Besucher zugänglich, deren Mitgliedsbeiträge bezahlt sind.', 'type' => 'html'],

            ['key' => 'offer.learn_more', 'language' => 'fr', 'section' => 'offers', 'value' => 'En savoir plus', 'type' => 'text'],
            ['key' => 'offer.learn_more', 'language' => 'en', 'section' => 'offers', 'value' => 'Learn More', 'type' => 'text'],
            ['key' => 'offer.learn_more', 'language' => 'de', 'section' => 'offers', 'value' => 'Mehr erfahren', 'type' => 'text'],

            // NAVIGATION
            ['key' => 'nav.offers', 'language' => 'fr', 'section' => 'nav', 'value' => 'Nos offres', 'type' => 'text'],
            ['key' => 'nav.offers', 'language' => 'en', 'section' => 'nav', 'value' => 'Our Offers', 'type' => 'text'],
            ['key' => 'nav.offers', 'language' => 'de', 'section' => 'nav', 'value' => 'Nosotras Oferta', 'type' => 'text'],

            ['key' => 'nav.prices', 'language' => 'fr', 'section' => 'nav', 'value' => 'Abonnements & Prix', 'type' => 'text'],
            ['key' => 'nav.prices', 'language' => 'en', 'section' => 'nav', 'value' => 'Subscriptions & Prices', 'type' => 'text'],
            ['key' => 'nav.prices', 'language' => 'de', 'section' => 'nav', 'value' => 'Abos & Preise', 'type' => 'text'],

            ['key' => 'nav.contact', 'language' => 'fr', 'section' => 'nav', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'nav.contact', 'language' => 'en', 'section' => 'nav', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'nav.contact', 'language' => 'de', 'section' => 'nav', 'value' => 'Kontakt', 'type' => 'text'],

            ['key' => 'nav.task', 'language' => 'fr', 'section' => 'nav', 'value' => 'Tâche', 'type' => 'text'],
            ['key' => 'nav.task', 'language' => 'en', 'section' => 'nav', 'value' => 'Task', 'type' => 'text'],
            ['key' => 'nav.task', 'language' => 'de', 'section' => 'nav', 'value' => 'Aufgabe', 'type' => 'text'],

            // OFFER DETAIL PAGES
            ['key' => 'offer.back_to_offers', 'language' => 'fr', 'section' => 'offers', 'value' => 'À la liste des offres', 'type' => 'text'],
            ['key' => 'offer.back_to_offers', 'language' => 'en', 'section' => 'offers', 'value' => 'Back to offers', 'type' => 'text'],
            ['key' => 'offer.back_to_offers', 'language' => 'de', 'section' => 'offers', 'value' => 'Zurück zu den Angeboten', 'type' => 'text'],

            // HALLENBAD (PISCINE)
            ['key' => 'offer.hallenbad.indoor_title', 'language' => 'fr', 'section' => 'hallenbad', 'value' => 'Piscine intérieure', 'type' => 'text'],
            ['key' => 'offer.hallenbad.indoor_title', 'language' => 'en', 'section' => 'hallenbad', 'value' => 'Indoor Swimming Pool', 'type' => 'text'],
            ['key' => 'offer.hallenbad.indoor_title', 'language' => 'de', 'section' => 'hallenbad', 'value' => 'Hallenbad', 'type' => 'text'],

            ['key' => 'offer.hallenbad.indoor_desc', 'language' => 'fr', 'section' => 'hallenbad', 'value' => 'Notre piscine intérieure moderne offre un grand plaisir de baignade aux nageurs sportifs ainsi qu\'aux familles et aux amis. Le bain a une piscine de 50 mètres et promet un plaisir illimité pour petits et grands avec trois toboggans aquatiques. Que ce soit dans des chambres à air colorées, sur des pneus souples ou en chute libre, le plaisir de la glisse est garanti. Divisé en trois niveaux, votre favori parmi les toboggans aquatiques est sûr d\'être trouvé rapidement. Nous organisons aussi régulièrement des événements récréatifs, tels que des spectacles de plongée en hauteur ou des rencontres de sirènes. Non seulement pour les actifs, mais aussi pour les spectateurs un grand plaisir sportif. De plus, les diapositives sont un point fort pour nos jeunes visiteurs.', 'type' => 'html'],
            ['key' => 'offer.hallenbad.indoor_desc', 'language' => 'en', 'section' => 'hallenbad', 'value' => 'Our modern indoor swimming pool offers great bathing pleasure for sports swimmers as well as families and friends. The bath has a 50-meter pool and promises unlimited fun for young and old with three water slides. Whether in colorful air chambers, on soft tires or in free fall, the pleasure of sliding is guaranteed. Divided into three levels, your favorite among the water slides is sure to be found quickly. We also regularly organize recreational events, such as high diving shows or mermaid encounters. Not only for the active, but also for spectators great sports pleasure. Furthermore, the slides are a highlight for our young visitors.', 'type' => 'html'],
            ['key' => 'offer.hallenbad.indoor_desc', 'language' => 'de', 'section' => 'hallenbad', 'value' => 'Unser modernes Hallenbad bietet großes Badevergnügen für Leistungsschwimmer sowie für Familien und Freunde. Das Bad hat ein 50-Meter-Becken und verspricht unbegrenzten Spaß für Jung und Alt mit drei Wasserrutschen. Ob in farbigen Luftkammern, auf weichen Reifen oder im freien Fall, der Rutschenspaß ist garantiert. In drei Ebenen aufgeteilt, dein Favorit unter den Wasserrutschen ist schnell gefunden. Wir veranstalten auch regelmäßig Freizeitereignisse wie Hochsprungshows oder Meerjungfrauenbegegnungen. Nicht nur für die Aktiven, sondern auch für Zuschauer großes Sportvergnügen. Darüber hinaus sind die Rutschen ein Highlight für unsere jungen Besucher.', 'type' => 'html'],

            ['key' => 'offer.hallenbad.natural_title', 'language' => 'fr', 'section' => 'hallenbad', 'value' => 'Piscine naturelle', 'type' => 'text'],
            ['key' => 'offer.hallenbad.natural_title', 'language' => 'en', 'section' => 'hallenbad', 'value' => 'Natural Pool', 'type' => 'text'],
            ['key' => 'offer.hallenbad.natural_title', 'language' => 'de', 'section' => 'hallenbad', 'value' => 'Naturpool', 'type' => 'text'],

            ['key' => 'offer.hallenbad.natural_desc', 'language' => 'fr', 'section' => 'hallenbad', 'value' => 'Notre piscine naturelle offre une eau de baignade qualitativement comparable à celle d\'un lac naturel ou d\'un étang profond. Profitez des plaisirs de la baignade naturelle dans une eau sans chlore ni produits chimiques.', 'type' => 'html'],
            ['key' => 'offer.hallenbad.natural_desc', 'language' => 'en', 'section' => 'hallenbad', 'value' => 'Our natural pool offers bathing water that is qualitatively comparable to that of a natural lake or deep pond. Enjoy the pleasures of natural bathing in chlorine and chemical-free water.', 'type' => 'html'],
            ['key' => 'offer.hallenbad.natural_desc', 'language' => 'de', 'section' => 'hallenbad', 'value' => 'Unser Naturpool bietet Badewasser, das qualitativ vergleichbar mit dem eines Natursees oder tiefen Teichs ist. Genießen Sie die Freuden des natürlichen Badens in chlor- und chemikalienfreiem Wasser.', 'type' => 'html'],

            // SAUNA
            ['key' => 'offer.sauna.title', 'language' => 'fr', 'section' => 'sauna', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'offer.sauna.title', 'language' => 'en', 'section' => 'sauna', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'offer.sauna.title', 'language' => 'de', 'section' => 'sauna', 'value' => 'Sauna', 'type' => 'text'],

            ['key' => 'offer.sauna.intro', 'language' => 'fr', 'section' => 'sauna', 'value' => 'Si vous aimez la chaleur, vous êtes exactement au bon endroit dans le sauna du Centre de Loisirs Mundial.', 'type' => 'text'],
            ['key' => 'offer.sauna.intro', 'language' => 'en', 'section' => 'sauna', 'value' => 'If you like heat, you are in exactly the right place in the sauna of the Mundial Leisure Center.', 'type' => 'text'],
            ['key' => 'offer.sauna.intro', 'language' => 'de', 'section' => 'sauna', 'value' => 'Wenn dir Wärme gefällt, bist du in der Sauna des Mundial Freizeitzentrums genau richtig.', 'type' => 'text'],

            ['key' => 'offer.sauna.desc1', 'language' => 'fr', 'section' => 'sauna', 'value' => 'Notre espace sauna s\'étend sur environ 1\'500 m². Vivez la fascination de la chaleur dans l\'un de nos cinq saunas aux températures différentes.', 'type' => 'html'],
            ['key' => 'offer.sauna.desc1', 'language' => 'en', 'section' => 'sauna', 'value' => 'Our sauna area extends over about 1,500 m². Experience the fascination of heat in one of our five saunas at different temperatures.', 'type' => 'html'],
            ['key' => 'offer.sauna.desc1', 'language' => 'de', 'section' => 'sauna', 'value' => 'Unser Saunabereich erstreckt sich über etwa 1.500 m². Erleben Sie die Faszination der Wärme in einer unserer fünf Saunen bei unterschiedlichen Temperaturen.', 'type' => 'html'],

            // MINIGOLF
            ['key' => 'offer.minigolf.title', 'language' => 'fr', 'section' => 'minigolf', 'value' => 'Minigolf', 'type' => 'text'],
            ['key' => 'offer.minigolf.title', 'language' => 'en', 'section' => 'minigolf', 'value' => 'Mini Golf', 'type' => 'text'],
            ['key' => 'offer.minigolf.title', 'language' => 'de', 'section' => 'minigolf', 'value' => 'Minigolf', 'type' => 'text'],

            ['key' => 'offer.minigolf.desc1', 'language' => 'fr', 'section' => 'minigolf', 'value' => 'Profitez d\'une partie de mini-golf sur notre terrain de mini-golf. Notre mini-golf de 20 trous est situé au cœur de notre parc naturel. Nature et plaisir pour toute la famille ! La longueur supplémentaire de certains trous est un défi particulier et garantit le plaisir de jouer !', 'type' => 'html'],
            ['key' => 'offer.minigolf.desc1', 'language' => 'en', 'section' => 'minigolf', 'value' => 'Enjoy a game of mini golf on our mini golf course. Our 20-hole mini golf is located in the heart of our natural park. Nature and fun for the whole family! The extra length of some holes is a particular challenge and guarantees the pleasure of playing!', 'type' => 'html'],
            ['key' => 'offer.minigolf.desc1', 'language' => 'de', 'section' => 'minigolf', 'value' => 'Genießen Sie ein Spiel Minigolf auf unserem Minigolfplatz. Unser 20-Loch-Minigolf befindet sich im Herzen unseres Naturparks. Natur und Spaß für die ganze Familie! Die extra Länge einiger Löcher ist eine besondere Herausforderung und garantiert das Vergnügen des Spielens!', 'type' => 'html'],

            ['key' => 'offer.minigolf.desc2', 'language' => 'fr', 'section' => 'minigolf', 'value' => 'Vous avez une occasion spéciale ? Pas de problème, car avec nous, vous pouvez aussi faire la fête ensemble. Des fêtes d\'anniversaire inoubliables pour les enfants ou un événement d\'entreprise sont possibles sur demande.', 'type' => 'html'],
            ['key' => 'offer.minigolf.desc2', 'language' => 'en', 'section' => 'minigolf', 'value' => 'Do you have a special occasion? No problem, because with us you can also party together. Unforgettable birthday parties for children or a corporate event are possible on request.', 'type' => 'html'],
            ['key' => 'offer.minigolf.desc2', 'language' => 'de', 'section' => 'minigolf', 'value' => 'Haben Sie einen besonderen Anlass? Kein Problem, denn bei uns können Sie auch zusammen feiern. Unvergessliche Kindergeburtstage oder Veranstaltungen sind auf Anfrage möglich.', 'type' => 'html'],

            // BOWLING
            ['key' => 'offer.bowling.title', 'language' => 'fr', 'section' => 'bowling', 'value' => 'Bowling', 'type' => 'text'],
            ['key' => 'offer.bowling.title', 'language' => 'en', 'section' => 'bowling', 'value' => 'Bowling', 'type' => 'text'],
            ['key' => 'offer.bowling.title', 'language' => 'de', 'section' => 'bowling', 'value' => 'Bowling', 'type' => 'text'],

            ['key' => 'offer.bowling.subtitle1', 'language' => 'fr', 'section' => 'bowling', 'value' => 'Le jeu pour le sport et le plaisir entre amis ou en famille.', 'type' => 'text'],
            ['key' => 'offer.bowling.subtitle1', 'language' => 'en', 'section' => 'bowling', 'value' => 'The game for sport and fun with friends or family.', 'type' => 'text'],
            ['key' => 'offer.bowling.subtitle1', 'language' => 'de', 'section' => 'bowling', 'value' => 'Das Spiel für Sport und Spaß mit Freunden oder Familie.', 'type' => 'text'],

            // BIRTHDAY
            ['key' => 'offer.birthday.title', 'language' => 'fr', 'section' => 'birthday', 'value' => 'Fête d\'Anniversaire', 'type' => 'text'],
            ['key' => 'offer.birthday.title', 'language' => 'en', 'section' => 'birthday', 'value' => 'Birthday Party', 'type' => 'text'],
            ['key' => 'offer.birthday.title', 'language' => 'de', 'section' => 'birthday', 'value' => 'Geburtstagsfeier', 'type' => 'text'],

            ['key' => 'offer.birthday.intro', 'language' => 'fr', 'section' => 'birthday', 'value' => 'Célébrez votre anniversaire au Centro de Loisirs Mundial ! Nous proposons des forfaits d\'anniversaire personnalisés avec diverses activités.', 'type' => 'html'],
            ['key' => 'offer.birthday.intro', 'language' => 'en', 'section' => 'birthday', 'value' => 'Celebrate your birthday at the Mundial Leisure Center! We offer personalized birthday packages with various activities.', 'type' => 'html'],
            ['key' => 'offer.birthday.intro', 'language' => 'de', 'section' => 'birthday', 'value' => 'Feiern Sie Ihren Geburtstag im Mundial Freizeitzentrum! Wir bieten personalisierte Geburtstagsangebote mit verschiedenen Aktivitäten an.', 'type' => 'html'],

            // RESTAURANT
            ['key' => 'offer.restaurant.title', 'language' => 'fr', 'section' => 'restaurant', 'value' => 'Restaurant', 'type' => 'text'],
            ['key' => 'offer.restaurant.title', 'language' => 'en', 'section' => 'restaurant', 'value' => 'Restaurant', 'type' => 'text'],
            ['key' => 'offer.restaurant.title', 'language' => 'de', 'section' => 'restaurant', 'value' => 'Restaurant', 'type' => 'text'],

            ['key' => 'offer.restaurant.intro', 'language' => 'fr', 'section' => 'restaurant', 'value' => 'Profitez de notre restaurant au Centro de Loisirs Mundial avec une cuisine délicieuse et une ambiance agréable.', 'type' => 'html'],
            ['key' => 'offer.restaurant.intro', 'language' => 'en', 'section' => 'restaurant', 'value' => 'Enjoy our restaurant at the Mundial Leisure Center with delicious cuisine and a pleasant atmosphere.', 'type' => 'html'],
            ['key' => 'offer.restaurant.intro', 'language' => 'de', 'section' => 'restaurant', 'value' => 'Genießen Sie unser Restaurant im Mundial Freizeitzentrum mit köstlicher Küche und angenehmer Atmosphäre.', 'type' => 'html'],

            // BUTTONS
            ['key' => 'offer.button_book', 'language' => 'fr', 'section' => 'offers', 'value' => 'Réserver', 'type' => 'text'],
            ['key' => 'offer.button_book', 'language' => 'en', 'section' => 'offers', 'value' => 'Book Now', 'type' => 'text'],
            ['key' => 'offer.button_book', 'language' => 'de', 'section' => 'offers', 'value' => 'Buchen', 'type' => 'text'],
        ];

        foreach ($translations as $trans) {
            Translation::updateOrCreate(
                ['key' => $trans['key'], 'language' => $trans['language']],
                $trans
            );
        }
    }
}
