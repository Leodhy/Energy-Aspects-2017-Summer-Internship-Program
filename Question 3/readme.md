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
