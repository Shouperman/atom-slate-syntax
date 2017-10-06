<?php namespace App\Examples;

use Some\Other\Example;
use App\Helper;
use App\SomeTrait as Something;
use App\MyInterface;

class PHP_Example extends Example implements MyInterface
{
    use Something;

    /**
     * Block Comment
     *
     * @var string
     */
    const IS_AWESOME = false;
    const REG = '/^def/i';

    protected $haystack = [
        'abcdef',
        'defghi',
        'ghijkl'
    ];

    /**
     * Poke around.
     *
     * @return string
     */
    public function checkHaystack(Array $none = null)
    {
        $counter = 0;
        foreach($this->haystack as $h) {
          $found = preg_match(REG, $h);
          if($found) {
            $counter++;
            echo "Matched on " . $h;
          }
        }
    }

    public function uselessSwitch($param = false)
    {
        $exampleClass = new Example( $param );

        switch( $exampleClass->getVal() ) {
            case 'a':
                echo 'It was a';
                break;
            default:
                echo Helper::missing($param);
                break;
        }
    }

    public function doSomething($number = 0)
    {
        if ($number >= 0) {
            $this->checkHaystack($number);
        }
        else {
            $this->uselessSwitch('a');
        }
    }
}
