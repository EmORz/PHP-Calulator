<?php
namespace CalculatorBundle\Entity;

class Calculator
{
    /**
     * @var float
     */
    private $leftOperand;

    /**
     * @var float
     */
    private $rightOperand;

    /**
     * @var string
     */

    private $operator;

    /**
     * @return float
     */
    public function getLeftOperand(): ?float
    {
        return $this->leftOperand;
    }

    /**
     * @param float $leftOperand
     */
    public function setLeftOperand(float $leftOperand)
    {
        $this->leftOperand = $leftOperand;
    }

    /**
     * @return float
     */
    public function getRightOperand(): ?float
    {
        return $this->rightOperand;
    }

    /**
     * @param float $rightOperand
     */
    public function setRightOperand(float $rightOperand)
    {
        $this->rightOperand = $rightOperand;
    }

    /**
     * @return string
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator(string $operator)
    {
        $this->operator = $operator;
    }


    public function calculateResult():float
    {
        $result =0;

        switch ($this ->getOperator()){
            case "+":
                $result = $this->getLeftOperand() + $this->rightOperand;
                break;
            case "-":
                $result = $this->getLeftOperand() - $this->rightOperand;
                break;
            case "*":
                $result = $this->getLeftOperand() * $this->rightOperand;
                break;
            case "/":
                $result = $this->getLeftOperand() / $this->rightOperand;
                break;
            case "%":
                $result = $this->getLeftOperand() % $this->rightOperand;
                break;
            case "^":
                $result = pow($this->getLeftOperand(), $this->rightOperand);
                break;

    }
        return $result;
    }

}