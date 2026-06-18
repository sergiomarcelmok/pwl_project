<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <table border="1" bgcolor="black">
                <tr>
                    <td colspan=6 align="center"><h1><font color="white">
                        Login
                    </font></h1></td>
                </tr>
                <tr>
                    <td><font color="white">Email</font></td>
                    <td colspan=5><input type="email" name="email" size="55" value="" placeholder="Email"></td>
                </tr>
                <tr>
                    <td><font color="white">Password</font></td>
                    <td colspan=5><input type="password" name="password" size="55" value="" placeholder="password"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="Create"></td>
                    <td colspan="3" align="center"><input type="reset" value="Batal"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>