<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\Testimonial;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Settings
        Setting::create([
            'key' => 'site_name',
            'value' => 'Aye Sickle Cell Foundation',
            'type' => 'text',
            'group' => 'general',
        ]);

        Setting::create([
            'key' => 'site_tagline',
            'value' => 'Creating Awareness, Saving Lives',
            'type' => 'text',
            'group' => 'general',
        ]);

        Setting::create([
            'key' => 'contact_email',
            'value' => 'info@ayesicklecell.org',
            'type' => 'text',
            'group' => 'contact',
        ]);

        Setting::create([
            'key' => 'contact_phone_1',
            'value' => '+234 803 704 3562',
            'type' => 'text',
            'group' => 'contact',
        ]);

        Setting::create([
            'key' => 'contact_phone_2',
            'value' => '+234 813 407 6686',
            'type' => 'text',
            'group' => 'contact',
        ]);

        // Seed Sample Testimonials
        Testimonial::create([
            'name' => 'Amina Okafor',
            'role' => 'Parent',
            'content' => 'The Aye Sickle Cell Foundation has been a blessing to our family. The support and resources they provide have helped us manage my son\'s condition much better. We are forever grateful.',
            'is_featured' => true,
            'is_active' => true,
            'order' => 1,
        ]);

        Testimonial::create([
            'name' => 'Dr. Chidi Nwosu',
            'role' => 'Healthcare Professional',
            'content' => 'As a physician, I have seen firsthand the impact of the foundation\'s awareness campaigns. They are making a real difference in early diagnosis and patient care.',
            'is_featured' => true,
            'is_active' => true,
            'order' => 2,
        ]);

        Testimonial::create([
            'name' => 'Ngozi Adebayo',
            'role' => 'Living with Sickle Cell',
            'content' => 'This foundation gave me hope when I needed it most. Their educational resources and emotional support have empowered me to live my best life despite my condition.',
            'is_featured' => true,
            'is_active' => true,
            'order' => 3,
        ]);
    }
}
