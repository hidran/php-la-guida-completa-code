sum(10, c: fn() => null, b: 5);      // ok: il posizionale è il primo
// sum(a: 10, 5, ...);               // ERROR: posizionale dopo un named
