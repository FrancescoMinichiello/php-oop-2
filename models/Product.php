<?php

include_once __DIR__ . "/Category.php";

class Product
{
    public string $title;
    public float $price;
    public string $icon;
    public string $image;
    public string $type;
    public $category;

    public function __construct(string $title, float $price, string $icon, string $image, string $type, Category $category,)
    {
        $this->title = $title;
        $this->price = $price;
        $this->icon = $icon;
        $this->image = $image;
        $this->type = $type;
        $this->category = $category;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }
}