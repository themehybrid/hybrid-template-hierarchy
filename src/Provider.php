<?php
/**
 * Template hierarchy service provider.
 *
 * This is the service provider for the template hierarchy. It's used to register
 * the template hierarchy with the container and boot it when needed.
 *
 * @package   HybridTemplateHierarchy
 * @link      https://github.com/themehybrid/hybrid-template-hierarchy
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2024, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Template\Hierarchy;

use Hybrid\Core\ServiceProvider;
use Hybrid\Template\Hierarchy\Contracts\Hierarchy;

/**
 * Template hierarchy provider class.
 */
class Provider extends ServiceProvider {

    /**
     * Registration callback that adds a single instance of the template
     * hierarchy to the container.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton( Hierarchy::class, Component::class );
    }

    /**
     * Boots the hierarchy by firing its hooks in the `boot()` method.
     *
     * @return void
     */
    public function boot() {
        $this->app->resolve( Hierarchy::class )->boot();
    }

}
