# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Planned
- Custom fields registration via `register_post_meta()`
- Admin columns customization for Services list
- Template override system with theme fallbacks
- Filter hooks for post type and taxonomy arguments
- Import/Export functionality for services

---

## [1.0.0] - 2026-01-13

### Added
- **Service Post Type** (`ft_service`)
    - Full Gutenberg block editor support
    - REST API integration
    - Featured image support
    - Excerpt support
    - Revision history
    - Custom fields support
    - SEO-friendly permalink structure (`/services/{slug}/`)
    - Archive page at `/services/`

- **Service Category Taxonomy** (`ft_service_category`)
    - Hierarchical structure (parent/child categories)
    - Admin column in Services list
    - Quick edit support
    - REST API integration
    - Publicly queryable archives

- **Service Tag Taxonomy** (`ft_service_tag`)
    - Non-hierarchical (flat) structure
    - Tag cloud support
    - Admin column in Services list
    - Quick edit support
    - REST API integration

- **Architecture**
    - PSR-4 autoloading with `FT_CustomPostTypes` namespace
    - Abstract base classes for extensibility
    - Clean separation of concerns
    - WordPress Coding Standards (WPCS) compliance

- **Internationalization**
    - Full i18n support with `ft-ctp` text domain
    - Czech (cs_CZ) translation included
    - POT file for translators

- **Developer Experience**
    - Composer integration for dependency management
    - PHPCS configuration for code quality
    - Distribution build system
    - Comprehensive documentation

- **Security**
    - Direct file access prevention
    - Namespace isolation
    - Standard WordPress capability model
    - Clean uninstall script

### Technical Details
- Minimum PHP version: 7.4
- Minimum WordPress version: 6.0
- Tested up to WordPress: 6.4

---

## Version History Format

Each version entry follows this structure:

### Added
New features introduced in this version.

### Changed
Changes to existing functionality.

### Deprecated
Features that will be removed in future versions.

### Removed
Features removed in this version.

### Fixed
Bug fixes.

### Security
Security-related changes and vulnerability fixes.

---

## Upgrade Notes

### Upgrading to 1.0.0
This is the initial release. No upgrade path required.

**Post-Installation Steps:**
1. Navigate to Settings > Permalinks
2. Click "Save Changes" to flush rewrite rules
3. Access Services via the admin menu

---

## Links

- [GitHub Repository](https://github.com/Andrey-Sivak/ft-ctp)
- [Issue Tracker](https://github.com/Andrey-Sivak/ft-ctp/issues)
- [Security Policy](SECURITY.md)

---

[Unreleased]: https://github.com/Andrey-Sivak/ft-ctp/compare/v1.0.0...HEAD
[1.0.0]: https://github.com/Andrey-Sivak/ft-ctp/releases/tag/v1.0.0