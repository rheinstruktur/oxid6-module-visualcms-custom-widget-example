# oxid6-module-visualcms-custom-widget-example
Module for OXID ESHOP 6.x to give an example how to build a custom widget for the VisualCMS module in an own module

# Installation

## manually

1. download and rename directory "oxid6-module-visualcms-custom-widget-example" to "VisualCms"

2. copy BasePrice to [shoproot]/source/modules/rs/VisualCms

3. Add following to you composer.json:
```
"autoload": {
    "psr-4": {
      "Rheinstruktur\\": "./source/modules/rs/"
    }
}
```

## via composer

composer require rheinstruktur/oxid6-module-visualcms-custom-widget-example (NOT CONFIGURED YET!)
