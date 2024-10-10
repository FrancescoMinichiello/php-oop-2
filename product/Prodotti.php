<?php

include_once __DIR__ . "/categorie.php";

class Product
{
    public $title;
    public $price;
    public $icon;
    public $image;
    public $type;

    public function __construct(string $title, float $price, string $icon, string $image, string $type, Category $category,)
    {
        $this->title = $title;
        $this->price = $price;
        $this->icon = $icon;
        $this->image = $image;
        $this->type = $type;
        $this->category = $category
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getCategory()
    {
        return $this->category->getName();
    }
}