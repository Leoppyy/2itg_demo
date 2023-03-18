<?php

class SonyEntertainment {
    private string $gamingCompany;
    private int $foundedYear = 1994;


    //constructor/s
    public function __construct(string $gamingCompany, int $foundedYear) {
        $this->gamingCompany = $gamingCompany;
        $this->foundedYear = $foundedYear;
    }

    public function gamingCompany(): string {
        return $this->gamingCompany;
    }


    //setters & getters

    public function getFoundedYear(): int {
        return $this->foundedYear;
    }

    public function setCompany(string $gamingCompany): void {
        $this->gamingCompany = $gamingCompany;
    }

    public function setFoundedYear(int $foundedYear): void {
        $this->foundedYear = $foundedYear;
    }

    public function displayInfo(): void {
        echo "Name of the Gaming Company: " . $this->gamingCompany . "\n";
        echo "Founded Year: " . $this->foundedYear . "\n";
    }
}


//inheritance

/* //with overriding
class  GameConsoles extends SonyEntertainment {
    private $best_franchises;

    public function __construct() {
        parent::__construct();
        $this->best_franchises = "";
    }

    public function setBestFranchises($best_franchises) {
        $this->best_franchises = $best_franchises;
    }

    public function getBestFranchises() {
        return $this->best_franchises;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Here are the Best Franchises of PlayStation over the years: " . $this->best_franchises . "\n";
    }
}
*/


//separate file

<php 
class GameConsoles extends SonyEntertainment {
    private string $latestConsole;

    public function __construct(string $latestConsole) {
        parent::__construct("Sony", 1994);
        $this->latestConsole = $latestConsole;
    }

    public function getLatestConsole(): string {
        return $this->latestConsole;
    }
}

//hierarchical
class HandheldConsoles extends SonyEntertainment {

}



$ps5 = new GameConsoles("PlayStation 5");
$ps5->displayInfo(); // output: Name: Sony, Founded Year: 1946
echo "Latest Console: " . $ps5->getLatestConsole() . "\n"; // output: Latest Console: PlayStation 5


//Objects/Instantiate
$sony1 = new SonyEntertainment("Sony Corporation", 1946);
$sony2 = new SonyEntertainment("Sony Pictures Entertainment", 1987);
$sony3 = new SonyEntertainment("Sony Interactive Entertainment", 1993);

//more instantiation examples
$exclusive1 = new SonyEntertainment("The Last of Us", 2013);
$exclusive2 = new SonyEntertainment("God of War", 2018);
$exclusive3 = new SonyEntertainment("Horizon Forbidden West", 2022);


?>
?>