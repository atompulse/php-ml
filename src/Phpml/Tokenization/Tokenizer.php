<?php

namespace Phpml\Tokenization;

interface Tokenizer
{
    /**
     * @param string $text
     *
     * @return array
     */
    public function tokenize($text);
}