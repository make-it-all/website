<?php

$r->root('problems#index');

$r->resources('problems');

$r->get('/login', 'sessions#new');
$r->post('/login', 'sessions#create');
$r->delete('/logout', 'sessions#destroy');

if (Application::env()->is_development()) {
  $r->get('/admin/login', 'sessions#admin_login');
  $r->get('/admin/login/:id', 'sessions#admin_login');
}
