# Práctica 2 – Parcial 1

## Objetivo
Implementar herencia en PHP mediante la extensión de clases, reutilizando atributos y métodos de la clase base `Usuario`.

## Tecnologías utilizadas
- PHP 8+
- Servidor local XAMPP
- Git
- GitHub

## Instrucciones de ejecución
1. Entrar a XAMPP y activar Apache.
2. Ingresar al apartado `practica-2` en `htdocs`.
3. Abre el navegador y accede a: `http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-2/index.php`.
4. Mostrara en pantalla el nombre, correo y rol del administrador.

## Herencia aplicada
Se creo la clase `Admin` que extiende de la clase base `Usuario`. Esto permite que `Admin` reutilice los atributos y metodos de `Usuario`, evitando duplicación de código.

## Diferencias entre Usuario y Admin
- `Usuario` tiene atributos y métodos básicos: nombre y correo.
- `Admin` hereda de `Usuario` y agrega un método adicional `getRol()` que retorna "Administrador".

## Evidencia de ejecución
El archivo `index.php` demuestra que la herencia funciona correctamente, mostrando nombre, correo y rol del objeto Admin sin errores.