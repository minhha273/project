<?php
// Improved PHP script that uses bcrypt for password hashing

// Simulate user input, in a real scenario this would come from a registration form
$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password using bcrypt
$hashed_password = md5($password);

// Save the username and hashed password to a file (for demonstration purposes)
$file = 'passwords.txt';
$data = "$username:$hashed_password\n";
file_put_contents($file, $data, FILE_APPEND);

echo "User registered successfully!";
?>
