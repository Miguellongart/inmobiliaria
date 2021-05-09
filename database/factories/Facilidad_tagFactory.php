<?php

namespace Database\Factories;

use App\Models\Facilidad_tag;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Stichoza\GoogleTranslate\GoogleTranslate;

class Facilidad_tagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facilidad_tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tr = new GoogleTranslate('en');
        return [
            'facilidad' => $this->faker->name,
            'facilidad_en'=>$tr->translate($this->faker->name),
            'estatus' =>  $this->faker->randomElement(["0","1"]),
        ];
    }
}
