<?php
$podpis = <<<HTML
  <table>
    <tr>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
    <tr>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table" align="center">
        <sup>(подпись)</sup>
      </td>
    </tr>
  </table>
HTML;

$page = <<<HTML
<div class="page" id="page">
  <meta charset="utf-8" />
  <style>
    img {
      margin-left: 7px;
      width: 11px;
      height: 11px;
    }
    @page {
      background-color: white;
      width: 210mm;
      margin: 7mm 10mm 15mm 25mm;
    }
    table {
      font-family: "Times New Roman";
      font-size: 9.4pt;
      width: 100%;
      border: black;
      border-collapse: collapse;
    }
    td,
    th {
      padding: 5px;
      font-family: "Times New Roman";
      font-size: 9.4pt;
    }
    label {
      font-family: "Times New Roman";
      font-size: 9.4pt;
    }
    p {
      font-family: "Times New Roman";
      font-size: 9.4pt;
      margin: 0;
    }
    td.grey_bg_color {
      background-color: #a8a8a8;
    }
    .ghost_font {
      padding: 3px;
      color: #a8a8a8;
      font-family: "Times New Roman";
      font-size: 8pt;
    }
    .invisible_font {
      color: white;
    }
    .small_font {
      font-family: "Times New Roman";
      font-size: 7pt;
    }

    .cell_table {
      padding: 0;
      width: 1px;
      font-family: "Times New Roman";
      font-size: 9.4pt;
    }
    .empty_cell_table {
      padding: 0;
      height: 1px;
      font-family: "Times New Roman";
      font-size: 9.4pt;
    }
    .underscore {
      border-bottom: 1px solid black;
    }
  </style>
  <p align="right">
    <b>Ректору ФГБОУ ВО СибГМУ Минздрава России О. С. Кобяковой</b>
  </p>
  <br />

  <table>
    <tr>
      <th class="cell_table">Фамилия<span class="invisible_font">_</span></th>
      <td class="empty_cell_table underscore invisible_font">Пони</td>
    </tr>
  </table>

  <table>
    <tr>
      <th class="cell_table">Имя<span class="invisible_font">_</span></th>
      <td class="empty_cell_table underscore invisible_font">_</td>
      <th class="cell_table">Отчество<span class="invisible_font">_</span></th>
      <td class="cell_table">
        (при<span class="invisible_font">_</span>наличии)<span
          class="invisible_font"
          >_</span
        >
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <th class="cell_table">
        Адрес<span class="invisible_font">_</span>по<span class="invisible_font"
          >_</span
        >месту<span class="invisible_font">_</span>регистрации:<span
          class="invisible_font"
          >_</span
        >
      </th>
      <td class="invisible_font empty_cell_table">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="cell_table">Индекс<span class="invisible_font">_</span></td>
      <td class="empty_cell_table underscore invisible_font">_</td>
      <td class="cell_table">Страна<span class="invisible_font">_</span></td>
      <td class="empty_cell_table underscore invisible_font">_</td>
      <td class="cell_table">Регион<span class="invisible_font">_</span></td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="cell_table">Район<span class="invisible_font">_</span></td>
      <td class="empty_cell_table underscore invisible_font">_</td>
      <td class="cell_table">
        Нас.<span class="invisible_font">_</span
        ><span class="invisible_font">_</span>пункт
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="cell_table">
        Ул./пр./пер.<span class="invisible_font">_</span>
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
      <td class="cell_table">Дом<span class="invisible_font">_</span></td>
      <td class="empty_cell_table underscore invisible_font">_</td>
      <td class="cell_table">Корп.<span class="invisible_font">_</span></td>
      <td class="empty_cell_table underscore invisible_font">_</td>
      <td class="cell_table">Кв.<span class="invisible_font">_</span></td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="cell_table">
        Электронный<span class="invisible_font">_</span>адрес<span
          class="invisible_font"
          >_</span
        >(по<span class="invisible_font">_</span>желанию<span
          class="invisible_font"
          >_</span
        >поступающего)<span class="invisible_font">_</span>
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="cell_table">
        Контактный<span class="invisible_font">_</span>телефон<span
          class="invisible_font"
          >_</span
        >(по<span class="invisible_font">_</span>желанию<span
          class="invisible_font"
          >_</span
        >поступающего)<span class="invisible_font">_</span>
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="cell_table">
        Дата<span class="invisible_font">_</span>рождения<span
          class="invisible_font"
          >_</span
        >
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
      <td class="cell_table">Пол<span class="invisible_font">_</span></td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="cell_table">
        Сведения<span class="invisible_font">_</span>о<span
          class="invisible_font"
          >_</span
        >гражданстве<span class="invisible_font">_</span>(отсутствии<span
          class="invisible_font"
          >_</span
        >гражданства)<span class="invisible_font">_</span>
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <th class="cell_table">
        Наименование<span class="invisible_font">_</span>и<span
          class="invisible_font"
          >_</span
        >реквизиты<span class="invisible_font">_</span>документа,<span
          class="invisible_font"
          >_</span
        >удостоверяющего<span class="invisible_font">_</span>личность<span
          class="invisible_font"
          >_</span
        >
      </th>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="cell_table">серия<span class="invisible_font">_</span></td>
      <td width="66.6px" class="empty_cell_table underscore invisible_font">
        _
      </td>
      <td class="cell_table">№<span class="invisible_font">_</span></td>
      <td width="73px" class="empty_cell_table underscore invisible_font">_</td>
      <td class="cell_table">
        ,<span class="invisible_font">_</span>выдан<span class="invisible_font"
          >_</span
        >
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="empty_cell_table underscore invisible_font">_</td>
      <td class="cell_table">когда<span class="invisible_font">_</span></td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <th class="cell_table">
        Сведения<span class="invisible_font">_</span>об<span
          class="invisible_font"
          >_</span
        >образовании<span class="invisible_font">_</span>
      </th>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="empty_cell_table" align="center">
        <sup>(уровень образования)</sup>
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="cell_table">
        Реквизиты<span class="invisible_font">_</span>документа(ов)<span
          class="invisible_font"
          >_</span
        >об<span class="invisible_font">_</span>образовании<span
          class="invisible_font"
          >_</span
        >
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <table>
    <tr>
      <td class="cell_table">серия<span class="invisible_font">_</span></td>
      <td width="66.6px" class="empty_cell_table underscore invisible_font">
        _
      </td>
      <td class="cell_table">№<span class="invisible_font">_</span></td>
      <td width="73px" class="empty_cell_table underscore invisible_font">_</td>
      <td class="cell_table">
        Дата<span class="invisible_font">_</span>выдачи<span
          class="invisible_font"
          >_</span
        >
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <br />
  <p align="center"><b>ЗАЯВЛЕНИЕ</b></p>
  <p align="justify">
    <b>
      Прошу допустить меня к участию в конкурсе для поступления в ФГБОУ ВО
      СибГМУ Минздрава России (далее СибГМУ) на первый курс на
      специальность/направления подготовки по программам высшего образования:
    </b>
  </p>
  <table border="1" align="justify">
    <tr>
      <td rowspan="3" align="center">№<br />П/П</td>
      <td rowspan="3" align="center">
        Специальность/
        <br />
        направление подготовки
        <br />
        <sub>(заполняются из справочника №1)</sub>
      </td>
      <td colspan="5" align="center">Основа обучения</td>
    </tr>
    <tr>
      <td class="grey_bg_color" colspan="4" align="center">
        Контрольные цифры приёма
      </td>
      <td class="grey_bg_color" rowspan="2" align="center">
        Договор
      </td>
    </tr>
    <tr>
      <td class="small_font" align="center">
        особое право
      </td>
      <td class="small_font" align="center">
        целевой приём
      </td>
      <td class="small_font" align="center">
        без
        <br />вступительных <br />испытаний
      </td>
      <td class="small_font" align="center">
        общий
        <br />конкурс
      </td>
    </tr>
