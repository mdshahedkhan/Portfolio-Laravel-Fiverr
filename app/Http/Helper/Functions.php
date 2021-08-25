<?php

// Route Active
function ActiveMenu($route)
{
    return Route::currentRouteName() === $route ? 'active' : '';
}

// Prefix Active
function PrefixActive($prefix)
{
    return Route::current()->name;
    return Route::getCurrentRoute() === $prefix ? 'active' : '';
}


// Random Status
function RandomStatus()
{
    $rand = ['active' => 'active', 'inactive' => 'inactive'];
    return array_rand($rand, 1);
}

function SetMessage(string $type, string $message)
{
    session()->flash('type', $type);
    session()->flash('message', $message);
}
