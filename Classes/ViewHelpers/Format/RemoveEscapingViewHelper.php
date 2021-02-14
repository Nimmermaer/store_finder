<?php

declare(strict_types=1);

namespace Evoweb\StoreFinder\ViewHelpers\Format;

/*
 * This file is developed by evoWeb.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * Class RemoveEscapingViewHelper
 * @package Evoweb\StoreFinder\ViewHelpers\Format
 * @deprecated will be removed in version 7.0.0
 */
class RemoveEscapingViewHelper extends \TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper
{
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('content', 'string', 'Content to be modified', true);
    }

    /**
     * Replace escaping of curly braces
     *
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     *
     * @return string
     */
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ): string {
        $content = $arguments['content'] ?? $renderChildrenClosure();
        return str_replace(['\{', '\}'], ['{', '}'], $content);
    }
}
