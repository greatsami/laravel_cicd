<?php
use Illuminate\Support\Facades\Redis;

it('returns a successful response', function () {
    $this->get('/');


    expect(Redis::get('loading-page-views'))->toEqual(1);
});
