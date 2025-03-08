<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
      </div>
      <div class="modal-body">
        
        <div id="welcomeMessage" class="alert alert-success text-center" style="display: none;">
          🎉 ¡Bienvenido!
        </div>

        <form id="loginForm">
          <div class="form-group">
            <label for="username">Usuario:</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>

      </div>
    </div>
  </div>
</div>

<script>
document.getElementById("loginForm").addEventListener("submit", function(event) {
  event.preventDefault();

  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (username.trim() !== "" && password.trim() !== "") {

    document.getElementById("loginForm").style.display = "none";
    
    let welcomeMessage = document.getElementById("welcomeMessage");
    welcomeMessage.style.display = "block";
    welcomeMessage.innerHTML = `🎉 ¡Bienvenido, <strong>${username}</strong>!`;

    setTimeout(() => {
      let loginModal = bootstrap.Modal.getInstance(document.getElementById("loginModal"));
      if (loginModal) {
        loginModal.hide();
      } else {
        console.error("Error: No se pudo cerrar el modal.");
      }
    }, 500);
  } else {
    alert("Por favor, ingresa un usuario y una contraseña.");
  }
});
</script>
