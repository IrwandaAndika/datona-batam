<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ExpertisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expertises')->insert([
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.',
            'sub_title' => 'John Smith',
            'content' => 'CEO & Founder - Okler',
            'image' => 'testimonial-author-2.jpg'
        ]);
    }
}
