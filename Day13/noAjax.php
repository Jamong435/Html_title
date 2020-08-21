<?php
 
 header('Content-Type:text/html; charset=utf-8');
 $name=$_GET['name']; // 슈퍼 전역변수에 저장되어진다. 
 $email=$_GET['email']; // 슈퍼 전역변수에 저장되어진다. 
 //php는 웹서버에서만 동작한다 

//  echo "$name $email 이 등록되었습니다"
//기존 html페이지가 없어짐..이 php로 페이지가 변경되어있기에
//기존 html에 일부분에 echo값을 보여주고싶다면
//echo로 기존 페이지를 모두 작성해야함

echo("
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title></title>
    </head>
    <body>
        
        <h3>회원가입 페이지</h3>

        <form action='./noAjax.php' method='GET'>
            <input type='text' name='name' value='$name'>
            <input type='text' name='email' value='$email'>

            <input type='submit'>
        </form>

        <hr>
        <textarea cols='50' rows='3'>$name $email 이 등록되었습니다</textarea>

    </body>
</html>    


")




?>