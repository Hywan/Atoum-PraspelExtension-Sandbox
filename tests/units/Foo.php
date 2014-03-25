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

    public function testJson ( ) {

        $json = $this->realdom->grammar(__DIR__ . DS . 'JsonGrammar.pp');

        foreach($this->sampleMany($json, 10) as $json) {

            json_decode($json);

            $this->integer(json_last_error())
                 ->isEqualTo(JSON_ERROR_NONE);
        }
    }

    public function testJsonExhaustively ( ) {

        $compiler = \Hoa\Compiler\Llk\Llk::load(new \Hoa\File\Read(__DIR__ . DS .  'JsonGrammar.pp'));
        $sampler  = new \Hoa\Compiler\Llk\Sampler\BoundedExhaustive(
            $compiler,
            new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random()),
            5
        );
        $visitor  = new \Hoa\Math\Visitor\Arithmetic();

        foreach($sampler as $json) {

            json_decode($json);

            $this->integer(json_last_error())
                 ->isEqualTo(JSON_ERROR_NONE);
        }
    }
}
