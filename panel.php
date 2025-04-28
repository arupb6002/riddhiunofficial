<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Panel - Under Development</title>
  <style>
    /* Base Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body Styling with Animated Gradient Background */
    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
      background-size: 400% 400%;
      animation: gradientAnimation 15s ease infinite;
    }

    /* Gradient Animation Keyframes */
    @keyframes gradientAnimation {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Content Container Styling */
    .container {
      background: rgba(255, 255, 255, 0.9);
      padding: 40px 30px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      max-width: 500px;
      width: 90%;
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    /* Fade-In Animation for Container */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Logo Styling */
    .logo {
      width: 100px;
      margin-bottom: 20px;
    }

    /* Heading Styling */
    .container h1 {
      font-size: 24px;
      color: #2c3e50;
      margin-bottom: 20px;
    }

    /* Paragraph Styling */
    .container p {
      font-size: 16px;
      color: #555;
      line-height: 1.5;
    }

    /* Footer Styling */
    .footer {
      margin-top: 25px;
      font-size: 14px;
      color: #888;
    }

    /* Button Container */
    .button-container {
      margin-top: 30px;
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    /* Button Styling */
    .button {
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-decoration: none;
      color: #fff;
    }

    .contact-button {
      background-color: #25D366;
    }

    .contact-button:hover {
      background-color: #1DA851;
    }

    .logout-button {
      background-color: #e74c3c;
    }

    .logout-button:hover {
      background-color: #c0392b;
    }

    /* Responsive Adjustments */
    @media (max-width: 600px) {
      .container {
        padding: 30px 20px;
      }

      .container h1 {
        font-size: 20px;
      }

      .container p {
        font-size: 14px;
      }

      .button {
        width: 100%;
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Logo Image -->
    <img src="https://i.ibb.co/ch7zZfvF/1745346141140.png" alt="Company Logo" class="logo">
    <h1>Dear Admins,</h1>
    <p>
      Our admin panel is currently under development.<br/>
      Once it's completed, we will notify you via email.
    </p>
    <div class="footer">Thank you for your patience and support.<br>Regards,<br>Arup Borah<br>Owner © RIDDHI UNOFFICIAL</div>
    <div class="button-container">
      <a href="https://wa.me/916002148763" target="_blank" class="button contact-button">Contact</a>
      <a href="index.html" class="button logout-button">Logout</a>
    </div>
  </div>
</body>
</html>