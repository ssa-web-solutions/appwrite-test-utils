# appwrite-test-utils
Classes to help you writing your PHPUnit tests for Appwrite functions

### Why a package only with contracts?
Personal needs that may be useful to someone else XD

Basically if you try to write a test to check the data sent to the **json** or **send** methods of Appwrite Functions' API like below:

```php
$this->response = $this->createMock(stdClass::class);

$this->response
    ->expects($this->once())
    ->method('json')
    ->with($this->anything(), 201);
```

The code above will fail with the following message:

```
Trying to configure method "json" which cannot be configured because it does not exist, has not been specified, is final, or is static
```

Therefore, we need to add a type to that object, since Appwrite's SDK does not provide it to us, I've created this package to do so.

```php
$this->response = $this->createMock(Response::class);

$this->response
    ->expects($this->once())
    ->method('json')
    ->with($this->anything(), 201);
```

now we've a typed $response object that can be evaluated =)