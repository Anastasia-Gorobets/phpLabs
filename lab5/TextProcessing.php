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
        return explode('.', $this->text);
    }

    public function countSentenses()
    {
        $sentences = $this->getSentensesFromText();
        return "<span>Количество предложений в тексте:</span>" . (count($sentences) - 1) . "<br>";
    }

    public function countWords()
    {
        $wordCounts = 0;
        foreach ($this->getSentensesFromText() as $key => $sent) {
            if ($key == (count($this->getSentensesFromText()) - 1)) break;
            $wordCounts += count(explode(" ", trim($sent)));
        }
        return "<span>Количество слов в текcте:</span>$wordCounts<br>";
    }

    public function printInfo()
    {
        echo "<span>Исходный текст:</span><br> $this->text<br>";
        echo $this->countSentenses();
        echo $this->countWords();
    }
}