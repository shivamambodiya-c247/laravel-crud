<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
</head>
<body>
        <form action="/register" method="POST">
        @csrf
        <input type="text" name="firstname" id="firstname" placeholder="firstname">
        <input type="email" name="email" id="email"placeholder="Email Address">
        <input type="submit" value="Register">
    </form>
</body>
</html>