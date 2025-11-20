<?php

/**
 * Abstract class Film
 */
abstract class Film
{
    protected $title;
    protected $duration;
    protected $releaseYear;
    protected $quantity;
    protected $category;
    protected $productionCost;

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

    // Public methods
    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    public function setReleaseYear($releaseYear)
    {
        $this->releaseYear = $releaseYear;
    }

    // Abstract methods
    abstract public function getProductionCost();
    abstract public function setProductionCost($cost);
    abstract public function getCategory();
    abstract public function setCategory($category);
    abstract public function showInfo();
}

/**
 * Comedy Film class
 */
class ComedyFilm extends Film
{
    private $humorLevel;

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

    public function setHumorLevel($level)
    {
        $this->humorLevel = $level;
    }

    public function getProductionCost()
    {
        return $this->productionCost;
    }

    public function setProductionCost($cost)
    {
        $this->productionCost = $cost;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function showInfo()
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
    private $dangerScenesCount;

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

    public function getDangerScenesCount()
    {
        return $this->dangerScenesCount;
    }

    public function getProductionCost()
    {
        return $this->productionCost;
    }

    public function setProductionCost($cost)
    {
        $this->productionCost = $cost;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function showInfo()
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
    private $topic;

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

    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    public function getProductionCost()
    {
        return $this->productionCost;
    }

    public function setProductionCost($cost)
    {
        $this->productionCost = $cost;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function showInfo()
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
