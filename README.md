<h1 align="center">grasch/magento-2-ccst</h1>

<div align="center">
  <img src="https://img.shields.io/badge/magento-2.X-brightgreen.svg?logo=magento&longCache=true" alt="Supported Magento Versions" />
  <a href="https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity" target="_blank"><img src="https://img.shields.io/badge/maintained%3F-yes-brightgreen.svg" alt="Maintained - Yes" /></a>
</div>

## Highlight features for module
- <h3>You can change the titles of the checkout steps.</h3>

## How to install module?

### ✓ Install via composer (recommend)

Run the following commands in Magento 2 root folder:

```
composer require grasch/module-ccst
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```
### ✓ Install via downloading

Download and copy files into `app/code/Grasch/Ccst` and run the following commands:
```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

## How to configure?
- Go to Stores -> Configuration -> Sales -> Checkout -> Checkout Options -> Steps Config.
- Set up as you need.

### Example
<img alt="Settings" src="docs/img/settings.png" width="80%">

### Result
<img alt="Result" src="docs/img/result.png" width="80%">

## The MIT License
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

