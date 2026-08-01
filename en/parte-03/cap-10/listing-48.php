sum(10, c: fn() => null, b: 5);      // ok: the positional argument is first
// sum(a: 10, 5, ...);               // ERROR: positional after a named argument
