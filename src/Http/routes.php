<?php

Route::group([
    'namespace' => 'Azak1r\Tracker\Http\Controller',
    'prefix'    => 'tracker',
], function() {
    Route::group([
        'middleware'    => ['web', 'auth'],
    ], function() {
        Route::get('/', [
            'as'            => 'tracker.index',
            'uses'          => 'TrackerController@getProjectsView',
            'middleware'    => 'bouncer:tracker.view'
        ]);
    });
});