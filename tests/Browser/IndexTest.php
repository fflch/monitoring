<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class IndexTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_index(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/mesas')
                ->assertSee('mesas');
        });
        $this->browse(function (Browser $browser) {
            $browser->visit('/salas')
                ->assertSee('sala');
        });
        $this->browse(function (Browser $browser) {
            $browser->visit('/status')
                ->assertSee('status');
        });
    }
}
