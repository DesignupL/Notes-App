<?php include 'header.php'; ?>

<section>
    <h2>Your Notes</h2>
    <ul>
        <?php
        $notes_dir = 'notes/';
        $notes = scandir($notes_dir);
        foreach ($notes as $note) {
            if ($note != '.' && $note != '..') {
                $note_id = str_replace('.txt', '', $note);
                echo '<li><a href="?action=view&id=' . $note_id . '">' . $note . '</a></li>';
            }
        }
        ?>
    </ul>
    <p><a href="?action=create">Create New Note</a></p>
</section>

<?php include 'footer.php'; ?>