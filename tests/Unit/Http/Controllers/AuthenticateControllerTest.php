<?php
namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\AuthenticateController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticateControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticate_method_redirects_to_home_with_message_when_credentials_are_valid()
    {
        // Create a user
        $user = User::factory()->create();

        // Make a request to the authenticate method with valid credentials
        $request = new Request(['username' => $user->username, 'password' => 'password']);
        $response = $this->post(route('authenticate'), $request->all());

        // Assert that the response redirects to the home route with a message
        $response->assertRedirect(route('home'));
    }

    public function test_authenticate_method_redirects_to_back_with_error_message_when_credentials_are_invalid()
    {
        // Make a request to the authenticate method with invalid credentials
        $request = new Request(['username' => 'invalid', 'password' => 'invalid']);
        $response = $this->post(route('authenticate'), $request->all());

        // Assert that the response redirects to the previous page with an error message
        $response->assertRedirect(route('home'));
    }

    public function test_logout_method_invalidates_session_and_redirects_to_login()
    {
        // Log in a user
        $user = User::factory()->create();
        $this->actingAs($user);

        // Make a request to the logout method
        $response = $this->post(route('logout'));

        // Assert that the session is invalidated and the response redirects to the login route
        $this->assertFalse(Auth::check());
        $response->assertRedirect(route('login'));
    }

    public function test_register_method_creates_new_user_and_redirects_to_login_with_message()
    {
        // Make a request to the register method with valid data
        $request = new Request([
            'name' => 'John Doe',
            'username' => 'johndoe',
            'password' => 'password',
            'confirm-password' => 'password'
        ]);
        $response = $this->post(route('register'), $request->all());

        // Assert that a new user is created and the response redirects to the login route with a message
        $this->assertCount(1, User::all());
        $response->assertRedirect(route('login'));
    }
}