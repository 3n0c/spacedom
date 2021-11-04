


push:
	@git config user.name "Spacedom"
	@git config user.email "elliotalderson@protonmail.ch"
	@git config --local credential.helper ""
	@git add . && git commit -am "All work and no play makes Jack a dull boy" && true
	@git push
