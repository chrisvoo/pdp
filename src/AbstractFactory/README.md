# Abstract Factory
An Abstract Factory consists of the following classes: an Abstract Factory, Concrete Factory,
Abstract Product, Concrete Product, and our client. With an
Abstract Factory pattern, we will create implementations of a factory interface, with every
factory knowing how to create their products.  
Now, the downsides of this class emerge when you need to add new product classes; the
Abstract Factory needs updating, which violates the interface segregation principle. So it
doesn't strictly meet the SOLID principles if you are going to need to add new product
classes.