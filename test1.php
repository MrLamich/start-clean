<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="text/javascript" src="data/data.js"></script>
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
  <div class="test">
    
      <p>Тест. Тема. <span id="tema" class="theme"></span>.</p>
      <div class="numberQuestions">
        <div id="vopros1" style="display:block;">
          <p>Вопрос 1</p>
          <p class="posQuestions"><span id="v_1"></span> <input class="input" type="text" id="z_1"></p>
        </div>
        <div id="vopros2" style="display:none;">
          <p>Вопрос 2</p>
          <p class="posQuestions"><span id="v_2"></span> <input class="input" type="text" id="z_2"></p>
        </div>
        <div id="vopros3" style="display:none;">
          <p>Вопрос 3</p>
          <p class="posQuestions"><span id="v_3"></span> <input class="input" type="text" id="z_3"></p>
        </div>
      </div>
     
    <button class="nextButton" id="kn_sl" onclick="sled_vopr();">Следующий вопрос</button>
    <button class="check" id="kn_pr" style="display:none;" onclick="proverit();">Проверить</button>
    <div id="rezultat"></div>
  </div>
</div>
  <script>
    document.addEventListener('DOMContentLoaded', function(){
        document.getElementById('v_1').innerHTML = vopros_1;
        document.getElementById('v_2').innerHTML = vopros_2;
        document.getElementById('v_3').innerHTML = vopros_3;
        document.getElementById('tema').innerHTML = test1;
    });
    function sled_vopr(){
        if(document.getElementById('vopros2').style.display == "block"){
            document.getElementById('vopros2').style.display = "none";
            document.getElementById('vopros3').style.display = "block";
            document.getElementById('kn_sl').style.display = "none";
            document.getElementById('kn_pr').style.display = "block";
        }
        if(document.getElementById('vopros1').style.display == "block"){
            document.getElementById('vopros1').style.display = "none";
            document.getElementById('vopros2').style.display = "block";
        }
    }
    function proverit(){
    otv_uch_1 = document.getElementById('z_1').value;
    otv_ucgenika_1 = otv_uch_1;
    otv_uch_2 = document.getElementById('z_2').value;
    otv_ucgenika_2 = otv_uch_2;
    otv_uch_3 = document.getElementById('z_3').value;
    otv_ucgenika_3 = otv_uch_3;
    ball = 0;
    document.getElementById('vopros3').style.display = "none";
    document.getElementById('kn_pr').style.display = "none";
    if(otv_uch_1 == pr_otv_zadachi_1){
        ball +=1;
        otveti = "<span id='vo'>Вопрос 1. Вы ответили верно. Ваш ответ: "+otv_ucgenika_1+"</span>";
    } else {
        otveti = "<span id='nvo'>Вопрос 1. Вы ответили не верно. Ваш ответ: "+otv_ucgenika_1+"</span>"; 
    }
    if(otv_uch_2 == pr_otv_zadachi_2){
        ball +=1;
        otveti += "<br><span id='vo'>Вопрос 2. Вы ответили верно. Ваш ответ: "+otv_ucgenika_2+"</span>";
    } else {
        otveti += "<br><span id='nvo'>Вопрос 2. Вы ответили не верно. Ваш ответ: "+otv_ucgenika_2+"</span>"; 
    }
    if(otv_uch_3 == pr_otv_zadachi_3){
        ball +=1;
        otveti += "<br><span id='vo'>Вопрос 3. Вы ответили верно. Ваш ответ: "+otv_ucgenika_3+"</span>";
    } else {
        otveti += "<br><span id='nvo'>Вопрос 3. Вы ответили не верно. Ваш ответ: "+otv_ucgenika_3+"</span>";
    }
    vsego_zadach = 3;
    procent_vip = ball/vsego_zadach * 100;
    procent_vip = procent_vip.toFixed();
    document.getElementById('rezultat').innerHTML = "<span id='ot'>Задания выполнены верно на "+procent_vip+"%.</span><br><br>"+otveti;
    }
    </script>
</body>
</html>