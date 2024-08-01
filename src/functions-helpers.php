<?php
/**
 * Template functions.
 *
 * Helper functions and template tags related to templates.
 *
 * @package   HybridTemplateHierarchy
 * @link      https://github.com/themehybrid/hybrid-template-hierarchy
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2024, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Template\Hierarchy;

use Hybrid\App;
use Hybrid\Template\Hierarchy\Contracts\Hierarchy;

if ( ! function_exists( __NAMESPACE__ . '\\hierarchy' ) ) {
    /**
     * Returns the global hierarchy. This is a wrapper around the values
     * stored via the template hierarchy object.
     *
     * @return array
     */
    function hierarchy() {
        return apply_filters(
            'hybrid/template/hierarchy',
            App::resolve( Hierarchy::class )->hierarchy()
        );
    }
}
