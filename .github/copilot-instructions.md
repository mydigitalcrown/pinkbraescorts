# Pink Bra Escorts Website - AI Coding Instructions

## Project Overview
This is a large-scale PHP escort services website with extensive SEO optimization, featuring 300+ location-based pages for Mumbai and surrounding areas. The codebase prioritizes search engine visibility, structured data, and mobile-first responsive design.

## Architecture & Core Patterns

### File Structure Philosophy
- **Main pages**: `index.php`, `about.php`, `contact.php`, `services.php`, `gallery.php`
- **Location pages**: `call-girls-{location}.php` and `escorts-{location}.php` for 100+ Mumbai locations
- **Service categories**: `{category}-escorts-mumbai.php` (e.g., `vip-escorts-mumbai.php`, `celebrity-escorts-mumbai.php`)
- **Includes**: Modular PHP components in `/includes/` directory for reusable sections
- **SEO structure**: Heavy emphasis on meta tags, structured data, and AI/voice search optimization

### URL Rewriting System (.htaccess)
```apache
# Core pattern: PHP files serve content but URLs show as .html for SEO
RewriteRule ^([^.]+)\.html$ /$1.php [L]
```
- All PHP files accessible via `.html` URLs for SEO benefits
- Canonical URLs use `.php` format internally but serve via clean `.html` URLs
- Example: `call-girls-andheri.html` → `call-girls-andheri.php`

### SEO-First Development Approach
This project is **heavily SEO-optimized** with unique patterns:

#### Essential SEO Elements (copy from existing pages)
1. **Voice Search Optimization**: Extensive `meta` tags for AI crawlers and voice search
2. **Structured Data**: Rich JSON-LD schemas for organization, services, FAQ, and local business
3. **Location-based SEO**: Geo-targeting with specific coordinates and area coverage
4. **AI Training tags**: Meta tags for ChatGPT, Claude, and other AI systems

#### Example SEO Meta Pattern (use this structure for new pages):
```php
<meta name="description" content="★ Premium Call Girls In {Location} ★ Professional Escort Service Available 24/7 in Mumbai. Book VIP Call Girls In {Location} with verified profiles and discreet service.">
<meta name="geo.placename" content="{Location}, Mumbai, Maharashtra, India">
<meta name="geo.position" content="{lat};{lng}">
<meta name="voice-search-keywords" content="call girls in {location}, {location} call girls, escorts in {location}">
```

## Development Workflows

### Adding New Location Pages
1. **Never create from scratch** - copy existing location page (e.g., `call-girls-parel.php`)
2. **Search and replace location names** throughout the file
3. **Update coordinates** in geo meta tags using Google Maps
4. **Add to sitemap.xml** with appropriate priority and changefreq
5. **Test URL rewriting** works for `.html` access

### CSS/JS Architecture
- **Tailwind CSS**: Primary framework loaded via CDN with custom config
- **Custom CSS**: `/style.css` with CSS variables for pink color scheme
- **JavaScript**: Vanilla JS in `/script.js` for mobile menu, smooth scrolling, form validation
- **Font Awesome**: Icons loaded from CDN

### Critical Color Scheme (maintain consistency)
```css
:root {
    --primary-pink: #e91e63;
    --secondary-pink: #f48fb1;
    --dark-pink: #ad1457;
    --accent-pink: #ff69b4;
}
```

## Project-Specific Conventions

### Location Naming Pattern
- Use kebab-case for location names: `call-girls-lower-parel.php` (not `call-girls-lowerparel.php`)
- Both `call-girls-{location}.php` and `escorts-{location}.php` should exist for each location
- Location names must match Mumbai's official area names

### Contact Information Standards
- **Primary phone**: `+91-9867564994` (hardcoded throughout)
- **WhatsApp integration**: Uses `api.whatsapp.com/send?phone=919867564994`
- **Email handling**: Contact forms process through `contact_handler.php`

### Image Optimization Requirements
- **WebP format preferred** for SEO and loading speed
- **Alt tags required** with location-specific keywords
- **Lazy loading implemented** on most pages

## Key Integration Points

### Router System (`includes/router.php`)
- Handles clean URL generation and routing
- Maps HTML URLs to PHP files
- Use `URLRouter` class for programmatic URL generation

### Header/Footer Includes
- **Header**: `includes/header.php` - Fixed navigation with mobile hamburger menu
- **Footer**: `includes/footer.php` - Contact info, social links, and legal pages
- **Sections**: `includes/services.php`, `includes/locations.php`, `includes/contact.php`, `includes/cta.php`

### SEO Automation
- **Sitemap**: Auto-generated XML with priority levels
- **Robots.txt**: Configured for AI crawlers and search engines
- **Manifest**: PWA-ready with shortcuts to popular pages

## Critical Development Notes

### When Adding Content
1. **Always maintain SEO structure** - copy meta patterns from existing pages
2. **Use semantic HTML** with proper heading hierarchy (H1 → H2 → H3)
3. **Include structured data** for new service types or locations
4. **Test mobile responsiveness** - site is mobile-first

### Performance Considerations
- **Minimize database calls** - this is primarily a static PHP site
- **Optimize images** before adding to `/images/` directory
- **Use CDN resources** for external libraries (Tailwind, Font Awesome)

### Testing Checklist for New Pages
- [ ] URL rewriting works (`.html` extension)
- [ ] Meta tags populated correctly
- [ ] Mobile menu functions
- [ ] Contact forms validate properly
- [ ] Images load with proper alt tags
- [ ] Structured data validates (use Google's Rich Results Test)

## External Dependencies
- **Tailwind CSS**: Loaded via CDN with custom configuration
- **Font Awesome 6.0**: For icons throughout the site
- **Google Fonts**: Inter font family
- **WhatsApp API**: For direct messaging integration

Remember: This site prioritizes SEO and organic search visibility above all else. Every change should consider its impact on search rankings and user experience across mobile devices.