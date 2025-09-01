<?php
/**
 * URL Router for Pretty URLs
 * This allows creating clean HTML-style URLs for PHP pages
 */

class URLRouter {
    private $routes = [];
    
    public function __construct() {
        // Define your route mappings here
        $this->routes = [
            // Main pages
            'index.html' => 'index.php',
            'home.html' => 'index.php',
            
            // Service pages (add as needed)
            'vip-escorts-mumbai.html' => 'vip-escorts-mumbai.php',
            'celebrity-escorts-mumbai.html' => 'celebrity-escorts-mumbai.php',
            'russian-escorts-mumbai.html' => 'russian-escorts-mumbai.php',
            'arab-girls-mumbai.html' => 'arab-girls-mumbai.php',
            'college-girl-escorts-mumbai.html' => 'college-girl-escorts-mumbai.php',
            'independent-escorts-mumbai.html' => 'independent-escorts-mumbai.php',
            
            // Location pages
            'escorts-south-mumbai.html' => 'escorts-south-mumbai.php',
            'escorts-bandra.html' => 'escorts-bandra.php',
            'escorts-juhu.html' => 'escorts-juhu.php',
            'escorts-andheri.html' => 'escorts-andheri.php',
            'escorts-powai.html' => 'escorts-powai.php',
            
            // Other pages
            'about.html' => 'about.php',
            'contact.html' => 'contact.php',
            'gallery.html' => 'gallery.php',
            'booking.html' => 'booking.php',
            'privacy-policy.html' => 'privacy-policy.php',
            'terms-conditions.html' => 'terms-conditions.php',
        ];
    }
    
    /**
     * Add a new route mapping
     */
    public function addRoute($htmlUrl, $phpFile) {
        $this->routes[$htmlUrl] = $phpFile;
    }
    
    /**
     * Get the current requested URL
     */
    private function getCurrentUrl() {
        $url = $_SERVER['REQUEST_URI'];
        $url = parse_url($url, PHP_URL_PATH);
        $url = ltrim($url, '/');
        return $url;
    }
    
    /**
     * Route the request to appropriate PHP file
     */
    public function route() {
        $currentUrl = $this->getCurrentUrl();
        
        // If empty URL, default to index
        if (empty($currentUrl)) {
            $currentUrl = 'index.html';
        }
        
        // Check if route exists
        if (isset($this->routes[$currentUrl])) {
            $phpFile = $this->routes[$currentUrl];
            
            // Check if PHP file exists
            if (file_exists($phpFile)) {
                include $phpFile;
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * Generate URL for a page
     */
    public function url($page) {
        // Remove .php extension and add .html
        $htmlUrl = str_replace('.php', '.html', $page);
        return '/' . $htmlUrl;
    }
    
    /**
     * Generate canonical URL
     */
    public function canonicalUrl($page) {
        $baseUrl = $this->getBaseUrl();
        return $baseUrl . $this->url($page);
    }
    
    /**
     * Get base URL
     */
    private function getBaseUrl() {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        return $protocol . '://' . $host;
    }
    
    /**
     * Get all routes for sitemap generation
     */
    public function getAllRoutes() {
        return array_keys($this->routes);
    }
}

// Usage example:
// $router = new URLRouter();
// if (!$router->route()) {
//     // Handle 404 - page not found
//     header("HTTP/1.0 404 Not Found");
//     include '404.php';
// }
?>
