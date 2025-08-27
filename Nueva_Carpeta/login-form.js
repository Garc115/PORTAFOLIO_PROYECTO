<script type="module">
  class LoginForm extends HTMLElement {
    constructor() {
      super();
      // Se adjunta el Shadow DOM en modo "open" para poder interactuar desde fuera si es necesario.
      this.attachShadow({ mode: 'open' });
      // Definir la plantilla HTML y CSS encapsulada del formulario.
      this.shadowRoot.innerHTML = `
        <style>
          /* Estilos encapsulados para el formulario de login */
          .login-container {
            width: 300px;
            padding: 20px;
            margin: 20px auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            background: #fff;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
          }
          h2 {
            text-align: center;
            margin-bottom: 20px;
          }
          .form-group {
            margin-bottom: 15px;
          }
          label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
          }
          input[type="email"],
          input[type="password"] {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
          }
          .login-button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
          }
          .login-button:hover {
            background-color: #0056b3;
          }
        </style>
        <div class="login-container">
          <form id="loginForm" action="validar.php" method="POST">
            <h2>Iniciar Sesión</h2>
            <div class="form-group">
              <label for="email">Correo Electrónico</label>
              <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <button class="login-button" type="submit">INICIAR SESIÓN</button>
          </form>
        </div>
      `;
    }
    
    // Puedes agregar métodos personalizados o eventos aquí si necesitas extender la funcionalidad.
  }
  
  // Registrar el componente personalizado.
  customElements.define('login-form', LoginForm);
</script>