
# 1. variable
import random
variable = 1

# 2. logging
# print(num)

# 3. string
string = "1"

# 4. list
array = ["word1", "word2"]

# 5. Key value dictionary
keyValueArray = {"name": "Brett", "age": 30}

# 6. integer to string
variable = str(variable)

# 7. type
# print(type(variable))

# 8. string to integer
string = int(string)

# 9. list to string
# array = str(array);
array = ' '.join(array)

# 10. string to list
sentence = "How are you doing today?"
sentence = sentence.split(" ")

# 11. push to list
newWord = "word"
# sentence.append(newWord)

# 12. insert into list index position
# sentence.insert(3, newWord)

# 13. remove first element from array
# sentence.pop(0)

#  14. remove last element from array
# sentence.pop()

# 15. remove specific element from array
# sentence.pop(2)

# 16. get keys of key value array
keys = keyValueArray.keys()

# 17. join arrays
array1 = ['a', 'b', 'c']
array2 = ['d', 'e', 'f']
array3 = array1 + array2

# 18. sort array
sortNum = [3, 6, 8, 9]
sortWords = ['How', 'Are', 'doing', 'today?', 'you']
sortNum.sort()
sortWords.sort()


# 19. reverse array
sortNum.reverse()

# 20. length
sortWords = len(sortWords)
# print(sortWords)

# 21. if statment
# if 1 + 1 == 2:
#    print('correct')

# 22. if in array
# animals = ['dog', 'cat', 'mouse', 'rabbit']
#
# if 'hare' in animals:
#    print('hare')
# elif 'dog' in animals:
#    print('dog')

# 23. forloop
# i = 0
# for i in range(0, 100):
#    i += 1
#    print(i)

# 24. foreach
# animals = ['dog', 'cat', 'mouse', 'rabbit']
# for item in animals:
#    print(item)

# 25. math random
numbers = [3, 6, 8, 4, 9, 5, 1, 2]
numbers = random.choice(numbers)


# 26. math max
# numbers = max(numbers)
# print(numbers)

# 27. index of

string = 'This is a string'
# string = string.find('i')
# string = string.index('i')

# 28. last index of
last = string.rfind('i')
# last = string.rindex('i')

# 29. string to uppercase
string = "hello"
string = string.upper()

# 30. string to lowercase
string = string.lower()

# 31. repeat a string

string = 'This is a string'
string = string*3
print(string)
