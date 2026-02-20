# Multi-Language System - Implementation Guide

## Overview

The website now supports multi-language functionality with Filament as the admin backend. The system allows you to manage translations for all website content through a user-friendly admin interface.

## Supported Languages

- **English** (en)
- **French** (fr) - Default
- **German** (de)
- **Spanish** (es) - Ready for use
- **Italian** (it) - Ready for use

## Features

### 1. Language Switcher
A language switcher is available in the navigation bar of every page. Users can change the language by clicking the language code (EN, FR, DE).

### 2. Admin Panel (Filament)
Access the admin panel at `/admin/translations` to manage all translations.

**Features:**
- Create, read, update, and delete translations
- Filter by language and section
- Search by key name
- Organize translations by section (home, offers, contact, etc.)

### 3. Session-Based Language Storage
The selected language is stored in the user's session, so it persists during their visit.

## Architecture

### Database Structure

**Table: `translations`**
- `id` - Primary key
- `key` - Unique identifier (e.g., "home.welcome_main")
- `language` - Language code (en, fr, de, es, it)
- `section` - Logical grouping (home, offers, contact, navigation, etc.)
- `value` - The actual translated content
- `type` - Content type (text, textarea, html)
- `created_at` / `updated_at` - Timestamps

### Key Files

1. **Model**: `app/Models/Translation.php`
   - Handles database interactions
   - Provides helper methods: `get()`, `getBySection()`, `getAllLanguages()`

2. **Resource**: `app/Filament/Resources/TranslationResource.php`
   - Filament admin interface for managing translations

3. **Helper**: `app/Helpers/TranslationHelper.php`
   - Provides global functions: `trans_db()`, `get_locale()`, `set_locale()`

4. **Middleware**: `app/Http/Middleware/SetLanguageLocale.php`
   - Automatically sets language based on session or URL parameter

5. **Controller**: `app/Http/Controllers/LanguageController.php`
   - Handles language switching

## Usage

### In Blade Templates

#### Method 1: Using Helper Function
```blade
{{ trans_db('home.welcome_main', null, 'Default Text') }}
```

#### Method 2: Using Model Directly
```blade
{{ \App\Models\Translation::get('home.welcome_main') }}
```

#### Method 3: Get All Section Translations
```php
@php
$homeTranslations = \App\Models\Translation::getBySection('home');
@endphp

{{ $homeTranslations['welcome_main'] ?? 'Default' }}
```

### In Controllers

```php
<?php

namespace App\Http\Controllers;

use App\Models\Translation;

class MyController extends Controller
{
    public function index()
    {
        $welcomeText = Translation::get('home.welcome_main');
        
        return view('myview', ['welcomeText' => $welcomeText]);
    }
}
```

### Language Switching

Users can switch language by:

1. **Clickng language links in navbar** - Automatically handled by `LanguageController@switch`
2. **Via URL parameter** - Add `?lang=en` to any URL
3. **Programmatically**:
```php
set_locale('en');  // Switch to English
```

## Adding Translations

### Via Admin Panel (Recommended)

1. Go to `/admin` (login required)
2. Click "Translations" in the sidebar
3. Click "Create Translation"
4. Fill in:
   - **Key**: Unique identifier (e.g., "pages.about.title")
   - **Language**: Select the language
   - **Section**: Logical grouping (optional)
   - **Value**: The translated content
   - **Type**: Text, Textarea, or HTML
5. Click Save

### Via Database Seeder

Edit `database/seeders/TranslationSeeder.php` and add to the `$translations` array:

```php
['key' => 'pages.about.title', 'language' => 'en', 'section' => 'about', 'value' => 'About Us', 'type' => 'text'],
['key' => 'pages.about.title', 'language' => 'fr', 'section' => 'about', 'value' => 'À Propos', 'type' => 'text'],
['key' => 'pages.about.title', 'language' => 'de', 'section' => 'about', 'value' => 'Über Uns', 'type' => 'text'],
```

Then run:
```bash
php artisan db:seed --class=TranslationSeeder
```

## Current Translations

The following translations are pre-loaded in the database:

### Home Section
- `home.welcome_main` - Main title (EN, FR, DE)
- `home.welcome_sub` - Subtitle (EN, FR, DE)
- `home.welcome_title` - Welcome section title (EN, FR, DE)
- `home.welcome_text` - Welcome section text (EN, FR, DE)

### Navigation Section
- `nav.offers` - Offers link text
- `nav.prices` - Prices link text
- `nav.contact` - Contact link text
- `nav.task` - Task link text

## Example: Converting a Page to Use Translations

### Before (Static Text)
```blade
<h1>Bienvenue au Mundial</h1>
<p>Le Centre de Loisirs Mundial est un endroit moderne...</p>
```

### After (Multi-language)
```blade
<h1>{{ trans_db('home.welcome_title') }}</h1>
<p>{{ trans_db('home.welcome_text') }}</p>
```

## Admin Access

To access the Filament admin panel:

1. Navigate to `/admin`
2. Create a user via:
   ```bash
   php artisan tinker
   >>> \App\Models\User::create(['name' => 'Admin', 'email' => 'admin@example.com', 'password' => bcrypt('password')])
   ```
3. Login with your credentials

## Best Practices

1. **Use consistent key naming**: `section.subsection.key`
2. **Keep keys short and descriptive**
3. **Use sections to organize**: home, offers, contact, etc.
4. **Add translations for all languages** when adding new keys
5. **Test all languages** before deploying

## Troubleshooting

### Translations not showing
1. Check if translation exists in database: `php artisan tinker`
2. Verify language is set correctly: `echo session('language')`
3. Clear cache: `php artisan cache:clear`

### Language switcher not working
1. Verify middleware is registered in `bootstrap/app.php`
2. Check cookies are enabled in browser
3. Verify language code is supported

## Future Enhancements

- [ ] Automatic language detection based on browser settings
- [ ] Translation import/export functionality
- [ ] Translation versioning and history
- [ ] RTL language support
- [ ] Caching for better performance
