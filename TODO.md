# TODO - Image Filename Refactoring

## Universal Naming Convention
All treatment intro images should follow the pattern: `{treatment-slug}-intro.{ext}`

## Tasks

### 1. Update Content Files
- [ ] **wenkbrauwlift.php**: Change `lasers-intro.png` to `wenkbrauwlift-intro.png` (line 20)
- [ ] **frons-rimpels.php**: Change `frons-sanjay.jpg` to `frons-rimpels-intro.jpg`
- [ ] **voorhoofd-rimpels.php**: Change `frons-sanjay.jpg` to `voorhoofd-rimpels-intro.jpg`
- [x] **kraaien-pootjes.php**: Already correct with `kraaienpootjes-intro.jpg` ✓

### 2. Rename Actual Image Files
Locate and rename the actual image files in the uploads directory to match the new convention:
- [ ] `wenkbrauwlift_lisa_sace-1.png` → `wenkbrauwlift-intro.png`
- [ ] `frons-sanjay.jpg` → `frons-rimpels-intro.jpg`
- [ ] Create separate image: `voorhoofd-rimpels-intro.jpg` (or duplicate frons-sanjay.jpg if same image is intended)

### 3. Verify
- [ ] Check all treatment pages render correctly with new image filenames
- [ ] Verify images display properly on frontend
- [ ] Update any other references to old image filenames in templates or other files

---

## Notes
- The naming convention makes it easy to identify which treatment each image belongs to
- Using the treatment slug ensures consistency with URLs and file structure
- All intro images should use the `-intro` suffix for clarity
