=== FT Custom Post Types ===
Contributors: andreysivak
Tags: custom post types, cpt, services, taxonomies, gutenberg
Requires at least: 6.0
Tested up to: 6.4
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Professional custom post types and taxonomies for service-based websites.

== Description ==

FT Custom Post Types provides a clean, extensible solution for managing services on your WordPress site. Built with modern development practices and full Gutenberg support.

= Features =

* **Service Post Type** - Complete custom post type with full editor support
* **Hierarchical Categories** - Organize services with parent/child relationships
* **Flexible Tags** - Add multiple tags for better service filtering
* **Gutenberg Ready** - Full block editor integration
* **REST API Enabled** - Access all data programmatically
* **Translation Ready** - Includes Czech translations
* **Developer Friendly** - Clean OOP architecture, easily extensible
* **Security First** - Follows WordPress security best practices

= Perfect For =

* Photography studios
* Service-based businesses
* Agencies showcasing their offerings
* Portfolio websites with categorized work
* Any site needing structured service listings

= Technical Highlights =

* PSR-4 autoloading with namespaces
* WordPress Coding Standards compliant
* Abstract base classes for easy extension
* No database queries - uses WordPress APIs
* Compatible with page builders (Bricks, Elementor, etc.)
* SEO-friendly URLs and structure

== Installation ==

= Automatic Installation =

1. Log into your WordPress admin
2. Navigate to Plugins > Add New
3. Search for "FT Custom Post Types"
4. Click "Install Now" and then "Activate"

= Manual Installation =

1. Download the plugin ZIP file
2. Navigate to Plugins > Add New > Upload Plugin
3. Choose the ZIP file and click "Install Now"
4. Activate the plugin

= After Activation =

1. Visit Settings > Permalinks and click "Save Changes" (flushes rewrite rules)
2. Navigate to "Services" in the admin menu
3. Start adding your services!

== Frequently Asked Questions ==

= What post types does this plugin add? =

The plugin adds one post type: **Services** (`ft_service`)

= What taxonomies are included? =

Two taxonomies:
* **Service Categories** (`ft_service_category`) - Hierarchical, like categories
* **Service Tags** (`ft_service_tag`) - Non-hierarchical, like tags

= Can I customize the post type? =

Yes! The plugin is built with extensibility in mind. Developers can extend the base classes or use hooks.

= Does it work with my theme? =

Yes! The plugin registers standard WordPress post types that work with any properly coded theme. For custom templates, add `single-ft_service.php` and `archive-ft_service.php` to your theme.

= Is it compatible with page builders? =

Absolutely! Works with Elementor, Bricks, Beaver Builder, Divi, and other major page builders.

= Does it support Gutenberg? =

Yes, full Gutenberg (block editor) support is included via REST API.

= Can I export/import services? =

Yes, use standard WordPress export/import tools or plugins like WP All Import/Export.

= How do I translate the plugin? =

Use Loco Translate or Poedit. A `.pot` file is included in the `languages` folder. Czech translation is already included.

= Does it slow down my site? =

No! The plugin uses WordPress native functions and follows performance best practices. No additional database queries or external dependencies.

= Can I add custom fields to services? =

Yes! Use ACF (Advanced Custom Fields), Pods, or any custom fields plugin. The service post type supports `custom-fields`.

= What happens when I uninstall the plugin? =

The plugin includes an uninstall script. By default, your content (services, categories, tags) is preserved. You can optionally enable data cleanup in `uninstall.php`.

== Screenshots ==

1. Services admin list view with category column
2. Service edit screen with Gutenberg block editor
3. Service Categories management screen
4. Service Tags management screen
5. Frontend service archive page example
6. Single service page with featured image

== Changelog ==

= 1.0.0 - 2026-01-13 =
* Initial release
* Service custom post type with full Gutenberg support
* Service Categories taxonomy (hierarchical)
* Service Tags taxonomy (flat/non-hierarchical)
* REST API integration for all post types and taxonomies
* Czech (cs_CZ) translation included
* PSR-4 autoloading architecture
* WordPress Coding Standards (WPCS) compliance
* Clean uninstall script

== Upgrade Notice ==

= 1.0.0 =
Initial release. Welcome aboard!

== Developer Notes ==

= Post Type and Taxonomy Keys =

* Post Type: `ft_service`
* Category Taxonomy: `ft_service_category`
* Tag Taxonomy: `ft_service_tag`

= REST API Endpoints =

`
GET /wp-json/wp/v2/ft_service
GET /wp-json/wp/v2/ft_service/{id}
GET /wp-json/wp/v2/ft_service_category
GET /wp-json/wp/v2/ft_service_tag
`

= Template Hierarchy =

Override templates by adding to your theme:

* `single-ft_service.php` - Single service page
* `archive-ft_service.php` - Services archive
* `taxonomy-ft_service_category.php` - Category archive
* `taxonomy-ft_service_tag.php` - Tag archive

= Custom Query Example =

`
$services = new WP_Query([
    'post_type'      => 'ft_service',
    'posts_per_page' => 10,
    'tax_query'      => [
        [
            'taxonomy' => 'ft_service_category',
            'field'    => 'slug',
            'terms'    => 'wedding-photography',
        ],
    ],
]);
`

= Available Constants =

* `FT_CPT_VERSION` - Plugin version string
* `FT_CPT_PATH` - Plugin directory path
* `FT_CPT_URL` - Plugin directory URL
* `FT_CPT_BASENAME` - Plugin basename

= Namespace =

All classes use the `FT_CustomPostTypes` namespace.

= Support =

* GitHub: https://github.com/Andrey-Sivak/ft-ctp
* Issues: https://github.com/Andrey-Sivak/ft-ctp/issues

== Privacy Policy ==

This plugin does not:

* Collect any user data
* Send data to external servers
* Use cookies or tracking
* Store personal information beyond standard WordPress post content

All data created (services, categories, tags) is stored in your WordPress database using standard WordPress tables and follows WordPress privacy guidelines.