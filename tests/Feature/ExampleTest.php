<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    expect(\Illuminate\Support\Facades\Redis::get('loading-page-views'))->toEqual(1);

    $response->assertStatus(200);
});
