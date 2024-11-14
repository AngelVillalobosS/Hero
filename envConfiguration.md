# Envioroment Configuration
## Instalación y Configuración de Node.js y Vite
### Paso 1
Primero tendrás que instalar Node.js
 - https://nodejs.org/en

Una vez lo tengas instalado deberas seguir el paso dos.

### Paso 2
Una vez ya tengas instalado Node.js deberás ir a Powershell y ejecutar el siguiente comando:

```bash 
Set-ExecutionPolicy RemoteSigned
```
### Paso 3
Deberás dirigirte a la ruta donde tengas tu proyecto 
- Por ejemplo: ```C:\xampp\htdocs\Hero```

Una vez ya estes ahí deberás ingresar los siguientes comandos:
```bash
npm install
```
En cuanto finalice la instalación pondrás el siguiente comando:

 ***ADVERTENCIA: Usar este comando en "Configuración  previa a la ejecución"***
```bash
npm run dev
```
## Configuración previa a la ejecución
### Paso 1 | Asegurarse de tener el archivo .env
Deberás buscar el archivo .env en la raiz del proyecto, si no cuentas con dicho archivo deberás ingresar el siguiente comando en la ruta del proyecto.
```bash
cp .env.example .env
```
## Paso 2 | Configurar la Variable "APP_URL" en .env

Abre el archivo .env y asegúrate de que APP_URL esté configurada correctamente. Debe apuntar a la URL local de tu servidor Laravel, por ejemplo:

```dotenv
APP_URL=http://localhost
```

## Paso 3 | Deten y reinicia el Servidor Vite

Después de actualizar el archivo .env, detén el proceso de Vite y reinícialo para que cargue las nuevas configuraciones:

```bash
npm run dev
```

## Paso 4 | Verifica vite.config.js

En tu archivo vite.config.js, verifica que APP_URL esté siendo usada de la manera correcta. Puedes utilizar dotenv para cargar automáticamente las variables de entorno de tu archivo .env en el archivo de configuración. Asegúrate de que vite.config.js esté configurado así:

```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import dotenv from 'dotenv';

dotenv.config(); // Cargar las variables de entorno

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

## Paso 5 | Limpia Caché (Si es neceario)

Si aún tienes problemas, intenta limpiar el caché de configuración de Laravel:

```bash
php artisan config:cache
```

Luego, vuelve a intentar ejecutar el servidor.