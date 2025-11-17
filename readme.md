1. Starting a Session
In every PHP file that needs login checking, I started the session at the top:
session_start();

This allows PHP to access session data, create new sessions, and store user information.

2. Session Creation During Login
When a user logs in successfully, their username is stored in the session:
$_SESSION['username'] = $username;

3. Session Creation During Sign-Up
After registration, the username is also stored in the session:
$_SESSION['username'] = $username;

4. Protecting Pages With Sessions
Protected pages check if username session exists:
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

5. Logging Out
Logout destroys the session completely:
session_start();
session_unset();
session_destroy();
header("Location: login.php");

Q3. Authentication Security in My Project

1. Password Hashing
Passwords are hashed before saving:
$hashed = password_hash($password, PASSWORD_DEFAULT);

Verified during login:
password_verify($password, $hashed);

2. Secure Login Verification
Checks if username exists, then verifies password.

3. Session-Based Authentication
Authentication relies on $_SESSION['username'].

4. Input Validation
All user inputs are validated before use.

![alt text](<screenshot/Screenshot 2025-11-17 101123.png>)
![alt text](<screenshot/Screenshot 2025-11-17 101441.png>)
![alt text](<screenshot/Screenshot 2025-11-17 101505.png>)
![alt text](<screenshot/Screenshot 2025-11-17 101530.png>)