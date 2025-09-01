# Pinbra Escorts Website

A professional PHP website for Pinbra Escorts featuring a modern, responsive design with a pink color scheme.

## Features

- **Modern Design**: Clean, professional layout with pink color theme
- **Responsive**: Fully responsive design that works on all devices
- **PHP Powered**: Server-side functionality with PHP
- **Contact Form**: Working contact form with validation
- **Sections Include**:
  - Header with navigation
  - Hero section
  - Services showcase
  - Location coverage
  - Call-to-action sections
  - Contact form
  - Footer

## File Structure

```
pinkbraphp/
├── index.php                 # Main homepage
├── contact_handler.php       # Contact form processor
├── style.css                # Main stylesheet
├── script.js                # JavaScript functionality
└── includes/
    ├── header.php           # Header component
    ├── footer.php           # Footer component
    ├── services.php         # Services section
    ├── locations.php        # Locations section
    ├── cta.php             # Call-to-action section
    └── contact.php         # Contact form section
```

## Setup Instructions

1. **Web Server**: Upload all files to your web server that supports PHP
2. **Email Configuration**: Update the email address in `contact_handler.php` line 28
3. **Domain**: Update any domain-specific information in the footer and contact sections

## Features Overview

### Header
- Responsive navigation menu
- Mobile-friendly hamburger menu
- Smooth scrolling navigation

### Services
- Six main service categories
- Professional business companion services
- Social event accompaniment
- Travel companions
- Discrete and confidential services

### Locations
- Coverage in major cities:
  - New York City
  - Los Angeles
  - Miami
  - Las Vegas
  - Chicago
  - San Francisco

### Contact
- Working PHP contact form
- Form validation
- Email integration
- Multiple contact methods
- WhatsApp integration ready

### Design
- Pink color scheme (#FF69B4, #FFB6C1, #C71585)
- Modern gradients and shadows
- Font Awesome icons
- Responsive grid layouts
- Mobile-first design approach

## Customization

### Colors
The color scheme can be modified in `style.css` by updating the CSS variables:
```css
:root {
    --primary-pink: #FF69B4;
    --secondary-pink: #FFB6C1;
    --dark-pink: #C71585;
    --light-pink: #FFC0CB;
}
```

### Content
- Update service descriptions in `includes/services.php`
- Modify location information in `includes/locations.php`
- Change contact details in `includes/contact.php` and `includes/footer.php`

## Requirements

- PHP 7.0 or higher
- Web server (Apache, Nginx, etc.)
- Mail server configuration for contact form

## Security Notes

- All form inputs are sanitized and validated
- CSRF protection recommended for production
- SSL certificate recommended
- Regular security updates advised

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## License

This website template is created for Pinbra Escorts. All rights reserved.
