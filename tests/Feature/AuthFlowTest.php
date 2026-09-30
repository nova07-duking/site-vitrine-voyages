<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_page_presents_the_travel_showcase(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Voyages ESIITECH')
            ->assertSee('Trois envies d’ailleurs.');
    }

    public function test_guest_is_redirected_from_the_traveller_space(): void
    {
        $this->get('/dashboard')->assertRedirect(route('login'));
    }

    public function test_valid_registration_creates_a_user_and_opens_the_traveller_space(): void
    {
        $this->post('/register', [
            'name' => 'Marie Test',
            'email' => 'marie@example.test',
            'password' => 'unephraseforte',
            'password_confirmation' => 'unephraseforte',
            'email_verified_at' => now(),
        ])->assertRedirect(route('dashboard'));

        $user = User::where('email', 'marie@example.test')->firstOrFail();

        $this->assertAuthenticatedAs($user);
        $this->assertTrue(Hash::check('unephraseforte', $user->password));
        $this->assertNull($user->email_verified_at);
    }

    public function test_short_password_is_rejected_at_registration(): void
    {
        $this->post('/register', [
            'name' => 'Marie Test',
            'email' => 'marie@example.test',
            'password' => 'court',
            'password_confirmation' => 'court',
        ])->assertSessionHasErrors('password');

        $this->assertDatabaseMissing('users', ['email' => 'marie@example.test']);
    }

    public function test_existing_user_can_log_in(): void
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ])->assertRedirect(route('dashboard'));

        $this->assertAuthenticatedAs($user);
    }

    public function test_repeated_failed_logins_are_limited(): void
    {
        for ($attempt = 0; $attempt < 5; $attempt++) {
            $this->post('/login', [
                'email' => 'absent@example.test',
                'password' => 'motdepasseincorrect',
            ])->assertRedirect();
        }

        $this->post('/login', [
            'email' => 'absent@example.test',
            'password' => 'motdepasseincorrect',
        ])->assertStatus(429);
    }

    public function test_traveller_name_is_escaped_on_dashboard(): void
    {
        $user = User::factory()->create(['name' => '<script>alert(1)</script>']);

        $response = $this->actingAs($user)->get('/dashboard')
            ->assertOk()
            ->assertSee('&lt;script&gt;', false)
            ->assertDontSee('<script>alert(1)</script>', false);

        $this->assertStringContainsString('no-store', $response->headers->get('Cache-Control'));
    }
}
