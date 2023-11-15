<?php


class Blackjack {
    const CARDS_VALUES_MAP =  [
        "two" => 2,
        "three" => 3, 
        "four" => 4, 
        "five" => 5, 
        "six" => 6, 
        "seven" => 7, 
        "eight" => 8, 
        "nine" => 9, 
        "ten" => 10, 
        "jack" => 10, 
        "queen" => 10, 
        "king" => 10
    ];

    private int $total = 0;
    private array $hand;
    private int $aceValue;

    public  function __construct($hand){
        $this->hand = $hand;
    }

    public function play() {
        $this->calcSumPoints();
        $this->addAceValue();
        $maxValueCard = $this->getMaxVaulue();
        if ($this->total < 21) {
            echo "below " . $maxValueCard;
        }
        if ($this->total > 21) {
            echo "above " . $maxValueCard;
        }
        if ($this->total == 21) {
            echo "blackjack";
        }

    }

    /**
     * summerize all values of cards except ace, which being 
     * calculated later
     */
    private function calcSumPoints() {
        foreach ( $this->hand  as $card) {
            if (isset (self::CARDS_VALUES_MAP[$card])) {
                $this->total += self::CARDS_VALUES_MAP[$card];
            }    
        }
    }

    /**
     * add ace value depending on the total of other cards
     * if the total of cards is under 21 it equals 11
     * otherwise it equals 1
     */
    private function addAceValue() {
        if (in_array("ace", $this->hand)) {
            $this->aceValue =  ($this->total < 21) ? 11 : 1;
            $this->total += $this->aceValue;

        }
    }
    // return the card with the highest value

    private function getMaxVaulue()  {
        $cardsValueMap = self::CARDS_VALUES_MAP;
        if (in_array('ace', $this->hand)) {
            $cardsValueMap['ace'] = $this->aceValue;
        }
        $maxValueCard = $this->hand[0];
        foreach ($this->hand as $card) {
            if (isset($cardsValueMap[$card])) {
                if ($cardsValueMap[$card] > $cardsValueMap[$maxValueCard]) {
                    $maxValueCard = $card;
                }
            }    
        }
        return $maxValueCard;
    }


}

$hand = [ "three", "king", "ace"];

$blackjack = new Blackjack($hand);
$blackjack->play();
