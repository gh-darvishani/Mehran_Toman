# Mehran_Toman
Adding Iranian Toman to magento 2
- Magento 2 uses PHP ICUData for currency values so adding a new currency to Magento 2 is not that easy.
- This module is using custom resource files to add a new currecny to Magento 2.
- I've added Iranian Toman to Magento 2 by this module but any custom currency (such as bitcoin, etc) can be added using the same method.

## Install:
```
1. composer require mehran/toman 1.0.0
2. php bin/magento setup:upgrade
3. php bin/magento setup:di:compile
```