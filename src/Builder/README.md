# Builder pattern
Builder pattern has the aim of resolving one anti-pattern and does not seek to perform polymorphism. 
The anti-pattern in question is the Telescoping Constructor, where the count of arguments a
constructor contains grows to an extent where it becomes impractical to use or even impractical to know which order 
the arguments go in.  
The disadvantage of this method is the need for a separate Builder for every single class;
this is the cost for such control over the object construction process.  
Traditionally, key-value arrays were often used in substitution of Builder classes. Builder
classes however, give you far more control over the construction process.