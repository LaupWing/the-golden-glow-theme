# 🎯 Centralized Configuration Guide

## Overview

All site-wide settings (emails, images, contact info, social media) are now centralized in **one place** for easy management.

---

## 📧 Email & Contact Information

**Location:** `/config/site-config.php`

### How to Change Email Addresses

Open `/config/site-config.php` and edit:

```php
'emails' => [
    'contact_form' => 'info@thegoldenglow.nl',  // ← Change this for contact form
    'admin' => 'admin@thegoldenglow.nl',         // ← Admin notifications
    'no_reply' => 'noreply@thegoldenglow.nl',    // ← Automated emails
],
```

**That's it!** All contact forms will now use `info@thegoldenglow.nl`

### Change Contact Information

```php
'contact' => [
    'email' => 'info@thegoldenglow.nl',           // ← Display email
    'phone' => '+31 (0)68 139 0127',              // ← Display phone
    'phone_raw' => '+310681390127',               // ← For clickable links
],
```

---

## 🖼️ Images Management

### Option 1: Using `get_image_url()`

**Before (scattered everywhere):**
```php
<img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/logo.png">
<img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/hero.jpg">
<img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/footer.png">
```

**After (centralized):**
```php
<img src="<?php echo get_image_url('logo.png'); ?>">
<img src="<?php echo get_image_url('hero.jpg'); ?>">
<img src="<?php echo get_image_url('footer.png'); ?>">
```

**Benefits:**
- ✅ Easy to change upload directory location
- ✅ Consistent image URL generation
- ✅ Automatic escaping for security

### Option 2: Using `the_image()` Helper

Even simpler - outputs complete `<img>` tag:

```php
<?php the_image('logo.png', 'The Golden Glow Logo', 'h-24 w-auto'); ?>

// Outputs:
// <img src="https://yoursite.com/wp-content/uploads/logo.png"
//      alt="The Golden Glow Logo"
//      class="h-24 w-auto">
```

**With additional attributes:**
```php
<?php
the_image('hero.jpg', 'Hero Image', 'w-full h-auto', [
    'loading' => 'lazy',
    'width' => '1920',
    'height' => '1080'
]);
?>
```

---

## 📝 Using Site Config Everywhere

### Get Any Config Value

Use **dot notation** to access nested values:

```php
// Get company name
$company_name = get_site_config('company.name');
// Returns: "The Golden Glow"

// Get contact email
$email = get_site_config('contact.email');
// Returns: "info@thegoldenglow.nl"

// Get Instagram URL
$instagram = get_site_config('social.instagram');
// Returns: "https://instagram.com/thegoldenglow"

// Get full address
$address = get_site_config('contact.address.full');
// Returns: "Kerkstraat 147, 1017 GG Amsterdam Centrum, Nederland"

// Get with default value
$phone = get_site_config('contact.phone', '+31 0000000');
```

---

## 🌟 Real-World Examples

### Example 1: Footer Contact Section

**Before:**
```php
<p>Email: info@thegoldenglow.nl</p>
<p>Phone: +31 (0)68 139 0127</p>
<p>Address: Kerkstraat 147, 1017 GG Amsterdam</p>
```

**After:**
```php
<p>Email: <?php echo esc_html(get_site_config('contact.email')); ?></p>
<p>Phone: <?php echo esc_html(get_site_config('contact.phone')); ?></p>
<p>Address: <?php echo esc_html(get_site_config('contact.address.full')); ?></p>
```

Now you can change it once in `site-config.php`!

### Example 2: Social Media Links

**Before:**
```php
<a href="https://instagram.com/thegoldenglow">Instagram</a>
<a href="https://facebook.com/thegoldenglow">Facebook</a>
```

**After:**
```php
<a href="<?php echo esc_url(get_site_config('social.instagram')); ?>">Instagram</a>
<a href="<?php echo esc_url(get_site_config('social.facebook')); ?>">Facebook</a>
```

### Example 3: Business Hours

**Before (hardcoded):**
```php
<p>Mon-Fri: 10:00 - 19:00</p>
<p>Sat-Sun: 10:00 - 16:00</p>
```

**After:**
```php
<p><?php echo esc_html(get_site_config('hours.weekdays')); ?></p>
<p><?php echo esc_html(get_site_config('hours.weekend')); ?></p>
```

### Example 4: Booking Button

**Before:**
```php
<a href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL">
    Maak een afspraak
</a>
```

**After:**
```php
<a href="<?php echo esc_url(get_site_config('booking.url')); ?>">
    <?php echo esc_html(get_site_config('booking.button_text')); ?>
</a>
```

### Example 5: Treatment Images

**Before:**
```php
$upload_url = wp_get_upload_dir()['baseurl'];
$image_url = $upload_url . '/lipfiller.jpg';
```

**After:**
```php
$image_url = get_image_url('lipfiller.jpg');
```

**Or directly in template:**
```php
<img src="<?php echo get_image_url($treatment['image_filename']); ?>"
     alt="<?php echo esc_attr($treatment['title']); ?>">
```

---

## 🔧 Advanced Usage

### Check if Config Exists

```php
$instagram = get_site_config('social.instagram');
if ($instagram) {
    echo '<a href="' . esc_url($instagram) . '">Follow us</a>';
}
```

