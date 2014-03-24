<?php

namespace Test\Units;

class stdClass extends \atoum\test {

    public function testHoa ( ) {

        $this->integer(42)->isGreaterThan(10);
    }

    public function testProject ( ) {

        $this->integer($i = $this->sample($this->realdom->boundinteger(300, 512)))
             ->isGreaterThan(256);
    }
}
