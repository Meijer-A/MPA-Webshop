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
        DB::table('categories')->insert([
            [
                'name' => "Interne geheugen",
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'
            ],
            [
                'name' => "Toetsenbord",
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'
            ],
            [
                'name' => " Headset Stand",
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'
            ],
            [
                'name' => "Speaker",
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'
            ],
            [
                'name' => "Muis",
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'
            ],
            [
                'name' => "Koeling",
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'
            ]
        ]);
        
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' =>  "Corsair Vengeance RGB Pro 16GB",
                'description' => "Het Corsair Vengeance RGB Pro Black RAM-geheugen is ontwikkeld voor hardcore gamers. Deze 2 modules van in totaal 16GB werkgeheugen (2x8GB) zijn voorzien van RGB verlichting, die je koppelt aan de verlichting van de andere componenten in je kast. Door de zwarte kleur, zie je alleen de led-verlichting. Zo passen al je computeronderdelen bij elkaar. Met een kloksnelheid van 3600 MHz is het werkgeheugen ook nog eens supersnel.",
                'price' => 256,
                'image' => 'ram1.jpg'
            ],
            [
                'category_id' => 2,
                'name' =>  "Corsair Strafe RGB MK.2",
                'description' => "Met de komst van de Mark 2 geeft Corsair de Corsair Strafe RGB MK.2 Cherry MX Silent een aesthetische opfrisser bovenop zijn set features voor serieuze gamers. In tegenstelling tot zijn voorgangers heeft de Strafe Mk.2 (Mark 2) namelijk verbeterde multimedia en bedieningstoetsen voor de verlichting en game modi. De verlichting van de Strafe is per toets in te stellen via de gratis CUE software van Corsair, zo bouw je jouw eigen unieke verlichtingspatroon. Dit model beschikt over Cherry MX Silent switches, hiermee voel je precies wanneer de toets aanslaat, zonder dat het hele huis je hoort tikken of gamen.",
                'price' => 169.99,
                'image' => "keyboard1.jpg"
            ],
            [
                'category_id' => 2,
                'name' =>  "Corsair K95",
                'description' => "De Corsair K95 RGB Platinum Cherry MX Speed, een luxe gaming toetsenbord dat voldoet aan de wensen van de meest veeleisende gamers. De Cherry MX Speed switches registreren jouw toetsaanslagen zo'n 40% sneller dan bij tegenstanders die met rode switches spelen, waardoor jij het scorebord domineert. De body van het toetsenbord is gemaakt van duurzaam aluminium, hierdoor ligt hij stevig op je bureau en kan het luxe uiterlijk ook nog eens tegen een stootje. Je bepaalt zelf welke knoppen in welke van de 16,8 miljoen kleuren oplichten. Zo laat je bijvoorbeeld per game de belangrijkste knoppen in een andere, fellere kleur oplichten. Met de 6 macro knoppen met ingebouwd geheugen beschik je in elke game over jouw specifieke macros.",
                'price' => 169,
                'image' => "keyboard2.jpg"
            ],
            [
                'category_id' => 3,
                'name' =>  "Corsair ST100 RGB",
                'description' => "De Corsair ST100 RGB Premium 7.1 Headset Stand maakt van elke stereo headset een surround sound headset. De stand bevat namelijk een ingebouwde geluidskaart, zodat jouw saaie stereo koptelefoon via de 3.5 mm aansluiting nu over virtueel surround sound beschikt. Via Corsair's CUE software stel je de equaliser en instellingen naar wens af. Ook beschik je via de stand over 2 usb 3.1 poorten, waarmee je bijvoorbeeld je headset of telefoon oplaadt en snel bestanden overzet. De stand is gemaakt van stevig, zwart gespoten aluminium en heeft 7 verschillende verlichtingszones, zodat jouw battlestation er altijd stijlvol bijstaat. Let op, om gebruik te maken van de 7.1 functionaliteit en verlichtingsopties is de corsair CUE software voor Windows 7, 8 of 10 vereist.",
                'price' => 69.90,
                'image' => "headsetStand1.jpg"
            ],
            [
                'category_id' => 4,
                'name' =>  "Trust GXT 629",
                'description' => "Met de Trust GXT 629 Tytan 2.1 RGB Speaker Set laat je jouw gaming setup oplichten. De RGB verlichting op de subwoofer stel je namelijk in op 7 verschillende kleuren. De RGB stel je in als ademend effect, draaiend effect of synchroniseer je met het basgeluid uit de subwoofer. Met een piekvermogen van 120 watt ga jij helemaal op in je favoriete game. Het volume, de hoeveelheid bas en de verlichting heb je allemaal binnen handbereik met de meegeleverde afstandsbediening. Dankzij het slimme energiebeheer schakelt het systeem automatisch over op de stand-by stand wanneer je afk bent.",
                'price' => 114.99,
                'image' => "speaker1.jpg"
            ],
            [
                'category_id' => 5,
                'name' =>  "Corsair Glaive Gaming",
                'description' => "De Corsair Glaive Gaming RGB Pro Muis is voor de virtuele schietgraag. De bedrade muis heeft een maximale DPI van 18.000 waardoor je zeer accuraat bent. Door de 3 meegeleverde duimgrips en de CORSAIR iCUE software pas je de muis geheel naar eigen behoeften en wensen aan. Alle 7 knoppen geef jij een eigen functie, zodat je een voordeel hebt ten opzichte van jouw tegenstanders. De instellingsprofielen die je aanmaakt staan opgeslagen op de GLAIVE, waardoor je overal toegang hebt tot de door jou gemaakte profielen. De RGB kleuren zijn ook in te stellen en passen daardoor perfect bij jouw setup.",
                'price' => 79.99,
                'image' => "mouse1.jpg"
            ],
            [
                'category_id' => 6,
                'name' =>  "Corsair Hydro Series H100i",
                'description' => "De Corsair Hydro Series H100i RGB Platinum is een waterkoeler met twee fans voor je processor. Deze speciale witte variant reflecteert het licht van je RGB componenten. Je installeert deze koeler makkelijk en snel op je cpu doordat je geen gereedschap nodig hebt. De koeler is geschikt voor systeembouwers en overklokkers. De twee 120 millimeter fans en de extra grote radiator zorgen voor een goede airflow en efficiënte afvoer van warmte, waardoor je processor goed gekoeld wordt. Zo blijft je computer ook koel als je je processor overklokt. Heeft de processor het even niet zo zwaar, dan draaien de magnetische fans automatisch op een lagere snelheid, waardoor ze bijna helemaal stil zijn. De pomp is voorzien van RGB-led's die je instelt via de meegeleverde software, om het gaming uiterlijk van je PC helemaal af te maken.",
                'price' => 144.95,
                'image' => "cooler1.jpg"
            ]
        ]);
    }
}