<?php

$name = [
    'sohel',
    'nobel',
    'khalid'
];

$person = [
    'name' => 'sohel',
    'age' => 24,
    'career' => 'web developer',
     'status' => true
];

class Task {
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }
}

$tasks = new Task('Go to store');



require 'index.view.php';