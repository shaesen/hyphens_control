# Hyphens Control – CHANGELOG

## 1.0.3
### Release date: 2026‑07‑04

**New features**
- Added global hyphenation override option (`global_disable`) to force hyphens off across all themes.
- Introduced new `global` library with `hyphens_control_global.css` for full hyphenation suppression.

**Improvements**
- Updated settings form to support both `disable_hyphens` and `global_disable`.
- Added complete configuration schema for both settings.
- Ensured proper PSR‑4 autoloading by correcting class and file naming.
- Cleaned and validated all YAML files for Drupal 10/11 compatibility.

**Fixes**
- Corrected missing `$config` reference in `submitForm()` causing runtime errors.
- Ensured both settings are saved consistently in configuration.
- Removed invalid trailing content from multiple module files.

---

## 1.0.2
### Release date: *Not tagged (internal development)*

**Internal development version**
- Added initial hyphenation toggle for Olivero (`disable_hyphens`).
- Introduced `no_hyphens` library and CSS.
- Added settings route, menu link, and basic configuration object.

---

## 1.0.1
### Initial release

**Features**
- Provided basic hyphenation control for Olivero theme.
- Added configuration form and settings storage.
- Included initial CSS override for hyphenation behavior.
