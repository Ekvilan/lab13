<?php
//�������� ����� ������������ � ������� �����. ��������� �������� � ���������� $city. �������� �� ����� ����� '��� �����: %�����%'.
        <form action="" method="GET">
        <input type="text" name="city">
        <input type="submit">
        </form>
             <?php
                //���� ����� ���� ���������� � ����� �� ������:
                if (!empty($_REQUEST['city'])) {
                $city = $_REQUEST['city'];
                echo '��� �����: '.$city;
                }
             ?>

������ ���������� ������ ���, ����� ������������ �� ��� ������� ���� � ������� ����.
    <form action="" method="GET">
    <input type="text" name="city">
    <input type="submit">
    </form>
    <?php
    //���� ����� ���� ���������� � ����� �� ������:
    if (isset($_REQUEST['city'])) {
    $city = strip_tags($_REQUEST['city']);
    echo '��� �����: '.$city;
    }
    ?>
�������� ���, ����� ����� ����� �������� ����������.
  <?php
  //���� ����� ������ - ������� �����
  if (isset($_REQUEST['city'])) {
  ?>
  <form action="" method="GET">
  <input type="text" name="name">
  <input type="submit">
  </form>

  <?php
  //���� ����� ���� ���������� � ����� �� ������:
  if (isset($_REQUEST['city'])) {
  $city = strip_tags($_REQUEST['age']);
  echo '��� �����: '.$age;
  }
  ?>
�������� ��� ������������ � ������� �����. ��������� �������� � ���������� $name. �������� �� ����� ����� '������, %���%'.
   <?php
    if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo 'Hello, ' . $name;
    }
    ?>
    <form action="" method="get">
     <input type="text" name="name" placeholder="������� ���">
     <input type="submit">
    </form>
�������� � ������������ ���, �������, � ����� ��������� ��� ������ ��������� (��� �������� � textarea). �������� ��� ������ �� ����� � �������, ����������� ��� ������ �������. ������������ � ���, ����� ������������ �� ��� ������� ���� (������ �������� ��) � ����� ������� ������� ����.
      if (isset($_REQUEST['name']) and isset($_REQUEST['age']) and isset($_REQUEST['text'])) {
      $name = strip_tags($_REQUEST['name']);
      $age = strip_tags($_REQUEST['age']);
      $text = strip_tags($_REQUEST['text']);
      echo '������ ' . $name . ', ' . $age . '<br>���� ���������: ' . $text;
      }
                    <form action="" method="get">
               <input type="text" name="name" placeholder="������� ���">
               <input type="text" name="age" placeholder="������� �������">
               <textarea name="text" id="" cols="30" rows="10" placeholder="������� ���������"></textarea>
               <input type="submit">
              </form>

�������� ������� ������������. ���� ����� ���� ���������� � ������ �������, �� �������� ��� �� �����, � ����� �������. ���� �� ����� �� ���� ���������� (��� ����� ��� ������ ������ �� ��������) - ������ �������� ��.

    <?php
    if (isset($_REQUEST['age']) ){
        $age = $_REQUEST['age'];
        echo $age;
    }

    if (!isset($_REQUEST['age'])):
        ?>
     <form action="" method="get">
     <input name="age" placeholder="������� ��� �������">
     <input type="submit">
     </form>
    <?php endif; ?>

�������� � ������������ ����� � ������ (� �������� ������ ���� �����������). �������� �� � ������� $login � ������� $pass, ���������� � �����. ���� ��� ����� - �������� '������ ��������!', � ��������� ������ - '������ ��������!'. �������� ���, ����� ������ ������� �������� ������� � �������, ������� ���� ������������.
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
     <input type="text" name="login" placeholder="������� �����">
     <input type="password" name="password" placeholder="������� ������">
     <input type="submit">
    </form>

�������� ��� ������������ � ������� �����. ��������� �������� � ���������� $name. �������� ���, ����� ����� �������� ����� �������� �� ����� �� ���������.
        <?php
        $name = '';
        if (isset($_REQUEST['name'])) {
            $name = $_REQUEST['name'];
            echo $name;
        }
        ?>
        <form action="" method="post">
         <input type="text" name="name" placeholder="������� ���" value="<?=$name;?>">
         <input type="submit">
        </form>