HTML;

for ($i = 1; $i<=3; $i++) {
  $page .= <<<HTML
    <tr>
        <td>$i.</td>
        <td></td>
        <td class="ghost_font" align="center">ПОДПИСЬ</td>
        <td class="ghost_font" align="center">ПОДПИСЬ</td>
        <td class="ghost_font" align="center">ПОДПИСЬ</td>
        <td class="ghost_font" align="center">ПОДПИСЬ</td>
        <td class="ghost_font" align="center">ПОДПИСЬ</td>
    </tr>
HTML;
}
$page .= <<<HTML
  </table>

  <br />
  <p align="justify">
    <b>Сведения о сдаче ЕГЭ и его результатах (со слов абитуриента):</b>
  </p>
  <table>
    <tr>
      <td>
        <table border="1" align="justify">
          <tr>
            <th>Предмет</th>
            <th>Балл</th>
            <th>Год</th>
          </tr>
HTML;

for ($i = 1; $i<=3; $i++) {
  $page .= <<<HTML
          <tr>
            <td class="invisible_font">.</td>
            <td class="invisible_font">.</td>
            <td class="invisible_font">.</td>
          </tr>
HTML;
}
$page .= <<<HTML
        </table>
      </td>
      <td class="invisible_font">.</td>
      <td>
        <table border="1" align="justify">
          <tr>
            <th>Предмет</th>
            <th>Балл</th>
            <th>Год</th>
          </tr>
