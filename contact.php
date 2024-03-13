<?php include 'includes/header.php'; ?>
<main>
    <h1>Contact Us</h1>
    <form action="scripts/contact_form_handler.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Submit</button>
    </form>
</main>
<?php include 'includes/footer.php'; ?>