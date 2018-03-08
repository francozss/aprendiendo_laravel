<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    function it_loads_the_users_list()
    {
        factory(User::class)->create([
            'name' => 'Joel',
        ]);

        $this->get('/usuarios')
          ->assertStatus(200)
          ->assertSee('Listado de Usuarios')
          ->assertSee('Joel');
    }

    /** @test */
    function it_loads_the_users_list_page_is_empty()
    {
        //DB::table('users')->truncate();
        $this->get('/usuarios')
          ->assertStatus(200)
          ->assertSee('No hay resultados registrados.');
    }

    /** @test */
    function it_display_the_users_details(){
      $user = factory(User::class)->create([
        'name' => 'Franco Sinche'
      ]);
      $this->get('usuarios/'.$user->id)
      ->assertStatus(200)
      ->assertSee('Franco Sinche');
    }

    /** @test */
    function it_loads_the_new_users_page(){
      $this->get('usuarios/nuevo')
      ->assertStatus(200)
      ->assertSee('Crear nuevo usuario');
    }
}
