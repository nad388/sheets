<!DOCTYPE html>
<html lang="ru">

<head>
<link rel="stylesheet" href="styles.css">
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Программа расчет веса металлического листа</title>

</head>
<body>
  <header>
    <h1>Расчет веса металлического листа</h1>
  </header>
  <main>
    <aside>
      <p>Основные поставщики метллопроката в России:</p>
      <ul>
        <li><a href="http://www.agrupp.com/">ООО "А ГРУПП"</a></li>
        <li><a href="https://mc.ru">ООО "Металлсервис"</a></li>
        <li><a href="https://dipos.ru/">ООО "Дипос"</a></li>
      </ul>
    </aside>
    <article>
      <form>
        <p>Выберите толщину листа в миллиметрах:</p>
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
        <p>Выберите ширину листа в метрах:</p>
        <select id="b">
          <option value="1.25">1.25</option>
          <option value="1.5">1.5</option>
          <option value="2">2</option>
        </select>
        <br>
        <p>Выберите длинну листа в метрах:</p>
        <select id="c">
          <option value="2.5">2.5</option>
          <option value="3">3</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
        <br>
        <p>Выберите количество штук:</p>
        <input type="number" id="q" value="1"><br> 
        <p>Нажмите на кнопку, чтобы расчитать вес листа:</p>
        <input type="button" value="Вес листа" onclick="addition();"> <br>
      </form>
      <p>Вес листа: </p><br>
      <div id="result"></div>
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
