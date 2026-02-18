# valt-theme

Custom WordPress child theme for valt.digital — a Cardano blockchain-integrated site for managing NFTs, digital assets, artists, albums, and songs.

## Project Structure

```
valt-theme/
├── style.css                    # Theme header (child of Hello Elementor)
├── functions.php                # Theme setup, asset enqueueing, subscriber restrictions
├── assets/
│   ├── css/
│   │   ├── main.css             # Primary custom styles
│   │   └── cardanopress_styles.css  # Cardano wallet UI styles
│   └── js/
│       └── regal-particles.js   # Three.js particle animation (currently disabled)
├── functions/
│   ├── elementor.php            # Elementor query filters via Pods relationships
│   ├── pods.php                 # Pods framework integration
│   └── shortcodes/
│       └── pods_artist_featured_image.php  # Artist featured image shortcode
└── cardanopress/                # Cardano-specific template overrides
```

## Key Details

- **Parent theme:** Hello Elementor
- **Page builder:** Elementor Pro
- **Data layer:** Pods (custom post types: Artists, Albums, Songs)
- **Blockchain:** CardanoPress plugin for Cardano wallet connection and delegation
- **Local dev:** Local by Flywheel (Nginx + PHP-FPM + MySQL)

## Asset Versioning

CSS files are versioned via `$style_version` in `functions.php`. Bump the version string when deploying CSS changes to bust the cache.

## Subscriber Restrictions

Subscribers are redirected away from `/wp-admin` and the admin bar is hidden for them — see `functions.php`.

## Elementor / Pods Integration

`functions/elementor.php` hooks into Elementor's query system to filter dynamic content by Pods relationships (e.g. songs by artist, albums by artist).
