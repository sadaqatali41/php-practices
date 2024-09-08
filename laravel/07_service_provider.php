<?php

// 01. Service Providers are the central place in a Laravel application where services, such as database connections, event listeners, middleware, and even routes, are registered and bootstrapped. 
// 02. Service providers are the central place to configure your application.
// 03. Each service provider can bind things into the service container, register event listeners, or perform other bootstrapping tasks.
// 04. Many of these providers are "deferred" providers, meaning they will not be loaded on every request, but only when the services they provide are actually needed.
// 05. Most service providers contain a register and a boot method.
// 06. The register method is used to bind things into the service container, while the boot method is used to perform any additional bootstrapping tasks, such as registering event listeners or setting up middleware.
// 07. Within the register method, you should *only bind things into the service container*. You should never attempt to register any event listeners, routes, or any other piece of functionality within the register method.