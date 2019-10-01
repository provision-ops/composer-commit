<?php
namespace ProvisionOps\ComposerCommit;

class Commands extends \Robo\Tasks
{
    /**
     * Multiply two numbers together
     *
     * @command multiply
     */
    public function multiply($a, $b)
    {
        $model = new \ExampleProject\Example($a);
        $result = $model->multiply($b);
        $this->io()->text("$a times $b is $result");
    }
}