# 🔥Inspira Framework
A simple PHP MVC framework inspired from Laravel.

### DISCLAIMER !!!
This project is for fun and educational purposes only.

<hr />

### How to use?
#### Create a project via composer.
```
composer create-project inspira/application -s dev <project-name>
```
Note:
- You can change the project name to your desired name

#### Start the application.
```
php wizard run
```
Note:
- You can set a custom port by providing the `port` option in the command
- You can also set a custom host by providing the `host` option in the command. Just make sure that this host is added in your host file.
- To see all available commands, run `php wizard`.

<hr />

### Features
#### ⭐Router
You can register your web routes at `routes.php` located in `app` directory.

Router's supported methods are `get`, `post`, `put`, and `delete`.

The parameters are as follows:
##### Uri
- string
- required
##### Handler
- array | Closure
- required
- The shape of array handler should be [controller, method]
##### Middlewares
- array | string
- optional
- Default is empty array
##### Name
- string
- optional

<pre>
<code>
use App\Controllers\HomeController;

/** @var Inspire\Http\Router\Router $router */
$router->get('/user/:id/posts/:post?', [HomeController::class, 'index'], \App\Middlewares\AuthMiddleware::class, 'home');
</code>
</pre>

Router also supports dynamic route parameters, both required and optional.

To indicate a route parameter, just prefix it with a colon `:`, and
to indicate an optional route parameter, just suffix it with a question mark `?`.

You can access these parameters from the request object via property access or get method.
For example, you register the following route `/users/:id/posts/:post?`
<pre>
<code>
use Inspira\Http\Request;

class HomeController
{
	public function index(Request $request)
	{
		echo $request->id;
		// post is optional and might be null so you can use get() and provide a default value
		echo $request->get('post', 1);
	}
}
</code>
</pre>

<hr />

#### ⭐Middlewares
You can create your own middlewares inside of `app/Middlewares` directory.
The middleware should extend the `Middleware` abstract class as it implements PSR's MiddlewareInterface.

After creating your middleware, you can modify the boolean `$global` property to indicate whether this middleware should run on all requests.
If you wish to only run the middleware on specific route, then you should set `$global` to `false` and attach the middleware from route registration.
<pre>
<code>
namespace App\Middlewares;

use Inspira\Http\Middlewares\Middleware;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class AuthMiddleware extends Middleware
{
	// Change the value based on your needs
	public bool $global = false;
  
	public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
	{
		// Do something with the request object and pass to the next handler or immediately return a response
		return $handler->handle($request);
	}
}
</code>
</pre>

<hr />

#### ⭐Service Container
Service Container is the heart of this framework. It handles the dependency injection and automatically resolve these dependencies
through the use of PHP's Reflection API.

Service Container can be used to 
- Bind a concrete class to an abstract class
- Bind a singleton class
- Make an instance of a class with deep dependency

Currently, container can only resolve injected dependencies that are a valid class, enum, or interface. However, you can still bind an implementation to any word you want
and use the `make` method to resolve it.

<pre>
<code>
// Example of binding
container()->bind(StorageInterface::class, LocalStorage::class);

// In controller method
public function upload(StorageInterface $storage) {
    print_f($storage instanceof LocalStorage::class); // prints out true
}

// Example of singleton binding
// You will get only one instance of Database class throughout the request
container()->singleton(DatabaseInterface::class, Database::class); // or container()->singleton(Database::class) if you don't need to bind it to an interface

// In controller method
public function create(Database $database) {
    $database->table(...); // you will get the same instance throughout the request
}

// Example of making an instance
// Let's say that request class has a lot of dependencies, and it's dependencies also have dependencies
// Service Container will do all the work for you to make an instance of it
container()->make(Request::class); // or container()->make('auth') if for example you bound an Auth class to the word `auth`
</code>
</pre>
