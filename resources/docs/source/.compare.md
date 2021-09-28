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


<!-- START_4e657a9114213d599d16d21f99a8a84f -->
## produtos
> Example request:

```bash
curl -X GET \
    -G "http://localhost/produtos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/produtos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET produtos`


<!-- END_4e657a9114213d599d16d21f99a8a84f -->

<!-- START_d56e08a559e86893093376d61c703797 -->
## nome
> Example request:

```bash
curl -X GET \
    -G "http://localhost/nome" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/nome"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET nome`


<!-- END_d56e08a559e86893093376d61c703797 -->

<!-- START_0cac520fd3ca51d992b6cfef2385529b -->
## idade
> Example request:

```bash
curl -X GET \
    -G "http://localhost/idade" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/idade"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
30
```

### HTTP Request
`GET idade`


<!-- END_0cac520fd3ca51d992b6cfef2385529b -->

<!-- START_6c314a14adac00c61d945137767e3348 -->
## multiplicar/{n1}/{n2}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/multiplicar/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/multiplicar/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET multiplicar/{n1}/{n2}`


<!-- END_6c314a14adac00c61d945137767e3348 -->


