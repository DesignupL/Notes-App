<?php include 'header.php'; ?>

<section>
    <h2>Create New Note</h2>
    <form method="post" action="create_note.php">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea><br>
        <input type="submit" value="Create Note">
    </form>
</section>

<?php include 'footer.php'; ?>