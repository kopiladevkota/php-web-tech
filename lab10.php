<?php
// Define a class
class Book {
    // Properties
    public $title;
    public $author;
    private $price;

    // Constructor
    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    // Public method to display book details
    public function displayDetails() {
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Price: $" . $this->getPrice() . "<br>";
    }

    // Private method to get the price
    private function getPrice() {
        return $this->price;
    }
}

// Create objects of the Book class
$book1 = new Book("To Kill a Mockingbird", "Harper Lee", 18.99);
$book2 = new Book("1984", "George Orwell", 15.99);

// Display details of each book
echo "<h2>Book Details:</h2>";
$book1->displayDetails();
echo "<hr>";
$book2->displayDetails();
?>
