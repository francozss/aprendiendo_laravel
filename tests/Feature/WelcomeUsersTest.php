<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
  /** @test */
  function it_welcome_users_with_nickname(){
    $this->get('saludo/franco/frank')
    ->assertStatus(200)
    ->assertSee('Bienvenido Franco, tu apode es frank');
  }
  /** @test */
  function it_welcome_users_without_nickname(){
    $this->get('saludo/franco')
    ->assertStatus(200)
    ->assertSee('Bienvenido Franco');
  }

}
