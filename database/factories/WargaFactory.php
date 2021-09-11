<?php

namespace Database\Factories;

use App\Models\Warga;
use Illuminate\Database\Eloquent\Factories\Factory;

class WargaFactory extends Factory
{
    protected $model = Warga::class;

    public function definition(): array
    {
        return [
            'nik' => $this->faker->randomDigit(),
            'nomor_kk' => $this->faker->randomDigit(),
            'nama' => $this->faker->name,
            'jk' => "P",
            'tempat_lahir' => "random",
            'tanggal_lahir' => "2001-10-09",
            'dusun' => "random",
            'rt' => $this->faker->randomDigit(),
            'rw' => $this->faker->randomDigit(),
            'nomor_rumah' => $this->faker->randomDigit(),
            'agama' => "random",
            'status' => "random",
            'shdrt' => "random",
            'pendidikan' => "random",
            'pekerjaan' => "random",
            'ibu' => "random",
            'ayah' => "random"
        ];
    }
}
