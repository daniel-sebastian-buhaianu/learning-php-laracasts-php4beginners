<?php

require 'Database.php';

$db = new Database();
$notes = $db->query('select * from notes');

$mainContent = getView('notes', ['notes' => $notes]);
$pageTitle = 'Notes';
require __DIR__ . '/../views/layout.view.php';