function show(){
    //document.write('show!!!');
    alert('show');
}

//다른곳에서 show()를 사용하게 하려면 추출(export)해야 함
export default show; //default 키워드를 가진 것은 문서 1개 있어야 함

//여러개 export가능
export function aaa(){
    alert('aaa');
}

//export default aaa; // ERROR - 1개의 문서에는 default가 1개만 가능
export const num=100;
export let age= "변수";
