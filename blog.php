<?php
include 'includes/header.php'; // Ensure this path is correct
require 'includes/db.php'; // This should be your mysqli database connection

// Fetch blog posts from the database
$query = "SELECT title, content, author, posted_on FROM blog_posts ORDER BY posted_on DESC";
$result = mysqli_query($conn, $query);

// Check for errors
if(!$result) {
    echo "Error fetching posts: " . mysqli_error($conn);
    exit;
}

// Fetch the results into an associative array
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<main>
    <section>
        <h2>Blog News</h2>
        <p>Follow our news blog to stay updated with our latest news.</p>
        <?php if (!empty($posts)): ?>
            <?php foreach ($posts as $post): ?>
                <article>
                    <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                    <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                    <p>Posted by <?php echo htmlspecialchars($post['author']); ?> on <?php echo date('F j, Y', strtotime($post['posted_on'])); ?></p>
                </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </section>
</main>
<?php include 'includes/footer.php'; ?>