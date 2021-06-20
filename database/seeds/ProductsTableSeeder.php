<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Jeans 1',
            'slug' => 'jeans-1',
            'details' => 'Men\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, asperiores libero. Dicta incidunt ipsa, odit quae quidem placeat ex aperiam quos ut ducimus velit atque eveniet quam perspiciatis nostrum labore.',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 14999, 
        ]);

        Product::create([
            'name' => 'Jeans 2',
            'slug' => 'jeans-2',
            'details' => 'Men\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iure beatae laborum deserunt suscipit accusantium libero blanditiis nostrum voluptatibus ut dicta exercitationem nobis ipsa quibusdam, modi ullam deleniti et hic.',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 12999, 
        ]);

        Product::create([
            'name' => 'Jeans 3',
            'slug' => 'jeans-3',
            'details' => 'Men\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, debitis molestias delectus voluptas veniam adipisci mollitia inventore, repellendus, laboriosam perferendis et omnis placeat autem pariatur. Itaque porro provident ducimus doloribus.',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 14999, 
        ]);

        Product::create([
            'name' => 'Jeans 4',
            'slug' => 'jeans-4',
            'details' => 'Men\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt harum commodi ducimus corporis ipsam explicabo odio saepe beatae quas, placeat, nihil numquam est, fugit alias vitae ut officiis dolorem illo.',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 13999, 
        ]);

        Product::create([
            'name' => 'Jeans 5',
            'slug' => 'jeans-5',
            'details' => 'Men\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, accusantium? Distinctio accusantium accusamus, libero minus nam, eum esse est, amet aperiam ratione modi doloremque temporibus eius laudantium et. Vitae, quibusdam!',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 14999, 
        ]);

        Product::create([
            'name' => 'Jeans 6',
            'slug' => 'jeans-6',
            'details' => 'Men\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro iusto quae iure, accusamus recusandae sint placeat aliquid voluptates vero dolorem reprehenderit dignissimos ratione facere ad perspiciatis repellat esse! Laudantium, eaque.',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 11999, 
        ]);

        Product::create([
            'name' => 'Jeans 7',
            'slug' => 'jeans-7',
            'details' => 'Women\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora incidunt magni sequi, dolor esse nemo? Tempora blanditiis, iure id maxime enim at neque optio odio autem, atque quaerat cupiditate esse.',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 14999, 
        ]);

        Product::create([
            'name' => 'Jeans 8',
            'slug' => 'jeans-8',
            'details' => 'Women\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur expedita adipisci ipsa doloribus! Aut suscipit laborum repudiandae, dolor, perspiciatis sequi ea quos voluptas dolorum quis repellat cupiditate corrupti, esse sint.',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 12999, 
        ]);

        Product::create([
            'name' => 'Jeans 9',
            'slug' => 'jeans-9',
            'details' => 'Women\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, sapiente ipsum obcaecati earum culpa voluptatem laudantium nesciunt facilis temporibus quod eos magni officia? Corporis eveniet mollitia ipsum reiciendis? Quos, perferendis!',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 13999, 
        ]);

        Product::create([
            'name' => 'Jeans 10',
            'slug' => 'jeans-10',
            'details' => 'Women\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, magnam reprehenderit atque quaerat numquam, saepe quibusdam doloribus deleniti repudiandae dolorem sequi labore dolores! Nam magni unde quo adipisci voluptatum blanditiis.',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 13999, 
        ]);

        Product::create([
            'name' => 'Jeans 11',
            'slug' => 'jeans-11',
            'details' => 'Women\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates assumenda quidem distinctio laborum quae error in delectus laboriosam? Reiciendis fuga deleniti iusto consequuntur dolor a aliquid repudiandae rem esse aperiam.',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 12999, 
        ]);

        Product::create([
            'name' => 'Jeans 12',
            'slug' => 'jeans-12',
            'details' => 'Women\'s lorem, ipsum dolor sit amet',
            'longDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quae, pariatur ea nemo hic dolores tempora alias. Nisi sint, laborum delectus enim deleniti iusto expedita atque nostrum eius nam dolorum.',
            'mediumDescription' => 'Lorem ipsum, dolor sit amet consectetur adipisicing',
            'price' => 13999, 
        ]);
    }
}
