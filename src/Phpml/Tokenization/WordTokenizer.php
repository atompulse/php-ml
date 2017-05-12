<?php

namespace Phpml\Tokenization;

class WordTokenizer implements Tokenizer
{
    /**
     * @param string $text
     *
     * @return array
     */
    public function tokenize($text)
    {
        $tokens = [];
        preg_match_all('/\\w\\w+/u', $text, $tokens);
        return $tokens[0];
    }
}