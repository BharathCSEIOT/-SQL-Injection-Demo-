<?php
// ✅ Connect to SQLite
$db = new SQLite3('test.db');

// Get form input
$inputUsername = $_POST['username'];
$inputPassword = $_POST['password'];

// ❌ VULNERABLE query: directly using input!
$sql = "SELECT * FROM users WHERE username = '$inputUsername' AND password = '$inputPassword'";

$result = $db->query($sql);

if ($result->fetchArray()) {
  echo "<h3>Login successful! 🚩</h3>";
} else {
  echo "<h3>Login failed.</h3>";
}

$db->close();
?>
