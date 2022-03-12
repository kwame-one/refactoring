## Thoughts about the code

I feel this code base is terrible and below are my reasons

1. BookingRepository had a lot of business logic in there. Repositories basically provides an interface to access data in a database.
2. Code base had no service classes where all business logic should be placed.
3. Injection of Concrete classes was done in BookingController

## Refactoring
Introduced service classes which contains all business logic.   
RepositoryInterfaces are then injected into service classes. I inject interfaces, so I can mock these interfaces when writing unit tests for my services.   
ServiceInterfaces are also injected into controllers and not the concrete implementations.

I then delegate the creation of objects to the IoC container by laravel with the code snippet below in the AppServiceProvider.php file
~~~ 
$this->app->bind(BookingRepositoryInferface::class, BookingRepository::class);
$this->app->bind(UserRepositoryInterface::class, UserRepository::class);

~~~

Also removed all occurrences of Auth::user() or Request class in repositories.  
This is not advisable because it makes unit testing difficult since we don't we don't create an instance of the service container during unit testing.
