<?php
// Initialize variables for form fields
$name = $email = $message = '';
$nameError = $emailError = $messageError = '';

// Validate form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate name field
    if (empty($_POST['name'])) {
        $nameError = 'Name is required';
    } else {
        $name = test_input($_POST['name']);
    }
    
    // Validate email field
    if (empty($_POST['email'])) {
        $emailError = 'Email is required';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Invalid email format';
    } else {
        $email = test_input($_POST['email']);
    }
    
    // Validate message field
    if (empty($_POST['message'])) {
        $messageError = 'Message is required';
    } else {
        $message = test_input($_POST['message']);
    }
}

// Helper function to sanitize form input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- HTML form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error"><?php echo $nameError; ?></span>
    
    <br><br>
    
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailError; ?></span>
    
    <br><br>
    
    <label for="message">Message:</label>
    <textarea name="message"><?php echo $message; ?></textarea>
    <span class="error"><?php echo $messageError; ?></span>
    
    <br><br>
    
    <input type="submit" value="Submit">
</form>