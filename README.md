# IT Time

IT Time is an application where you can find the cards of the IT Time for playing even if you don't have the cards. So this application allows you to play at **The very famous game time's up** even without the cards. You also can add some card with the admin's panel. 

## Requirements

* php7.4
* Database (MySQL)
* Web Server (Apache)
* <a href="https://github.com/matvki/times_up/wiki">All explications here</a>

## Framework

IT Time use <a href="https://laravel.com/">Laravel</a>, the best PHP framework that exist!!

## Installation 

- Install Composer
- Clone the repository:  `git clone https://github.com/matvki/times_up`
- Install dependancies: `composer install`
- Install BDD: you have to create the database `it-time` and do `php artisan migrate` then do `php artisan db:seed`.

## Contributing

Please, be clear on your commit messages and pull requests, empty pull request messages may be rejected withour reason.

When contributing code to IT Time, you must follow the <a href="https://www.php-fig.org/psr/psr-1/">PSR coding standards</a>. The golden rule is: Imitate the existing IT Time code.

## Admin's Panel

If you want to add some cards you have to go on the admin's panel.
To go on this you have to go on this root `/admin` and to identifed you by using this in the username: `sephorquoi` and this on password: `0000`.
### How to change it ? 
Today you have to go on the classicSeeder and change the final ligne, but it few times you're going to change it when you're dooing you're first identification :construction: .

## Security

If you discover any security related issues, please email m.vecchi@it-students.fr instead of using the issue tracker.

**Thanks You** :+1:
