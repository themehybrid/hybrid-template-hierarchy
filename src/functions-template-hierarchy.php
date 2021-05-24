<?php
/**
 * Template hierarchy functions.
 *
 * Helper functions and template tags related to templates hierarchy.
 *
 * @package   HybridCore
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2008 - 2021, Justin Tadlock
 * @link      https://themehybrid.com/hybrid-core
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Template\Hierarchy;

use Hybrid\Template\Hierarchy\Contracts\Hierarchy as TemplateHierarchyContract;
use Hybrid\Proxies\App;

/**
 * Returns the global hierarchy. This is a wrapper around the values stored via
 * the template hierarchy object.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function hierarchy() {

	return apply_filters(
		'hybrid/template/hierarchy',
		App::resolve( TemplateHierarchyContract::class )->hierarchy()
	);
}
