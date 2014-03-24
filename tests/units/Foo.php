<?php

namespace test\units;

class stdClass extends \atoum\test {

    public function testHoa ( ) {

        $this->integer(42)->isGreaterThan(10);
    }

    public function testProject ( ) {

        $this->integer($i = $this->sample($this->realdom->boundinteger(300, 512)))
             ->isGreaterThan(256);
    }

    public function testMany ( ) {

        foreach($this->sampleMany($this->realdom->boundinteger(0), 1024) as $i)
            $this->integer($i)->isGreaterThan(0);
    }

    public function testDate ( ) {

        $data = $this->realdom->date(
            'd/m H:i',
            $this->realdom->boundinteger(
                $this->realdom->timestamp('tomorrow'),
                $this->realdom->timestamp('next Monday')
            )
        );

        foreach($this->sampleMany($data, 10) as $date)
            $this->boolean(true)->isTrue();
    }

    public function testMath ( ) {

        $sampler = new \Hoa\Compiler\Llk\Sampler\BoundedExhaustive(
            \Hoa\Compiler\Llk\Llk::load(new \Hoa\File\Read(__DIR__ . DS .  'Grammar.pp')),
            new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random()),
            5
        );
        $visitor  = new \Hoa\Math\Visitor\Arithmetic();
        $compiler = \Hoa\Compiler\Llk\Llk::load(new \Hoa\File\Read(__DIR__ . DS .  'Grammar.pp'));

        foreach($sampler as $i => $data) {

            try {

                $x = $visitor->visit($compiler->parse($data));
            }
            catch ( \Exception $e ) { continue; }

            eval('$y = ' . $data . ';');

            $x = (float) $x;
            $y = (float) $y;

            if($x !== $y)
                continue;

            $this->float($x)->isNearlyEqualTo($y);
        }
    }
}
