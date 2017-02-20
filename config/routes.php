<?php

$r->root('users#index');

$r->resources('calls', ['except'=>['show']]);
$r->resources('problems', ['except'=>['show']]);
$r->resources('personnel', ['except'=>['show']]);
$r->resources('users', ['except'=>['show']]);

$r->get('/login', 'sessions#new');
$r->post('/login', 'sessions#create');
$r->delete('/logout', 'sessions#destroy');

if (Application::env()->is_development()) {
  $r->get('/admin/login', 'sessions#admin_login');
  $r->get('/admin/login/:id', 'sessions#admin_login');
}
