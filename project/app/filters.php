<?php

Route::filter('ip', function() {
    if (!Request::matchIp()) {
        return Redirect::to('home');
    }
});