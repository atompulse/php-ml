<?php

namespace Phpml\Tokenization;

class WhitespaceTokenizer implements Tokenizer
{
    /**
     * @param string $text
     *
     * @return array
     */
    public function tokenize($text)
    {
        return preg_split('/[\\pZ\\pC]+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
    }
}