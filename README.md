# Hyphens Control

Hyphens Control provides administrators with fine‑grained control over automatic
word hyphenation in Drupal. The module supports both theme‑specific overrides
(Olivero) and a global hyphenation suppression mode that affects all themes.

## Features

- Disable automatic hyphenation in the Olivero theme.
- Force hyphenation off globally across all themes.
- Ships with two CSS libraries:
  - `no_hyphens`: disables hyphenation for Olivero.
  - `global`: disables hyphenation for all themes.

## Installation

1. Place the module in `modules/custom/hyphens_control`.
2. Enable the module through **Extend**.
3. Configure the module under  
   **Configuration → User interface → Hyphenation**.

## Configuration

The module provides two settings:

- **Disable hyphenation in Olivero**  
  Removes automatic word hyphenation in the Olivero theme.

- **Force hyphens off in all themes**  
  Applies a global CSS override that disables hyphenation everywhere.

Configuration is stored in:

hyphens_control.settings

## Technical Details

- CSS libraries are attached via `hook_page_attachments()`.
- Configuration is managed using `ConfigFormBase`.
- Schema definitions are located in `config/schema/hyphens_control.schema.yml`.
- Default configuration is installed from `config/install/hyphens_control.settings.yml`.

## Compatibility

- Drupal 10  
- Drupal 11

## Support

Hyphens Control is a lightweight utility module.  
Bug reports, suggestions, and improvements are welcome.
