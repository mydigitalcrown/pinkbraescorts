# Pink Bra Escorts Website - AI Coding Instructions

## Project Architecture

### Core Technology Stack
- **Backend**: Pure PHP (no framework) with include-based component system
- **Frontend**: Tailwind CSS (CDN) + custom CSS variables + vanilla JavaScript
- **SEO Engine**: Extensive JSON-LD structured data, voice/AI search meta tags
- **URL System**: Apache `.htaccess` rewriting (`.php` files serve as `.html` URLs)

### File Organization Pattern
```
pinkbraphp/
├── {location-type}-{area}.php      # 300+ location pages (call-girls-*, escorts-*)
├── {category}-escorts-mumbai.php   # 40+ service category pages (vip-, celebrity-, russian-, etc.)
├── index.php, about.php, etc.      # Core pages
├── includes/                       # Reusable PHP components
│   ├── header.php                  # Fixed nav with mobile hamburger menu
│   ├── footer.php                  # Contact info, social links, legal
│   ├── services.php, locations.php # Content sections
│   └── router.php                  # URL routing class (rarely used)
├── contact_handler.php             # Form processor with sanitization
├── style.css                       # CSS variables + performance optimizations
├── sitemap.xml                     # 1600+ URLs with priority levels
└── .htaccess                       # URL rewriting + performance headers
```

## SEO-First Development Philosophy

**CRITICAL**: This is an SEO-maximized site. Every page has 700+ lines of meta tags, structured data, and AI optimization before content.

### The SEO Template Pattern (Copy-Paste Workflow)
When creating new location pages:
1. **Copy existing location page** (e.g., `escorts-malad.php`) - NEVER start from scratch
2. **Find-replace location name** (case-sensitive): "Malad" → "NewArea", "malad" → "newarea"
3. **Update geo coordinates** in 8+ places:
   - `<meta name="geo.position" content="LAT;LNG">`
   - `<meta name="ICBM" content="LAT, LNG">`
   - JSON-LD schemas: `LocalBusiness.geo`, `GeoCircle.geoMidpoint`
4. **Add to `sitemap.xml`** with:
   - Priority: 0.9 for major areas, 0.7 for suburbs
   - Changefreq: `daily` for high-traffic, `weekly` for others
5. **Test URL rewriting**: Browse to `{page}.html` (not `.php`)

### Essential SEO Sections (Present on Every Location Page)
```php
<!-- 50+ meta tags: description, keywords, geo, voice-search, AI-training -->
<meta name="voice-search-keywords" content="...">
<meta name="ai-keywords" content="...">
<meta name="question-keywords" content="...">

<!-- 15+ JSON-LD schemas (1000+ lines) -->
<script type="application/ld+json">
{
  "@type": "LocalBusiness",  // Main business schema
  "aggregateRating": {...},   // Reviews (fake but structured)
  "hasOfferingCatalog": {...} // Service listings
}
</script>
// + FAQPage, Service, QAPage, SpeakableSpecification, Dataset schemas

<!-- Zero-ranking optimization (hidden divs for AI) -->
<div class="quick-answer" style="display:none;">
  Best escorts in {Location} are available 24/7...
</div>
```

**CRITICAL JSON-LD Schema Requirements** (as of Oct 2025):
- **Review schema**: `itemReviewed` MUST include `description`, `provider`, and `areaServed` properties
- **Service schema**: Must include `serviceType`, `provider`, and `areaServed` for Google validation
- Reference `BATCH_FIX_COMPLETE_REPORT.md` for schema validation patterns
- Test all schemas at `search.google.com/test/rich-results`

## Critical Development Patterns

### URL Rewriting System (.htaccess)
```apache
# Users access: /escorts-andheri.html
# Server executes: /escorts-andheri.php
RewriteRule ^([^.]+)\.html$ /$1.php [L]

# Canonical URLs in code use .php
<link rel="canonical" href="https://pinkbraescort.in/escorts-andheri.php">
```
**Rule**: Always reference `.php` in code; `.htaccess` handles `.html` presentation.

