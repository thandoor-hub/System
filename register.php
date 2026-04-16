<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | Grow & Glow</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --bg: #0f1724;
      --accent: #ff6b6b;
      --muted: #6ee7b7;
      --card: #ffffff;
      --text: #0b1220;
      --radius: 12px;
      --transition: 300ms ease;
    }

    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(180deg, var(--bg), #1a2638);
      color: var(--text);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .form-container {
      background: var(--card);
      border-radius: var(--radius);
      padding: 40px 28px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.2);
      animation: fadeIn 0.8s ease;
    }

    .form-container h2 {
      margin-top: 0;
      text-align: center;
      font-size: 26px;
      font-weight: 800;
      color: var(--bg);
    }

    .form-container p {
      text-align: center;
      color: #64748b;
      margin-bottom: 28px;
      font-size: 14px;
    }
    .form-container a{
      text-align: center;
      position: relative;
      margin-bottom: 28px;
      font-size: 14px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      font-size: 14px;
      color: #334155;
    }

    input {
      width: 100%;
      padding: 12px;
      border-radius: var(--radius);
      border: 1px solid #cbd5e1;
      margin-bottom: 18px;
      font-size: 15px;
      outline: none;
      transition: border var(--transition), box-shadow var(--transition);
    }

    input:focus {
      border-color: var(--accent);
      box-shadow: 0 0 0 3px rgba(255,107,107,0.2);
    }

    .btn {
      width: 100%;
      padding: 12px;
      background: linear-gradient(90deg, var(--accent), #ff9aa2);
      border: none;
      border-radius: var(--radius);
      color: #fff;
      font-size: 16px;
      font-weight: 700;
      cursor: pointer;
      transition: transform var(--transition), box-shadow var(--transition);
    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(255,107,107,0.3);
    }

    .alt {
      text-align: center;
      margin-top: 18px;
      font-size: 14px;
      color: #475569;
    }

    .alt a {
      color: var(--accent);
      text-decoration: none;
      font-weight: 600;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<?php
require 'config/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (strlen($password) < 6) {
        $message = "Password must be at least 6 characters.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashedPassword);

        if ($stmt->execute()) {
            $message = "Account created successfully!";
        } else {
            $message = "Email already exists.";
        }
    }
}
?>
<body>

  <div class="form-container">
    <h2>Create Account</h2>
       <p><?= $message ?></p>
      
       <form method="POST">
      <label for="name">Username</label>
      <input type="text" name="username" placeholder="Enter your full name" required>

      <label for="email">Email</label>
      <input type="email" name="email" placeholder="Enter your email" required>

      <label for="password">Password</label>
      <input type="password" name="password" placeholder="Create a password" required>
      
      <button type="submit" class="btn">Register</button>
     
    </form>
     <a href="Admin/login.php">Already have an account?</a>

  </div>

</body>
</html>
