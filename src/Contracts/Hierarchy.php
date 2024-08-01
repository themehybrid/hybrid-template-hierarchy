<?php
/**
 * Template hierarchy contract.
 *
 * Defines the interface that template hierarchy classes must use.
 *
 * @package   HybridTemplateHierarchy
 * @link      https://github.com/themehybrid/hybrid-template-hierarchy
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2024, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Template\Hierarchy\Contracts;

use Hybrid\Contracts\Bootable;

/**
 * Template hierarchy interface.
 */
interface Hierarchy extends Bootable {

    /**
     * Should return an array of template file names without the file
     * extension (`.php`).
     *
     * @return array
     */
    public function hierarchy();

}
