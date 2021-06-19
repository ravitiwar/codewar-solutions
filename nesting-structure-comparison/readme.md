# [Nesting Structure Comparison](https://www.codewars.com/kata/520446778469526ec0000001)
Complete the function/method (depending on the language) to return true/True when its argument is an array that has the same nesting structures and same corresponding length of nested arrays as the first array.

**For example:**
```
same_structure_as([1, 1, 1], [2, 2, 2]); // => true
same_structure_as([1, [1, 1]], [2, [2, 2]]); // => true
same_structure_as([1, [1, 1]], [[2, 2], 2]); // => false
same_structure_as([1, [1, 1]], [[2], 2]); // => false
same_structure_as([[[], []]], [[[], []]]); // => true
same_structure_as([[[], []]], [[1, 1]]); // => false
```