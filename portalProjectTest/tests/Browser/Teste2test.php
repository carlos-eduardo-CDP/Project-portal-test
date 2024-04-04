<?php

use Laravel\Dusk\Browser;

it('has teste2 page', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/teste2')
            ->assertSee('teste2');
    });
});
