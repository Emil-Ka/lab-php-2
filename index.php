<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./styles/index.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Page 1</title>
</head>
<body>
   <header>
      <img src="img/logo.jpg" alt="logo">
      <h1>Лабораторная работа #2 Караев Эмиль</h1>
   </header>
   <main>
      <form method="POST" action="https://httpbin.org/post" class="col-xxl-4 col-xl-6 col-lg-8 col-md-10 col-sm-10 mx-auto">
         <div class="mb-3">
            <label for="name" class="form-label">Ваше имя:</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Alex">
         </div>
         <div class="mb-3">
            <label for="email" class="form-label">Ваш Email:</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="alex@gmail.com">
         </div>
         <div class="col-auto my-1 mb-3">
            <label class="mr-sm-2" for="type-appeal">Тип обращения:</label>
            <select name="type-of-appeal" class="custom-select mr-sm-2" id="type-appeal">
               <option value="complaint">Жалоба</option>
               <option selected value="offer">Предложение</option>
               <option value="thank">Благодарность</option>
            </select>
         </div>
         <div class="mb-3">
            <label for="text" class="form-label">Текст обращения</label>
            <textarea name="text" class="form-control" id="text" rows="3"></textarea>
         </div>
         <p class="form-label">Как Вам лучше всего ответить?</p>
         <div class="form-check">
            <input class="form-check-input" type="radio" name="feedback" id="sms" value="sms" checked>
            <label class="form-check-label" for="sms">
               По SMS
            </label>
         </div>
         <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="feedback" id="feedback-email" value="email">
            <label class="form-check-label" for="feedback-email">
               По Email
            </label>
         </div>
         <button type="button" class="btn btn-primary">Отправить</button>
         <a class="link" href="getheaders.php" class="link-to-page">Перейти на 2-ю страницу</a>
      </form>
   </main>
   <footer>
      <h2>Получаем заголовки</h2>
   </footer>
</body>
</html>