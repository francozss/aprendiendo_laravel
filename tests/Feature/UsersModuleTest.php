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
    function it_display_a_404_error_if_the_user_is_not_found(){
      $this->get('/usuarios/999')
        ->assertStatus(404)
        ->assertSee('Página no encontrada');
    }

    /** @test */
    function it_loads_the_new_users_page(){
      $this->get('usuarios/nuevo')
      ->assertStatus(200)
      ->assertSee('Crear nuevo usuario');
    }

    /** @test */
    function it_creates_a_new_user(){
      $this->withoutExceptionHandling();
      $this->post('/usuarios/',[
          'name' => 'Franco',
          'email' => 'fz@gmail.com',
          'password' => '123456'
      ])->assertRedirect('usuarios');
      $this->assertCredentials([
        'name' => 'Franco',
        'email' => 'fz@gmail.com',
        'password' => '123456'
      ]);
    }

    /** @test */
    function the_name_is_required(){
      //$this->withoutExceptionHandling();
      $this->from('usuarios/nuevo')->post('/usuarios/',[
        'name' => '',
        'email' => 'fz@gmail.com',
        'password' => '123456'
      ])->assertRedirect('usuarios/nuevo')
         ->assertSessionHasErrors(['name' => 'El campo nombre es obligatorio']);

      $this->assertEquals(0, User::count());

      // $this->assertDatabaseMissing('users',[
      //   'email' => 'fz@gmail.com',
      // ]);
    }
}
