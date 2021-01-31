<?php

return function ($site) {

    $query   = get('q');
    $results = $site->index()->listed()->search($query, 'title|text|subtitle|place');

    return [
        'query'      => $query,
        'results'    => $results
    ];
};
