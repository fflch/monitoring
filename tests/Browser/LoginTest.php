<?php
namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_login(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/mesas')
                ->pause(1000)
                ->assertSee('Não autenticado')
                ->visit('/salas')
                ->pause(1000)
                ->assertSee('Não autenticado')
                ->visit('/status')
                ->pause(1000)
                ->assertSee('Não autenticado')

                // login
                ->clickLink('Entrar')
                ->waitFor('#loginUsuario')
                ->type('#loginUsuario', '111111')
                ->press('Login')
                
                
                // Verificando login
                ->visit('/mesas')
                ->assertSee('Sair')
                ->pause(5000)
                ->assertSee('Sair')
                ->visit('/salas')
                ->pause(1000)
                ->assertSee('Sair')
                ->visit('/status')
                ->pause(1000)
                ->assertSee('Sair')

                // Deslogando
                ->clickLink('Sair')
                ->visit('/mesas')
                ->pause(1000)
                ->assertSee('Não autenticado')
                ->visit('/salas')
                ->pause(1000)
                ->assertSee('Não autenticado')
                ->visit('/status')
                ->pause(1000)
                ->assertSee('Não autenticado');

        });

    }
}

?>