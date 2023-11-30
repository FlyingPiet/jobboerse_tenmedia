<?php

namespace Tests\Feature;
namespace Database\Factories;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Factories\UserFactory;
use App\Models\User;

class ExampleTest extends TestCase
{
    // /**
    //  * A basic test example.
    //  */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    use RefreshDatabase;

    public function test_example()
    {
        // Erstelle einen Benutzer mit den Daten aus der Factory
        $user = User::factory(App\Models\User::class)->create();
        dd($user);

        //Überprüfe, ob der Benutzer in der Datenbank existiert
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);

        // Überprüfe, ob die Benutzerdaten korrekt sind
        $this->assertEquals($user->name, $user->name);
        $this->assertEquals($user->email, $user->email);
    }
}
