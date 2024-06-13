install-dependencies:
	composer install

migrate:
	php artisan migrate

rollback:
	php artisan migrate:rollback

refresh:
	php artisan migrate:refresh

seed:
	php artisan db:seed

serve:
	php artisan serve

setup: install-dependencies migrate seed

dev: install-dependencies rollback refresh seed serve
