
start:
	@docker run --name "spacedom" -d -p 2019:80 -v $(PWD):/var/www/html php:8-apache

push:
	@git config user.name "Spacedom"
	@git config user.email "elliotalderson@protonmail.ch"
	@git config --local credential.helper ""
	@git add . && git commit -am "All work and no play makes Jack a dull boy" || true
	@git push
