<?php
include_once('config/setting-cofiguration.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up</title>
    <link rel="stylesheet" href="src/css/style.css">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
        }

        input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #ff66b2; 
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff4d94; 
        }
    </style>
</head>
<body>
    <h1>Sign In</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
       <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
       <input type="email" name="email" placeholder="Enter Email" required> 
       <input type="password" name="password" placeholder="Enter Password" required> 
       <button type="submit" name="btn-signin">Sign In</button>
    </form>

    <h1>Registration</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
       <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
       <input type="text" name="username" placeholder="Enter Username" required> 
       <input type="email" name="email" placeholder="Enter Email" required> 
       <input type="password" name="password" placeholder="Enter Password" required> 
       <button type="submit" name="btn-signup">Sign Up</button>
    </form>
</body>
</html>
