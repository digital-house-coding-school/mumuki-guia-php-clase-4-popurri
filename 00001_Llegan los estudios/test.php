public function testUp(): void {
  $mig = new CreateStudioTable();
  
  $mig->up();
  
  $this->assertTrue(isset(Schema::$tableUp), "¿Llamaste al método Schema::create dentro de la función up?");
  
  $this->assertTrue(is_string(Schema::$tableUp), "El método up debería recibir un string como primer parámetro");
  
  $this->assertTrue(Schema::$tableUp === "studios", "La tabla a crear en el método up debería llamarse 'studios'. Sin embargo, se recibió '" . Schema::$tableUp . "'");
  
  $this->assertTrue(Schema::$funcUp instanceof Closure, "El segundo parámetro recibido por Schema::create debe ser una función anónima");
  
  $reflection = new ReflectionFunction(Schema::$funcUp);
  $arguments  = $reflection->getParameters();

  $this->assertTrue(count($arguments) == 1, "La función anónima debe recibir un parámetro");
  
  $this->assertTrue($arguments[0]->getType() && $arguments[0]->getType()->getName() == "Blueprint", "La función anónima debe recibir un parámetro de tipo Blueprint");
  
  $bp = new BluePrint();
  $func = Schema::$funcUp;
  $func($bp);
  
  $this->assertTrue(!is_null($bp->increments), "¿Modificaste el blueprint mediante el método increments?");
  
  $this->assertTrue(is_string($bp->increments) && $bp->increments == "id", "El método increments debería recibir el string 'id'");
  
  $this->assertTrue($bp->timestamps, "¿Llamaste al método timestamps del blueprint?");
  
  $this->assertTrue(count($bp->string) == 1, "Deberías llamar al método string del blueprint 1 (y solo 1) vez");
  
  $this->assertTrue(is_string($bp->string[0]) && $bp->string[0] == "name", "El método string debería recibir el string 'name'");
}

public function testDown(): void {
  $mig = new CreateStudioTable();
  
  $mig->down();
  
  $this->assertTrue(isset(Schema::$tableDown), "¿Llamaste al método Schema::drop dentro de la función down?");
  
  $this->assertTrue(is_string(Schema::$tableDown), "El método down debería recibir un string");
  
  $this->assertTrue(Schema::$tableDown === "studios", "La tabla a eliminar en el método down debería llamarse 'studios'. Sin embargo, se recibió '" . Schema::$tableDown . "'");
}