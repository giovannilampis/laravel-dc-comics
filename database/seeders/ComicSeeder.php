<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([
            "title" => "Action Comics #1000: The Deluxe Edition",
            "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
            "thumb" => "https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY",
            "price" => "$19.99",
            "series" => "Action Comics",
            "sale_date" => "2018-10-02",
            "type" => "comic book",
        ]);
        DB::table('comics')->insert([
            "title" => "American Vampire 1976 #1",
            "description" => "America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It’s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he’s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America’s bicentennial. With catastrophe looming, it’s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.",
            "thumb" => "https://imgs.search.brave.com/OU2E3_3vA7flyv-SJ3TcFW1d99KDlp5ZfmW9ylLLFDo/rs:fit:1012:1200:1/g:ce/aHR0cHM6Ly9pMC53/cC5jb20vd3d3LnN1/cGVycG91dm9pci5j/b20vd3AtY29udGVu/dC91cGxvYWRzLzIw/MjAvMDcvQW1lcmlj/YW4tVmFtcGlyZS0x/OTc2LTAxLWNvdi1B/bGJ1cXVlcnF1ZS0y/MDIwLmpwZz9yZXNp/emU9MTAxMiUyQzE1/NTYmc3NsPTE",
            "price" => "$3.99",
            "series" => "American Vampire 1976",
            "sale_date" => "2020-10-06",
            "type" => "comic book",
        ]);
        DB::table('comics')->insert([
            "title" => "Aquaman Vol. 4: Underworld",
            "description" => "Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can’t hide for long when his fate collides with that of a mysterious young woman on the run from Rath’s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.  ",
            "thumb" => "https://imgs.search.brave.com/gAZQuZyt6WjcUWF6aXCIBaiJqtOJAK-X4nxS9Vbvwno/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9jZG4y/LnBlbmd1aW4uY29t/LmF1L2NvdmVycy9v/cmlnaW5hbC85Nzgx/NDAxMjc1NDI2Lmpw/Zw",
            "price" => "$16.99",
            "series" => "Aquaman",
            "sale_date" => "2018-01-24",
            "type" => "graphic novel",
        ]);
        DB::table('comics')->insert([
            "title" => "Batgirl #1",
            "description" => "“Beyond Burnside” Chapter One: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling writer Hope Larson (A Wrinkle in Time, Goldie Vance) and all-star artist Rafael Albuquerque (AMERICAN VAMPIRE). In order to up her game, Babs travels to Japan on a quest to train with the most elite modern combat masters of the East. But when a chance meeting with an old friend puts a target on her back, Batgirl may need to use her new skills to solve a deadly mystery.",
            "thumb" => "https://imgs.search.brave.com/YET9wY29Aa29TyHqlbieS9qsz3HWyNYQx-WkRqdBRX4/rs:fit:640:984:1/g:ce/aHR0cDovL2dldHlv/dXJjb21pY29uLmNv/LnVrL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDE2LzA4L2JhdGdp/cmwtcmViaXJ0aC0x/LWNvdmVyLmpwZw",
            "price" => "$2.99",
            "series" => "Batgirl",
            "sale_date" => "2016-07-27",
            "type" => "comic book",
        ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        // DB::table('comics')->insert([
          
        // ]);
        
        
    }
}
