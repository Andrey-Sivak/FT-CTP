# Security Policy

## Supported Versions

We actively support and provide security updates for the following versions:

| Version | Supported          |
| ------- | ------------------ |
| 1.0.x   | :white_check_mark: |
| < 1.0   | :x:                |

## Security Measures

This plugin implements the following security practices:

### Code Security
- ✅ **Namespace isolation** - All code uses `FT_CustomPostTypes` namespace
- ✅ **Direct access prevention** - `ABSPATH` checks on all files
- ✅ **Input validation** - All user inputs are sanitized
- ✅ **Output escaping** - All outputs use appropriate escaping functions
- ✅ **Nonce verification** - CSRF protection on all forms (when applicable)
- ✅ **Capability checks** - Proper permission verification for admin actions
- ✅ **SQL injection prevention** - Using WordPress APIs (no direct SQL)
- ✅ **XSS prevention** - Proper escaping in all templates

### WordPress Security Standards
- Uses WordPress Coding Standards (WPCS)
- Compatible with PHP 7.4+ security features
- Follows WordPress data sanitization/validation guidelines
- REST API endpoints secured (when applicable)

### Data Handling
- No sensitive data storage without encryption
- All custom post types follow WordPress capability model
- Taxonomies use standard WordPress permissions
- Clean uninstall removes all plugin data (optional in `uninstall.php`)

## Reporting a Vulnerability

**Please DO NOT report security vulnerabilities through public GitHub issues.**

### How to Report

1. **Email**: Send vulnerability details to `security@fotografkadomca.cz`
2. **Include**:
    - Plugin version affected
    - Detailed description of the vulnerability
    - Steps to reproduce
    - Potential impact assessment
    - Proof of concept (if available)

### Response Timeline

- **Initial Response**: Within 48 hours
- **Status Update**: Within 7 days
- **Fix Timeline**: Critical issues within 14 days, others within 30 days

### Disclosure Policy

- We follow **responsible disclosure** practices
- Security fixes are released as patches
- Public disclosure only after patch is available
- Credit given to reporters (unless anonymity requested)

## Security Best Practices for Users

### Installation
1. Download only from official sources (GitHub releases)
2. Verify file integrity before installation
3. Keep WordPress core and all plugins updated

### Configuration
1. Use strong administrator passwords
2. Limit user capabilities appropriately
3. Regular security audits of custom post type content
4. Monitor admin access logs

### Maintenance
1. Regularly update to latest stable version
2. Review custom post type permissions periodically
3. Backup site before major updates
4. Test updates in staging environment first

## Known Security Considerations

### Custom Post Types
- Service post type uses standard WordPress `post` capability type
- Administrators have full CRUD permissions
- Editors can create and edit services
- Custom capabilities can be added via filters (future enhancement)

### Taxonomies
- Service categories use `manage_categories` capability
- Service tags follow standard WordPress tag permissions
- Both taxonomies are publicly queryable (by design)

### REST API
- All custom post types exposed via REST API (`show_in_rest => true`)
- Uses WordPress native authentication
- Respects post type and taxonomy capabilities
- No custom endpoints with security concerns

## Changelog of Security Updates

### Version 1.0.0 (2026-01-13)
- Initial release with security-first architecture
- Namespace isolation implemented
- All inputs/outputs properly sanitized/escaped
- WordPress Coding Standards compliance

---

**Last Updated**: 2026-01-13  
**Security Contact**: security@fotografkadomca.cz