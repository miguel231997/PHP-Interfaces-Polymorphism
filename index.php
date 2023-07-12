<?php   

//First, we define an interface called Shape that declares a method calculateArea():
interface Shape
{
    public function calculateArea();
}

//Next, we create two classes, Rectangle and Circle, that implement the Shape interface:

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

//Now, we can use polymorphism to calculate the areas of different shapes without needing to know the specific implementation details:

    function printArea(Shape $shape)
    {
        $area = $shape->calculateArea();
        echo "The Area of the shape is: $area" . PHP_EOL;
    }

$rectangle = new Rectangle(4,5);
$circle = new Circle(3);

printArea($rectangle); //The Area of the shape is: 20
printArea($circle); //The Area of the shape is: 28.274333882308

//

?>

In this example, the printArea() function accepts an object of type Shape (the interface) as its parameter. It doesn't need to know whether the object is a rectangle or a circle; it only relies on the fact that the object implements the Shape interface and has the calculateArea() method. This allows us to calculate and print the area of different shapes using the same function.

By utilizing interfaces and polymorphism, we've created a flexible and extensible system. We can easily add more shapes by implementing the Shape interface and providing the calculateArea() method. The rest of the code remains unchanged, demonstrating the power of interfaces and polymorphism in promoting code reusability and flexibility.