<?php
require 'config.php';
require 'functions.php';

// Handle routing based on URL parameters or query string
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'create':
            include 'templates/create_note.php';
            break;
        case 'view':
            if (isset($_GET['id'])) {
                $note_file = 'notes/' . $_GET['id'] . '.txt';
                if (file_exists($note_file)) {
                    $note_content = file_get_contents($note_file);
                    include 'templates/view_note.php';
                } else {
                    echo 'Note not found.';
                }
            } else {
                echo 'Invalid note ID.';
            }
            break;
        default:
            include 'templates/home.php';
            break;
    }
} else {
    include 'templates/home.php';
}