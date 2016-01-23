<?php include('loginaction.php'); ?>
<!doctype HTML>
<html>  
  <head>
    <link rel="stylesheet" href="style.css" type"text/css" />
    <meta content="text/html;">
    <meta name="viewport" content="width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>HAWTalk</title>
  </head>  
  <body>
    <header>
      <img src="header.png" />
    </header>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="register.php">Registrieren</a></li>
      </ul>
    </nav>
    <main>
      <form method="post" action="login.php">
            <label for="username">
              <input type="text" name="username" id="username" placeholder="Username" />
            </label>
            <label for="password">
              <input type="password" name="password" id="password" placeholder="Passwort" />
            </label>
            <button type="submit" name="submit" id="button-ok">Sign in</button>
          </form>
    </main>
    <footer>
      <ul>
        <li>&copy; 2015</li>
        <li>Kevin Homuth</li>
        <li>Nenad Slavujevic</li>
        <li>HAW Hamburg</li>
      </ul>
    </footer>  
  </body>
</html>
