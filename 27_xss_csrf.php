<?php

// Cross-site scripting (or XSS) allows an attacker to execute arbitrary JavaScript within the browser of a victim user.

// ! Prevention Techniques:
// 1. Input validation & sanitization
// 2. Output encoding
// 3. Content Security Policy (CSP) : A security feature that detect and mitigate certian types of attacks, including XSS.

// Cross-site request forgery (or CSRF) allows an attacker to induce a victim user to perform actions that they do not intend to.

// Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web application in which they’re currently authenticated.

// A CSRF (Cross-Site Request Forgery) token is also known as synchronizer token or challenge token, that verifies the authenticity of requests made by a user.