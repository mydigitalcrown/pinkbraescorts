// Core Web Vitals Performance Monitoring
(function() {
    'use strict';
    
    // Performance metrics storage
    const metrics = {};
    
    // Core Web Vitals measurement
    function measureCoreWebVitals() {
        // Largest Contentful Paint (LCP)
        new PerformanceObserver((entryList) => {
            const entries = entryList.getEntries();
            const lastEntry = entries[entries.length - 1];
            metrics.lcp = lastEntry.startTime;
            console.log('LCP:', metrics.lcp);
        }).observe({ entryTypes: ['largest-contentful-paint'] });
        
        // First Input Delay (FID)
        new PerformanceObserver((entryList) => {
            const entries = entryList.getEntries();
            entries.forEach(entry => {
                metrics.fid = entry.processingStart - entry.startTime;
                console.log('FID:', metrics.fid);
            });
        }).observe({ entryTypes: ['first-input'] });
        
        // Cumulative Layout Shift (CLS)
        let clsValue = 0;
        let clsEntries = [];
        new PerformanceObserver((entryList) => {
            const entries = entryList.getEntries();
            entries.forEach(entry => {
                if (!entry.hadRecentInput) {
                    clsEntries.push(entry);
                    clsValue += entry.value;
                }
            });
            metrics.cls = clsValue;
            console.log('CLS:', metrics.cls);
        }).observe({ entryTypes: ['layout-shift'] });
    }
    
    // Time to First Byte (TTFB)
    function measureTTFB() {
        new PerformanceObserver((entryList) => {
            const entries = entryList.getEntries();
            entries.forEach(entry => {
                if (entry.name === window.location.href) {
                    metrics.ttfb = entry.responseStart - entry.requestStart;
                    console.log('TTFB:', metrics.ttfb);
                }
            });
        }).observe({ entryTypes: ['navigation'] });
    }
    
    // First Contentful Paint (FCP)
    function measureFCP() {
        new PerformanceObserver((entryList) => {
            const entries = entryList.getEntries();
            entries.forEach(entry => {
                if (entry.name === 'first-contentful-paint') {
                    metrics.fcp = entry.startTime;
                    console.log('FCP:', metrics.fcp);
                }
            });
        }).observe({ entryTypes: ['paint'] });
    }
    
    // Resource loading analysis
    function analyzeResourceLoading() {
        window.addEventListener('load', () => {
            const resources = performance.getEntriesByType('resource');
            const slowResources = resources.filter(resource => 
                resource.duration > 1000 // Resources taking more than 1 second
            );
            
            if (slowResources.length > 0) {
                console.warn('Slow loading resources:', slowResources);
            }
            
            // Analyze by resource type
            const resourceTypes = {};
            resources.forEach(resource => {
                const type = resource.initiatorType;
                if (!resourceTypes[type]) {
                    resourceTypes[type] = [];
                }
                resourceTypes[type].push({
                    name: resource.name,
                    duration: resource.duration,
                    size: resource.transferSize
                });
            });
            
            console.log('Resource loading analysis:', resourceTypes);
        });
    }
    
    // Memory usage monitoring
    function monitorMemoryUsage() {
        if ('memory' in performance) {
            const logMemory = () => {
                const memory = performance.memory;
                console.log('Memory usage:', {
                    used: (memory.usedJSHeapSize / 1048576).toFixed(2) + ' MB',
                    total: (memory.totalJSHeapSize / 1048576).toFixed(2) + ' MB',
                    limit: (memory.jsHeapSizeLimit / 1048576).toFixed(2) + ' MB'
                });
            };
            
            // Log memory usage every 30 seconds
            setInterval(logMemory, 30000);
            logMemory(); // Initial log
        }
    }
    
    // Network connection analysis
    function analyzeConnection() {
        if ('connection' in navigator) {
            const connection = navigator.connection;
            console.log('Network connection:', {
                effectiveType: connection.effectiveType,
                downlink: connection.downlink + ' Mbps',
                rtt: connection.rtt + ' ms',
                saveData: connection.saveData
            });
            
            // Adjust loading strategy based on connection
            if (connection.saveData || connection.effectiveType === 'slow-2g') {
                // Disable non-essential animations and images
                document.body.classList.add('data-saver-mode');
            }
        }
    }
    
    // Performance recommendations
    function generateRecommendations() {
        setTimeout(() => {
            const recommendations = [];
            
            if (metrics.lcp > 2500) {
                recommendations.push('LCP is too high. Consider optimizing images and critical resources.');
            }
            
            if (metrics.fid > 100) {
                recommendations.push('FID is too high. Consider reducing JavaScript execution time.');
            }
            
            if (metrics.cls > 0.1) {
                recommendations.push('CLS is too high. Ensure proper image dimensions and avoid layout shifts.');
            }
            
            if (metrics.ttfb > 800) {
                recommendations.push('TTFB is high. Consider server optimizations or CDN implementation.');
            }
            
            if (recommendations.length > 0) {
                console.warn('Performance Recommendations:', recommendations);
            } else {
                console.log('✅ All Core Web Vitals metrics are within good thresholds!');
            }
        }, 5000); // Wait 5 seconds for metrics to stabilize
    }
    
    // Initialize performance monitoring
    function init() {
        try {
            measureCoreWebVitals();
            measureTTFB();
            measureFCP();
            analyzeResourceLoading();
            monitorMemoryUsage();
            analyzeConnection();
            generateRecommendations();
        } catch (error) {
            console.error('Performance monitoring error:', error);
        }
    }
    
    // Start monitoring when page is loaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
    // Export metrics for external access
    window.performanceMetrics = metrics;
    
})();