<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF FROM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 w-50 mx-auto text-center">
        <form action="makepdf.php" method="post">
            <h1>Create Your Own PDF</h1>
            <p>Fill Out Details</p>

            <input type="text" class="form-control mt-1" name="fname" id="fname" placeholder="First Name">
            <input type="text" class="form-control mt-1" name="lname" id="lname" placeholder="Last Name">
            <input type="text" class="form-control mt-1" name="email" id="email" placeholder="Email">
            <input type="tel" class="form-control mt-1" name="phone" id="phone" placeholder="Phone">

            <textarea class="form-control mt-1" name="msg" id="msg" cols="30" rows="5" placeholder="Message"></textarea>
            <input type="button" class="btn btn-info btn-block mt-1" name="submit" id="submit" value="Create">

        </form>
    </div>

</body>

</html>