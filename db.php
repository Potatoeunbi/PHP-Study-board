 <?php
  session_start();
  $host = 'localhost';
   $user = 'user1';
   $pw = '1234';
   $db_name = 'board';

   $conn = mysqli_connect($host, $user, $pw, $db_name) or die("MariaDB 접속 실패"); //db 연결
  $conn->set_charset("utf8");

  function mq($sql){
    global $conn;
    return mysqli_query($conn, $sql);
    //$conn->query($sql);
  }

  ?>