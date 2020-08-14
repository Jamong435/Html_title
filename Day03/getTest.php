<?php

header('Content-Type:text/html; charset=utf-8');



// printf같은 말 echo
//echo "hello";

//여기까지 쓰면 그냥 읽어지기만한다.왜? 서버가없으니까. 이걸 사용하려면
//php해독기를 이용하거나 php를 읽을수있는 닷홈같은 서버를 이용해야한다.
//우리는 지금 연습삼아서 html을 사이트로 열어보는거지 컴퓨터에 저장되있는 내용이아닌
//우리가 만들어서 서버에 올려야 발동이되는것이다.


//form 요소로 부터 get방식으로 전달된 값을 받기
//php는 get방식으로 전달된 값들을 $_get 이라는 이름의 배열변수에 가지고 있음.
//GET은 배열이라고 생각하면됩니다 주는쪽에서 GET으로 배열을만들어서 준다면
//생성자 이름만 구분시켜서 PHP에서 받기만하면되는것입니다.


$title= $_GET['title'];
$message = $_GET['msg'];

echo "이름:" . $_GET['title']; //echo는 하나만 보여질수있습니다 그럼 이름 과 gettitle을 같이하고싶다면 더하기 연산자 . 을쓰시면됩니다 
echo "<br>";  //웹안에서도 꺽쇄를 알아봅니다 <>
// echo "메세지: $_GET['msg']"; $를알아보니까 이렇게 써도되는데 ''값을 알아듣지를못합니다.그래서 생각한게 변수를바꾸는겁니다
echo "메세지: $message";  

echo "<h2>제목: $title <h2>";
echo "<p>메세지:$message <p>";


?>