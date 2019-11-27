<?php

namespace CharacterCopyKata\Eccho;

class Eccho
{
    public function play()
    {
        print "Ready for input\n";
        do {
            $line = readline();
            print $line . "\n";
        } while ($line != null);
    }
}

(new Eccho())->play();