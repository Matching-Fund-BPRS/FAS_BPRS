<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;


    public function testAddUser(){
        $userData = [
            'name' => 'John Doe',
            'username' => 'johndoe',
            'password' => 'password',
            'confirm-password' => 'password',
            'level' => '1'
        ];

        $response = $this->post('/dashboard/user/tambah-user', $userData);

        $response->assertRedirect();

    }
    public function testAddUserFailed(){
        $userData = [
            'name' => 'John Doe',
            'username' => 'johndoe',
            'password' => 'password',
            'confirm-password' => 'password',
            'level' => '1'
        ];

        $response = $this->post('/dashboard/user/tambah-user', $userData);

        $response->assertRedirect();

    }
    public function testAddUserFailedInvalied(){
        $userData = [
            'name' => 'John Doe',
            'username' => 'johndoe',
            'password' => 'password',
            'confirm-password' => 'password',
            'level' => '1'
        ];

        $response = $this->post('/dashboard/user/tambah-user', $userData);

        $response->assertRedirect();

    }

    public function testDeleteUser(){
        $user = User::factory()->create(['username' => 'johndoe', 'isActive' => true]);

        $response = $this->delete('/dashboard/user/delete-user', ['username' => 'johndoe']);

        $response->assertRedirect();

    }
}
