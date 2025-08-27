// login-widget.js
class LoginWidget extends HTMLElement {
    constructor() {
      super();
      // Llamamos a super() y adjuntamos el Shadow DOM en modo "open"
      this.attachShadow({ mode: 'open' });
  
      // Obtener el template definido en el HTML mediante su ID
      const template = document.getElementById('login-widget-template');
      if (template) {
        // Clonar el contenido del template para evitar modificar la plantilla original
        const templateContent = template.content.cloneNode(true);
        // Adjuntar el contenido clonado al Shadow DOM
        this.shadowRoot.appendChild(templateContent);
      } else {
        console.error("No se encontró el template 'login-widget-template'.");
      }
    }
  }
  
  // Registrar el componente con la etiqueta <login-widget>
  customElements.define('login-widget', LoginWidget);  