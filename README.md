# Practica Formativa
Apellidos: Enzo Dellape, Federico Gastaldi


---

## 📄 Documentación de la llamada AJAX

**🔹 Endpoint:** `perfil.php`  
**🔹 Método:** `POST`  
**🔹 Content-Type:** `application/json`  

### 🔸 Parámetros enviados:
```json
{
  "nombre": "string",
  "apellido": "string",
  "email": "string",
  "username": "string",
  "password": "string"
}

Respuesta esperada:
Texto plano: "ok" o "error"