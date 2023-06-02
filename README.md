## МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»<br>
Лабораторная работа №12<br>
"JS"<br>

Выполнил: Акимов И.В.<br>

Проверил: Соболев Е. И.<br>

г. Южно-Сахалинск<br>
2023 год<br>

#### Введениe<br>
Решение задач на php.<br>
Цели и задачи<br>

1.	Спросите город пользователя с помощью формы. Результат запишите в переменную $city. Выведите на экран фразу 'Ваш город: %Город%'.

             <form action="" method="GET">
        <input type="text" name="city">
        <input type="submit">
        </form>
        <?php
        //Если форма была отправлена и город не пустой:
        if (!empty($_REQUEST['city'])) {
        $city = $_REQUEST['city'];
        echo 'Ваш город: '.$city;
        }
        ?>

2.	Решите предыдущую задачу так, чтобы пользователь не мог вводить теги и сломать сайт.

        <form action="" method="GET">
        <input type="text" name="city">
        <input type="submit">
        </form>
        <?php
        //Если форма была отправлена и город не пустой:
        if (isset($_REQUEST['city'])) {
        $city = strip_tags($_REQUEST['city']);
        echo 'Ваш город: '.$city;
        }
        ?>

3.	Сделайте так, чтобы форма после отправки скрывалась.

          <?php
          //Если город пустой - покажем форму
          if (isset($_REQUEST['city'])) {
          ?>
          <form action="" method="GET">
          <input type="text" name="name">
          <input type="submit">
          </form>
     
          <?php
          //Если форма была отправлена и город не пустой:
          if (isset($_REQUEST['city'])) {
          $city = strip_tags($_REQUEST['age']);
          echo 'Ваш город: '.$age;
          }
          ?>

4.	Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'.

           <?php
        if (isset($_REQUEST['name'])) {
            $name = $_REQUEST['name'];
            echo 'Hello, ' . $name;
        }
        ?>
        <form action="" method="get">
         <input type="text" name="name" placeholder="Введите имя">
         <input type="submit">
        </form>


5.	Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.

            if (isset($_REQUEST['name']) and isset($_REQUEST['age']) and isset($_REQUEST['text'])) {
          $name = strip_tags($_REQUEST['name']);
          $age = strip_tags($_REQUEST['age']);
          $text = strip_tags($_REQUEST['text']);
          echo 'Привет ' . $name . ', ' . $age . '<br>Твое сообщение: ' . $text;
          }
                        <form action="" method="get">
                   <input type="text" name="name" placeholder="Введите имя">
                   <input type="text" name="age" placeholder="Введите возраст">
                   <textarea name="text" id="" cols="30" rows="10" placeholder="Введите сообщение"></textarea>
                   <input type="submit">
                  </form>

6.	Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее.

             ?php
        if (isset($_REQUEST['age']) ){
            $age = $_REQUEST['age'];
            echo $age;
        }

        if (!isset($_REQUEST['age'])):
            ?>
         <form action="" method="get">
         <input name="age" placeholder="Введите ваш возраст">
         <input type="submit">
         </form>
        <?php endif; ?>

7.	Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.

        <?php
        $loginFile = 'user';
        $passwordFile = 12345;
        if (isset($_REQUEST['login']) and isset($_REQUEST['password'])) {
            $login = trim($_REQUEST['login']);
            $password = trim($_REQUEST['password']);
            if ($login == $loginFile and $password == $passwordFile) {
                echo 'Success';
            } else {
                echo 'False';
            }
        }
        ?>
        <form action="" method="post">
         <input type="text" name="login" placeholder="Введите логин">
         <input type="password" name="password" placeholder="Введите пароль">
         <input type="submit">
        </form>

8.	Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Сделайте так, чтобы после отправки формы значения ее полей не пропадали.

        <?php
        $name = '';
        if (isset($_REQUEST['name'])) {
            $name = $_REQUEST['name'];
            echo $name;
        }
        ?>
        <form action="" method="post">
         <input type="text" name="name" placeholder="Введите имя" value="<?=$name;?>">
         <input type="submit">
        </form>

9.	Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). Сделайте так, чтобы после отправки формы значения его полей не пропадали.

        <?php
        $message = '';
        $name = '';
        if (isset($_REQUEST['name']) and isset($_REQUEST['message'])) {
            $name = $_REQUEST['name'];
            $message = $_REQUEST['message'];
            echo 'Hello, ' . $name . '<br>' . $message;
        }
        ?>
        <form action="" method="post">
         <input type="text" name="name" placeholder="" value="<?=$name;?>">
         <textarea name="message" id="" cols="30" rows="10" placeholder=""><?=$message;?></textarea>
         <input type="submit">
        </form>

10.	Дана строка 'ahb acb aeb aeeb adcb axeb'. Напишите регулярку, которая найдет строки ahb, acb, aeb по шаблону: буква 'a', любой символ, буква 'b'.

        echo preg_replace('#a.b#', '!', 'ahb acb aeb aeeb adcb axeb'); 

11.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.

        echo preg_replace('#a..a#', '!', 'aba aca aea abba adca abea'); 

12.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba и abea, не захватив adca.

        echo preg_replace('#ab.a#', '!', 'aba aca aea abba adca abea'); 


13.	Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз, буква 'a'. 

        echo preg_replace('#ab+a#', '!', 'aa aba abba abba abca abea'); 

14.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'. 

          echo preg_replace('#ab*a#', '!', 'aa aba abba abba abca abea'); 

15.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'. 

          echo preg_replace('#ab?a#', '!', 'aa aba abba abba abca abea'); 

16.	Дана строка 'ab abab abab abababab abea'. Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз. 

        echo preg_replace('#(ab)+#', '!', ' абаб абаб абабабаб абеа'); 

17.	Дана строка 'a.a aba aea'. Напишите регулярку, которая найдет строку a.a, не захватив остальные. 

        echo preg_replace('#a\.a#', '!', 'a.a aba aea'); 

18.	 Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные. 

          echo preg_replace('#2\+3#', '!', '2+3 223 2223'); 

19.	 Дана строка '23 2+3 2++3 2+++3 345 567'. Напишите регулярку, которая найдет строки 2+3, 2++3, 2+++3, не захватив остальные (+ может быть любое количество). 

          echo preg_replace('#2\++3#', '!', '23 2+3 2++3 2+++3 345 567'); 

20.	 Дана строка '23 2+3 2++3 2+++3 445 677'. Напишите регулярку, которая найдет строки 23, 2+3, 2++3, 2+++3, не захватив остальные. 

          echo preg_replace('#2\+*3#', '!', '23 2+3 2++3 2+++3 445 677'); 

21.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *q+, *qq+, *qqq+, не захватив остальные. 

          echo preg_replace('#\*q+\+#', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+');

22.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *+, *q+, *qq+, *qqq+, не захватив остальные. 

          echo preg_replace('#\*q*\+#', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+'); 

23.	Дана строка 'aba accca azzza wwwwa'. Напишите регулярку, которая найдет все строки по краям которых стоят буквы 'a', и заменит каждую из них на '!'. Между буквами a может быть любой символ (кроме a). 

        echo preg_replace('#a.+?a#', '!', 'aba accca azzza wwwwa');
        
### вывод
научился пользовваться формой и регулярными вывражениями
