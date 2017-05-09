## 2017 Summer Internship Program

Firstly, congratulations on succesfully making it through to our code assessment phase. We're all very excited to see how you solve our challenges.

---

## Format of assessment

The assessment consists of three questions. Two of these questions require the use of PHP. The remaining question may be written in any other language (for the avoidance of doubt, you may submit all three solutions using PHP). All code examples and samples are provided in PHP.

Your implementation should be production quality. Use any additional tools, approaches or resources you would normally use to complete production-quality code. Wherever possible, you should provide unit tests.

If any of the instructions are unclear, please make a reasonable assumption and document any such decisions within your code using comments.

---

## Time allowed

The total time allowed to complete all three parts of the challenge is **90 minutes**. A guideline of how much time may be needed for each part has been provided. Please ensure that you submit all of your code within this time, regardless of whether you were able to solve all of the questions.

**Submissions received after the 90 minute deadline will not be considered.**

---

## Submitting your code

Please click here to download the project starting structure. You must organise your code according to the project structure provided.

Please host all of your code solutions in a public repository hosted on [GitHub](https://github.com). You must email a link to the repository hosting your submission to '@energyaspects.com' within the 90 minute deadline.

**Good luck!**

---

### Question 1 - String Calculator

Suggested time: **10 minutes**
Language allowed: **Any**

**Create a `Calculator` class, which has a single `sum()` method, which returns the sum of the values passed to it.**

The `sum()` method can accept an `array` of numbers or a separated string which is separated by a comma (,) or a pipe character(|).

#### Examples

```
print Calculator::sum([1, 2, 3]);
print Calculator::sum('1, 2, 3, 4, 5');
print Calculator::sum('1|2|3|4|5');
```

#### Outputs

```
6
15
15
```

#### Rules

- Negative numbers are not allowed
- The sum method can accept an array of numbers
- The sum method can accept a string of numbers, separated by a character
- Numbers can be separated with a comma, or a pipe

---

### Question 2 - Semi prime number checker

Suggested time: **20 minutes**
Language allowed: **PHP**

**Write a function which checks if a given integer is a semi prime number.**

A prime is a positive integer (x) that has exactly two distinct divisors: 1 and x. The first few prime integers are 2, 3, 5, 7, 11 and 13.

A semiprime is a natural number that is the product of two (not necessarily distinct) prime numbers. The first few semiprimes are 4, 6, 9, 10, 14, 15, 21, 22, 25, 26.

#### Examples

isSemiPrimeNumber(2)
isSemiPrimeNumber(3)
isSemiPrimeNumber(4)
isSemiPrimeNumber(5)
isSemiPrimeNumber(6)
isSemiPrimeNumber(7)
isSemiPrimeNumber(8)
isSemiPrimeNumber(9)
isSemiPrimeNumber(10)
isSemiPrimeNumber(11)
isSemiPrimeNumber(26)

#### Outputs

false
false
true
false
true
false
false
true
true
false
true

#### Rules

- The given number is a positive integer within the range 1 - 50,000

---

### Question 3 - Word game

Suggested time: **60 minutes**
Language allowed: **PHP**

**Create an application which implements the rules of the word game described below.**

The word game consists of a class, which is instantiated with a string of letters (herein referred to as `base`). The player submits words to the games `submitWord` method. The class should check if the submitted word is contained anywhere in the `base`. If it is, the word should then be checked against the provided dictionary of words which is used by the game.

The score for a word is the total number of letters used from the `base`.

A 'high scores' table should be created, which tracks the current top ten of scores, and the words used, in descending order of score. If the same word has been used more than once, subsequent uses do not add to the high scores.

#### Examples of scores

If the game has been instantiated with the base string `areallylongword`:

- ***no*** is an acceptable submission, scoring 2
- ***grow*** is an acceptable submission, scoring 4
- ***bold*** is NOT an acceptable submission (there is no “b” in the base string)
- ***glly*** is NOT an acceptable submission (it is not present in the word list)
- ***woolly*** is an acceptable submission, scoring 6
- ***adder*** is NOT an acceptable submission (there is only one “d” in the base string)

#### Rules

- The game is constructed with a random base string of letters, a to z. Eg, 'areallylongword' or 'sfdbgngbefagefb'
- The base string can contain repeated letters
- The player attempts to create words out of the letters, and scores one point for each letter used from the base word
- The maximum score for a word is the length of the base string
- Each letter in the base string can only be used as many times as it appears, i.e. if the base string is 'hello', the letter 'o' may be used only once, and the letter 'l' may be used twice
- To score, a submission must use only letters from the base string, and must be a word contained in the dictionary file provided
- Validity of the word should be checked by the game, using the provided dictionary.txt file
- The game should maintain in memory a list of the top ten highest scoring submissions (word and score)
- The high scores list should track only the top ten scores, if a new word enters the high scores which results in more than ten top scores, the lowest score is removed
- Duplicate words are not allowed in the high score list, i.e. a word can only appear once in the high scores
- You may ignore uppercase letters, whitespace and special characters. Assume the base string and word list will never contain these
- The methods provided in the example class must be implemented
- You may add as many additional methods as you require