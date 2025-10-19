# Images to Upload to WordPress Media Library

All these images need to be uploaded to your WordPress site via:
**WordPress Admin → Media → Add New**

After uploading, the images will automatically be placed in the correct location:
`wp-content/uploads/`

## Required Images for Front Page:

### 1. Hero Section
- **kliniek-foto.jpg**
  - Used as: Hero background image
  - Location in code: Line 12 of front-page.php

### 2. Behandelingen Section
- **Shot-Lady-left-banner1-e1750504577494.jpg** (and its responsive sizes)
  - Shot-Lady-left-banner1-e1750504577494.jpg (887w)
  - Shot-Lady-left-banner1-e1750504577494-329x400.jpg (329w)
  - Shot-Lady-left-banner1-e1750504577494-657x800.jpg (657w)
  - Shot-Lady-left-banner1-e1750504577494-768x935.jpg (768w)
  - Used as: Treatment section image
  - Location in code: Lines 121-127 of front-page.php

### 3. About Section (The Golden Glow)
- **wachtkamer-vogels.png** (and its responsive sizes)
  - wachtkamer-vogels-745x800.png (745w)
  - wachtkamer-vogels-373x400.png (373w)
  - wachtkamer-vogels-768x824.png (768w)
  - wachtkamer-vogels.png (1431w - original)
  - Used as: About section (waiting room image)
  - Location in code: Lines 144-150 of front-page.php

### 4. Doctor Section
- **IMG_20250620_161545-2-scaled-e1753473185632.jpg** (and its responsive sizes)
  - IMG_20250620_161545-2-scaled-e1753473185632-768x472.jpg (768w)
  - IMG_20250620_161545-2-scaled-e1753473185632-652x400.jpg (652w)
  - IMG_20250620_161545-2-scaled-e1753473185632.jpg (1246w)
  - Used as: Doctor Arwind Chigharoe photo
  - Location in code: Lines 240-245 of front-page.php

### 5. Reviews Section
- **kleur2-280x280.png**
  - Used as: Review avatar (appears 2 times)
  - Location in code: Lines 270, 302 of front-page.php

- **kleur1-kopie-280x280.png**
  - Used as: Review avatar (appears 2 times)
  - Location in code: Lines 286, 318 of front-page.php

---

## How to Upload:

1. **Go to WordPress Admin**
   - Navigate to: `Media → Add New`

2. **Upload all images**
   - Drag and drop the images
   - Or click "Select Files" and choose them

3. **WordPress will automatically:**
   - Generate responsive image sizes
   - Store them in `wp-content/uploads/`
   - Make them available for use

4. **Verify the upload**
   - After uploading, check that the images appear in your Media Library
   - The front page should now display all images correctly

---

## Benefits of This Approach:

✅ **SEO-friendly** - Images are on the same domain
✅ **Dynamic URLs** - Works on staging/production automatically
✅ **Optimized** - WordPress generates responsive sizes
✅ **Easy management** - All images accessible via Media Library
✅ **CDN-ready** - Works with caching and CDN plugins
✅ **No hardcoded URLs** - Site is portable and flexible

---

## Image List Summary:

Total unique images needed: **6 main images**

1. kliniek-foto.jpg
2. Shot-Lady-left-banner1-e1750504577494.jpg
3. wachtkamer-vogels.png
4. IMG_20250620_161545-2-scaled-e1753473185632.jpg
5. kleur2-280x280.png
6. kleur1-kopie-280x280.png

*Note: WordPress will automatically generate the responsive sizes (-329x400, -768x472, etc.) when you upload the original images.*
