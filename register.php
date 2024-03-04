<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/reg.css">
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
 <div class="form_reg_block">
    <div class="form_reg_block_content">
      <p class="form_reg_block_head_text">Регистрация</p>
      <form class="form_reg_style" action="#" method="post">
        <label>Логин</label>
        <input type="login" name="reg_login" placeholder="Логин" required >
        <label>Пароль</label>
        <input type="password" name="reg_email placeholder="Пароль" required >
        <label>Email</label>
        <input type="email" name="reg_email" placeholder="email" required >
        <button class="form_reg_button" type="submit" name="form_reg_submit">Зарегистрироваться</button>
        <a href="login.php" class="form_reg_link">Уже есть аккаунт</a>
      </form>
      
    </div>
  </div>
  
 </body>
 </html>