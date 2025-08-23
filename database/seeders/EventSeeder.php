<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Laravel Workshop',
            'description' => 'Belajar dasar Laravel.',
            'event_date' => '2025-09-01',
            'location' => 'Jakarta',
        ]);

        Event::create([
            'title' => 'Hackathon 2025',
            'description' => 'Kompetisi coding 24 jam.',
            'event_date' => '2025-10-12',
            'location' => 'Bandung',
        ]);

        Event::create([
            'title' => 'Tech Meetup',
            'description' => 'Meetup bulanan komunitas teknologi.',
            'event_date' => '2025-11-05',
            'location' => 'Surabaya',
        ]);
    }
}
