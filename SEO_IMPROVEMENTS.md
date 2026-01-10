# SEO Improvements - Google Search Console Fixes

## Overview
This document outlines SEO improvements made to fix issues identified in Google Search Console for scottzirkel.com. The site uses Laravel with nginx (managed through Ploi) for web serving.

## Site Information
- **Web Server**: nginx (managed via Ploi.io)
- - **Framework**: Laravel
  - - **Redirects**: Managed through Ploi or Laravel routes (no Apache .htaccess needed)
    - - **Canonical Tags**: Dynamic implementation in `resources/views/components/app-layout.blade.php`
     
      - ## Issues Identified in GSC
     
      - ### 1. Redirect Pages (16 pages)
      - **Issue**: Pages with redirects preventing proper indexing
      - **GSC Status**: Pages with redirect chains identified
      - **Solution**:
      - - Review and consolidate redirect chains in Ploi redirect settings or Laravel routes
        - - Minimize redirect hops (ideally 0-1)
          - - Ensure redirects use permanent 301 status codes instead of temporary 302
           
            - **Management in Your Setup**:
            - - Ploi: `https://ploi.io/panel/servers/106030/sites/337455/redirects`
              - - Laravel: `routes/web.php` for application-level redirects
               
                - ### 2. Duplicate Content with Canonical Tags (16 pages)
                - **Issue**: Alternate pages with proper canonical tag implementation
                - **GSC Status**: ✅ Already properly configured
                - **Current Implementation**:
                - ```blade
                  <link rel="canonical" href="{{ request()->fullUrl() }}">
                  ```
                  Location: `resources/views/components/app-layout.blade.php:33`

                  This implementation automatically uses the current page URL, preventing duplicate content issues for pagination and alternative versions.

                  ### 3. Pages Without User-Selected Canonical Tags (2 pages)
                  **Issue**: Duplicate pages lacking explicit canonical URL definitions
                  **Solution**: Identify these pages in GSC and ensure each has an explicit canonical tag
                  **Implementation**: Add canonical meta tag to any pages without proper canonical configuration

                  **Example Fix** (if needed):
                  ```blade
                  <link rel="canonical" href="https://scottzirkel.com/primary-page-url">
                  ```

                  ### 4. Broken Pages - 404 Errors (2 pages)
                  **Issue**: Pages returning 404 Not Found status
                  **Current Status**: Site structure appears healthy - main sections load correctly
                  - ✅ `/` (home)
                  - - ✅ `/drawings`
                    - - ✅ `/writing`
                      - - ✅ `/design`
                        - - ✅ `/code`
                          - - ✅ `/uses`
                            - - ✅ `/been-there-done-that`
                              - - ✅ Sitemap shows 30+ indexed pages
                               
                                - **Action Items**:
                                - 1. Identify specific 404 pages in GSC (URL inspection tool)
                                  2. 2. Either:
                                     3.    - Restore the missing content if page should exist
                                           -    - Remove from `resources/views/pages/sitemap.blade.php` if page should not exist
                                            
                                                - **How to Remove Pages from Sitemap**:
                                                - - Edit `resources/views/pages/sitemap.blade.php`
                                                  - - Remove the model/URL from the sitemap generation
                                                    - - Commit and deploy
                                                     
                                                      - ### 5. Forbidden Pages - 403 Errors (1 page)
                                                      - **Issue**: Page returning 403 Forbidden status
                                                      - **Solution**: Check file permissions and access controls
                                                     
                                                      - **Action Items**:
                                                      - 1. Identify specific 403 page in GSC
                                                        2. 2. Verify page permissions in Laravel routes - ensure it's not protected by middleware
                                                           3. 3. Check if page should be public or restricted
                                                             
                                                              4. **Example Route Check** (`routes/web.php`):
                                                              5. ```php
                                                                 // Ensure problematic page route is publicly accessible
                                                                 Route::get('/your-page', YourController::class);
                                                                 ```

                                                                 ### 6. Crawled But Not Indexed Pages (22 pages)
                                                                 **Issue**: Pages crawled by Google but not indexed (quality/content issues)
                                                                 **Solution**: Improve content quality and uniqueness

                                                                 **Recommendations**:
                                                                 - **Minimum Content Length**: Ensure each page has at least 300-400 words
                                                                 - - **Unique Content**: Verify each page provides unique value, not just duplicated text
                                                                   - - **Page Titles**: Optimize for keywords and clarity (currently good)
                                                                     - - **Meta Descriptions**: Write compelling descriptions under 160 characters
                                                                       - - **Internal Linking**: Link from high-authority pages to important content
                                                                        
                                                                         - ## Infrastructure Notes
                                                                        
                                                                         - ### Nginx Configuration (via Ploi)
                                                                         - Your site uses nginx which is configured and managed through Ploi. This means:
                                                                         - - No Apache .htaccess files needed (the file in `public/.htaccess` is harmless but unused)
                                                                           - - Redirects can be configured through Ploi's web UI at: `https://ploi.io/panel/servers/106030/sites/337455/redirects`
                                                                             - - Or through Laravel routes in `routes/web.php`
                                                                              
                                                                               - ### Current Routing
                                                                               - Only 2 explicit routes configured:
                                                                               - - `GET /writing.json` → WritingJsonController
                                                                                 - - `GET /design.json` → DesignJsonController
                                                                                   - - `GET /sitemap.xml` → Redirect to `/sitemap`
                                                                                    
                                                                                     - Main content is dynamically generated by Laravel's routing system based on Folio conventions (`resources/views/pages/`).
                                                                                    
                                                                                     - ## Implementation Roadmap
                                                                                    
                                                                                     - ### Immediate (This Week)
                                                                                     - 1. Check GSC for specific 404/403 page URLs
                                                                                       2. 2. Identify if pages should be restored or removed
                                                                                          3. 3. Remove any pages from sitemap.blade.php if not needed
                                                                                            
                                                                                             4. ### Short-term (1-2 Weeks)
                                                                                             5. 1. Audit the 22 "crawled but not indexed" pages
                                                                                                2. 2. Expand thin content pages to 300-400+ words
                                                                                                   3. 3. Verify each page has unique value
                                                                                                      4. 4. Optimize meta titles and descriptions
                                                                                                        
                                                                                                         5. ### Medium-term (1-2 Months)
                                                                                                         6. 1. Build quality backlinks to improve domain authority
                                                                                                            2. 2. Monitor GSC for indexing improvements
                                                                                                               3. 3. Track keyword rankings improvement
                                                                                                                  4. 4. Increase average CTR through better titles/descriptions
                                                                                                                    
                                                                                                                     5. ## Current Performance Metrics
                                                                                                                     6. - **Indexed Pages**: 300
                                                                                                                        - - **Not Indexed Pages**: 59 (6 reasons identified)
                                                                                                                          - - **Total Impressions**: 222 (last 3 months)
                                                                                                                            - - **Total Clicks**: 1
                                                                                                                              - - **Average Position**: 18.4 (page 2-3)
                                                                                                                                - - **Average CTR**: 0.5% (target: 2-3%)
                                                                                                                                 
                                                                                                                                  - ## Files Modified
                                                                                                                                  - - `SEO_IMPROVEMENTS.md` - This documentation file
                                                                                                                                   
                                                                                                                                    - ## Related Resources
                                                                                                                                    - - [Google Search Console Help](https://support.google.com/webmasters)
                                                                                                                                      - - [Canonical Tags](https://developers.google.com/search/docs/advanced/crawling/consolidate-duplicate-urls)
                                                                                                                                        - - [Redirect Best Practices](https://developers.google.com/search/docs/advanced/crawling/redirects)
                                                                                                                                          - - [Nginx Configuration](https://nginx.org/en/docs/)
                                                                                                                                            - - [Ploi Documentation](https://docs.ploi.io/)
