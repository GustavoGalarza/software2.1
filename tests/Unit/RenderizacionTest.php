<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RenderizacionTest extends TestCase
{
    /**
     * Verifica que la ruta / cargue correctamente.
     *
     * @return void
     */
    public function testRutaPrincipalCargadaCorrectamenteConContenidoEsperado()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('welcome')
            ->assertSee('Clientes')
            ->assertSee('Productos')
            ->assertSee('Proveedores')
            ->assertSee('Ventas');
    }

    /**
     * Verifica que la vista de login se pueda cargar correctamente.
     *
     * @return void
     */
    public function testVistaLoginCargadaCorrectamenteConContenidoEsperado()
    {
        $response = $this->get('/login');

        $response->assertStatus(200)
            ->assertViewIs('auth.login')
            ->assertSee('Iniciar Sesion')
            ->assertSee('Username / Email address')
            ->assertSee('Password');
    }

    /**
     * Verifica que la vista de registro se pueda cargar correctamente.
     *
     * @return void
     */
    public function testVistaRegisterCargadaCorrectamenteConContenidoEsperado()
    {
        $response = $this->get('/register');

        $response->assertStatus(200)
            ->assertViewIs('auth.register')
            ->assertViewIs('auth.register')
            ->assertSee('Creacion de cuenta')
            ->assertSee('Email address')
            ->assertSee('Password');
    }
}