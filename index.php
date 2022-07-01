<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Guitar Shop</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>Guitar Shop</span>
    </div>
    <div id="about">
      <a href="#" title="Возможности" onclick="slowScroll('#main')">Возможности</a>
      <a href="#" onclick="slowScroll('#overview')" title="Преимущества">Ассортимент</a>
      <a href="#" onclick="slowScroll('#contacts')" title="Контакты">Контакты</a>
      <a href="#" onclick="slowScroll('#faq')" title="Ответы на вопросы">FAQ</a>
      <a href="register.php" onclick="slowScroll('#regorlog')" title="Регистрация и Вход" class="register_btn">Регистрация и Вход</a>
    </div>
  </header>

  <div id="top">
    <h1>Купи себе лучшую гитару</h1>
    <h3>музыка раслабляет</h3>
  </div>

  <div id="main">
    <div class="intro">
      <h2>Наши услуги помогут вам!</h2>
      <span>Большой выбор всего, что может вам пригодиться</span>
    </div>
    <div class="text">
      <span>Мы поможем вам подобрать хорошую гитару. Можете сделать лично свою, на свой вкус и цвет.</span>
    </div>
  </div>

  <div id="overview">
    <h2>Ассортимент</h2>
    <h4>с нами все проще</h4>

    <div class="img">
        <img src="https://pop-music.ru/upload/iblock/013/0132487eca3b1f6ec1e764e7c03774bd.jpg" alt="">
        <span>Розовая гитара (акустика) 4999 рублей</span>
    </div>
    <div class="img">
        <img src="https://music-hummer.ru/upload/iblock/edc/edc6c9af7f58cb220b393e81587d9234.jpg" alt="">
        <span>Черная гитара (акустика) 7999 рублей</span>
    </div>
    <div class="img">
        <img src="https://arsenalmusic.ru/upload/iblock/ff7/ff75c3749bbeb98f88dfbf82a4b00246.jpg" alt="">
        <span>Классическая гитара (акустика) 3599</span>
    </div>
    <div class="img">
        <img src="https://www.toys-land.ru/img/goods/medium/06013-1.jpg" alt="">
        <span>Детская игрушечная гитара 799 рублей</span>
    </div>
</div>

  <div id="contacts">
    <center><h5>Обратная связь</h5></center>

    <form id="form_input" action="mail.php" method="POST">
      <label for="name">Имя (Фамилия пожеланию)<span>*</span></label><br>
      <input type="text" placeholder="Введите имя и фамилию" name="user_name" id="name" required><br>

      <label for="email">Ваша почта <span>*</span></label><br>
			<input type="email" placeholder="Введите email" name="user_email" id="email" required><br>

			<label for="message">Сообщение <span>*</span></label><br>
			<textarea type="message" placeholder="Введите ваше сообщение" name="user_message" id="message"></textarea><br>


      <!-- value="Отправить" -->
			<button id="mess_send" class="btn" type="submit" value="Отправить">Отправить</button>
    </form>
  </div>

  <div id="faq">
    <div>
      <span class="title">Оплата</span><br>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
    <div>
      <span class="title">Информация</span><br>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
    <div>
      <span class="title">Гарантии</span><br>
      <span class="heading">Какие гарантии есть</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Какие гарантии есть</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Какие гарантии есть</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>
  <script src="js/script.js"></script>
</body>
</html>