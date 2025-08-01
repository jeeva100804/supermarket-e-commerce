// login.php
$conn = new mysqli("localhost", "root", "", "supermarket");
$email = $_POST['email'];
$password = $_POST['password'];
$res = $conn->query("SELECT * FROM users WHERE email='$email'");
$user = $res->fetch_assoc();
if (password_verify($password, $user['password'])) {
  echo "Login successful";
} else {
  echo "Invalid login";
}