<?php
class WordArrayHandler{
    private $wordArray;

    //배열에 단어를 초기화
    public function __construct($word){
        $this->wordArray=$word;
    }
    //배열의 길이를 반환
    public function getArrayLength(){
        return count($this->wordArray);
    }
    //배열에서 무작위로 단어를 선택하여 반환합니다.
    public function getRandomWord(){
        $randomIndex=rand(0, $this->getArrayLength()-1);
        return $this->wordArray[$randomIndex];
    }
}

//단어 배열을 생성
$word=array(
    array("사과", "바나나", "오렌지", "포도", "수박"),
    array("사과", "바나나", "오렌지", "포도", "수박"),
    array("사과", "바나나", "오렌지", "포도", "수박")
);

/*
$words1=["사과", "바나나", "오렌지", "포도", "수박"];
$words2=["사과", "바나나", "오렌지", "포도", "수박"];
$words3=["사과", "바나나", "오렌지", "포도", "수박"];
*/
$wordHandler=array('wordHandler1', 'wordHandler2', 'wordHandler3');

for($i=0; $i<count($word); $i++){
    $wordHandler[$i] = new WordArrayHandler($word[$i]);
    echo "선택된 단어: ".$wordHandler[$i]->getRandomWord().'<br>';
}
/*
$wordHandler1=new WordArrayHandler($words1);
$wordHandler2=new WordArrayHandler($words2);
$wordHandler3=new WordArrayHandler($words3);

echo "선택된 단어: ".$wordHandler1->getRandomWord().'<br>';
echo "선택된 단어: ".$wordHandler2->getRandomWord().'<br>';
echo "선택된 단어: ".$wordHandler3->getRandomWord().'<br>';
*/
?>