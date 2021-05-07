
Table of Contents
About The Project
Built With
Getting Started
Prerequisites
Installation
Usage
Roadmap
Contributing
License
Contact
Acknowledgements
About The Project
Product Name Screen Shot

This is a simple web app developed with PHP/Laravel that I built for a start2Impact course project; it is my first PHP web app, so mistakes are extremely likely! I'd love to get your feedback :)

Built With
PHP
Laravel
NodeJS
Getting Started
To get a local copy up and running follow these simple steps.

Prerequisites
npm

npm install npm@latest -g
PHP Environment (Apache, PHP, MySQL). I used PHP 7.4.9, MySQL 8, Apache 2.4; retrocompatibility not guaranteed. Depending on your OS your installation might vary; I used WAMP on Windows for a quick and effortless setup.

Composer: depending on your OS follow the instructions on the official website.

Installation
Clone the repo and cd to its root directory

git clone https://github.com/fabio-mancin/recycle.git

cd recycle
Install composer dependencies

composer install
Install NPM packages

npm install
Copy ".env.example" from the root folder and rename the copy to ".env".

cp .env.example .env
Generate an app encryption key

php artisan key:generate
Create an empty database: depending on your setup and system this may vary; you can refer to the official documentation or follow the instruction for the software you are using to handle MySQL. The name doesn't matter, I called mine "recycle" for consistency.

Update .env with your database connection settings in order to give the app access to it. In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= yourDatabaseName
DB_USERNAME= yourRootUsername
DB_PASSWORD= yourPassword
Run migrations:

php artisan migrate
Run the server and open the url you are serving it to on your browswer, usually http://127.0.0.1:8000.

php artisan serve
Usage
On startup the application will guide you through the initial setup: garbage collection days, garbage types and finally garbage collection times.

The app will then show the main page with the recycle days recap. You can delete existing collections from it. In addition, you can re-enter setup.

Days and garbage types can be added, modified and removed through the setup.

Roadmap
See the open issues for a list of proposed features (and known issues).

Contributing
Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are greatly appreciated.

Fork the Project
Create your Feature Branch (git checkout -b feature/AmazingFeature)
Commit your Changes (git commit -m 'Add some AmazingFeature')
Push to the Branch (git push origin feature/AmazingFeature)
Open a Pull Request
License
Distributed under the MIT License. See LICENSE for more information.

Contact
Your Name - @fabio__mancio - fabio.mancin90@gmail.com

Project Link: https://github.com/fabio-mancin/recycle

Website: fabiomancin.org

Acknowledgements
start2impact
recycling.com
clockwork
## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
