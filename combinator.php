<?php

class Combinator
{

    private $workArray;
    private $width;
    private $arrayKey;
    private $permuteCount;

    public function __construct($string, $k)
    {
        try { #Обрабатываем ошибки .
            if (strlen($string) == 0) {
                throw new ArrayError('Строка не может быть пустой');
            } else {
                $array = str_split($string);#создаем массив из строки
            }
            if ($k > count($array)) {
                throw new WidthError('Длина не может быть больше данной строки');
            }
            if ($k < 1) {
                throw new WidthError('Ширина не может быть меньше единицы');
            } else {
                $this->workArray = $array;
                $this->width = $k;
                $arrayKey = array_keys($this->workArray);#создаем массив ключей для последующей генерации .
                $this->arrayKey = $arrayKey;
            }
        } catch (ArrayError|WidthError  $e) {
            $e->errorMsg();
            exit();
        }
    }

    function permute()
    {
        $arrayGenKeys = array('');
        $finalArray = array();

        for ($i = 0; $i < $this->width; $i++) #тут я генерирую возможные комбинации .
        {
            $tmpArrElem = array();
            foreach ($arrayGenKeys as $ellGen)
            {
                foreach ($this->arrayKey as $newElem)
                {
                    $tmpArrElem[] = $ellGen . $newElem;
                }
            }
            $arrayGenKeys = $tmpArrElem;
            $arrResClean = $arrayGenKeys;
            for ($j = 0; $j < count($arrayGenKeys); $j++)
            {
                #и убираю дублирующие ключи типа 00 11

                if (count(count_chars($arrayGenKeys[$j], 1)) < $this->width)
                {
                    unset($arrResClean[$j]);
                }
            }


            $this->permuteCount = count($arrResClean); # выделяю количество перестановок.
            $indexArray = [];

            foreach ($arrResClean as $v)
            {
                $indexArray[] = str_split($v);
            }
            for ($v = 0; $v < count($indexArray); $v++) #генерирую финальный массив по ключам из временного массива.
            {
                for ($l = 0; $l < count($indexArray[$v]); $l++)
                {
                    $finalArray[$v][$l] = $this->workArray[$indexArray[$v][$l]];
                }
            }
        }
        return $finalArray;
    }

    public function realPlacement()
    {
        return $this->permuteCount;
    }

    public function placementCounter()
    {
        return self::factorial(count($this->workArray)) /
            (self::factorial(count($this->workArray) - $this->width));
    }


    function factorial($number)
    {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }


}

class ArrayError extends Exception
{
    public $msg;

    public function __construct($msg = "", $code = 0, Throwable $previous = null)
    {
        $this->msg = $msg;
        parent::__construct($msg, $code, $previous);
    }

    public function errorMsg()
    {
        echo "Ошибка : $this->msg \n";
    }
}

class WidthError extends ArrayError
{

}

$string = "abcd";
$width = 3;
$b = new Combinator($string, $width);
$array = $b->permute();
echo "Количество перестановок строки $string из $width элементов = " . $b->placementCounter() . "\n";
echo "Выполнено " . $b->realPlacement() . "\n";

for ($o = 0; $o < count($array); $o++)
{
    for ($m = 0; $m < count($array[$o]); $m++)
    {
        echo trim($array[$o][$m]);
    }
    echo "\n";
}