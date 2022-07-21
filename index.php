<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    
    <!--HEADER-->
    
    <header class="header">
        <div class="container__flex">
            
            <div class="logo">
                Миграционная помощь
            </div>
            
            <div class="sub__logo">
                Скорая помощь по миграционным вопросам
            </div>
            
            <div class="button__free">
                <a class="button" href="#openModal">
                Бесплатная<br>Консультация
                </a>
            </div>
            
        </div>
       
        
<!--MODAL--> 
<div id="openModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Название</h3>
        <a href="#close" title="Close" class="close">×</a>
      </div>
      <div class="modal-body">    
        <p>
            
            <form class="input__quest" action="quest.php" method="POST">
        
        <input type="text" name="login" placeholder="Введите имя"  required  /><br>
        <input type="tel" name="tel" placeholder="Номер телефона" required /><br>
        <input type="text" name="region" placeholder="В каком регионе проживаете" required  /><br>
        
        <input type="submit" value="Подать заявку">
        
    </form>
            
        </p>
      </div>
    </div>
  </div>
</div>        
   
   
    </header>
      
     <!--INTRO-->    
     <div class="intro">
          <div class="about">
              Нужно гражданство РФ,<br>РВП или ВНЖ?
          </div>
          <div class="sub__about">
              Ответьте на 5 вопросов и получите<br>В кратчайшие сроки!
          </div>
      </div>
      
      <form class="button__quest" action="quest.html">
          <button class="button__main"> Отправить заявку</button> 
      </form>
    
</body>
</html>