<?php

class Animal {
    public function makeSound() {
      return "Animal sound";
    }
  }
  
  class Dog extends Animal {
    public function makeSound() {
      return "Bark";
    }
  }
  
  // Example of LSP violation
  class Cat extends Animal {
    public function climb() {
      return "Climbing";
    }
  }