HTML;
for ($i = 1; $i<=3; $i++) {
  $page .= <<<HTML
          <tr>
            <td class="invisible_font">.</td>
            <td class="invisible_font">.</td>
            <td class="invisible_font">.</td>
          </tr>
HTML;
}
$page .= <<<HTML
        </table>
      </td>
    </tr>
  </table>

  <br />
  <p align="justify">
    <b>
      Сведения о результатах победителя или призёра олимпиады школьников (ОШ):
    </b>
  </p>
  <table border="1" align="justify">
    <tr>
      <th>Наименование<br />предмета</th>
      <th>Степень<br />диплома</th>
      <th>Год</th>
      <td align="center">
        <b>Наименование ОШ<br /></b><sub>(заполняется из справочника №2)</sub>
      </td>
      <th>№ диплома</th>
    </tr>
HTML;
for ($i = 1; $i<=3; $i++) {
  $page .= <<<HTML
    <tr>
      <td class="invisible_font">.</td>
      <td class="invisible_font">.</td>
      <td class="invisible_font">.</td>
      <td class="invisible_font">.</td>
      <td class="invisible_font">.</td>
    </tr>
HTML;
}

$page .= <<<HTML
  </table>

  <br />
  <p align="justify">
    <b>Прошу допустить к вступительным испытаниям по следующим предметам: </b>
  </p>
  <table border="1" align="justify">
    <tr>
      <th>Наименование<br />предмета</th>
      <th>Экзамен<br />СибГМУ</th>
      <th>Наименование<br />предмета</th>
      <th>Экзамен<br />СибГМУ</th>
      <th>Наименование<br />предмета</th>
      <th>Экзамен<br />СибГМУ</th>
    </tr>
    <tr>
      <td>Химия</td>
      <td class="ghost_font" align="center">ПОДПИСЬ</td>
      <td>Русский язык</td>
      <td class="ghost_font" align="center">ПОДПИСЬ</td>
      <td>Физика</td>
      <td class="ghost_font" align="center">ПОДПИСЬ</td>
    </tr>
    <tr>
      <td>Биология</td>
      <td class="ghost_font" align="center">ПОДПИСЬ</td>
      <td>Математика</td>
      <td class="ghost_font" align="center">ПОДПИСЬ</td>
      <td>Общество</td>
      <td class="ghost_font" align="center">ПОДПИСЬ</td>
    </tr>
    <tr>
      <td>Менеджмент</td>
      <td class="ghost_font" align="center">ПОДПИСЬ</td>
      <td class="invisible_font">.</td>
      <td class="ghost_font" align="center">ПОДПИСЬ</td>
      <td class="invisible_font">.</td>
      <td class="ghost_font" align="center">ПОДПИСЬ</td>
    </tr>
  </table>

  <br />
  <table>
    <tr>
      <th class="cell_table" align="justify">
        Основания<span class="invisible_font">_</span>для<span
          class="invisible_font"
          >_</span
        >участия<span class="invisible_font">_</span>в<span
          class="invisible_font"
          >_</span
        >конкурсе<span class="invisible_font">_</span>по<span
          class="invisible_font"
          >_</span
        >результатам<span class="invisible_font">_</span>вступительных<span
          class="invisible_font"
          >_</span
        >испытаний<span class="invisible_font">_</span>СибГМУ:<span
          class="invisible_font"
          >_</span
        >
      </th>
    </tr>
    <tr>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
    <tr>
      <td class="empty_cell_table" align="center">
        <sup>(заполнить из справочника №3)</sup>
      </td>
    </tr>
  </table>

  <br />
  <p align="left">
    <b>А) Льгота для зачисления без вступительных испытаний</b>
  </p>
  <p>
    <img src="checked.svg" />
    <label>
      Победитель/призёр/член сборной заключительного этапа Всероссийской ОШ
    </label>
    <img src="checked.svg" />
    <label>
      Победитель/призёр олимпиады школьников по профильному предмету
    </label>
  </p>
  <br />
  <p align="left">
    <b>Б) Льгота для зачисления с использованием особого права</b>
  </p>
  <p>
    <img src="unchecked.svg" />
    <label>Сирота или оставшийся без попечения родителей</label>
    <img src="unchecked.svg" />
    <label> Инвалид, ребёнок-инвалид</label>
  </p>
  <table>
    <tr>
      <td class="cell_table">
        Документы,<span class="invisible_font">_</span>подтверждающие<span
          class="invisible_font"
          >_</span
        >право<span class="invisible_font">_</span>
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <p align="justify">
    <b>
      Нуждаюсь в создании специальных условий при проведении вступительных
      испытаний в связи с ограниченными возможностями здоровья или инвалидностью
    </b>
  </p>
  <p>
    <img src="unchecked.svg" /> <label> да</label> <img src="unchecked.svg" />
    <label> нет</label>
  </p>
  <br />
  <table>
    <tr>
      <th class="cell_table">
        В)<span class="invisible_font">_</span>Целевой<span
          class="invisible_font"
          >_</span
        >приём<span class="invisible_font">_</span>
      </th>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
    <tr>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table" align="center">
        <sup>(регион заполняется из справочника №5)</sup>
      </td>
    </tr>
  </table>

  <p align="justify">
    При поступлении по пунктам А, Б, В, указать в какую организацию подано
    (будет подано) заявление о
  </p>
  <table>
    <tr>
      <td class="cell_table">
        согласия<span class="invisible_font">_</span>на<span
          class="invisible_font"
          >_</span
        >зачисления<span class="invisible_font">_</span>по<span
          class="invisible_font"
          >_</span
        >условиям<span class="invisible_font">_</span>
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <br />
  <p align="justify">
    <b>Г) Сведения о наличии индивидуальных достижений:</b>
  </p>
  <p>
    <img src="unchecked.svg" /> <label> да</label> <img src="unchecked.svg" />
    <label>нет</label>
  </p>
  <table>
    <tr>
      <td class="cell_table">
        Документы,<span class="invisible_font">_</span>подтверждающие<span
          class="invisible_font"
          >_</span
        >наличие<span class="invisible_font">_</span>индивидуальных<span
          class="invisible_font"
          >_</span
        >достижений<span class="invisible_font">_</span>
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
    <tr>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table" align="center">
        <sup>(заполнить из справочника №4)</sup>
      </td>
    </tr>
  </table>

  <p align="justify">
    <b>Иностранный язык</b> (основной): <img src="unchecked.svg" />
    <label>английский</label> <img src="unchecked.svg" />
    <label> немецкий</label> <img src="unchecked.svg" />
    <label> французский</label> <img src="unchecked.svg" />
    <label> не изучался</label>
  </p>
  <p align="justify">
    <b>Способ возврата поданных документов</b>
    в случае непоступления на обучение (в случае предоставления оригиналов
    документов)
    <img src="unchecked.svg" /> <label> лично</label>
    <img src="unchecked.svg" /> <label> доверительное лиц</label>
    <img src="unchecked.svg" />
    <label> почтой</label>
  </p>
  <p align="justify">
    <b>На период обучения нуждаюсь в общежитии</b>: <img src="unchecked.svg" />
    <label> да</label> <img src="unchecked.svg" /> <label> нет</label>
  </p>
  <p align="justify">
    Являюсь соотечественником в соответствии со статьёй 17 Федерального закона
    №99-Ф3 от 24 мая 1999 или в соответствии с Государственной программой
    <img src="unchecked.svg" /> <label> да</label> <img src="unchecked.svg" />
    <label> нет</label>
  </p>
  <table>
    <tr>
      <td class="cell_table">
        Подтверждающие<span class="invisible_font">_</span>документы<span
          class="invisible_font"
          >_</span
        >
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
    <tr>
      <td class="empty_cell_table underscore invisible_font">_</td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
  </table>

  <br />
  <p align="justify">
    <b>Я ознакомлен(а)</b>
    (в том числе через информационные системы общего пользования):
  </p>
  <p align="justify">
    - с копией лицензии на осуществление образовательной деятельности (с
    приложениями);
  </p>
  <p align="justify">
    - с копией свидетельства о государственной аккредитации (с приложением) или
    с информацией об отсутствии указанного свидетельства;
  </p>
  <p align="justify">
    - с информацией о предоставляемых поступающим особых правах и преимуществах
    при приеме на обучение по программам бакалавра, специалитета и магистратуры;
  </p>
  <p align="justify">
    - с правилами приёма, утверждёнными ФГБОУ ВО СибГМУ Минздрава России
    самостоятельно, в том числе с правилами подачи апелляции по результатам
    вступительных испытаний, проводимых ФГБОУ ВО СибГМУ Минздрава России
    самостоятельно;
  </p>
  <p align="justify">
    - с датами завершения представления поступающим оригинала документа
    установленного образца;
  </p>
  <p align="justify">
    - с датами завершения приёма заявлений о согласии на зачисление;
  </p>
  <p align="justify">
    - с информацией о необходимости указания в заявлении о приёме достоверных
    сведений и предоставления подлинных документов.
  </p>
  $podpis

  <br />
  <p align="justify">
    <b>
      При поступлении на обучение на места в рамках контрольных цифр приёма
      подтверждаю </b
    >:
  </p>
  <p align="justify">
    - отсутствие диплома специалиста, бакалавра, магистра;
  </p>
  <p align="justify">
    - одновременную подачу заявлений о приёме не более, чем в 5 организаций
    высшего образования, включая ФГБОУ ВО СибГМУ Минздрава России;
  </p>
  <p align="justify">
    - подачу заявлений о приёме не более, чем по 3 специальностям и (или)
    направлениям подготовки в ФГБОУ ВО СибГМУ Минздрава России;
  </p>
  <p align="justify">
    - подачу заявления о приёме на места в рамках контрольных цифр приёма, на
    основании особых прав, указных в Правилах приёма в ФГБОУ ВО СибГМУ Минздрава
    России, только в Университет и только на одну
  </p>
  <table>
    <tr>
      <td class="cell_table">
        образовательную<span class="invisible_font">_</span>программу:<span
          class="invisible_font"
          >_</span
        >
      </td>
      <td class="empty_cell_table underscore invisible_font">_</td>
    </tr>
    <tr>
      <td class="empty_cell_table invisible_font">_</td>
      <td class="empty_cell_table" align="center">
        <sup>(указать наименование, шифр)</sup>
      </td>
    </tr>
  </table>

  $podpis

  <p align="left">
    «__» __________ 201__ г.
  </p>
</div>

HTML;



require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
$mpdf->WriteHTML($page);
$mpdf->Output();
?>
