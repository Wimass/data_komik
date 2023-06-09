# Data Komik

Deskripsi singkat proyek untuk tugas Web Programming 3 menggunakan CodeIgniter 4.

## Deskripsi

Proyek ini dibuat sebagai bagian dari tugas mata kuliah Web Programming 3. Proyek ini dikembangkan menggunakan framework CodeIgniter 4, yang merupakan salah satu framework PHP populer untuk pengembangan aplikasi web. Proyek ini bertujuan untuk mengimplementasikan konsep-konsep dan fitur-fitur utama yang dipelajari dalam mata kuliah ini, seperti penggunaan model-view-controller (MVC), dan penggunaan database.

## Fitur

- Fitur 1: Tambah Data Komik.
- Fitur 2: Edit Data Komik.
- Fitur 3: Hapus Data Komik.

## Tampilan Program

- Tampilan Awal
  ![alt text](https://github.com/Wimass/data_komik/blob/master/public/Tampilan_Awal.png)

- Tampilan Tambah Data Komik
  ![alt text](https://github.com/Wimass/data_komik/blob/master/public/Tampilan_Tambah_Data_Komik.png)
  
- Tampilan Data Berhasil Ditambahkan
  ![alt text](https://github.com/Wimass/data_komik/blob/master/public/Tampilan_Data_Berhasil_Ditambahkan.png)
  
- Tampilan Edit Data Komik
  ![alt text](https://github.com/Wimass/data_komik/blob/master/public/Tampilan_Edit_Data_Komik.png)
  
- Tampilan Hapus Data Komik
  ![alt text](https://github.com/Wimass/data_komik/blob/master/public/Tampilan_Hapus_Data_Komik.png)
  


==========================================================================

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
