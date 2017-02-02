<?php

namespace Scene7\Commands;

trait Scale
{
    public function setScale($factor)
    {
        $factor = (float) $factor;
        if ($factor < 0) {
            throw new \InvalidArgumentException('Factor must be greater than 0');
        }

        $this->addCommand(array('scale' => $factor));
        return $this;
    }
}