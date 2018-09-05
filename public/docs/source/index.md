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
[Get Postman Collection](http://ligblog.tk/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_d4ac54c52158ea2dc79730cfac8d8a3f -->
## List Post

> Example request:

```bash
curl -X GET "http://ligblog.tk/api/v1/posts" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://ligblog.tk/api/v1/posts",
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
    "current_page": 1,
    "data": [
        {
            "id": 6,
            "title": "Test Blog 6",
            "inquiry": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum lorem erat, sed ultrices est luctus nec. Nam tempus elementum velit quis gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam lorem sem, venenatis ut ante eget, tristique suscipit nisl. Mauris venenatis ut lacus ac ullamcorper. Nullam vestibulum elementum ligula eu venenatis. Pellentesque sollicitudin, orci eget vehicula pellentesque, leo massa facilisis neque, at gravida lectus neque non tellus. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vulputate dictum ligula, quis commodo urna viverra sed.",
            "photo": "blog/0169db9e5979fe1.jpg",
            "created_at": "2018-09-04 16:18:00",
            "updated_at": "2018-09-04 16:18:00"
        },
        {
            "id": 5,
            "title": "Test Blog 5",
            "inquiry": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum lorem erat, sed ultrices est luctus nec. Nam tempus elementum velit quis gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam lorem sem, venenatis ut ante eget, tristique suscipit nisl. Mauris venenatis ut lacus ac ullamcorper. Nullam vestibulum elementum ligula eu venenatis. Pellentesque sollicitudin, orci eget vehicula pellentesque, leo massa facilisis neque, at gravida lectus neque non tellus. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vulputate dictum ligula, quis commodo urna viverra sed.",
            "photo": "blog/3625d8ccce80647.jpg",
            "created_at": "2018-09-04 16:17:50",
            "updated_at": "2018-09-04 16:17:51"
        },
        {
            "id": 4,
            "title": "Test Blog 4",
            "inquiry": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum lorem erat, sed ultrices est luctus nec. Nam tempus elementum velit quis gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam lorem sem, venenatis ut ante eget, tristique suscipit nisl. Mauris venenatis ut lacus ac ullamcorper. Nullam vestibulum elementum ligula eu venenatis. Pellentesque sollicitudin, orci eget vehicula pellentesque, leo massa facilisis neque, at gravida lectus neque non tellus. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vulputate dictum ligula, quis commodo urna viverra sed.",
            "photo": "blog/48f3c1e99ee8277.jpg",
            "created_at": "2018-09-04 16:17:47",
            "updated_at": "2018-09-04 16:18:23"
        },
        {
            "id": 3,
            "title": "Test Blog 3",
            "inquiry": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum lorem erat, sed ultrices est luctus nec. Nam tempus elementum velit quis gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam lorem sem, venenatis ut ante eget, tristique suscipit nisl. Mauris venenatis ut lacus ac ullamcorper. Nullam vestibulum elementum ligula eu venenatis. Pellentesque sollicitudin, orci eget vehicula pellentesque, leo massa facilisis neque, at gravida lectus neque non tellus. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vulputate dictum ligula, quis commodo urna viverra sed.",
            "photo": "blog/6370f1f9aa5696e.jpg",
            "created_at": "2018-09-04 16:17:34",
            "updated_at": "2018-09-04 16:18:53"
        },
        {
            "id": 2,
            "title": "Test Blog 2",
            "inquiry": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum lorem erat, sed ultrices est luctus nec. Nam tempus elementum velit quis gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam lorem sem, venenatis ut ante eget, tristique suscipit nisl. Mauris venenatis ut lacus ac ullamcorper. Nullam vestibulum elementum ligula eu venenatis. Pellentesque sollicitudin, orci eget vehicula pellentesque, leo massa facilisis neque, at gravida lectus neque non tellus. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vulputate dictum ligula, quis commodo urna viverra sed.",
            "photo": "blog/03bbdc2bd37c128.jpg",
            "created_at": "2018-09-04 16:17:22",
            "updated_at": "2018-09-04 16:18:33"
        }
    ],
    "first_page_url": "http://ligblog.tk/api/v1/posts?page=1",
    "from": 1,
    "last_page": 2,
    "last_page_url": "http://ligblog.tk/api/v1/posts?page=2",
    "next_page_url": "http://ligblog.tk/api/v1/posts?page=2",
    "path": "http://ligblog.tk/api/v1/posts",
    "per_page": 5,
    "prev_page_url": null,
    "to": 5,
    "total": 6
}
```
### HTTP Request
`GET api/v1/posts`


<!-- END_d4ac54c52158ea2dc79730cfac8d8a3f -->

<!-- START_d4ac54c52158ea2dc79730cfac8d8a3f -->
### HTTP Request
> Example request:

```bash
curl -X GET "http://ligblog.tk/api/v1/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://ligblog.tk/api/v1/posts",
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
    "title": "Test Blog 7",
    "inquiry": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum lorem erat, sed ultrices est luctus nec. Nam tempus elementum velit quis gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam lorem sem, venenatis ut ante eget, tristique suscipit nisl. Mauris venenatis ut lacus ac ullamcorper. Nullam vestibulum elementum ligula eu venenatis. Pellentesque sollicitudin, orci eget vehicula pellentesque, leo massa facilisis neque, at gravida lectus neque non tellus. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vulputate dictum ligula, quis commodo urna viverra sed.",
    "updated_at": "2018-09-05 07:01:21",
    "created_at": "2018-09-05 07:01:21",
    "id": 10,
    "photo": "blog/f74560b0d46cb11.jpg"
}
```


`GET api/v1/posts/{post}`



<!-- END_dfff1d9b6a3c668b128436efa4e175c6 -->

<!-- START_8c8dee3dc083fa8a3bbfd25342a7c1b6 -->
## Creates a post entry

> Example request:

```bash
curl -X POST "http://ligblog.tk/api/v1/posts" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://ligblog.tk/api/v1/posts",
    "method": "POST",
    "headers": {
        "accept": "application/json",
        "Authorization": "{{token_type}} {{access_token}}" 
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "title": "Test Blog 7",
    "inquiry": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum lorem erat, sed ultrices est luctus nec. Nam tempus elementum velit quis gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam lorem sem, venenatis ut ante eget, tristique suscipit nisl. Mauris venenatis ut lacus ac ullamcorper. Nullam vestibulum elementum ligula eu venenatis. Pellentesque sollicitudin, orci eget vehicula pellentesque, leo massa facilisis neque, at gravida lectus neque non tellus. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vulputate dictum ligula, quis commodo urna viverra sed.",
    "updated_at": "2018-09-05 07:01:21",
    "created_at": "2018-09-05 07:01:21",
    "id": 10,
    "photo": "blog/f74560b0d46cb11.jpg"
}
```


### HTTP Request
`POST api/v1/posts`


<!-- END_8c8dee3dc083fa8a3bbfd25342a7c1b6 -->

<!-- START_0c7bc27199640af0ab59d24423cfcb5b -->
## Updates a post entry

> Example request:

```bash
curl -X POST "http://ligblog.tk/api/v1/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://ligblog.tk/api/v1/posts/{post}",
    "method": "POST",
    "headers": {
        "accept": "application/json",
        "Authorization": "{{token_type}} {{access_token}}" 
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "title": "Test Blog 7",
    "inquiry": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum lorem erat, sed ultrices est luctus nec. Nam tempus elementum velit quis gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam lorem sem, venenatis ut ante eget, tristique suscipit nisl. Mauris venenatis ut lacus ac ullamcorper. Nullam vestibulum elementum ligula eu venenatis. Pellentesque sollicitudin, orci eget vehicula pellentesque, leo massa facilisis neque, at gravida lectus neque non tellus. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vulputate dictum ligula, quis commodo urna viverra sed.",
    "updated_at": "2018-09-05 07:01:21",
    "created_at": "2018-09-05 07:01:21",
    "id": 10,
    "photo": "blog/f74560b0d46cb11.jpg"
}
```



### HTTP Request
`POST api/v1/posts/{post}`


<!-- END_0c7bc27199640af0ab59d24423cfcb5b -->

<!-- START_b59514618939469a1367e18797eec2b3 -->
## Removes a post entry

> Example request:

```bash
curl -X DELETE "http://ligblog.tk/api/v1/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://ligblog.tk/api/v1/posts/{post}",
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
curl -X POST "http://ligblog.tk/api/v1/auth/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://ligblog.tk/api/v1/auth/login",
    "method": "POST",
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
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjM1MTExMmY1NDU5ZDBiNTU3YTViODVlOTQ5MDU5MmVjZGU0ZTA3YWMzMzNjMDM0NWFkODNjOTRlZTNiMzZkYWFhYzc5MmU0Y2I3YmQxNDU2In0.eyJhdWQiOiIxIiwianRpIjoiMzUxMTEyZjU0NTlkMGI1NTdhNWI4NWU5NDkwNTkyZWNkZTRlMDdhYzMzM2MwMzQ1YWQ4M2M5NGVlM2IzNmRhYWFjNzkyZTRjYjdiZDE0NTYiLCJpYXQiOjE1MzYxMzA2OTgsIm5iZiI6MTUzNjEzMDY5OCwiZXhwIjoxNTY3NjY2Njk4LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QX44SmFSTA3pDnSdDR-Zq5PpjIwqEgst69kKTXsef82tFLqwwUm_1nsaUilqKkHaPNbVoFsPMu8LjisM_S0I2KYE_qKvKAdBMZMKZiVrLmq7T1DppoLKKv_eyAK8fsUw22OUgb-FLjEsTG3Hqnzbl_8lKtXSGFvoF2NQVrsVjwLNBt1CTGR0F8DQXfidUkqL7JuHLN7a9pL9Qoa2i8z12DuT3VYCuvKu26xxEq4ApwcIxGh-2S-v1fv-d7pXNtvoNNcHzzdCcHtPbrwuWHjoQBfJzaTERfwXFy3ivHQiPA23v02Abuuh3yUlSJ27i2l9L9lFJWZufrVKgSqvVWEd5kLUYGlcPUm3SbVT4iEZMiq-T0IppXnjhiS-jtYnRsVwwk4uP71sRO0zkucw8Hdkw0Aw5W9AYZkZuuLH29Og2090kKwrVp1Hbt52uob9pECpFHXgSCKPnDY_KJqJpVVVuF5m3bTYf8mnGDr5cL9QvXu0_oUVFrriSDSq9H6SHUXKlNlFAtxKA5QXXbLm6BFh1KnkYBwSoVUpFAKwb9N89R6-vkrmSxCLR8JMCga2VxhOCdwTUGF4MRVjTJsKVc85n2F6yrBjGQhJwJ3ln_AV3dA794mS1MrdRssn9jl6tWn9C2LWb2JFVzxR9TElafpv-7EhVc5n1lBNKSJmWqPyvzQ",
    "token_type": "Bearer",
    "expires_at": "2019-09-05 06:58:18"
}
```


### HTTP Request
`POST api/v1/auth/login`


<!-- END_2be1f0e022faf424f18f30275e61416e -->

