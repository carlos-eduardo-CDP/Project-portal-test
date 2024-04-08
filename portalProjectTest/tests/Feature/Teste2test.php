<?php

it('has teste2 page', function () {
    $response = $this->get('/teste2');

    $response->assertStatus(200);
});
