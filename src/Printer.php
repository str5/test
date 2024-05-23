<?php 

namespace Str5\Test;

class Printer implements PrinterInterface 
{
    /**
     * Test sescription
     */
    public function print(string $text, int $count): string
    {
        return $this->makePrintText($text, $count);
    }

    private function makePrintText(string $text, int $count): string 
    {
        return str_repeat($text, $count);
    }
}