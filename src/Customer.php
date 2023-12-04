<?php
namespace Taufik\Library;

class Customer
{
    public function __construct(private string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function sayHello(): string
    {
        return "Hello {$this->getName()}";
    }
}