<?php
class Number {
    /**
     * @var int|float $number
     */
    private $number;

    /**
     * @param int|float $number
     */
    public function setNumber($number) {
        $this->number = $number;
    }

    /**
     * @return int|float
     */
    public function getNumber() {
        return $this->number;
    }
}
?>

<!--  Now -->
<?php
class Number {
    private int|float $number;

    public function setNumber(int|float $number): void {
        $this->number = $number;
    }

    public function getNumber(): int|float {
        return $this->number;
    }
}
