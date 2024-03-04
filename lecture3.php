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
  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="assets/images/cupping.png" style="width:100%">
      <div class="text"><h1>Альтернативные способы заваривания кофе</h1>
        
        
        Бариста должен уметь пользоваться основными приборами и инструментами
         для заваривания альтернативы: пуровер, кемекс, аэропрес, сифон и т.д. 
        Узнав больше об их различиях, бариста сможет не только заваривать хороший кофе,
         но и помогать клиентам ориентироваться в альтернативных методах заваривания.
        Во многих спешиалти-кофейнях клиентам предлагают кофе,
         приготовленный в капельной кофеварке.
          В некоторых заведениях такой метод даже предпочитают ручному завариванию. 
          Такой кофе ценится не так высоко, как альтернатива. 
          С другой стороны, если знать, как его готовить, результат будет ничуть не хуже. 
        Важно уметь обращаться с кофеваркой и знать, как время заваривания и
         толщина слоя молотого зерна влияют на вкус.
        </div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="assets/images/cupping-coffee.png" style="width:100%">
      <div class="text"><h1>Капельная кофеварка</h1>
        
        Капельная кофеварка готовит кофе автоматически — 
        участие человека требуется минимальное. 
        Устройство состоит из специального резервуара для воды,
         термоблока (или бойлера с нагревательным элементом), 
         отсека для молотых кофейных зерен, трубок и кувшина с крышкой.

Принцип работы довольно прост. Наливаете воду в резервуар, там она нагревается, 
превращается в пар и по трубкам идет в отсек с молотыми зернами. 
Насыщаясь их вкусом и ароматом, пар конденсируется и стекает в кувшин 
по одной капельке. Отсюда, собственно, и название устройства. 
Вам остается дождаться, пока кувшин наполнится, 
чтобы перелить свежий горячий кофе в чашку.
 </div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="assets/images/aeropress.png" style="width:100%">
      <div class="text">
        <h1>Аэропресс</h1>
        Аэропресс — это устройство, в котором вода проходит сквозь кофе под давлением воздуха. Аэропресс сконструировал в 2005 году американский инженер Алан Адлер, которому хотелось сделать вкус фильтрового кофе насыщеннее. Внешне аэропресс похож на большой шприц и состоит из колбы, плунжера и сетки, куда вставляется бумажный фильтр.
В аэропрессе используется стандартное соотношение кофе и воды — 60 г на 1 л. Помол средний.</div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span>  
  </div>
  <button class="button"><a href="index.php">выход</a></button>
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
  </script>
</body>
</html>