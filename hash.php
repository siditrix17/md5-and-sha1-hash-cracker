<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hash cracker</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="hash.php">----Hash cracker----</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">


      </div>
    </nav>

<p>HAsh cracker is a tool for hash cracking by comapring it with stored common passwords. <br>
<<<<<<<<<<<<<<<<<------------------version : 1.2------------------->>>>>>>>>>>>>>>>>>>>>>>>>>>
</p>

<form  action="logic.php" method="post">
  Enter (MD5 or SHA1)hash:<input type="text" name="hash" > <br>
  <button type="submit" name="button">Submit</button>
</form>



  </body>
</html>
