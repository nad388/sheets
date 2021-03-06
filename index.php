<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Программа расчет веса металлического листа</title>
   
  <link rel="apple-touch-icon" sizes="57x57" href="icons/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="icons/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="icons/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="icons/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="icons/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="icons/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="icons/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="icons/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="icons/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="icons/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="icons/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>
  <header>
    <img src="icons/fv.png" alt="icons"> 
    <h1>Расчет веса металлического листа</h1>
  </header>
  <main>
    <aside>
      <p>Основные поставщики метллопроката в России:</p>
      <ul>
        <li><a href="http://www.agrupp.com/" target="blank">ООО "А ГРУПП"</a></li>
        <li><a href="https://mc.ru" target="blank">ООО "Металлсервис"</a></li>
        <li><a href="https://dipos.ru/" target="blank">ООО "Дипос"</a></li>
      </ul>
    </aside>
    <article>
      <form>
        <p>Выберете толщину листа в миллиметрах:</p>
        <select id="a">
          <option value="1.5">1.5</option>
          <option value="2">2</option>
          <option value="2.5">2.5</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="8">8</option>
          <option value="10">10</option>
          <option value="12">12</option>
          <option value="14">14</option>
          <option value="16">16</option>
          <option value="18">18</option>
          <option value="20">20</option>
        </select>
        <br>
        <p>Выберете ширину листа в метрах:</p>
        <select id="b">
          <option value="1.25">1.25</option>
          <option value="1.5">1.5</option>
          <option value="2">2</option>
        </select>
        <br>
        <p>Выберете длину листа в метрах:</p>
        <select id="c">
          <option value="2.5">2.5</option>
          <option value="3">3</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
        <br>
        <p>Выберете количество штук:</p>
        <input class="number" type="number" id="q" value="1"><br> 
        <p>Нажмите на кнопку, чтобы расчитать вес листа:</p>
        <input type="button" class="button" value="Вес листа" onclick="addition();"> <br>
      </form>
      <p class="result">Вес листа: </p><br>
      <div class="result" id="result"></div>
    </article>
    <nav>
      <p>
        Новости из мира металлопроката
      </p>
    </nav>
 </main>
 <footer>
   <p>Авторское право © Dmitrieva</p>
  </footer>
</body>
</html>
<script>
  function addition() {
    var a = parseFloat(document.getElementById('a').value);
    var b = parseFloat(document.getElementById('b').value);
    var c = parseFloat(document.getElementById('c').value);
    var q = parseInt(document.getElementById('q').value);
                     
    const e = 7.85;

    if (isNaN(a)==true) a=0;
    if (isNaN(b)==true) b=0;
    if (isNaN(c)==true) c=0;
    if (isNaN(q)==true) q=0;
    if (isNaN(e)==true) e=0;

    let d = ((a * b * c * q) * e).toFixed(2);

    document.getElementById('result').innerHTML = `${a} * ${b} * ${c} * ${q} * ${e} = ${d/1000} тн.`;
  }
</script>