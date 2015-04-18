# CatalogCategoryRemoveHref
#### Overview
A Magento Module which removes catalog category links from Magento's Topmenu, if the user selects this option from the admin panel.

It's useful for Merchants with large main navigation menus who wish to remove the number of clicks their users can make before reaching a product range.

The module adds an attribute to the *Catalog > Manage Categories > General Tab* called *Remove Href*.  This can be set to *true* to remove the link from magento's top menu.

for more information [see my blog post](http://rossmchugh.com/magento-module-to-remove-nav-links/).

#### Installation
* Copy module files into your application.
* Flush the Magento Cache in *var/cache/**
* If you are using Magento's Catalog Flat Data feature you will need to re-index catalog_category_flat.

Some theme's, such as Magento1.9's own RWD theme, use a different method for rendering the Magento TopMenu than the traditional Magento approach.  Rather than render the menu in a block class they do it from a template. In the case of Magento's RWD theme they use the *page/html/topmenu/renderer.phtml* template.  This module overides this template but other 3rd party theme's may use a different template.  In which case you just need to override the template with Magento's fallback system and use *$child->getRemoveHref()* to check if the attribute is set to *true* on the Admin Panel.

#### Configuration
To disable category links in the Main Navigation Menu go to *Catalog -> Categories -> Manage Categories*.  Then select the category whom's link you wish to disable, at the bottom of the page on the *General Information Tab*, set the option *Remove Hyperlink* option to Yes.