### Component Include Pattern
```php
<?php include 'includes/header.php'; ?>
<!-- Page content -->
<?php include 'includes/services.php'; ?>  // Optional section
<?php include 'includes/locations.php'; ?>  // Optional section
<?php include 'includes/footer.php'; ?>
```
**Pattern**: Header/footer always included; middle sections (`services.php`, etc.) included based on page needs.

### Form Handling Architecture
- All forms `action="contact_handler.php"` with `method="POST"`
- Handler sanitizes with `filter_var()`, validates, sends email to `sanjayadotsingh@gmail.com`
- Returns user to same page with success/error message
- **No AJAX** - traditional POST-redirect pattern

### CSS Color Scheme (Immutable)
```css
:root {
    --primary-pink: #e91e63;    // Main brand color
    --secondary-pink: #f48fb1;  // Hover states
    --dark-pink: #ad1457;       // Accents
    --accent-pink: #ff69b4;     // Highlights
}
```
Use these variables, not hex codes. Present in `/style.css` and inline styles.

### JavaScript Animation Patterns
Location pages have elaborate animation systems:
```javascript
// Initialize on DOMContentLoaded
initMaladAnimations();  // Spinning icons
initLuxuryAnimations(); // Floating hero sections
initNaviEffects();      // Card hover effects
```
**When copying location pages**: Keep animation function names unique (e.g., `initMaladAnimations` → `initAndheriAnimations`).

## Location Page Conventions

### Naming Standards
- **File names**: `call-girls-{kebab-case-location}.php`, `escorts-{kebab-case-location}.php`
- **Location format**: Use official Mumbai area names with proper kebab-casing
  - ✅ `call-girls-lower-parel.php`
  - ❌ `call-girls-lowerparel.php`
- **Dual coverage**: Create BOTH `call-girls-*` AND `escorts-*` for each location

### Content Structure (Consistent Across All Location Pages)
1. **Hero section** with location name, 24/7 badge, service highlights
2. **Services include** (via `includes/services.php`)
3. **Location-specific categories** (Corporate, College, Elite, Mature, International, VIP)
4. **Why Choose {Location}** section with local expertise claims
5. **FAQ section** with 4-8 Q&As (answers include location name 3+ times)
6. **Quick Answers** section (hidden div + visible cards for zero-ranking)
7. **Contact form** with location dropdown
8. **Comprehensive SEO article** (3000+ words, heavy keyword density)
9. **Locations include** (via `includes/locations.php`)

### Geo-Coordinate Sources
Use Google Maps to get coordinates:
1. Search location on maps.google.com
2. Right-click → "What's here?"
3. Copy coordinates (e.g., `19.1868, 72.8495`)
4. Update in 8+ places (see "The SEO Template Pattern" above)

## Contact Information (Site-Wide Constants)
```php
Phone: +91-9867564994                     // Hardcoded in all CTAs
WhatsApp: api.whatsapp.com/send?phone=919867564994
Email: sanjayadotsingh@gmail.com          // contact_handler.php recipient (NOTE: typo in original)
Domain: https://pinkbraescort.in          // All canonical URLs
```
**Note**: Email in contact_handler.php has typo "sanjanadotsingh" vs "sanjayadotsingh" - verify which is correct.

## Performance & Technical Requirements

### Image Handling
- **Format**: WebP preferred (1.5-2x smaller than JPEG)
- **Alt tags**: Must include location + keyword (e.g., `"Escorts In Malad - Premium Malad Escorts"`)
- **Lazy loading**: Use `<img data-src="..." class="lazy">` with IntersectionObserver
- **Location**: `/images/locations/mumbai/{area}-escorts.webp`

### Sitemap Management
When adding new pages, update `sitemap.xml`:
```xml
<url>
    <loc>https://pinkbraescort.in/escorts-newarea.php</loc>
    <lastmod>2025-01-15</lastmod>
    <changefreq>daily</changefreq>  <!-- Major areas: daily, suburbs: weekly -->
    <priority>0.9</priority>         <!-- Major: 0.9, suburbs: 0.7, services: 0.8 -->
</url>
```

### Header Cache Control (.htaccess)
Performance headers already configured:
- CSS/JS/Images: 1 year cache
- HTML/PHP: 1 hour cache
- Gzip compression enabled
- ETags removed

