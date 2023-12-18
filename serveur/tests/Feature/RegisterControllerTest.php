<?php

namespace Tests\Feature;

use App\Models\Utilisateur;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_register_user()
    {
        $nom = $this->faker->name;
        $email = $this->faker->unique()->safeEmail;
        $password = $this->faker->password(8);

        $response = $this->json('POST', '/api/register', [
            'nom' => $nom,
            'email' => $email,
            'password' => $password,
        ]);

        $response->assertStatus(201)
            ->assertJson([
                'message' => 'Utilisateur créé avec succès.',
            ]);

        $this->assertDatabaseHas('utilisateurs', [
            'nom' => $nom,
            'email' => $email,
        ]);
    }
}
