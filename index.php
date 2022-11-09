<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" class="disable-select ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная </title>
    <link rel="stylesheet" href="/css/main_page_style.css" type="text/css">
    <link rel="stylesheet" href="/css/style.min.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Курсор -->
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&amp;family=Roboto:wght@300;400&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/cursor.css"/>
    <!-- <link  rel="preload" href="/font/BroadaxeRevolution.ttf" as="font"> -->
    
</head>

<body>
    <!-- Курсор -->
    <div class="follow-cursor"></div> <!-- элемент, который следует за курсором -->
    <script src="/js/cursor.js"></script>


    <!-- Главная картинка -->
    <div id="header">
        <img src="/img/quote.png">
    </div>
    
    <!-- Боковое меню -->
    <div class="side-menu">
        <div class="side-menu-buttons"> 
            <a href="#link" class="side-menu-item" data-bs-toggle="modal" data-bs-target="#profil">
                <div class="side-menu-item-icon">
                    <img src="/img/profile.png">
                </div>
                <div class="side-menu-hover">Профиль</div>
            </a> 
            <a href="#link" class="side-menu-item" data-bs-toggle="modal" data-bs-target="#korzina">
                <div class="side-menu-item-icon">
                    <img src="/img/korzina.png">
                </div>
                <div class="side-menu-hover">Корзина</div>
            </a> 
            
            <a href="#link" class="side-menu-item" data-bs-toggle="modal" data-bs-target="#onas">
                <div class="side-menu-item-icon">
                    <img src="/img/onas.png">
                </div>
                <div class="side-menu-hover">О нас</div>
            </a> 
            <a href="#link" class="side-menu-item" data-bs-toggle="modal" data-bs-target="#tex">
                <div class="side-menu-item-icon">
                    <img src="/img/tex.png">
                </div>
                <div class="side-menu-hover">Тех поддержка</div>
            </a> 
            <a class="side-menu-item"data-bs-toggle="modal" data-bs-target="#search">
                <div class="side-menu-item-icon">
                    <img src="/img/free-icon-search-8300918.png">
                </div>
                <div class="side-menu-hover">Поиск</div>
            </a> 
        </div>
    </div>
  


  <!-- Модальное окно -->
  <!-- Профиль -->
  <div class="modal fade" id="profil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Профиль</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
          <h2>
            <?=$_SESSION['user']['email']?>
          </h2>
          <h2>
            <?=$_SESSION['user']['id']?>
          </h2>
          <h2>
            <?=$_SESSION['user']['login']?>
          </h2>
          <a href="http://moon">Выход</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>


  <!-- корзина -->
  <div class="modal fade" id="korzina" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
          Пока тут пусто
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>

  <!-- О нас -->
  <div class="modal fade" id="onas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">О нас</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-footer">
        <div class="onas">
            <span class="onas1">
                <label class="name1">
                    Васильченко Дарья
                </label>
                <label class="name5">Возраст: 18</label>
                <label class="name9">Должность: программист</label>
            </span>
            <span class="onas5"></span>
            <span class="onas2">
                <label class="name2">
                    Сиротина Полина
                </label>
                <label class="name6">Возраст: ♾️</label>
                <label class="name10">Должность: принцесса</label>
            </span>
            <span class="onas6"></span>
            <span class="onas3">
                <label class="name3">
                    Ворона Вячеслав
                </label>
                <label class="name7">Возраст: 5</label>
                <label class="name11">Должность: талисман</label>
            </span>
            <span class="onas7"></span>
            <span class="onas4">
                <label class="name4">
                    Сангаджиева Эллина
                </label>
                <label class="name8">Возраст: 17</label>
                <label class="name12">Должность: программист</label>
            </span>
            <span class="onas8"></span>
        </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Тех поддержка -->
  <div class="modal fade" id="tex" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Тех поддержка</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-footer">
          <lable>Опишите вашу проблему</lable>
          <input>
          <input type="submit">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Поиск -->
  <div class="modal fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Поиск</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
            <a name="home"></a>
            <a href="#home" class="search">Начало</a>
            <a href="#box1" class="search">Море холода</a>
            <a href="#box2" class="search">Море дождей</a>
            <a href="#box3" class="search">Море ясности</a>
            <a href="#box4" class="search">Море спокойствия</a>
            <a href="#box5" class="search">Море кризисов</a>
            <a href="#box6" class="search">Озеро сновидений</a>
            <a href="#box7" class="search">Море Змей</a>
            <a href="#box8" class="search">Океан бурь</a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
          </div>    
        </div>
      </div>
    </div>
  </div>
    


    <!-- Элементы продаж -->
    <div id="container">
        <div id="box1" class="box">
            <img src="/img/sea of cold.png">
            <h2><a name="box1">Море холода</a></h2>
            <h4>Стоимость:<br>65 000 ₽</h4>
        </div>

        <div id="box2" class="box">
            <img src="/img/sea of rain.png">
            <h2><a name="box2">Море дождей</a></h2>
            <h4>Стоимость:<br>63 000 ₽</h4>
        </div>

        <div id="box3" class="box">
            <img src="/img/sea ​​of ​​clarity.png"> 
            <h2><a name="box3">Море ясности</a></h2>
            <h4>Стоимость:<br>70 500 ₽</h4>
        </div>

        <div id="box4" class="box">
            <img src="/img/sea ​​of ​​calm.png">
            <h2><a name="box4">Море спокойствия</a></h2>
            <h4>Стоимость:<br>79 000 ₽</h4>
        </div>

        <div id="box5" class="box">
            <img src="/img/sea ​​of ​​crises.png">
            <h2><a name="box5">Море кризисов</a></h2>
            <h4>Стоимость:<br>57 000 ₽</h4>
        </div>

        <div id="box6" class="box">
            <img src="/img/lake of dreams.png">
            <h2><a name="box6">Озеро сновидений</a></h2>
            <h4>Стоимость:<br>90 000 ₽</h4>
        </div>

        <div id="box7" class="box">
            <img src="/img/sea ​​of ​​snakes.png">
            <h2><a name="box7">Море Змей</a></h2>
            <h4>Стоимость:<br>40 000 ₽</h4>
        </div>

        <div id="box8" class="box">
            <img src="/img/ocean of storms.png">
            <h2><a name="box8">Океан бурь</a></h2>
            <h4>Стоимость:<br>200 000 ₽</h4>
        </div>
    <!-- <script src="/js/preloader.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>