<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="/src/css/style.css">
  <title>LSPD Forensics</title>
</head>
<body>
<?php include 'header.php'; ?>
<main class="mt-5">
  <div class="container">
    <div id="Outer">
      <div class="banner" style="min-height: 10px"></div>
        <div id="Inner">
          <h1 class="display-6 fw-bold">Ваше заявление успешно отправлено!</h1>
          <div id="Content">
            <div class="boxed" id="lipsum"><p>Обращаем ваше внимание на то, что срок рассмотрения подобных заявлений может занимать от 24 до 48 часов. При прохождении по критериям на ваш электронный адрес от <a target="_blank" href="https://lspd.gta-world.ru/memberlist.php?mode=viewprofile&u=2249">a.grimshaw@lspd.org</a> будет направлено письмо с информацией о дальнейшем этапе - устном собеседовании. Дата, время и место проведения будут указаны в содержании.</p>
            <p>Примечание: Не обновляйте страницу (F5 или другие способы), лучше вернитесь на <a href="/index.php">главную страницу</a>.</p>
          </div>
        </div><br></br>
        <div class="boxed" id="lipsum" style="margin: auto; width: 30%;">
          <ul style='list-style-type: none;'>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#21ba45" class="bi bi-check-all" viewBox="0 0 16 16">
                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
              </svg>        <strong>Подача заявления</strong>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#242425" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
              </svg>        <strong style="color: #4183c4;">Устное собеседование</strong>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#242425" class="bi bi-check" viewBox="0 0 16 16">
              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
              </svg>        <strong style="color: #4183c4;">Программа подготовки</strong>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#242425" class="bi bi-check" viewBox="0 0 16 16">
              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
              </svg>        <strong style="color: #4183c4;">Стажировочный процесс</strong>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include 'footer.php'; ?>
</body>
</html>
<?php
$webhookurl = "https://discord.com/api/webhooks/966813573332500510/G9jZg_L4h96n3F5aKJ93QtUOc8oc7CwUIqV0zt4jfyxDhfTDHeSeb7UM-neU0ObbTek4";

$name = $_POST['name'];
$age = $_POST['age'];
$national = $_POST['national'];
$nation = $_POST['nation'];
$gender = $_POST['gender'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$education = filter_input(INPUT_POST, 'education', FILTER_SANITIZE_STRING);
$faculty = $_POST['faculty'];
$doe = $_POST['doe'];
$quenta = $_POST['quenta'];
$division = filter_input(INPUT_POST, 'division', FILTER_SANITIZE_STRING);
$experience = $_POST['experience'];
$prevjobs = $_POST['prevjobs'];
$username = $_POST['username'];
$forumurl = $_POST['forumurl'];

$space = " ";

$timestamp = date("c", strtotime("now"));
// 
$json_data = json_encode([
    "content" => "<@316526338087321620>",
    // "content" => "<@>, новое заявление.
// **Контактная информация**
// > **Имя, фамилия**:  $name
// > **Возраст**:  $age
// > **Гражданство**:  $national
// > **Адрес проживания**:  $address
// > **Мобильный номер**:  $phonenumber
// > **Этническая принадлежность**:  $nation
// > **Пол**:  $gender

// **Образование**:  <$education>
// **Факультет**:  <$faculty>
// **Дата окончания**:  <$doe>
// **Биография**:  <$quenta>
// **Желаемая вакансия**:  <$division>
// **Опыт работы**:  <$experience>
// **Предыдущие места работы**:  <$prevjobs>
// **Discord**:  <$username>
// **Форумный аккаунта**:  <$forumurl>",
    // "username" => $name,
    //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",
    "tts" => false,
    // "file" => "",
    "embeds" => [
        [
            // "title" => "Заявление от ".$name,
            "type" => "rich",
            "description" => "",
            "url" => "",
            "timestamp" => $timestamp,
            "color" => hexdec( "8382c7" ),
            "footer" => [
                "text" => "extassyy",
                "icon_url" => "https://i.imgur.com/Gpttt0Y.jpg"
            ],

            "image" => [
                "url" => ""
            ],

            //"thumbnail" => [
            //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
            //],

            "author" => [
                "name" => "Новое заявление",
                "url" => ""
            ],

            "fields" => [
                [ "name" => "Имя, фамилия", "value" => $name, "inline" => true ],
                [ "name" => "Возраст", "value" => $age, "inline" => true ],
                [ "name" => "Гражданство", "value" => $national, "inline" => true ],
                [ "name" => "Адрес", "value" => $address, "inline" => true ],
                [ "name" => "Номер", "value" => $phonenumber, "inline" => true ],
                [ "name" => "Национальность", "value" => $nation, "inline" => false ],
                [ "name" => "Пол", "value" => $gender, "inline" => false ],
                [ "name" => "Образование", "value" => $education, "inline" => false ],
                [ "name" => "Факультет", "value" => $faculty, "inline" => false ],
                [ "name" => "Дата окончания", "value" => $doe, "inline" => false ],
                [ "name" => "Биография", "value" => $quenta, "inline" => false ],
                [ "name" => "Желаемая вакансия", "value" => $division, "inline" => false ],
                // [ "name" => "Предыдущие места работы", "value" => $prevjobs, "inline" => false ],
                [ "name" => "Discord", "value" => $username, "inline" => false ],
                [ "name" => "Форумник", "value" => $forumurl, "inline" => false ]
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response = ('<p style="color: red;"><b>Упс! Возникла ошибка. Ваше заявление не было отправлено. Вернитесь на прошлую страницу и заполните все поля заново.</b></p>');
curl_close( $ch );
?>