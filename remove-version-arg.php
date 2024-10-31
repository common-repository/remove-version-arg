<?php
/**
 * Remove Version Arg
 *
 * @package RemoveVersionArg
 * @author Sérgio 'wherd' Leal <hello@wherd.name>
 * @license GPL-2.0
 * @since 1.0.0
 *
 * @wordpress-plugin
 * Plugin Name: Remove Version Arg
 * Plugin URI:  https://wordpress.org/plugins/remove-version-arg/
 * Description: Remove version query arg from style and script urls.
 * Version:     1.0.0
 * Author:      Sérgio 'wherd' Leal
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: remove-version-arg
 * Domain Path: /languages
 * Tags: query, arg, version, styles, scripts
 *
 * Remove Version Arg is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Remove Version Arg is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Remove Version Arg. If not, see license.txt
 */

if ( ! function_exists( 'wd_remove_version_arg' ) ) :
	/**
	 * Remove `ver` query arg from string.
	 *
	 * @since 1.0.0
	 *
	 * @param string $query The query string.
	 * @return The new query string excluding the `ver` argument.
	 */
	function wd_remove_version_arg( $query ) {
		return add_query_arg( 'ver', false, $query );
	}

	add_filter( 'script_loader_src', 'wd_remove_version_arg', 90, 1 );
	add_filter( 'style_loader_src', 'wd_remove_version_arg', 90, 1 );
endif;
