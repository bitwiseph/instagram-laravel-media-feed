# Grab Instagram media posts API to your custom website
It's a Laravel package which pulls instagram user posts to your website.
 
## Requirements 
- PHP 7.0 or higher
- cURL
- Registered Instagram App via Facebook Developers

## Laravel 5.8 or higher
## Composer
```javascript
composer require bitwiseph/instagram-media
```

```javascript
Goto to config/app.php under providers array (this is not neccesary to Laravel 5.8 or higher)
 'providers' => [
 
 Bitwiseph\InstagramMedia\InstagramMediaServiceProvider::class,
 
 ] 
```


## ENV
Setup your env file with the following:
```python
INSTAGRAM_APP_ID=
INSTAGRAM_APP_SECRET=
INSTAGRAM_APP_REDIRECT_URI=
INSTAGRAM_ACCESS_TOKEN=
INSTAGRAM_USER_ID=
````
### Config (ignore when .env is setup)
```javascrip
Go to: config/bitwiseph.php if you would want to add credentials via config
```

To use the Instagram API you have to register yourself as a developer at the [Facebook Developer Platform](https://developer.facebook.com) and create an App. Take a look at the uri guidelines before registering a redirect URI. You will need to add an Instagram under product section

```javascript
Run the following php artisan command:

php artisan vendor:publish --tag=bitwiseph-instagram
```


## Give it a try
```php
Run:
php artisan serve
```
Click [here](http://127.0.0.1:8000/instagram/posts) after executing the php artisan serve

### Legacy Version Support
PHP 5.4 & 5.5
If you are using PHP 5.4 or 5.5, you should consider upgrading your environment as those versions have been past end of life since September 2015 and July 2016 respectively. Otherwise, you can still use Stripe by downloading stripe-php v6.43.1 (zip, tar.gz) from our releases page. This version will work but might not support recent features we added since the version was released and upgrading PHP is the best course of action.

### PHP 5.3
If you are using PHP 5.3, you should upgrade your environment as this version has been past end of life since August 2014. Otherwise, you can download v5.9.2 (zip, tar.gz) from our releases page. This version will continue to work with new versions of the Stripe API for all common uses.
