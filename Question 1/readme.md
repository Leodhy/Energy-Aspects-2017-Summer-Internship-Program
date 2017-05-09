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