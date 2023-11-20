<?php


namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class CheckRoleTest extends TestCase
{
    public function testClienteRoutesForAdmin()
    {
       
        $adminUser = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->first();

        $this->actingAs($adminUser);

        $createResponse = $this->get('/clientes/create');
        $createResponse->assertStatus(200); 

    }

    public function testClienteRoutesForUsuario()
    {
        $usuarioUser = User::whereHas('roles', function ($query) {
            $query->where('name', 'usuario');
        })->first();

        $this->actingAs($usuarioUser);

        $createResponse = $this->get('/clientes/create');

        $createResponse->assertRedirect('/home');

        $this->assertEquals('No tienes el rol necesario para ver este contenido.', session('error'));
    }
}
