<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
            body {
            font-family: sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd; 
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            
        }

        table {
            width: 100%;
            border-collapse: collapse;

        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            background: #71fff9;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        
        .color{
            background: #13c3c3;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        button {
            background-color: #13c3c3;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background: #14bdbd;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="2(php).php" method="POST">
            <table border="2"s>
                <tr>
                    <th class="color" colspan="2"><h2>Registration Form</h2></th>
                </tr>
                <tr>
                    <th>Username:</th>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <th>User Type:</th>
                    <td>
                        <select name="user_type">
                            <option value="">--Select--</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Display Name:</th>
                    <td><input type="text" name="display_name" required></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><textarea name="address" required></textarea></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="checkbox" name="terms" required> I accept Terms and Conditions
                    </td>
                </tr>
                <tr>
                    <th class="color" colspan="2" style="text-align: center;">
                        <input type="submit" name="submit" value="submit">
                    </th>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
