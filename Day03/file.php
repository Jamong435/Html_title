<?php
header('Content-Type:text/html; charset=utf-8')
// post 배열로 받아야하는데 파일은 몇만 바이트 덩어리다, 이건 비효율적이라고 느꼈다.
// 파일로 몇만바이트를 보낸다하여도 웹서버에서는 이것이 png인지 jpg인지 못알아먹는다
// 그래서 파일 안에 파일 정보를 설명하는 정보 또한 보내는것입니다. 그것이 header입니다 
//이렇게 파일을 설명하는 데이타들은 메타데이타라 일컷습니다.
// 웹서버에서는 이렇게 데이타뭉치가 왔을떄는 tmp(임시폴더)에 저장을합니다. 
//그리고 header문서만 web으로온다. 데이터가 왔다면 서버는 헤더문서와 실제 파일를 
//나눠서 헤더문서는 웹으로 실제 파일은 임시저장소로 가는것입니다.

//전달된 추가데이터는 $_FILES 라는 배열변수에 저장됩니다.
//$_FILES라는 배열은 5칸짜리로 구성되어있습니다.
//WEB BROSER에서 HEADER 요소 5개를 쓰면 WEB SERVER에서 5개의 정보칸에 들어가는겁니다. 

$files= $_FILES['aaa'];

    //$file은 배열변수임 -5칸 짜리임
    //전송된 원본파일명
    $srcName= $file['name'];
    //파일 타입
    $fileType= $file['type'];
    //파일 사이즈
    $fileSize= $file['size'];
    //업로드된 파일이 잠시 보관된 저장소의 경로
    $tmpName= $file['tmp_name'];

    echo "$srcName<br>";
    echo "$fileType<br>";
    echo "$fileSize<br>";
    echo "$tmpName<br>";


//임시저장소에 있는 것 임시저장소의 위치를 tmp파일안에 aaa값으로 넣어주세요 라는 계념이다.
//그런데 aaa ,bbb,ccc,ddd, 이렇게 이름을 언제 다 만드나. 파일이 몇십개이면? 그래서 대부분 시간을 파일명으로 저장시킨다
// $dstName='./tmp/aaa.jpg'; .jpg로 보내든 .png로 보내든 jpg로 저장된다.
$dstName='./tmp/'. date('Ymdhis') . $srcName;
move_uploaded_file($tmpName,$dstName);












?>
