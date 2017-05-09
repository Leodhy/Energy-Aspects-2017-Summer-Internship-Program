<?php

class NumberChecker
{
    /**
     * Is the number a semi-prime number?
     *
     * https://en.wikipedia.org/wiki/Semiprime
     *
     * @param int $number
     * @return bool
     */
    
    public function isSemiPrime($number)
    {
        for ($i=2; $i<sqrt($number); $i++)
        {
            if ($number % $i == 0)
            {
                if (isPrime($i) == true && isPrime($number / $i) == true) // check the two multipliers are prime numbers or not
                {
                    return true;
                }
            }
        }
        return false;
    }

    // check it is a prime number or not
    public function isPrime($number)
    {
        for ($i=2; $i<=sqrt($number); $i++)
        {
            if ($number % $i == 0)
            {
                return false;
            }
        }
        return true;
    }
}