**Don't modify** unless adding new file types.

## Common Development Tasks

### Task: Add New Location Page
```bash
# 1. Copy template (use escorts-malad.php as the gold standard)
cp escorts-malad.php escorts-newarea.php

# 2. Find-replace (case-sensitive)
sed -i '' 's/Malad/Newarea/g' escorts-newarea.php
sed -i '' 's/malad/newarea/g' escorts-newarea.php

# 3. Get coordinates from Google Maps, update:
#    - Line ~48: <meta name="geo.position">
#    - Line ~49: <meta name="ICBM">
#    - Line ~150-162: LocalBusiness.geo JSON-LD
#    - Line ~180-190: GeoCircle.geoMidpoint JSON-LD

# 4. Update animation function names to avoid conflicts:
#    initMaladAnimations() → initNewareaAnimations()

# 5. Add to sitemap.xml
# 6. Test: Open /escorts-newarea.html in browser
```

### Task: Update Contact Information
```bash
# Search for phone number across all files
grep -r "+91-9867564994" *.php includes/*.php

# Update in:
# - All location pages (inline CTAs)
# - includes/header.php (if present)
# - includes/footer.php
# - contact_handler.php (email recipient)
```

### Task: Add New Service Category
1. Create `{category}-escorts-mumbai.php` (copy `vip-escorts-mumbai.php` as template)
2. Update title, H1, and meta description to match category
3. Modify service descriptions and offerings to match category theme
4. Update JSON-LD schemas with category-specific information
5. Add to `sitemap.xml` with priority 0.8
6. Link from `services.php` include and relevant location pages

## Development Workflow Notes

### No Build System
- **Pure static PHP**: No bundlers, transpilers, or build steps
- **Live deployment**: Upload PHP files directly to server
- **Testing**: Browse directly to `.html` URLs (e.g., `/escorts-andheri.html`)
- **Dependencies**: All via CDN (Tailwind, Font Awesome, Google Fonts)

### File-Based Architecture
- **No database**: All content embedded in PHP files
- **No routing framework**: Simple `.htaccess` rewrites handle URLs
- **Component system**: PHP `include` statements for reusable sections
- **State management**: Form submissions via traditional POST to `contact_handler.php`

## Testing Checklist
Before deploying any page:
- [ ] URL accessible via `.html` extension (test in browser)
- [ ] All {Location} placeholders replaced with actual location name
- [ ] Geo coordinates updated (verify not still showing template location coords)
- [ ] Phone number clickable: `tel:+919867564994`
- [ ] WhatsApp link works: Opens WhatsApp with pre-filled number
- [ ] Mobile menu hamburger icon functions
- [ ] Forms validate and submit to `contact_handler.php`
- [ ] Structured data valid: Google Rich Results Test (search.google.com/test/rich-results)
- [ ] Page loads in <3 seconds (check DevTools Network tab)
- [ ] Images have alt tags with location keywords

## External Dependencies (CDN-Loaded)
```html
<!-- Never bundle, always use CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap">
```

## Anti-Patterns (Don't Do This)
❌ Create location pages from scratch (copy existing)  
❌ Use absolute paths in includes (`/includes/header.php` → `includes/header.php`)  
❌ Modify `.htaccess` rewrite rules without testing  
❌ Remove or simplify SEO sections ("too much metadata")  
❌ Use database calls (site is purely file-based)  
❌ Add NPM/Composer dependencies (CDN-only)  
❌ Change color scheme without updating CSS variables  
❌ Forget to update `sitemap.xml` when adding pages

## Voice Search & AI Optimization Philosophy
This site targets voice assistants (Google Assistant, Alexa) and AI crawlers (ChatGPT, Claude):
- **Question keywords**: `meta name="question-keywords"` for "how to", "where to", "what are"
- **Voice keywords**: `meta name="voice-search-keywords"` for natural language queries
- **Answer boxes**: Hidden `<div class="quick-answer">` for featured snippets
- **Speakable schema**: Marks H1 and key paragraphs for voice readout
- **Dataset schema**: Trains AI on voice query patterns (hidden from users)

**Philosophy**: Over-optimize for AI/voice search even if not visible to users. Future-proofing for 2025+ search trends.