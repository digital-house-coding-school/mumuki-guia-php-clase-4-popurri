public function testUp(): void {
  $this->assertTrue(true);
}

public function testDown(): void {
  $mig = new CreateStudioTable();
  
  $mig->down();
  
  $this->assertTrue(isset(Schema::$tableDown), "¿Llamaste al método Schema::drop dentro de la función down?");
  
  $this->assertTrue(Schema::$tableDown === "studio", "La tabla a eliminar en el método down debería llamarse 'studio'. Sin embargo, se recibió '" . Schema::$tableDown . "'");
}