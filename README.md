# The Golden Glow WordPress Theme

A custom WordPress theme for The Golden Glow cosmetic clinic in Amsterdam.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Installation](#installation)
- [Theme Structure](#theme-structure)
- [Contact Form System](#contact-form-system)
- [Templates](#templates)
- [Menu Configuration](#menu-configuration)
- [Development](#development)

---

## Overview

This is a custom-built WordPress theme designed specifically for The Golden Glow, a medical-cosmetic clinic specializing in filler treatments, muscle relaxants, biostimulation, medical weight loss, and laser therapy.

**Key Technologies:**
- WordPress (PHP)
- Tailwind CSS v4
- Modern CSS with nested syntax
- Responsive design
- Performance optimized

---

## Features

- ✨ **Modern Design** - Clean, professional aesthetic with gradient backgrounds
- 📱 **Fully Responsive** - Mobile-first design that works on all devices
- ⚡ **Performance Optimized** - Deferred scripts, preconnected fonts, minimal CSS
- 🎨 **Tailwind CSS v4** - Utility-first CSS framework
- 🔧 **Modular Architecture** - Reusable components and templates
- 📝 **Dynamic Content** - Treatment pages managed via PHP arrays
- 🗺️ **Centralized Menu** - Single source of truth for navigation
- 📧 **Contact Form** - Built-in form handling with email notifications

---

## Installation

1. **Upload the theme** to `/wp-content/themes/the_golden_glow/`
2. **Activate the theme** in WordPress Admin → Appearance → Themes
3. **Set up pages:**
   - Go to Settings → Reading
   - Set "Homepage" to a static page
   - Set "Posts page" to your blog page
4. **Configure permalinks** to "Post name" for clean URLs
5. **Install recommended plugins** (optional):
   - WP Mail SMTP (for reliable email delivery)
   - WPForms or Contact Form 7 (if you prefer plugin forms)

---

## Theme Structure

```
the_golden_glow/
├── config/
│   └── menu-config.php          # Centralized navigation menu
├── content/
│   └── treatments/              # Treatment content files
│       ├── lipfiller.php
│       ├── eikelvergroting.php
│       └── ...
├── sections/
│   ├── hero-section.php
│   ├── happy-customers-section.php
│   └── ...
├── templates/
│   ├── blog-card-1.php
│   ├── blog-card-2.php
│   ├── category-intro.php
│   ├── price.php
│   └── ...
├── src/
│   └── index.css                # Tailwind CSS source
├── build/
│   └── index.css                # Compiled CSS
├── front-page.php               # Homepage
├── home.php                     # Blog listing page
├── single.php                   # Single blog post
├── archive.php                  # Archive pages
├── page-treatment.php           # Treatment pages template
├── page-contact.php             # Contact page template
├── header.php
├── footer.php
├── functions.php
└── style.css
```

---

## Contact Form System

### Overview

The theme includes a custom-built contact form system with two implementation options:

### Option 1: Custom Form (Current Implementation)

**How It Works:**

#### 1. The Form (`page-contact.php`)

The form uses WordPress's `admin-post.php` handler:

```php
<form method="post" action="<?php echo admin_url('admin-post.php'); ?>">
    <!-- Hidden field tells WordPress which function to call -->
    <input type="hidden" name="action" value="contact_form_submission">

    <!-- Security token to prevent CSRF attacks -->
    <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>

    <!-- Form fields -->
    <input type="text" name="first_name" required>
    <input type="text" name="last_name" required>
    <input type="email" name="email" required>
    <textarea name="message"></textarea>

    <button type="submit">Submit</button>
</form>
```

**Key Components:**
- **`admin-post.php`** - WordPress's form handler endpoint
- **`action` field** - Identifies which function should process the form
- **`wp_nonce_field()`** - Generates security token
- **Form validation** - HTML5 `required` attributes

#### 2. The Handler (`functions.php`)

WordPress hooks connect the form to the processing function:

```php
// For logged-in users
add_action('admin_post_contact_form_submission', 'handle_contact_form_submission');

// For non-logged-in visitors (important!)
add_action('admin_post_nopriv_contact_form_submission', 'handle_contact_form_submission');
```

#### 3. Processing Steps

The `handle_contact_form_submission()` function:

**Step 1: Security Check**
```php
if (!wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
    wp_die('Security check failed');
}
```

**Step 2: Sanitize Data**
```php
$first_name = sanitize_text_field($_POST['first_name']);
$last_name = sanitize_text_field($_POST['last_name']);
$email = sanitize_email($_POST['email']);
$message = sanitize_textarea_field($_POST['message']);
```

**Step 3: Validate**
```php
if (empty($first_name) || empty($last_name) || empty($email)) {
    wp_redirect(add_query_arg('contact_error', 'missing_fields', wp_get_referer()));
    exit;
}

if (!is_email($email)) {
    wp_redirect(add_query_arg('contact_error', 'invalid_email', wp_get_referer()));
    exit;
}
```

**Step 4: Send Email**
```php
$to = get_option('admin_email');
$subject = 'New Contact Form Submission';
$body = "Name: {$first_name} {$last_name}\nEmail: {$email}\n\nMessage:\n{$message}";

wp_mail($to, $subject, $body);
```

**Step 5: Redirect with Feedback**
```php
if ($mail_sent) {
    wp_redirect(add_query_arg('contact_success', '1', wp_get_referer()));
} else {
    wp_redirect(add_query_arg('contact_error', 'mail_failed', wp_get_referer()));
}
exit;
```

#### 4. User Feedback

Success/error messages are displayed using URL parameters:

```php
// Success message
<?php if (isset($_GET['contact_success'])): ?>
    <div class="success-message">
        Thank you! Your message has been sent.
    </div>
<?php endif; ?>

// Error messages
<?php if (isset($_GET['contact_error'])): ?>
    <div class="error-message">
        <?php
        if ($_GET['contact_error'] === 'missing_fields') {
            echo 'Please fill in all required fields.';
        } elseif ($_GET['contact_error'] === 'invalid_email') {
            echo 'Please enter a valid email address.';
        } else {
            echo 'An error occurred. Please try again.';
        }
        ?>
    </div>
<?php endif; ?>
```

---

### Option 2: Using a Plugin (Alternative)

**Recommended Plugins:**

1. **WPForms** - User-friendly, drag & drop
2. **Contact Form 7** - Most popular, free
3. **Gravity Forms** - Premium, powerful features
4. **Ninja Forms** - Free/premium hybrid

**How to Switch to WPForms:**

1. Install and activate WPForms plugin
2. Create a form in WPForms admin
3. Get the form ID (e.g., 4736)
4. In `page-contact.php`, uncomment line 84:
   ```php
   echo do_shortcode('[wpforms id="4736"]');
   ```
5. Comment out or remove the manual form code

**Plugin Advantages:**
- ✅ No coding required
- ✅ Built-in spam protection
- ✅ Database storage of submissions
- ✅ File upload support
- ✅ Conditional logic
- ✅ Payment integration options
- ✅ Email templates
- ✅ Admin notifications

---

### Email Configuration

**Important:** WordPress `wp_mail()` uses PHP's `mail()` function by default, which often fails or goes to spam.

**Solutions:**

1. **Install WP Mail SMTP Plugin:**
   - Configure with Gmail, SendGrid, Mailgun, etc.
   - More reliable delivery
   - Better spam score

2. **Use Hosting Email Service:**
   - Most hosting providers offer email
   - Configure in cPanel/hosting panel

3. **Test Email Delivery:**
   ```php
   // Add to functions.php temporarily
   wp_mail('your@email.com', 'Test', 'Testing WordPress email');
   ```

**Recommended SMTP Services:**
- **Gmail SMTP** (free, 500/day limit)
- **SendGrid** (free tier: 100/day)
- **Mailgun** (free tier: 5,000/month)
- **Amazon SES** (pay-as-you-go, cheap)

---

### Security Features

The custom form includes multiple security measures:

1. **Nonce Verification** - Prevents CSRF attacks
2. **Data Sanitization** - Cleans all user input
3. **Email Validation** - Checks valid email format
4. **Honeypot Fields** (optional) - Catches spam bots
5. **Rate Limiting** (recommended) - Prevents spam floods

**To Add Honeypot (Anti-Spam):**

Add hidden field to form:
```php
<input type="text"
       name="honeypot"
       style="display:none !important"
       tabindex="-1"
       autocomplete="off">
```

Check in handler:
```php
if (!empty($_POST['honeypot'])) {
    // It's a bot, reject silently
    wp_redirect(add_query_arg('contact_success', '1', wp_get_referer()));
    exit;
}
```

---

### Customization

**Change Email Recipient:**
```php
// In functions.php, line 111
$to = 'your-email@example.com'; // Instead of get_option('admin_email')
```

**Customize Email Subject:**
```php
// Line 112
$subject = 'New Contact - ' . $first_name . ' ' . $last_name;
```

**Add BCC:**
```php
// Line 119
$headers[] = 'Bcc: manager@example.com';
```

**Send Copy to User:**
```php
// After sending to admin
$user_subject = 'Thank you for contacting The Golden Glow';
$user_body = "Hi {$first_name},\n\nThank you for your message...";
wp_mail($email, $user_subject, $user_body);
```

---

## Templates

### Treatment Pages

Treatment content is managed through PHP arrays in `/content/treatments/`:

```php
return [
    "page_title" => "Lipfiller",
    "content_blocks" => [
        [
            "type" => "category-intro",
            "data" => [
                "title" => "LIPFILLER BEHANDELING",
                "content" => "<p>...</p>",
                "image_filename" => "lipfiller.jpg"
            ]
        ],
        // More blocks...
    ]
];
```

**Available Block Types:**
- `category-intro` - Hero section with image
- `text-content` - Text block with optional background
- `navigation` - Jump links
- `price` - Pricing card
- `treatment-summary` - Quick info box
- `happy-customers` - Before/after images
- `appointment-button` - CTA button
- `faq` - FAQ accordion
- `reviews` - Reviews section
- `clinic` - Clinic info

### Blog Cards

Two blog card styles available:

- **blog-card-1.php** - Simple card with border
- **blog-card-2.php** - Card with shadow (used on archive)

---

## Menu Configuration

All navigation is centralized in `/config/menu-config.php`:

```php
return [
    'main_navigation' => [
        [
            'title' => 'Homepage',
            'url' => '/',
        ],
        [
            'title' => 'Behandelingen',
            'url' => '/behandelingen/',
            'submenu' => [
                ['title' => 'Lipfiller', 'url' => '/lipfiller/'],
                // More items...
            ]
        ],
    ],
];
```

Update links once here and they reflect everywhere:
- Desktop navigation
- Mobile menu
- Active states

---

## Development

### CSS Development

The theme uses Tailwind CSS v4 with nested syntax:

```css
/* src/index.css */
@import "tailwindcss";

#content {
  .entry-header {
    .entry-title {
      font-family: var(--font-heading);
    }
  }
}
```

**Build CSS:**
```bash
npm run build
# or watch mode:
npm run dev
```

### Adding New Treatment Pages

1. Create content file in `/content/treatments/new-treatment.php`
2. Copy structure from existing treatment file
3. Update menu in `/config/menu-config.php`
4. Create page in WordPress admin
5. Select "Treatment" template
6. Set slug to match content file name

### Custom Sections

Create new sections in `/sections/`:

```php
<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
?>

<section class="my-section">
    <h2><?php echo esc_html($title); ?></h2>
    <div><?php echo wp_kses_post($content); ?></div>
</section>
```

Use in treatment files:
```php
[
    "type" => "my-section",
    "data" => [
        "title" => "Section Title",
        "content" => "<p>Content here</p>"
    ]
]
```

---

## Credits

**Theme Developer:** Claude Code
**Client:** The Golden Glow - Amsterdam
**Framework:** WordPress + Tailwind CSS v4

---

## Support

For theme support or customization requests, contact the developer or refer to the inline code documentation.

## License

This is a proprietary theme built for The Golden Glow. All rights reserved.
