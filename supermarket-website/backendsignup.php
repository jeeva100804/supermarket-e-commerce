// signup.php
$conn = new mysqli("localhost", "root", "", "supermarket");
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
echo "Signup successful";

