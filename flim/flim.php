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
        echo "<div class='card'>";
        echo "<div class='card-header'><h4>Thông tin phim Hài</h4></div>";
        echo "<div class='card-body'>";
        echo "<p><strong>Tên phim:</strong> {$this->title}</p>";
        echo "<p><strong>Thời lượng:</strong> {$this->duration} phút</p>";
        echo "<p><strong>Năm sản xuất:</strong> {$this->releaseYear}</p>";
        echo "<p><strong>Số lượng:</strong> {$this->quantity}</p>";
        echo "<p><strong>Chi phí sản xuất:</strong> $" . number_format($this->productionCost) . "</p>";
        echo "<p><strong>Mức độ hài hước:</strong> {$this->humorLevel}</p>";
        echo "</div></div>";
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
        echo "<div class='card'>";
        echo "<div class='card-header'><h4>Thông tin phim Hành động</h4></div>";
        echo "<div class='card-body'>";
        echo "<p><strong>Tên phim:</strong> {$this->title}</p>";
        echo "<p><strong>Thời lượng:</strong> {$this->duration} phút</p>";
        echo "<p><strong>Năm sản xuất:</strong> {$this->releaseYear}</p>";
        echo "<p><strong>Số lượng:</strong> {$this->quantity}</p>";
        echo "<p><strong>Chi phí sản xuất:</strong> $" . number_format($this->productionCost) . "</p>";
        echo "<p><strong>Số cảnh hành động:</strong> {$this->dangerScenesCount}</p>";
        echo "</div></div>";
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
        echo "<div class='card'>";
        echo "<div class='card-header'><h4>Thông tin phim Tài liệu</h4></div>";
        echo "<div class='card-body'>";
        echo "<p><strong>Tên phim:</strong> {$this->title}</p>";
        echo "<p><strong>Thời lượng:</strong> {$this->duration} phút</p>";
        echo "<p><strong>Năm sản xuất:</strong> {$this->releaseYear}</p>";
        echo "<p><strong>Số lượng:</strong> {$this->quantity}</p>";
        echo "<p><strong>Chi phí sản xuất:</strong> $" . number_format($this->productionCost) . "</p>";
        echo "<p><strong>Chủ đề:</strong> {$this->topic}</p>";
        echo "</div></div>";
    }
}
