function foo(x) {
  if (x === null) {
    return 0; 
  }
  return x + 1; 
}

$ php -r 'var_dump(foo(null));'