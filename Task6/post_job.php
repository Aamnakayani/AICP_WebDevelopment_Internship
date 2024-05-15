<?php include('header.php'); ?>
<?php include('config.php'); ?>

<h2>Post a Job</h2>

<form method="post" action="process_post_job.php">
    <label for="title">Job Title:</label><br>
    <input type="text" id="title" name="title" required><br>
    <!-- Other job fields -->
    <input type="submit" value="Post Job">
</form>

<?php include('footer.php'); ?>
