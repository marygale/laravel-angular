<?php

// Admin
Breadcrumbs::register('admin', function($breadcrumbs)
{
    $breadcrumbs->push('Admin', route('admin'));
});

// Admin > Create User
Breadcrumbs::register('create user', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('create user', route('create'));
});

// Admin > All User
Breadcrumbs::register('all user', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('All User', route('user_list'));
});
