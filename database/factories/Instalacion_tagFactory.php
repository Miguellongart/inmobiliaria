<?php

namespace Database\Factories;

use App\Models\Instalacion_tag;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Stichoza\GoogleTranslate\GoogleTranslate;

class Instalacion_tagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instalacion_tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tr = new GoogleTranslate('en');
        return [
            'instalacion' => $this->faker->name,
            'instalacion_en' =>$tr->translate($this->faker->name),
            'estatus' =>  $this->faker->randomElement(["0","1"]),
        ];
    }
}
