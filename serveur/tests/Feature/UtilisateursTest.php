<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Utilisateur;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class UtilisateurTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function testCreateUtilisateur()
    {
        $utilisateur = Utilisateur::factory()->create();

        $this->assertNotNull($utilisateur);
        $this->assertNotNull($utilisateur->nom);
        $this->assertNotNull($utilisateur->prenom);
        $this->assertNotNull($utilisateur->email);
        $this->assertNotNull($utilisateur->role);
        $this->assertNotNull($utilisateur->date_inscription);
        $this->assertNotNull($utilisateur->password);
    }

    public function testReadUtilisateur()
    {
        $utilisateur = Utilisateur::factory()->create();
        $retrievedUtilisateur = Utilisateur::find($utilisateur->id);

        $this->assertNotNull($retrievedUtilisateur);
        $this->assertEquals($retrievedUtilisateur->email, $utilisateur->email);
    }

    public function testUpdateUtilisateur()
    {
        $utilisateur = Utilisateur::factory()->create();

        $nouveauNom = 'Nom Mis à Jour';
        $utilisateur->update(['nom' => $nouveauNom]);

        $this->assertEquals($nouveauNom, $utilisateur->nom);
    }

    public function testDeleteUtilisateur()
    {
        $utilisateur = Utilisateur::factory()->create();
        $id = $utilisateur->id;
        $utilisateur->delete();

        $this->assertNull(Utilisateur::find($id));
    }
}