�������� � ������������ ���, � ����� ��������� ��� ������ ��������� (textarea). �������� ���, ����� ����� �������� ����� �������� ��� ����� �� ���������.

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
���� ������ 'ahb acb aeb aeeb adcb axeb'. �������� ���������, ������� ������ ������ ahb, acb, aeb �� �������: ����� 'a', ����� ������, ����� 'b'.

    echo preg_replace('#a.b#', '!', 'ahb acb aeb aeeb adcb axeb'); 

���� ������ 'aba aca aea abba adca abea'. �������� ���������, ������� ������ ������ abba adca abea �� �������: ����� 'a', 2 ����� �������, ����� 'a'.

    echo preg_replace('#a..a#', '!', 'aba aca aea abba adca abea'); 

���� ������ 'aba aca aea abba adca abea'. �������� ���������, ������� ������ ������ abba � abea, �� �������� adca.

    echo preg_replace('#ab.a#', '!', 'aba aca aea abba adca abea'); 

���� ������ 'aa aba abba abbba abca abea'. �������� ���������, ������� ������ ������ aba, abba, abbba �� �������: ����� 'a', ����� 'b' ����� ���������� ���, ����� 'a'.

    echo preg_replace('#ab+a#', '!', 'aa aba abba abba abca abea'); 

���� ������ 'aa aba abba abbba abca abea'. �������� ���������, ������� ������ ������ aa, aba, abba, abbba �� �������: ����� 'a', ����� 'b' ����� ���������� ��� (� ��� ����� �������� ����), ����� 'a'.

 echo preg_replace('#ab*a#', '!', 'aa aba abba abba abca abea'); 

���� ������ 'aa aba abba abbba abca abea'. �������� ���������, ������� ������ ������ aa, aba �� �������: ����� 'a', ����� 'b' ���� ��� ��� ��������, ����� 'a'.

 echo preg_replace('#ab?a#', '!', 'aa aba abba abba abca abea'); 

���� ������ 'ab abab abab abababab abea'. �������� ���������, ������� ������ ������ �� �������: ������ 'ab' ����������� 1 ��� ����� ���.

    echo preg_replace('#(ab)+#', '!', ' ���� ���� �������� ����'); 

���� ������ 'a.a aba aea'. �������� ���������, ������� ������ ������ a.a, �� �������� ���������.

    echo preg_replace('#a\.a#', '!', 'a.a aba aea'); 

���� ������ '2+3 223 2223'. �������� ���������, ������� ������ ������ 2+3, �� �������� ���������.

 echo preg_replace('#2\+3#', '!', '2+3 223 2223'); 

���� ������ '23 2+3 2++3 2+++3 345 567'. �������� ���������, ������� ������ ������ 2+3, 2++3, 2+++3, �� �������� ��������� (+ ����� ���� ����� ����������).

 echo preg_replace('#2\++3#', '!', '23 2+3 2++3 2+++3 345 567'); 

���� ������ '23 2+3 2++3 2+++3 445 677'. �������� ���������, ������� ������ ������ 23, 2+3, 2++3, 2+++3, �� �������� ���������.

 echo preg_replace('#2\+*3#', '!', '23 2+3 2++3 2+++3 445 677'); 

���� ������ '*+ *q+ *qq+ *qqq+ *qqq qqq+'. �������� ���������, ������� ������ ������ *q+, *qq+, *qqq+, �� �������� ���������.

 echo preg_replace('#\*q+\+#', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+');

���� ������ '*+ *q+ *qq+ *qqq+ *qqq qqq+'. �������� ���������, ������� ������ ������ *+, *q+, *qq+, *qqq+, �� �������� ���������.

 echo preg_replace('#\*q*\+#', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+'); 

���� ������ 'aba accca azzza wwwwa'. �������� ���������, ������� ������ ��� ������ �� ����� ������� ����� ����� 'a', � ������� ������ �� ��� �� '!'. ����� ������� a ����� ���� ����� ������ (����� a).

    echo preg_replace('#a.+?a#', '!', 'aba accca azzza wwwwa');

?>