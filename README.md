# HTTP Exceptions

Discrete exceptions for all HTTP error status code for use in a server application.

## Example

```php
<?php
// ...

if ($item === null) {
  throw new HttpNotFoundException('Unknown item.');
}

if ($user === null) {
  throw new HttpUnauthorizedException('User not logged in.');
}

if (!$user->hasAccess($item)) {
  throw new HttpForbiddenException('User does not have access to item.');
}

// ...
```
