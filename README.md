# CQRS with Symfony Messenger

* Messenger with 3 configured MessageBuses for Commands, Queries, Events
    * messenger.bus.commands
    * messenger.bus.queries
    * messenger.bus.events
    
* Additional Middleware to get original Exception instead of HandlerFailedException

* Internal technical Subdomain *Messenger* to abstract the Symfony Messenger from the rest of your application
* Working with Interfaces instead of Implementations to be flexible in Tests
* It also includes basic examples of each kind of message and related configuration.

## Required

* PHP8
* composer (v2 recommended)

## Test your config

### Debug Messenger
```bash
bin/console debug:messenger
```

### Test Command
```bash
bin/console app:execute-command
```

### Run PHPUnit
```bash
./vendor/bin/phpunit
```

## Read More

[Using CQRS with the Symfony Messenger](https://blog.webdev-jogeleit.de/blog/cqrs-with-symfony)
