<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Subscribing</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            background: #D3D3D3;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', 'Segoe UI', sans-serif;
        }

        .subscribe-box {
            width: 250px;
            padding: 30px 20px;
            text-align: center;
            color: white;
            border-radius: 25px;
            background: linear-gradient(45deg, #ff7bd8, #5faaff, #ff7bd8, #5faaff);
            background-size: 300% 300%;
            animation: gradientFlow 2s ease infinite, zoomIn 2s ease-in-out forwards;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        @keyframes gradientFlow {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        @keyframes zoomIn {
            0% { transform: scale(1); }
            100% { transform: scale(1.05); }
        }

        .subscribe-box h1 {
            font-size: 22px;
            margin-bottom: 20px;
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        .subscribe-box p {
            font-size: 15px;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .team-text {
            font-size: 16px;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="subscribe-box">
        <h1>THANK YOU FOR SUBSCRIBING!</h1>
        <p>You will now receive updates<br>from Riddhi Unofficial via email.<br>We appreciate your support!</p>
        <div class="team-text">
            Team,<br>Riddhi Unofficial
        </div>
    </div>
</body>
</html>