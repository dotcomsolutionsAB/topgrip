# Topgrip Industries Website

A clean, minimalist, and mobile-responsive website for Topgrip Industries, inspired by Wabtec's design aesthetic.

## Features

- **Clean & Minimalist Design**: Professional, corporate aesthetic inspired by Wabtec
- **Fully Responsive**: Mobile-first design that works on all devices
- **Fast & Efficient**: Vanilla HTML/CSS/JavaScript with no framework dependencies
- **All Content Preserved**: All content from the original topgrip.co.in website
- **Complete Pages**: All pages including Home, Solutions, About, Contact, and more

## Project Structure

```
topgrip/
├── index.html                 # Home page
├── about.html                 # About page with team
├── capabilities.html          # Manufacturing capabilities
├── news.html                  # News and updates
├── contact.html               # Contact page with form
├── get-quote.html             # Quote request form
├── solutions/
│   ├── automotive.html         # Automotive solutions
│   ├── railways.html          # Railways solutions
│   └── oil-gas.html           # Oil & Gas solutions
├── assets/
│   ├── css/
│   │   ├── main.css          # Main stylesheet
│   │   └── responsive.css    # Mobile responsive styles
│   ├── js/
│   │   ├── main.js           # Navigation and interactivity
│   │   └── forms.js          # Form validation and handling
│   └── images/
│       ├── logo/             # Logo and branding
│       ├── team/             # Team member photos
│       ├── solutions/        # Solution category images
│       └── general/          # General website imagery
└── README.md
```

## Design System

### Colors
- **Primary**: Deep blue/navy (#1a365d) - Professional, industrial
- **Accent**: Red (#e63946) - CTAs and highlights
- **Text**: Dark gray (#1a1a1a) for headings, medium gray (#4a5568) for body
- **Backgrounds**: White and light gray (#f7fafc)

### Typography
- System font stack for optimal performance
- Responsive font sizes using clamp()
- Clean, professional sans-serif

### Layout
- 8px base spacing unit
- Grid-based layouts
- Consistent spacing system
- Minimal shadows and borders

## Pages

1. **Home (index.html)**: Hero sections, services overview, testimonials
2. **Solutions**: 
   - Automotive: BIW & Powertrain fixtures
   - Railways: 45 years of service
   - Oil & Gas: New venture information
3. **About**: Company history, team members, testimonials
4. **Capabilities**: Manufacturing facilities and expertise
5. **News**: Latest updates and announcements
6. **Contact**: Contact form and information
7. **Get a Quote**: Detailed quote request form

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile browsers (iOS Safari, Chrome Mobile)
- Responsive design for all screen sizes

## Performance

- Vanilla JavaScript (no framework overhead)
- Optimized CSS with efficient selectors
- Lazy loading for images
- Minimal external dependencies

## Setup

1. Simply open `index.html` in a web browser
2. No build process or dependencies required
3. All assets are local and self-contained

## Clean URLs (No .html Extension)

The website uses clean URLs without `.html` extensions:
- `/` - Home page
- `/about` - About page
- `/contact` - Contact page
- `/solutions/automotive` - Automotive solutions
- etc.

This is achieved through `.htaccess` URL rewriting. The `.htaccess` file:
- Redirects URLs with `.html` to clean URLs (301 redirect)
- Internally serves `.html` files when clean URLs are requested
- Works seamlessly with all internal links

**Note**: For this to work, you need Apache web server with `mod_rewrite` enabled. If you're using a different server (Nginx, etc.), you'll need to configure URL rewriting accordingly.

## Image Notes

Team member images and other assets should be placed in the `assets/images/` directory structure:
- Team photos: `assets/images/team/`
- Logo: `assets/images/logo/`
- Solution images: `assets/images/solutions/`
- General images: `assets/images/general/`

The website includes fallback placeholders for missing images.

## Contact Information

- **Address**: Plot No-78, Shed No 24-711, Balangar, Hyderabad, India
- **Phone**: +91 040 23075253
- **Mobile**: +91 9885287010
- **Email**: info@topgrip.co.in
- **Hours**: Mon-Sat, 9am until 6pm

## SEO & Google Listing

The website includes comprehensive SEO optimization:

### Files
- **sitemap.xml**: XML sitemap with all pages for Google Search Console
- **robots.txt**: Search engine crawler instructions
- **.htaccess**: Apache configuration for SEO, caching, and security

### SEO Features
- Canonical URLs on all pages
- Meta descriptions and keywords
- Structured data (JSON-LD) for Organization and ContactPage
- Mobile-friendly responsive design
- Fast loading times
- Semantic HTML structure

### Google Search Console Setup
1. Submit `sitemap.xml` to Google Search Console
2. Verify website ownership
3. Monitor indexing status
4. Check for any crawl errors

### Sitemap URL
- `https://topgrip.co.in/sitemap.xml`

### Robots.txt URL
- `https://topgrip.co.in/robots.txt`

## License

© 2024 Topgrip Industries. All Rights Reserved.
