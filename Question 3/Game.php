<?php

class Game
{
    /**
     * Submit a word for scoring.
     *
     * @param string $word Word to be submitted.
     * @return int $score Total points awarded for the word.
     */
    public function submitWord($word)
    {
        // Add your code here

        return $score;
    }

    /**
     * Get the word that has is at a given position in the high-scores.
     *
     * @param int $position
     * @return string|null $word
     */
    public function getWordEntryAtPosition($position)
    {
        return $word;
    }

    /**
     * Get the score that has been awarded at a given position in the high-scores.
     *
     * @param int $position
     * @return int|null $score
     */
    public function getScoreAtPosition($position)
    {
        return $score;
    }
}