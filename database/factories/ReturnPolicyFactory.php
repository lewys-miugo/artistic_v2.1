<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ReturnPolicy;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReturnPolicy>
 */
class ReturnPolicyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ReturnPolicy::class;
    public function definition()
    {
        return [
            'return_policy'=>'Return Policy 101'
        ];
    }
}
