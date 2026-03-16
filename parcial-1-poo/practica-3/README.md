# Practica 3 – Parcial 1

## Objetivo

Desarrollar un sistema orientado a objetos más robusto, integrando herencia, validaciones y manejo de excepciones para 
simular un entorno profesional.

## Tecnologías utilizadas

- PHP 8+
- XAMPP
- Gitbash
- GitHub

## Descripción del sistema
Sistema de usuarios basado en PHP POO que muestra diferentes tipos de usuarios (Admin y Alumno), con validacion de correo y manejo de excepciones.

## Flujo de clases
- Usuario: Clase base que contiene los atributos nombre y correo.
- Admin: Hereda de Usuario, y su metodo getRol() devuelve Administrador.
- Alumno: Hereda de Usuario, se agrega el atributo matricula y su metodo getRol() devuelve Alumno.

## Manejo de errores
Se utilizan bloques try/catch en index.php para capturar errores cuando se intenta crear un usuario con un correo invalido.
Si el correo no tiene un formato correcto, se lanza una excepcion y se muestra un mensaje de error controlado.

## Instrucciones de ejecución

1. Colocar el proyecto dentro de la carpeta htdocs de XAMPP.
2. Iniciar apache en XAMPP.
3. Acceder desde el navegador a: http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-3/

## Evidencia de funcionamiento
- Creacion de usuarios validos.
- Intento de crear un usuario con correo invalido, mostrando un mensaje de error controlado.