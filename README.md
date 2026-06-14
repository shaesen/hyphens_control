# Hyphens Control

Hyphens Control is a simple Drupal module that allows administrators to enable or disable hyphenation in the Olivero theme via a configuration toggle.

## Features

- Adds a configuration page under **Configuration → User interface → Hyphenation**.
- Provides a checkbox to disable hyphenation in Olivero.
- Injects a small CSS library that overrides hyphenation-related properties when enabled.

## Requirements

- Drupal 10 or 11
- Olivero theme (for the effect to be visible)

## Installation

1. Place the module in `modules/custom/hyphens_control` or install via Composer.
2. Enable the module:
```
drush en hyphens_control -y
```
3. Go to:
```
Admin → Configuration → User interface → Hyphenation
```

4. Check Disable hyphenation in Olivero and save.

# Configuration

The module stores its setting in:
```
hyphens_control.settings (config object)

Key: disable_hyphens (boolean)
```

When disable_hyphens is enabled, the module attaches the hyphens_control/no_hyphens library on every page.

# Uninstallation

1. Uncheck the setting on the configuration page (optional).

2. Disable and uninstall the module:
```
drush pm:uninstall hyphens_control -y
```
# License

GPL-2.0-or-later
