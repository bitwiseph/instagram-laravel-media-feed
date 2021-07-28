# Grab Instagram media posts to you custom website
It's a Laravel package which pulls instagram user posts to your website.

Composer package available.
Supports Instagram Video and Signed Header.
 
## Requirements 
- PHP 7.2 or higher
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
