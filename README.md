Sorting
========
Sorting is one of the most basic exercises of computer science, yet even experienced programmers can forget the basics. I felt like refreshing my memory and for posterity have dumped the resulting code here. Please note, this code is provided 'as-is'. If you copy it for your computer science homework and it doesn't work bad luck :-)

Algorithms
-----------
So far implemented Bubblesort in C, Java, PHP and Ruby. It's quite a useful exercise in understanding some of the ecentricities of each respective language's syntax and semantics. For example, PHP does a lot of work in the background converting datatypes. Depending on how you use your variables PHP sorting performance varies from slow, to very, very, very slow.

Ruby is, for an interpreted language, surprisingly quick. However the absence of a C-like 'for loop' adds somewhat to code verbosity.

The statically typed and (semi)compiled languages (C, Java) are predictably quick.

Performance appears roughly O(n^2) which is pretty bad. In theory, a nearly ordered list can be bubblesorted approximately O(n) (if no substitutions are made in a pass you have a sorted list and can return immediately). I will look at implementing this next.

I hope to add quicksort and mergesort shortly and then try and implement everything in some functional languages - likely Haskell and Scala.

Contact
-------
ajbonner on twitter, http://aaronbonner.tumblr.com
