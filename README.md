## AdminLTE in laravel-10


## Light-Dark Mode Using Bootstrap



## About This Projects

This project is made in Laravel version 10. In this project, I used an Admin LTE with a breeze installation. Users do have not to worry about assets & folder paths for the admin side. Created for basic e-commerce project admin.Added the basic modules. Don't forget to give star to this repository ⭐.




## Installation & usage
- For Install you have to clone this repo or you can fire this command as well.

```php
https://github.com/saifulislam07/adminlte-laravel-10
```

- Go into folder

```php
cd adminlte-laravel10
```

- After the installation you have to update the vendor folder you can update the vendor folder using this command.

```php
composer update
```

- After the updation you have to create the ```.env``` file via this command.

```php
cp .env.example .env
```

- Now you have to generate the product key.

```php
php artisan key:generate
```

- Now migrate the tables & seed the database.

```php
php artisan migrate --seed
```

- We are done here. Now you have to just serve your project.

```php
php artisan serve
```

- This is the updated code of admin.

To get the access of admin side there is credentials bellow

- Admin

email: ```test_admin@gmail.com```
password: ```p@ssword```

- User

email: ```testuser@gmail.com```
password: ```p@ssword```

- Vendor

email: ```test_vendor@gmail.com```
password: ```p@ssword```


# Update

- Added the Light/Dark mode in profile section at top nav.

- Added the Categoy module.

- Added the Subcategory module.

- Added the product module which have basic detail & take multiple images.

- Added the Role Module.

- Added the permission Module.

- Added the collection Module for PDFs.

- Added the Country, State & city seeder with the relationship

- if you want to use the admin side but you have no idea about component & how here things are work. so that you just have to create file & put your code.

# Toast

- Added the toastr which have 4 class success, info, warning & error. you can use it own it.

```php
<x-admin>
    {{ 'Put your blade code here' }}
</x-admin>
```

- For the page title use a section method Like this.

```php
    @section('title')
        {{'Your Titlte'}}
    @endsection
```

# Alerts

- I added the alerts. You just have to call like this.

```php
->with('success', 'Success message');
->with('danger', 'danger message');
->with('info', 'info message');
->with('dark', 'dark message');
->with('warning', 'warning message');
->with('light', 'light message');
```

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to Md Saiful Islam via [saiful.rana@gmail.com](mailto:saiful.rana@gmail.com). All security vulnerabilities will be promptly addressed.If you find any issue or bug you can mail me.



## Friendly Note

- if you have any query about this package face some error or need support to update simply mail me<a href="mailto:saiful.rana@gmail.com"> here</a>.


# Connect with me

Instagram URL](https://www.instagram.com/saiful0007/)

# Other Projects

Check My Other Project

