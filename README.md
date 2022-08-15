<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Endpoints

This is my study on a simple RESTfull API

### Unauthenticated
- Register an user: ```POST /register```
- Login: ```POST /login```
- Get all products: ```GET /api/products```
- Search for a product: ```POST /products/search/{name}```


### Authenticated
- Add a product: ```POST /add```
- Update a product: ```PUT /products{id}```
- Delete a product: ```DELETE /products{id}```
- Logout: ```POST /logout```

