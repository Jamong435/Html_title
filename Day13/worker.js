// var n=0;

// while(true){
//     n++;
//     //document.getElementById('hh').innerHTML=n;
//     //worker는 UI변경작을 할 수 없음

//     //Main Thread에게 출력을 대신해달라고 요청
//     postMessage(n); 
//     //while문은 너무 속도가 빨라서 제대로 동작 안될 수있음
// }

var n=0;

function fff(){
    n++;
    postMessage(n);

    setTimeout(fff, 500); //500ms후에 fff함수 실행
}

fff();