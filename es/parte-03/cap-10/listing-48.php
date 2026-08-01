suma(10, c: fn() => null, b: 5);      // ok: el argumento posicional es el primero
// suma(a: 10, 5, ...);               // ERROR: posicional después de un argumento con nombre
