<?php

namespace Database\Factories;

use App\Models\TipoPropiedad;
use Illuminate\Database\Eloquent\Factories\Factory;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TipoPropiedadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoPropiedad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tr = new GoogleTranslate('en');
        return [
            'tipo_propiedad' => $this->faker->name,
            'tipo_propiedad_en' =>$tr->translate($this->faker->name),
        ];
    }
}
