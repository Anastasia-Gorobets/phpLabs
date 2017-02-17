<?php


class TextProcessing
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    private function getSentensesFromText()
    {
        $arr= explode('.', $this->text);
        foreach ($arr as $key=>$item) {
            if(empty($item)){
                unset($arr[$key]);
            }

        }
        return $arr;
    }

    private function countSentenses()
    {
        $sentences = $this->getSentensesFromText();
        return "<span>Количество предложений в тексте:</span>" . (count($sentences)) . "<br>";
    }

    private function countWords()
    {
        $arr=preg_split('/[\s,.;]/',$this->text);
        foreach ($arr as $key=>$item) {
            if(empty($item)){
                unset($arr[$key]);
            }
        }
        $wordCounts=count($arr);
        return "<span>Количество слов в текcте:</span>$wordCounts<br>";
    }

    public function printInfo()
    {
        echo "<span>Исходный текст:</span><br> $this->text<br>";
        echo $this->countSentenses();
        echo $this->countWords();
    }
}
