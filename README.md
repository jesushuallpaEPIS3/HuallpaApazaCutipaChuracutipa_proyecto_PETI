

# Proyecto PETI

Este repositorio contiene el proyecto **PETI**, el cual puedes desplegar utilizando Docker. A continuación, se detallan los pasos necesarios para clonar y ejecutar el proyecto en tu máquina local.

## Requisitos

- Tener Docker y Docker Compose instalados en tu máquina.
- Tener git

## Instrucciones de Uso

**Paso 01**: Clonar el repositorio  
Clona el repositorio en tu máquina local usando el siguiente comando:

```bash
git clone https://github.com/jesushuallpaEPIS3/HuallpaApazaCutipaChuracutipa_proyecto_PETI.git
```

**Paso 02**: Navegar al directorio del proyecto  
Dirígete al directorio clonado:

```bash
cd HuallpaApazaCutipaChuracutipa_proyecto_PETI
```

**Paso 03**: Abrir el proyecto en tu editor  
Si usas Visual Studio Code, puedes abrir el proyecto con:

```bash
code .
```

**Paso 04**: Construir y ejecutar el contenedor  
Ejecuta el siguiente comando para construir los contenedores y levantarlos en segundo plano:

```bash
docker-compose up -d --build
```

**Paso 05**: Esperar a que cargue  
Permite que Docker complete el proceso de configuración y despliegue de los contenedores.

**Paso 06**: Acceder a la aplicación  
Una vez que los contenedores estén en ejecución, puedes acceder a la aplicación en tu navegador web en:

- [Aplicación web](http://localhost)
- [phpMyAdmin](http://localhost:8080)

## Notas adicionales

- Asegúrate de que los puertos necesarios estén libres en tu máquina.
- Si deseas detener los contenedores, utiliza:

  ```bash
  docker-compose down
  ```
```

