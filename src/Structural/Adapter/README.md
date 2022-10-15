# Adapter

The Adapter pattern allows an existing class to be used with an interface that it doesn't
match. It is often used to allow existing classes to work with others without needing to alter
their source code.  
In a Class Adapter, we use inheritance to create an adapter. A class (the adapter) can inherit
another (the adaptee); using standard inheritance we are able to add additional
functionality to the adaptee.  
In PHP, multiple inheritance isn't possible, unless you are working with Traits. In this case,
we can only adapt one class to match the interface of another.
The other key architectural reason for us not using this approach is that it is often good
design to prefer composition over inheritance (as described by the Composite Reuse
Principle).  
The Composite Reuse Principle states that classes should achieve polymorphic behavior
and code reuse by their composition.
By applying this principle, classes should contain instances of other classes when they want
to implement a particular piece of functionality, as opposed to inheriting the functionality
from a base or parent class.