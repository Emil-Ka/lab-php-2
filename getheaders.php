<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./styles/index.css">
   <title>Page 2</title>
</head>
<body>
   <header>
      <img src="img/logo.jpg" alt="logo">
      <h1>Лабораторная работа #2 Караев Эмиль</h1>
   </header>
   <main>
      <?php
         $url = "https://httpbin.org";
         $answer = get_headers($url);
      ?>
      <textarea cols="50" rows="20">
         <?php
            print_r($answer);
         ?>
      </textarea>
   </main>
   <footer>
      <h2>Получаем заголовки</h2>
   </footer>
</body>
</html>