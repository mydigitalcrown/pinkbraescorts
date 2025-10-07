<?php
/**
 * URL Helper Functions
 * Helper functions to generate clean URLs throughout your website
 */

/**
 * Generate a clean URL with .html extension
 */
function cleanUrl($page, $params = []) {
    // Remove .php extension and add .html
    $url = str_replace('.php', '.html', $page);
    
    // Add parameters if provided
    if (!empty($params)) {
        $url .= '?' . http_build_query($params);
    }
    
    return '/' . $url;
}

/**
 * Generate canonical URL
 */
function canonicalUrl($page) {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $baseUrl = $protocol . '://' . $host;
    
    return $baseUrl . cleanUrl($page);
}

/**
 * Generate meta canonical tag
 */
function canonicalTag($page) {
    return '<link rel="canonical" href="' . canonicalUrl($page) . '">';
}

/**
 * Generate navigation menu with clean URLs
 */
function generateNav() {
    $navItems = [
        'Home' => 'index.php',
        'VIP Escorts' => 'vip-escorts-mumbai.php',
        'Celebrity Escorts' => 'celebrity-escorts-mumbai.php',
        'Russian Escorts' => 'russian-escorts-mumbai.php',
        'Gallery' => 'gallery.php',
        'Contact' => 'contact.php',
    ];
    
    $nav = '<nav class="main-nav"><ul>';
    foreach ($navItems as $title => $page) {
        $url = cleanUrl($page);
        $nav .= '<li><a href="' . $url . '">' . $title . '</a></li>';
    }
    $nav .= '</ul></nav>';
    
    return $nav;
}

/**
 * Generate breadcrumbs with clean URLs
 */
function generateBreadcrumbs($currentPage, $pageTitle) {
    $breadcrumbs = '<nav class="breadcrumbs">';
    $breadcrumbs .= '<a href="' . cleanUrl('index.php') . '">Home</a>';
    $breadcrumbs .= ' > <span>' . $pageTitle . '</span>';
    $breadcrumbs .= '</nav>';
    
    return $breadcrumbs;
}

/**
 * Generate sitemap URLs
 */
function generateSitemapUrls() {
    $pages = [
        'index.php' => ['priority' => '1.0', 'changefreq' => 'daily'],
        'vip-escorts-mumbai.php' => ['priority' => '0.9', 'changefreq' => 'weekly'],
        'celebrity-escorts-mumbai.php' => ['priority' => '0.9', 'changefreq' => 'weekly'],
        'russian-escorts-mumbai.php' => ['priority' => '0.9', 'changefreq' => 'weekly'],
        'arab-girls-mumbai.php' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        'college-girl-escorts-mumbai.php' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        'independent-escorts-mumbai.php' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        'escorts-south-mumbai.php' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        'escorts-bandra.php' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        'escorts-juhu.php' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        'escorts-andheri.php' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        'escorts-powai.php' => ['priority' => '0.8', 'changefreq' => 'weekly'],
        'about.php' => ['priority' => '0.6', 'changefreq' => 'monthly'],
        'contact.php' => ['priority' => '0.7', 'changefreq' => 'monthly'],
        'gallery.php' => ['priority' => '0.7', 'changefreq' => 'weekly'],
    ];
    
    $urls = [];
    foreach ($pages as $page => $meta) {
        $urls[] = [
            'url' => canonicalUrl($page),
            'priority' => $meta['priority'],
            'changefreq' => $meta['changefreq'],
            'lastmod' => date('Y-m-d')
        ];
    }
    
    return $urls;
}

/**
 * Get current page name for active navigation
 */
function getCurrentPage() {
    $currentUrl = $_SERVER['REQUEST_URI'];
    $currentUrl = parse_url($currentUrl, PHP_URL_PATH);
    $currentUrl = ltrim($currentUrl, '/');
    
    // Convert .html back to .php for internal processing
    if (strpos($currentUrl, '.html') !== false) {
        $currentUrl = str_replace('.html', '.php', $currentUrl);
    }
    
    return $currentUrl ?: 'index.php';
}

/**
 * Check if current page is active (for navigation highlighting)
 */
function isActivePage($page) {
    return getCurrentPage() === $page;
}

/**
 * Generate page-specific meta tags
 */
function generateMetaTags($page, $title, $description, $keywords = '') {
    $canonical = canonicalUrl($page);
    $ogImage = canonicalUrl('') . 'images/og-image-escorts-mumbai.jpg';
    
    $meta = '
    <title>' . htmlspecialchars($title) . '</title>
    <meta name="description" content="' . htmlspecialchars($description) . '">
    ' . ($keywords ? '<meta name="keywords" content="' . htmlspecialchars($keywords) . '">' : '') . '
    <link rel="canonical" href="' . $canonical . '">
    
    <!-- Open Graph -->
    <meta property="og:title" content="' . htmlspecialchars($title) . '">
    <meta property="og:description" content="' . htmlspecialchars($description) . '">
    <meta property="og:url" content="' . $canonical . '">
    <meta property="og:image" content="' . $ogImage . '">
    
    <!-- Twitter -->
    <meta name="twitter:title" content="' . htmlspecialchars($title) . '">
    <meta name="twitter:description" content="' . htmlspecialchars($description) . '">
    <meta name="twitter:image" content="' . $ogImage . '">
    ';
    
    return $meta;
}
?>
