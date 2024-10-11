<?php

trait Description
{
    private $desc;

    public function setDescription(string $desc): void
    {
        $this->desc = $desc;
    }

    public function getDescription(): string
    {
        return $this->desc;
    }

    public function getShortDescription(int $length = 30): string
    {
        if (strlen($this->desc) > $length) {
            return substr($this->desc, 0, $length) . '...';
        } else {
            return $this->desc;
        }
    }
}