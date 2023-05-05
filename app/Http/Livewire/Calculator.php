<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public float $result = 0;
    public $number1 = 0;
    public $number2 = 0;
    public string $action = "+";
    public bool $disabled = false;


    public function calculate() {
        $num1 = (float)$this->number1;
        $num2 = (float)$this->number2;

        switch($this->action) {
            case '+': 
                $this->result = $num1 + $num2;
                break;
            case '-':
                $this->result = $num1 - $num2;
                break;
            case '*':
                $this->result = $num1 * $num2;
                break;
            case '/':
                $this->result = $num1 / $num2;
                break;
            case '%':
                $this->result = $num1 % $num2;
                break;
            default:
                 $this->result = 'Invalid Operator';
        }
    }
    
    public function updated($property) {
       if($this->number1 == '' && $this->number2 == '') {
         $this->disabled = true;
       } else {
         $this->disabled = false;
       }
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
