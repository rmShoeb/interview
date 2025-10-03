<?php

class Calculator{
    private int $operand_1;
    private int $operand_2;
    private $message = array("result"=>0, "error"=>"");

    /**
     * constructor of this class
     * @param operand_1: an integer
     * @param operand_2: an integer
     * sets the object attributes equal to the parameters
     */
    public function __construct(int $operand_1, int $operand_2){
        $this->operand_1 = $operand_1;
        $this->operand_2 = $operand_2;
    }

    /**
     * function calculate
     * @param operator: string, denoting the operator to use for calculation
     * calculates result with this object's attributes
     * returns this object's $message attribute (which contains the result and errors, if any)
     */
    public function calculate(string $operator){
        switch ($operator){
            case "add":
                $this->message["result"] = $this->operand_1+$this->operand_2;
                break;
            case "sub":
                $this->message["result"] = $this->operand_1-$this->operand_2;
                break;
            case "mul":
                $this->message["result"] = $this->operand_1*$this->operand_2;
                break;
            case "div":
                if($this->operand_2 != 0){
                    $this->message["result"] = $this->operand_1/$this->operand_2;
                }
                else{
                    $this->message["error"] = "Cannot Scream by 0!";
                }
                break;
            default:
                $this->message["error"] = "Select an operator!";
                break;
        }
        return $this->message;
    }
}

?>