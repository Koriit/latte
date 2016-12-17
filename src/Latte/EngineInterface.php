<?php

namespace Latte;
/**
 * Interface of templating engine.
 */
interface EngineInterface
{
    /**
     * Renders template to output.
     * @return void
     */
    public function render($name, array $params = [], $block = NULL);

    /**
     * Renders template to string.
     * @return string
     */
    public function renderToString($name, array $params = [], $block = NULL);
}
