<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/src/img/logo.svg">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="/src/css/application.css">
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>

  <title>Подача заявления</title>
</head>
<body class="bg-light" style="padding: 50px 0;">
  <center><img src="https://i.ibb.co/d6n6H7f/1.png" alt="1" width="110" height="110" border="0"></center>
  <div class="container">
    <div class="py-5">
      <form action="/discord.msg.send.php" class="row g-3" method="post">
        <hr class="my-4">
        <h4 class="mb-3">Контактная информация</h4>
        <div class="col-sm-6">
          <label for="name" class="form-label">Имя, фамилия</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Джон Джонсон" value="" required>
        </div>
        <div class="col-sm-6">
          <label for="age" class="form-label">Возраст</label>
          <input type="text" class="form-control" id="age" name="age" placeholder="23 года" value="" required>
        </div>

        <div class="col-md-6">
          <label for="national" class="form-label">Гражданство</label>
          <select class="form-select" id="national" name="national" required>
            <option selected disabled>Выберите из списка</option>
            <option value="Гражданство США">Гражданство США</option>
            <option value="Рабочая виза">Рабочая виза</option>
          </select>
        </div>
        <div class="col-sm-6">
          <label for="address" class="form-label">Адрес проживания</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Лос Сантос, Веспуччи, Паломино авеню 1991" value="" required>
        </div>
    
        <div class="col-sm-4">
          <label for="phonenumber" class="form-label">Мобильный номер</label>
          <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="XXX-XXX-XX" value="" required>
        </div>
        <div class="col-md-5">
          <label for="nation" class="form-label">Этническая принадлежность</label>
          <select class="form-select" id="nation" name="nation" required>
            <option selected disabled>Выберите из списка</option>
            <option value="Светлокожий">Светлокожий</option>
            <option value="Темнокожий или aфроамериканец">Темнокожий или aфроамериканец</option>
            <option value="Мексиканец или латиноамериканец">Мексиканец или латиноамериканец</option>
            <option value="Индеец или коренной житель аляски">Индеец или коренной житель аляски</option>
            <option value="Азиат">Азиат</option>
            <option value="Филлипинец">Филлипинец</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="gender" class="form-label">Пол</label>
          <select class="form-select" id="gender" name="gender" required>
            <option selected disabled>Выберите из списка</option>
            <option value="Мужской">Мужской</option>
            <option value="Женский">Женский</option>
            <option value="Другой">Другой</option>
          </select>
        </div>
        <hr class="my-4">
        <h4 class="mb-3">Информация об образовании</h4>
        <div class="col-md-5">
          <label for="education" class="form-label">Образование</label>
          <select class="form-select" id="education" name="education" required>
            <option selected disabled>Выберите из списка</option>
            <option value="Доктор">Степень доктора</option>
            <option value="Магистр">Степень магистра</option>
            <option value="Бакалавр">Степень бакалавра</option>
            <option value="Ассоциат">Степень ассоциата (колледж)</option>
            <option value="Ассоциат">Студент университета</option>
            <option value="Старшая школа">Старшая школа</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="faculty" class="form-label">Факультет</label>
          <input type="text" class="form-control" id="faculty" name="faculty" placeholder="Юридический факультет" required>
        </div>
        <div class="col-md-3">
          <label for="doe" class="form-label">Дата окончания</label>
          <input type="text" class="form-control" id="doe" name="doe" placeholder="МММ ДД, ГГГГ" required>
        </div>
        <hr class="my-4">
        <h4 class="mb-3">Информация о вакансии</h4>
        <div class="col-12">
          <label for="quenta" class="form-label">Биография</label>
          <textarea type="text" class="form-control" id="quenta" name="quenta" placeholder="Напишите о себе. Максимум тысяча символов." maxlength="1000" required></textarea>
        </div>
        <div class="col-12">
          <label for="division" class="form-label">Желаемая вакансия</label>
          <select class="form-select" id="division" name="division" required>
            <option selected disabled>Выберите вакансию</option>
            <option value="Судебно-медицинский эксперт">Судебно-медицинский эксперт</option>
            <option value="Криминалист-техник">Криминалист-техник</option>
            <option value="Специалист-полиграфолог">Специалист-полиграфолог</option>
          </select>
        </div>
        <div class="col-12">
          <label for="experience" class="form-label">Опыт работы</label>
          <textarea type="text" class="form-control" id="experience" name="experience" placeholder="Опыт работы" required></textarea>
        </div>
        <hr class="my-4">
        <h4 class="mb-3">Внеигровая информация</h4>
        <div class="col-12">
          <label for="username" class="form-label">Discord</label>
            <div class="input-group">
              <span class="input-group-text">#</span>
              <input type="text" class="form-control" id="username" name="username" placeholder="nickname#1337" required>
            </div>
          </div>
          <div class="col-12">
            <label for="forumurl" class="form-label">Форумный аккаунт (<a href="https://lspd.gta-world.ru">lspd.gta-world.ru</a>)</label>
            <input type="text" class="form-control" id="forumurl" name="forumurl" placeholder="https://lspd.gta-world.ru/profile/???/" required>
          </div>
        </div>
        <hr class="my-4">
        <div class="form-captcha">
          <div class="g-recaptcha" data-sitekey="6Lfpt78fAAAAANnCqZJXYRoROHKtsoUxH1xkzZ40" style="margin: 0 auto;">

          </div>
        </div><br>
        <button class="w-100 btn btn-primary btn-lg" type="submit">Отправить заявление</button>
      </form>
    </div>
  </div>
  <script>
    function reCaptcha(selector) {
      var $wg = $(selector);
      $wg.each(function() {
        var id = randomString(10),
        $form = $(this).closest('form');
        $form.find('button[type="submit"]').prop('disabled', true);
        $(this).append($('<div class="g-recaptcha" id="' + id + '"></div>'));
          grecaptcha.render(id, {
            sitekey: $(this).find('.g-recaptcha').data('sitekey') || '',
            callback: function(response) {
              if (!!response) {
                $form.find('button[type="submit"]').prop('disabled', false);
              } 
            }
          });
      });
    };
      
    function randomString(length) {
      var chars = '0123456789ABCDEFGHIKLMNOPQRSTVXYZabcdefghiklmnopqrstvxyz'.split(''),
      result = '';
      length = !length ? Math.floor(Math.random() * chars.length) : length;
      for (var i = 0; i < length; i++) {
        result += chars[Math.floor(Math.random() * chars.length)];
      }
      return result;
      var onloadCallback = function() {
        reCaptcha('.form-captcha');
      }
    };
  </script>

</body>
</html>