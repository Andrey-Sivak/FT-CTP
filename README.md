# FT Custom Post Types

**Stable tag**: 1.0.0  
**Requires at least**: WordPress 6.0  
**Tested up to**: WordPress 6.4  
**Requires PHP**: 7.4  
**License**: GPLv2 or later  
**License URI**: https://www.gnu.org/licenses/gpl-2.0.html

Professional custom post types plugin for the Fotografka Domca website.

## Description

This plugin provides a clean, extensible architecture for managing custom post types and taxonomies. Built with modern PHP practices, PSR-4 autoloading, and full Gutenberg support.

### Features

- ✅ **Service Post Type** - Fully featured custom post type for services
- ✅ **Hierarchical Taxonomy** - Service Categories with parent/child relationships
- ✅ **Flat Taxonomy** - Service Tags for flexible filtering
- ✅ **Gutenberg Ready** - Full block editor support via REST API
- ✅ **i18n Ready** - Translation-ready with Czech translations included
- ✅ **Developer Friendly** - Clean OOP architecture, PSR-4 autoloading
- ✅ **Security First** - Follows WordPress security best practices
- ✅ **Standards Compliant** - Adheres to WordPress Coding Standards

## Installation

### From Release ZIP

1. Download the latest release from [GitHub Releases](https://github.com/Andrey-Sivak/ft-ctp/releases)
2. Navigate to `Plugins > Add New > Upload Plugin`
3. Upload the ZIP file
4. Click "Install Now" and then "Activate"

### From Source (Developers)

```bash
cd wp-content/plugins
git clone https://github.com/Andrey-Sivak/ft-ctp.git ft-custom-post-types
cd ft-custom-post-types
composer install --no-dev
```

### Requirements

- WordPress 6.0+
- PHP 7.4+
- Composer (for development only)

## Post Types & Taxonomies

### Service (`ft_service`)

**Supports:**
- Title
- Editor (Gutenberg)
- Featured Image
- Excerpt
- Revisions
- Custom Fields

**Archive**: `https://yoursite.com/services/`  
**Single**: `https://yoursite.com/services/service-name/`

### Service Category (`ft_service_category`)

- Hierarchical (category-like)
- Supports parent/child relationships
- Publicly queryable
- Archive: `https://yoursite.com/service-category/category-name/`

### Service Tag (`ft_service_tag`)

- Non-hierarchical (tag-like)
- Flat structure for filtering
- Archive: `https://yoursite.com/service-tag/tag-name/`

## Development

### Directory Structure

ft-custom-post-types/
├── includes/ 
│ ├── PostTypes/ 
│ │ ├── AbstractPostType.php # Base class for all CPTs 
│ │ └── Service.php # Service post type 
│ ├── Taxonomies/ 
│ │ ├── AbstractTaxonomy.php # Base class for taxonomies 
│ │ ├── ServiceCategory.php 
│ │ └── ServiceTag.php 
│ └── Plugin.php # Main orchestrator 
├── languages/ 
├── templates/ # Future: template overrides 
├── composer.json 
├── ft-custom-post-types.php # Bootstrap file 
└── uninstall.php # Cleanup script

### Architecture

- **PSR-4 Autoloading**: `FT_CustomPostTypes` namespace
- **Abstract Base Classes**: Extensible architecture for adding CPTs/taxonomies
- **Single Responsibility**: Each class handles one concern
- **WordPress Coding Standards**: Enforced via PHPCS

### Adding New Post Types

```php
// 1. Create: includes/PostTypes/Portfolio.php namespace FT_CustomPostTypes\PostTypes;
class Portfolio extends AbstractPostType { public const POST_TYPE = 'ft_portfolio';
    protected function get_post_type(): string {
        return self::POST_TYPE;
    }

    // Implement get_labels() and get_args()...
}

// 2. Register in includes/Plugin.php $this->post_types['portfolio'] = new Portfolio();
```

### Commands

```bash
# Install dependencies
composer install
# Lint code
composer run lint:php
# Auto-fix code style
composer run format:php
# Build distribution ZIP
composer run dist
```

### Testing

```bash
# Install dev dependencies
composer install
# Run PHPCS
composer run lint:php
# Check PHP compatibility
vendor/bin/phpcs -p . --standard=PHPCompatibilityWP --runtime-set testVersion 7.4-
```

## Translation

### Generate POT file

```bash wp i18n make-pot . languages/ft-ctp.pot --domain=ft-ctp```

### Included Translations

- 🇨🇿 Czech (`cs_CZ`) - Complete
- 🇬🇧 English - Default

## Hooks & Filters

### Available Filters (Future)

```php
// Modify Service post type arguments 
add_filter('ft_cpt_service_args', function(args) {args['menu_icon'] = 'dashicons-portfolio'; return $args; });
// Modify Service Category taxonomy arguments 
add_filter('ft_cpt_service_category_args', function(args) {args['hierarchical'] = false; return $args; });
```

## REST API

All post types and taxonomies are available via REST API:

```bash
# Get all services
GET /wp-json/wp/v2/ft_service
# Get service by ID
GET /wp-json/wp/v2/ft_service/{id}
# Get service categories
GET /wp-json/wp/v2/ft_service_category
# Get service tags
GET /wp-json/wp/v2/ft_service_tag
```

## Security

See [SECURITY.md](SECURITY.md) for vulnerability reporting.

## Changelog

### 1.0.0 - 2026-01-13

**Initial Release**
- Service custom post type
- Service Category taxonomy (hierarchical)
- Service Tag taxonomy (non-hierarchical)
- Full Gutenberg support
- REST API integration
- Czech translations
- PSR-4 autoloading
- WordPress Coding Standards compliance

## Contributing

1. Fork the repository
2. Create feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open Pull Request

### Development Guidelines

- Follow WordPress Coding Standards
- Add PHPDoc blocks to all functions/methods
- Write translatable strings using `__()`, `_e()`, `_x()`
- Test in PHP 7.4, 8.0, 8.1, 8.2
- Ensure backward compatibility with WP 6.0+

## Support

- **Issues**: [GitHub Issues](https://github.com/Andrey-Sivak/ft-ctp/issues)
- **Discussions**: [GitHub Discussions](https://github.com/Andrey-Sivak/ft-ctp/discussions)
- **Email**: andrey@fotografkadomca.cz

## License

This plugin is licensed under GPLv2 or later.

Copyright (C) 2026 Andrii Sivak

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

## Credits

**Author**: Andrii Sivak  
**Website**: https://github.com/Andrey-Sivak  
**Repository**: https://github.com/Andrey-Sivak/ft-ctp

---

Made with ❤️ for Fotografka Domca