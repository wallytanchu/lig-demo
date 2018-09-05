---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_d4ac54c52158ea2dc79730cfac8d8a3f -->
## List Post

> Example request:

```bash
curl -X GET "http://localhost/api/v1/posts" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/posts",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/posts`

`HEAD api/v1/posts`


<!-- END_d4ac54c52158ea2dc79730cfac8d8a3f -->

<!-- START_dfff1d9b6a3c668b128436efa4e175c6 -->
## Removes a post entry

> Example request:

```bash
curl -X GET "http://localhost/api/v1/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/posts/{post}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/posts/{post}`

`HEAD api/v1/posts/{post}`


<!-- END_dfff1d9b6a3c668b128436efa4e175c6 -->

<!-- START_8c8dee3dc083fa8a3bbfd25342a7c1b6 -->
## Creates a post entry

> Example request:

```bash
curl -X POST "http://localhost/api/v1/posts" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/posts",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/posts`


<!-- END_8c8dee3dc083fa8a3bbfd25342a7c1b6 -->

<!-- START_0c7bc27199640af0ab59d24423cfcb5b -->
## Updates a post entry

> Example request:

```bash
curl -X POST "http://localhost/api/v1/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/posts/{post}",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/posts/{post}`


<!-- END_0c7bc27199640af0ab59d24423cfcb5b -->

<!-- START_b59514618939469a1367e18797eec2b3 -->
## Removes a post entry

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/posts/{post}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/posts/{post}`


<!-- END_b59514618939469a1367e18797eec2b3 -->

<!-- START_2be1f0e022faf424f18f30275e61416e -->
## Login user and create token

> Example request:

```bash
curl -X POST "http://localhost/api/v1/auth/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/auth/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/auth/login`


<!-- END_2be1f0e022faf424f18f30275e61416e -->

<!-- START_e45d6bc29c8c4bf3ee565c811719cf0e -->
## Logout user (Revoke the token)

> Example request:

```bash
curl -X GET "http://localhost/api/v1/auth/logout" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/auth/logout",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/auth/logout`

`HEAD api/v1/auth/logout`


<!-- END_e45d6bc29c8c4bf3ee565c811719cf0e -->

