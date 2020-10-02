 <?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);

    return [
        'name' => radnomCategoryName(),
        'description' => $faker->paragraph,
    ];
});

function radnomCategoryName()
{
	$names = array('Voće', 'Povrće', 'Elektronika', 'Oprema za bebe', 'Odeća', 'Muzika');

	$randomKey = array_rand($names, 1);

	return $names[$randomKey];
}
