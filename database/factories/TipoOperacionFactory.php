<?php

namespace Database\Factories;

use App\Models\TipoOperacion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TipoOperacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoOperacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tr = new GoogleTranslate('en');
        return [
            'tipo_operacion' => $this->faker->name,
            'tipo_operacion_en' =>$tr->translate($this->faker->name),
        ];
    }
}
