<?php

class Product
{
    public $title;
    public $price;
    public $icon;
    public $image;
    public $type;

    public function __construct($title, $price, $icon, $image, $type)
    {
        $this->title = $title;
        $this->price = $price;
        $this->icon = $icon;
        $this->image = $image;
        $this->type = $type;
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
}