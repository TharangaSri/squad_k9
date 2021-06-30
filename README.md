
# K9 Squad

K9 Squad is PHP Laravel API for provide random dog images and facts

## Installation

Use following instruction to install K9 Squad

1. Place "squad" file in your localhost root directory

2. Update .env file for database connection, env location: squad/.env

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=squad_live
DB_USERNAME=root
DB_PASSWORD=secret
```
3. Configure virtual host as "squad.local" [How to configure vertual host](https://httpd.apache.org/docs/2.4/vhosts/examples.html)

4. From "squad" directory open CMD and run following command.

```bash
$ php artisan migrate
$ php artisan db:seed
```

## Usage

To get random image, you have to call following API

[Live Link](http://dogimg.clicksitetesting.website/api/images)

```python
http://dogimg.clicksitetesting.website/api/images
```
Local

```python
http://squad.local/api/images
```

To get random fact, you have to call following API

[Live Link](http://dogimg.clicksitetesting.website/api/fact/2)
```python
http://dogimg.clicksitetesting.website/api/fact/2
```

Local
```python
http://squad.local/api/fact/5
```
You can change last number "5" according to your request, according to this number it'll change the fact count.


## Unit Testing
To run unittest you have to run following command

```python
$ composer test
```

## License
[MIT](https://choosealicense.com/licenses/mit/)