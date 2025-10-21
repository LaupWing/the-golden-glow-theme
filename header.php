<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="The Golden Glow - Dé cosmetische kliniek in Amsterdam. Specialist in fillerbehandelingen, spierontspanners, biostimulatie, medisch afvallen en lasertherapie. BIG-geregistreerde arts met 14+ jaar ervaring.">
  <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"></noscript>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Header -->
  <header class="sticky top-0 z-50 bg-background shadow-sm">
    <div class="container mx-auto px-[5%]">
      <div class="flex items-center justify-between min-h-[80px]">

        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/logo.png"
              alt="<?php bloginfo('name'); ?>"
              width="150"
              height="96"
              class="h-24 lg:h-28 w-auto object-contain">
          </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center gap-6 xl:gap-8 flex-grow justify-end">
          <?php
          // Get current page slug/path
          global $post;
          $current_slug = '';
          if (is_object($post)) {
            $current_slug = '/' . $post->post_name . '/';
          }

          // Helper function to check if current page matches any path
          function is_current_path($paths) {
            global $post;
            if (!is_array($paths)) {
              $paths = [$paths];
            }
            if (!is_object($post)) {
              return false;
            }
            $current_slug = '/' . $post->post_name . '/';
            foreach ($paths as $path) {
              if ($current_slug === $path) {
                return true;
              }
            }
            return false;
          }

          // Define menu categories with their subpages
          $menu_categories = [
            'spierontspanners' => ['/spierontspanners/', '/bunny-lines/', '/frons-rimpels/', '/gummy-smile/', '/kin-boto/', '/kraaien-pootjes/', '/lip-flip/', '/liquid-facelift/', '/migraine/', '/tandenknarsen/'],
            'filler' => ['/filler-behandeling/', '/full-face/', '/neus/', '/slapen/', '/kaaklijn-filler/', '/lip-filler-behandeling/'],
            'bodyfillers' => ['/bodyfillers/', '/bilfillers/', '/hip-dips/', '/penisvergroting/', '/vagina-verjonging/'],
            'medisch_afvallen' => ['/medisch-afvallen/', '/overzicht-afval-medicatie/'],
            'lasers' => ['/lasers/', '/tixel/', '/endolift/'],
            'biostimulatie' => ['/biostimulatie/', '/lanluma/', '/sculptra/', '/pdo/', '/profhilo/', '/skinboosters/']
          ];

          $is_home = is_front_page();
          $is_arts = is_current_path('/arts/');
          $is_prijzen = is_current_path('/prijzen/');
          $is_blog = is_current_path('/blog-posts/');
          $is_contact = is_current_path('/contact/');

          // Check if on any treatment page
          $is_behandeling = false;
          foreach ($menu_categories as $category_paths) {
            if (is_current_path($category_paths)) {
              $is_behandeling = true;
              break;
            }
          }
          ?>

          <a href="<?php echo esc_url(home_url('/')); ?>"
            class="font-heading text-sm <?php echo $is_home ? 'text-primary' : 'text-text'; ?> hover:text-primary transition-colors duration-300 relative group py-2">
            Homepage
            <span class="absolute bottom-0 left-0 <?php echo $is_home ? 'w-full' : 'w-0'; ?> h-[3px] bg-primary transition-all duration-300 group-hover:w-full"></span>
          </a>

          <a href="<?php echo esc_url(home_url('/arts/')); ?>"
            class="font-heading text-sm <?php echo $is_arts ? 'text-primary' : 'text-text'; ?> hover:text-primary transition-colors duration-300 relative group py-2">
            Arts
            <span class="absolute bottom-0 left-0 <?php echo $is_arts ? 'w-full' : 'w-0'; ?> h-[3px] bg-primary transition-all duration-300 group-hover:w-full"></span>
          </a>

          <!-- Behandelingen Dropdown -->
          <div class="relative group">
            <button class="font-heading text-sm <?php echo $is_behandeling ? 'text-primary' : 'text-text'; ?> hover:text-primary transition-colors duration-300 flex items-center gap-2 py-2">
              Behandelingen
              <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="currentColor" viewBox="0 0 320 512">
                <path d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </button>

            <!-- Dropdown Menu -->
            <div class="absolute top-full left-0 mt-2 w-56 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 py-2">
              <?php
              $dropdown_items = [
                ['url' => '/spierontspanners/', 'label' => 'Spierontspanners', 'category' => 'spierontspanners'],
                ['url' => '/filler-behandeling/', 'label' => 'Filler Behandeling', 'category' => 'filler'],
                ['url' => '/bodyfillers/', 'label' => 'Body fillers', 'category' => 'bodyfillers'],
                ['url' => '/medisch-afvallen/', 'label' => 'Medisch afvallen', 'category' => 'medisch_afvallen'],
                ['url' => '/lasers/', 'label' => 'Lasers', 'category' => 'lasers'],
                ['url' => '/biostimulatie/', 'label' => 'Biostimulatie', 'category' => 'biostimulatie']
              ];

              foreach ($dropdown_items as $item):
                $is_active = is_current_path($menu_categories[$item['category']]);
              ?>
                <a href="<?php echo esc_url(home_url($item['url'])); ?>"
                  class="block px-6 py-2 text-sm <?php echo $is_active ? 'bg-primary text-white' : ''; ?> hover:bg-primary hover:text-white transition-colors duration-200">
                  <?php echo $item['label']; ?>
                </a>
              <?php endforeach; ?>
            </div>
          </div>

          <a href="<?php echo esc_url(home_url('/prijzen/')); ?>"
            class="font-heading text-sm <?php echo $is_prijzen ? 'text-primary' : 'text-text'; ?> hover:text-primary transition-colors duration-300 relative group py-2">
            Prijzen
            <span class="absolute bottom-0 left-0 <?php echo $is_prijzen ? 'w-full' : 'w-0'; ?> h-[3px] bg-primary transition-all duration-300 group-hover:w-full"></span>
          </a>

          <a href="<?php echo esc_url(home_url('/blog-posts/')); ?>"
            class="font-heading text-sm <?php echo $is_blog ? 'text-primary' : 'text-text'; ?> hover:text-primary transition-colors duration-300 relative group py-2">
            Blog
            <span class="absolute bottom-0 left-0 <?php echo $is_blog ? 'w-full' : 'w-0'; ?> h-[3px] bg-primary transition-all duration-300 group-hover:w-full"></span>
          </a>

          <a href="<?php echo esc_url(home_url('/contact/')); ?>"
            class="font-heading text-sm <?php echo $is_contact ? 'text-primary' : 'text-text'; ?> hover:text-primary transition-colors duration-300 relative group py-2">
            Contact
            <span class="absolute bottom-0 left-0 <?php echo $is_contact ? 'w-full' : 'w-0'; ?> h-[3px] bg-primary transition-all duration-300 group-hover:w-full"></span>
          </a>
        </nav>

        <!-- CTA Button (Desktop) -->
        <div class="hidden lg:block ml-6">
          <a href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
            class="inline-block bg-primary text-white font-heading text-xs xl:text-sm uppercase tracking-widest px-5 py-3 rounded-full border border-primary hover:bg-primary-hover hover:text-text-muted transition-all duration-300 whitespace-nowrap">
            Maak een afspraak
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn"
          class="lg:hidden text-primary p-2 hover:bg-primary/10 rounded-md transition-colors"
          aria-label="Open menu">
          <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 448 512">
            <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" />
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Menu Overlay -->
  <div id="mobile-menu"
    class="fixed inset-0 bg-black/80 z-[60] opacity-0 invisible transition-all duration-300"
    aria-hidden="true">

    <!-- Slide-in Panel -->
    <div id="mobile-menu-panel"
      class="fixed right-0 top-0 h-full w-[85%] max-w-sm bg-white shadow-2xl overflow-y-auto transform translate-x-full transition-transform duration-300">

      <div class="p-6">
        <!-- Close Button -->
        <button id="mobile-menu-close"
          class="float-right text-primary p-2 hover:bg-primary/10 rounded-md transition-colors"
          aria-label="Close menu">
          <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 512 512">
            <path d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 394c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V86c0-3.3 2.7-6 6-6h404c3.3 0 6 2.7 6 6v340zM356.5 194.6L295.1 256l61.4 61.4c4.6 4.6 4.6 12.1 0 16.8l-22.3 22.3c-4.6 4.6-12.1 4.6-16.8 0L256 295.1l-61.4 61.4c-4.6 4.6-12.1 4.6-16.8 0l-22.3-22.3c-4.6-4.6-4.6-12.1 0-16.8l61.4-61.4-61.4-61.4c-4.6-4.6-4.6-12.1 0-16.8l22.3-22.3c4.6-4.6 12.1-4.6 16.8 0l61.4 61.4 61.4-61.4c4.6-4.6 12.1-4.6 16.8 0l22.3 22.3c4.7 4.6 4.7 12.1 0 16.8z" />
          </svg>
        </button>

        <!-- Mobile Navigation -->
        <nav class="mt-16 space-y-1">
          <a href="<?php echo esc_url(home_url('/')); ?>"
            class="block text-base py-3 <?php echo $is_home ? 'text-primary font-semibold' : ''; ?> hover:text-primary transition-colors border-b border-gray-100">
            Home
          </a>

          <a href="<?php echo esc_url(home_url('/arts/')); ?>"
            class="block text-base py-3 <?php echo $is_arts ? 'text-primary font-semibold' : ''; ?> hover:text-primary transition-colors border-b border-gray-100">
            Arts
          </a>

          <!-- Mobile Accordion: Spierontspanners -->
          <details class="group border-b border-gray-100">
            <summary class="text-base py-3 cursor-pointer hover:text-primary transition-colors list-none flex items-center justify-between">
              <span>Spierontspanners</span>
              <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="currentColor" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
              </svg>
            </summary>
            <div class="pl-4 pb-3 space-y-2 bg-gray-50">
              <a href="<?php echo esc_url(home_url('/bunny-lines/')); ?>" class="block text-sm py-2 hover:text-primary">Bunny lines</a>
              <a href="<?php echo esc_url(home_url('/frons-rimpels/')); ?>" class="block text-sm py-2 hover:text-primary">Fronsrimpel</a>
              <a href="<?php echo esc_url(home_url('/gummy-smile/')); ?>" class="block text-sm py-2 hover:text-primary">Gummy smile</a>
              <a href="<?php echo esc_url(home_url('/kin-boto/')); ?>" class="block text-sm py-2 hover:text-primary">Kin</a>
              <a href="<?php echo esc_url(home_url('/kraaien-pootjes/')); ?>" class="block text-sm py-2 hover:text-primary">Kraaienpootjes</a>
              <a href="<?php echo esc_url(home_url('/lip-flip/')); ?>" class="block text-sm py-2 hover:text-primary">Lip flip</a>
              <a href="<?php echo esc_url(home_url('/liquid-facelift/')); ?>" class="block text-sm py-2 hover:text-primary">Liquid Facelift</a>
              <a href="<?php echo esc_url(home_url('/migraine/')); ?>" class="block text-sm py-2 hover:text-primary">Migraine</a>
              <a href="<?php echo esc_url(home_url('/tandenknarsen/')); ?>" class="block text-sm py-2 hover:text-primary">Tandenknarsen</a>
            </div>
          </details>

          <!-- Mobile Accordion: Medisch Afvallen -->
          <details class="group border-b border-gray-100">
            <summary class="text-base py-3 cursor-pointer hover:text-primary transition-colors list-none flex items-center justify-between">
              <span>Medisch Afvallen</span>
              <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="currentColor" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
              </svg>
            </summary>
            <div class="pl-4 pb-3 bg-gray-50">
              <a href="<?php echo esc_url(home_url('/overzicht-afval-medicatie/')); ?>" class="block text-sm py-2 hover:text-primary">Overzicht Afvalmedicatie</a>
            </div>
          </details>

          <!-- Mobile Accordion: Fillerbehandeling -->
          <details class="group border-b border-gray-100">
            <summary class="text-base py-3 cursor-pointer hover:text-primary transition-colors list-none flex items-center justify-between">
              <span>Fillerbehandeling</span>
              <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="currentColor" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
              </svg>
            </summary>
            <div class="pl-4 pb-3 space-y-2 bg-gray-50">
              <a href="<?php echo esc_url(home_url('/full-face/')); ?>" class="block text-sm py-2 hover:text-primary">Fullface</a>
              <a href="<?php echo esc_url(home_url('/neus/')); ?>" class="block text-sm py-2 hover:text-primary">Neus</a>
              <a href="<?php echo esc_url(home_url('/slapen/')); ?>" class="block text-sm py-2 hover:text-primary">Slapen</a>
              <a href="<?php echo esc_url(home_url('/kaaklijn-filler/')); ?>" class="block text-sm py-2 hover:text-primary">Kaaklijn</a>
              <a href="<?php echo esc_url(home_url('/lip-filler-behandeling/')); ?>" class="block text-sm py-2 hover:text-primary">Lipfiller</a>
            </div>
          </details>

          <!-- Mobile Accordion: Body Fillers -->
          <details class="group border-b border-gray-100">
            <summary class="text-base py-3 cursor-pointer hover:text-primary transition-colors list-none flex items-center justify-between">
              <span>Body Fillers</span>
              <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="currentColor" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
              </svg>
            </summary>
            <div class="pl-4 pb-3 space-y-2 bg-gray-50">
              <a href="<?php echo esc_url(home_url('/bilfillers/')); ?>" class="block text-sm py-2 hover:text-primary">Bilfillers</a>
              <a href="<?php echo esc_url(home_url('/hip-dips/')); ?>" class="block text-sm py-2 hover:text-primary">Hip dips</a>
              <a href="<?php echo esc_url(home_url('/penisvergroting/')); ?>" class="block text-sm py-2 hover:text-primary">Penisvergroting</a>
              <a href="<?php echo esc_url(home_url('/vagina-verjonging/')); ?>" class="block text-sm py-2 hover:text-primary">Vagina Verjonging</a>
            </div>
          </details>

          <!-- Mobile Accordion: Lasers -->
          <details class="group border-b border-gray-100">
            <summary class="text-base py-3 cursor-pointer hover:text-primary transition-colors list-none flex items-center justify-between">
              <span>Lasers</span>
              <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="currentColor" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
              </svg>
            </summary>
            <div class="pl-4 pb-3 space-y-2 bg-gray-50">
              <a href="<?php echo esc_url(home_url('/tixel/')); ?>" class="block text-sm py-2 hover:text-primary">Tixel</a>
              <a href="<?php echo esc_url(home_url('/endolift/')); ?>" class="block text-sm py-2 hover:text-primary">Endolift</a>
            </div>
          </details>

          <!-- Mobile Accordion: Biostimulatie -->
          <details class="group border-b border-gray-100">
            <summary class="text-base py-3 cursor-pointer hover:text-primary transition-colors list-none flex items-center justify-between">
              <span>Biostimulatie</span>
              <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="currentColor" viewBox="0 0 448 512">
                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
              </svg>
            </summary>
            <div class="pl-4 pb-3 space-y-2 bg-gray-50">
              <a href="<?php echo esc_url(home_url('/lanluma/')); ?>" class="block text-sm py-2 hover:text-primary">Lanluma</a>
              <a href="<?php echo esc_url(home_url('/sculptra/')); ?>" class="block text-sm py-2 hover:text-primary">Sculptra</a>
              <a href="<?php echo esc_url(home_url('/pdo/')); ?>" class="block text-sm py-2 hover:text-primary">PDO</a>
              <a href="<?php echo esc_url(home_url('/profhilo/')); ?>" class="block text-sm py-2 hover:text-primary">Profhilo</a>
              <a href="<?php echo esc_url(home_url('/skinboosters/')); ?>" class="block text-sm py-2 hover:text-primary">Skinboosters</a>
            </div>
          </details>

          <a href="<?php echo esc_url(home_url('/prijzen/')); ?>"
            class="block text-base py-3 <?php echo $is_prijzen ? 'text-primary font-semibold' : ''; ?> hover:text-primary transition-colors border-b border-gray-100">
            Prijzen
          </a>

          <a href="<?php echo esc_url(home_url('/blog-posts/')); ?>"
            class="block text-base py-3 <?php echo $is_blog ? 'text-primary font-semibold' : ''; ?> hover:text-primary transition-colors border-b border-gray-100">
            Blog
          </a>

          <a href="<?php echo esc_url(home_url('/contact/')); ?>"
            class="block text-base py-3 <?php echo $is_contact ? 'text-primary font-semibold' : ''; ?> hover:text-primary transition-colors border-b border-gray-100">
            Contact
          </a>

          <!-- Mobile CTA Button -->
          <a href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
            class="block w-full text-center bg-primary text-white font-medium uppercase px-5 py-4 rounded-full hover:bg-primary-hover transition-all duration-300 mt-6">
            Maak een afspraak
          </a>
        </nav>
      </div>
    </div>
  </div>

  <script>
    // Mobile menu functionality
    document.addEventListener('DOMContentLoaded', function() {
      const mobileMenuBtn = document.getElementById('mobile-menu-btn');
      const mobileMenu = document.getElementById('mobile-menu');
      const mobileMenuPanel = document.getElementById('mobile-menu-panel');
      const mobileMenuClose = document.getElementById('mobile-menu-close');

      function openMenu() {
        mobileMenu.classList.remove('invisible', 'opacity-0');
        mobileMenu.setAttribute('aria-hidden', 'false');
        setTimeout(() => {
          mobileMenuPanel.classList.remove('translate-x-full');
        }, 10);
        document.body.style.overflow = 'hidden';
      }

      function closeMenu() {
        mobileMenuPanel.classList.add('translate-x-full');
        setTimeout(() => {
          mobileMenu.classList.add('invisible', 'opacity-0');
          mobileMenu.setAttribute('aria-hidden', 'true');
          document.body.style.overflow = '';
        }, 300);
      }

      mobileMenuBtn.addEventListener('click', openMenu);
      mobileMenuClose.addEventListener('click', closeMenu);

      // Close menu when clicking overlay
      mobileMenu.addEventListener('click', function(e) {
        if (e.target === mobileMenu) {
          closeMenu();
        }
      });

      // Close menu on escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !mobileMenu.classList.contains('invisible')) {
          closeMenu();
        }
      });
    });
  </script>