### Get Entire Config Section

```php
$contact_info = get_site_config('contact');
// Returns array with all contact fields:
// ['email' => '...', 'phone' => '...', 'address' => [...]]

foreach ($contact_info['address'] as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
```

### Get All Config

```php
$all_config = get_site_config();
print_r($all_config); // For debugging
```

---

## 📋 Quick Reference: All Available Configs

```php
// Contact Information
get_site_config('contact.email')
get_site_config('contact.phone')
get_site_config('contact.phone_raw')
get_site_config('contact.address.street')
get_site_config('contact.address.postal')
get_site_config('contact.address.city')
get_site_config('contact.address.country')
get_site_config('contact.address.full')
get_site_config('contact.maps_embed_url')

// Business Hours
get_site_config('hours.weekdays')
get_site_config('hours.weekend')
get_site_config('hours.weekdays_times')
get_site_config('hours.weekend_times')

// Email Addresses
get_site_config('emails.contact_form')
get_site_config('emails.admin')
get_site_config('emails.no_reply')

// Social Media
get_site_config('social.instagram')
get_site_config('social.facebook')
get_site_config('social.pinterest')

// Booking
get_site_config('booking.url')
get_site_config('booking.button_text')

// Company Info
get_site_config('company.name')
get_site_config('company.tagline')
get_site_config('company.description')
get_site_config('company.founded_year')

// SEO
get_site_config('seo.default_title')
get_site_config('seo.default_description')
get_site_config('seo.keywords')
```

---

## 🎯 What to Update in `/config/site-config.php`

### When You Change:

**✉️ Business Email**
```php
'emails' => [
    'contact_form' => 'newemail@thegoldenglow.nl', // Update here
],
```
All contact forms automatically use new email!

**📞 Phone Number**
```php
'contact' => [
    'phone' => '+31 (0)XX XXX XXXX',    // Display version
    'phone_raw' => '+31XXXXXXXXX',      // For tel: links
],
```
Updates header, footer, contact page, everywhere!

**🏢 Address**
```php
'contact' => [
    'address' => [
        'street' => 'New Street 123',
        'postal' => '1234 AB',
        'city' => 'Amsterdam',
        // ...
    ],
],
```

**📱 Social Media**
```php
'social' => [
    'instagram' => 'https://instagram.com/newhandle',
    'facebook' => 'https://facebook.com/newpage',
],
```

**📅 Booking URL**
```php
'booking' => [
    'url' => 'https://new-booking-system.com/...',
],
```

---

## ✅ Migration Checklist

To convert existing code to use centralized config:

### For Contact Information:

- [ ] Replace hardcoded emails with `get_site_config('contact.email')`
- [ ] Replace hardcoded phones with `get_site_config('contact.phone')`
- [ ] Replace hardcoded addresses with `get_site_config('contact.address.*')`

### For Images:

- [ ] Replace `wp_get_upload_dir()['baseurl'] . '/image.jpg'` with `get_image_url('image.jpg')`
- [ ] Or use `the_image('image.jpg', 'Alt text', 'css-classes')`

### For Social Links:

- [ ] Replace hardcoded URLs with `get_site_config('social.instagram')` etc.

### For Booking Links:

- [ ] Replace booking URLs with `get_site_config('booking.url')`

---

## 🚀 Already Updated Files

These files are already using the centralized system:

✅ **header.php**
- Logo image
- Booking button (desktop & mobile)
- Company name

✅ **functions.php**
- Contact form email recipient
- Image helper functions

---

## 🔮 Future: Image Registry (Optional)

If you want even more control, you can create an image mapping:

**Create:** `/config/images-config.php`
```php
return [
    'logo' => 'logo.png',
    'hero' => 'hero-banner.jpg',
    'footer-bg' => 'footer.png',
    'treatments' => [
        'lipfiller' => 'lipfiller.jpg',
        'botox' => 'botox-treatment.jpg',
    ],
];
```

**Then use keys instead of filenames:**
```php
// Instead of:
get_image_url('logo.png')

// Use:
get_registered_image('logo')
```

This way, if you rename files, you only update the registry!

---

## 💡 Pro Tips

1. **Always use `esc_url()` for URLs:**
   ```php
   <a href="<?php echo esc_url(get_site_config('booking.url')); ?>">
   ```

2. **Always use `esc_html()` for text:**
   ```php
   <p><?php echo esc_html(get_site_config('contact.email')); ?></p>
   ```

3. **Always use `esc_attr()` for attributes:**
   ```php
   <img alt="<?php echo esc_attr(get_site_config('company.name')); ?>">
   ```

4. **Provide defaults:**
   ```php
   get_site_config('contact.phone', '+31 0000000') // Fallback if not set
   ```

5. **Cache the config** (already done automatically with `static $config`)

---

## 🎉 Benefits

✅ **Single Source of Truth** - Change once, updates everywhere
✅ **No More Search & Replace** - No hunting through 50 files
✅ **Easy Maintenance** - Future developers know where to look
✅ **Type Safety** - Consistent data structure
✅ **Better Security** - Centralized escaping
✅ **Version Control Friendly** - Clear diffs when config changes

---

## Need Help?

Check `/config/site-config.php` for all available settings.
All helper functions are in `functions.php` starting at line 139.
