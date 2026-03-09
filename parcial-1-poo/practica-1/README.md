# Práctica 1 – Parcial 1

## Objetivo
Aplicar los fundamentos de la Programación Orientada a Objetos en PHP mediante la creación de una clase con atributos privados, constructor y métodos de acceso, utilizando buenas prácticas de encapsulamiento.

## Tecnologías utilizadas
- PHP 8+
- Servidor local XAMPP
- Git
- GitHub

## Descripción
Se implemento una clase llamada **Usuario** que contiene dos atributos privados:

- nombre
- correo

La clase incluye:

- Constructor para inicializar los atributos
- Metodos getters:
  - getNombre()
  - getCorreo()
- Metodos setters:
  - setNombre()
  - setCorreo()

Posteriormente se creó un archivo `index.php` para instanciar la clase y mostrar los datos del usuario en el navegador.

## Instrucciones de ejecución

1. Clonar el repositorio.
2. Colocar la carpeta `desarrollo-web-avanzado-fimaz-uas` dentro de `htdocs` en XAMPP.
3. Iniciar Apache desde el panel de control de XAMPP.
4. Abrir el navegador.
5. Acceder a la siguiente dirección: http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-1

## Evidencia de funcionamiento

Al ejecutar el proyecto en el navegador se muestran los datos del usuario creados en `index.php`, demostrando el correcto uso de encapsulamiento y métodos de acceso de la clase Usuario.