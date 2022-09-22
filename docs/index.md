# Introduction

A design pattern is a general technique used to solve a class of related problems, the general
structure of the solution, not the solution itself.  
Gang-of-Four patterns are divided into three main categories:
* **creational**: concern themselves with object creation. The main usage of Creational design patterns is to separate
the instantiation of a class from the usage of that instance.
* **structural**: static-model patterns, concerned with the structural organization of your program, they act as 
interconnectors between entities
* **behavioral**: dynamic-model patterns, addressing the way that various objects will interact at runtime.

There are obviously many more categories than the ones identified by GoF. Focus on the intent/purpose section of the 
pattern description.

## Coding standards

The only accepted standard that apply to coding is [PSR-1](https://www.php-fig.org/psr/psr-1) (Basic Coding Style). 
Other standards can be found [here](https://www.php-fig.org/psr/).

## Terminology

* **polymorphism**: the same interface is used with a different underlying code and it's implemented through interfaces or
abstract classes.
* **traits**: a mechanism for introducing Horizontal Reuse, avoiding copying and pasting different bits of code
* **anti-patterns**: they constitute a terrible method of resolving a recurring problem that is usually
ineffective and risks being highly counterproductive.
* **singletons**: classes which can only be instantiated once
* **SOLID principles**: SOLID is an acronym for the first five object-oriented design (OOD) principles by Robert C. 
Martin. 
    * Single-responsiblity: A class should have one and only one reason to change, meaning that a class should have 
  only one job.
    * Open-Closed Principle: Objects or entities should be open for extension but closed for modification. This means 
  that a class should be extendable without modifying the class itself.
    * Liskov Substitution Principle: Let q(x) be a property provable about objects of x of type T. Then q(y) should be 
  provable for objects y of type S where S is a subtype of T. This means that every subclass or derived class should 
  be substitutable for their base or parent class.
    * Interface Segregation Principle: A client should never be forced to implement an interface that it doesn’t use, 
  or clients shouldn’t be forced to depend on methods they do not use.
    * Dependency Inversion Principle: Entities must depend on abstractions, not on concretions. It states that the 
  high-level module must not depend on the low-level module, but they should depend on abstractions.




## Tricks

* Every time you try to `var_dump` an object that has the `__debugInfo` magic method set, the `var_dump` will be 
overridden with the result of that function call instead.

## Abstract factory

Create objects knowing only the interfaces they implement (without knowing the actual class). This way, it's
easy to add new sorts of concrete products to the system without changing any of the code that uses those products.

## Simple Factory
Simple factory pattern, also known as static factory method pattern, it belongs to the class 
creation pattern. In the simple factory pattern, you can return instances of different 
classes based on different parameters. The simple factory pattern specifically defines a 
class to be responsible for creating instances of other classes, and the created instances 
usually have a same parent class.
Strictly speaking, the simple factory pattern is not actually a design pattern, it looks 
more like a kind of coding habit.

## Factory method
The Factory Method differs from the ordinary Simple Factory on the basis that instead of us
having one factory, we can have many.