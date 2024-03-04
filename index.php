<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  
 <header class="header">
  <div class="container">
    <div class="headerInner">
      <a href="index.php" class="logo">
        <img src="assets/images/logo.png" alt="CoffeLex">
        CoffeLex
      </a>
      <nav class="menu">
        <ul class="menuList">
          <div class="menuItem">
            <button class="menuLink">Лекции
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="menuLinkContent">
              <a href="lecture1.php">Лекция 1</a>
              <a href="lecture2.php">Лекция 2</a>
              <a href="lecture3.php">Лекция 3</a>
            </div>
          </div>
          <div class="menuItem">
            <button class="menuLink">Тесты
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="menuLinkContent">
              <a href="test1.php">Тест 1</a>
              <a href="test2.php">Тест 2</a>
              <a href="test3.php">Тест 3</a>
            </div>
          </div>
        </ul>

      </nav>
      <a href="register.php" class="sign">
        <img src="assets/images/user.png" alt="">
      </a>
    </div>
  </div>
 </header>
  <div class="container">
    <div class="topPicture">
      
      <img src="assets/images/coffee.jpg" alt="">
      <div class="topString">
        Сайт для обучения начинающих стажеров до уровня бариста
      </div>
    </div>
  </div>
  <div class="container">
    <div class="items">
      <div class="lectures">
        <img src="assets/images/coffeeLectures.png">
        <div class="lecturesString">Лекции</div>
        <ul class="lecturesItems">
          <li class="lecturesLinks"><a href="lecture1.php">Лекция 1 Что такое кофе</a></li>
          <li class="lecturesLinks"><a href="lecture2.php">Лекция 2 Как готовить кофе</a></li>
          <li class="lecturesLinks"><a href="lecture3.php">Лекция 3 Альтернативные способы</a></li>
        </ul>
      </div>
      <div class="tests">
        <img src="assets/images/coffeeTests.jpg" alt="">
        <div class="testsString">Тесты</div>
        <ul class="testsItems">
          <li class="textsLinks"><a href="test1.php">Тест 1</a></li>
          <li class="textsLinks"><a href="test2.php">Тест 2</a></li>
          <li class="textsLinks"><a href="test3.php">Тест 3</a></li>
        </ul>
      </div>
    </div>
  </div>
   
</body>
</html>