<?php

function sort_users_by($sortBy, $title)
{
    $direction = (Request::get('direction') == 'asc') ? 'desc' : 'asc';

    return link_to_route('users', $title, ['sortBy' => $sortBy, 'direction' => $direction]);
}