<?php
abstract class Film
{
    public  $title;
    public  $duration;
    public  $releaseYear;
    public  $quantity;
    public  $category;
    public  $productionCost;

    /**
     * Constructor
     */
    public function __construct(
        $title,
        $duration,
        $releaseYear,
        $quantity,
        $category,
        $productionCost
    ) {
        $this->title = $title;
        $this->duration = $duration;
        $this->releaseYear = $releaseYear;
        $this->quantity = $quantity;
        $this->category = $category;
        $this->productionCost = $productionCost;
    }

    // Abstract method
    abstract public function showInfo(): void;
}

//
class ComedyFilm extends Film
{
    public  $humorLevel;

    public function __construct(
        $title,
        $duration,
        $releaseYear,
        $quantity,
        $category,
        $productionCost,
        $humorLevel
    ) {
        parent::__construct($title, $duration, $releaseYear, $quantity, $category, $productionCost);
        $this->humorLevel = $humorLevel;
    }

    public function showInfo(): void
    {
        echo "=== COMEDY FILM ===<br>";
        echo "Title: {$this->title}<br>";
        echo "Duration: {$this->duration} minutes<br>";
        echo "Release Year: {$this->releaseYear}<br>";
        echo "Category: {$this->category}<br>";
        echo "Quantity: {$this->quantity}<br>";
        echo "Production Cost: $" . $this->productionCost . "<br>";
        echo "Humor Level: {$this->humorLevel}<br>";
    }
}

/**
 * Action Film class
 */
class ActionFilm extends Film
{
    public int $dangerScenesCount;

    public function __construct(
        $title,
        $duration,
        $releaseYear,
        $quantity,
        $category,
        $productionCost,
        $dangerScenesCount
    ) {
        parent::__construct($title, $duration, $releaseYear, $quantity, $category, $productionCost);
        $this->dangerScenesCount = $dangerScenesCount;
    }

    public function showInfo(): void
    {
        echo "=== ACTION FILM ===<br>";
        echo "Title: {$this->title}<br>";
        echo "Duration: {$this->duration} minutes<br>";
        echo "Release Year: {$this->releaseYear}<br>";
        echo "Category: {$this->category}<br>";
        echo "Quantity: {$this->quantity}<br>";
        echo "Production Cost: $" . $this->productionCost . "<br>";
        echo "Danger Scenes Count: {$this->dangerScenesCount}<br>";
    }
}

/**
 * Documentary Film class
 */
class DocumentaryFilm extends Film
{
    public string $topic;

    public function __construct(
        $title,
        $duration,
        $releaseYear,
        $quantity,
        $category,
        $productionCost,
        $topic
    ) {
        parent::__construct($title, $duration, $releaseYear, $quantity, $category, $productionCost);
        $this->topic = $topic;
    }

    public function showInfo(): void
    {
        echo "=== DOCUMENTARY FILM ===<br>";
        echo "Title: {$this->title}<br>";
        echo "Duration: {$this->duration} minutes<br>";
        echo "Release Year: {$this->releaseYear}<br>";
        echo "Category: {$this->category}<br>";
        echo "Quantity: {$this->quantity}<br>";
        echo "Production Cost: $" . $this->productionCost . "<br>";
        echo "Topic: {$this->topic}<br>";
    }
}
