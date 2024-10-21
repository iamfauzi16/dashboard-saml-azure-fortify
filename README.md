![alt text](https://github.com/iamfauzi16/dashboard-saml-azure-fortify/blob/master/background%20github.jpg?raw=true)
# Dashboard Admin Include Multi Authentication With SAML for Azure & Fortify

Dashboard Admin yang saya buat  adalah aplikasi Laravel yang dirancang untuk menyediakan solusi dashboard administrasi dengan dukungan multi-autentikasi menggunakan SAML menggunakan Microsoft Azure dan Laravel Fortify. Aplikasi ini memungkinkan pengguna untuk melakukan autentikasi dengan berbagai metode, termasuk SSO (Single Sign-On) menggunakan SAML dan autentikasi berbasis username/password.

Pada Pengembangan Pase 1, Fitur yang saat ini di kembangkan diantaranya Fitur Penambahaan User. Pengembangan akan terus dilanjutkan. Hingga sampai Akhir Hayat.





## Requirements

- PHP 8.1 or Later
- Local Server [Laragon & Xampp]
- Authentication Platform e.x (Portal Azure, OneLogin, etc) spesific for Portal Azure
- Git
## Features

- SAML Microsoft Azure
- Authenticate Fortify
- User Management (CRUD)
- Profile
- Dashboard Bootstrap v.5


## Environment Variables

Untuk menjalankan SAML Microsoft Azure, Kamu harus mengisi environment variable di file .env. referensi pengisiannya mengacu pada file .env.example. 

`SAML2_SP_CERT_x509`

`SAML2_SP_ENTITYID`

`SAML2_SP_ACS_URL`

`SAML2_SP_SLS_URL`

`SAML2_LOGIN_URL`

`SAML2_ERROR_URL`

`SAML2_IDP_ENTITYID`

`SAML2_IDP_SSO_URL`

`SAML2_IDP_SLO_URL`

`SAML2_IDP_CERT_X509`

## Documentation

Untuk melihat implementasi lebih jauh, saya menyarankan anda untuk bisa mengunjungi terlebih dahulu pengaturan Authentikasi SAMLnya. 

https://github.com/24Slides/laravel-saml2

Saya menyarankan, kamu mengikuti  cara pada bagian berikut:

![alt text](https://github.com/iamfauzi16/dashboard-saml-azure-fortify/blob/master/git-saml.jpg?raw=true)

karena kami telah merapihkan dokumentasi pada projek ini, untuk mempermudah para pengguna.


## Installation

Install aplikasi menggunakan git clone

```bash
  git clone https://github.com/iamfauzi16/dashboard-saml-azure-fortify.git
  cd my-project
```
Install dependensi menggunakan Composer:

```bash
    composer install
```

Salin file .env.example ke .env dan sesuaikan konfigurasi:

```bash
    cp .env.example .env
```

Buat Generate Key di Laravel

```bash
    php artisan key:generate
```

Lalu Migration ke Database

```bash
    php artisan migrate
```

    
## 🚀 About Me
Saya bekerja sebaga IT Support di Jakarta. Saya menggunakan Laravel untuk membangun beberapa projek sederhana. Saya sangat menyukai pengalaman baru menggunakan Framework ini. 

Saya juga seorang freelance di softwaremaju dengan pelayanan membangun aplikasi, dan juga freelance di fastwork.id dengan layanan konfigurasi jaringan dan Desaing Aplikasi
 


## 🔗 Links
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/muhammad-fauzi-66a2b915b/)


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Support

For support, email muhammadfauzi.2.mf52@gmail.com

Support saya untuk tetap mengembangkan aplikasi ini, untuk kemudahan dalam development pengguna : 
https://saweria.co/softwaremaju

