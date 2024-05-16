document.addEventListener('DOMContentLoaded', function() {
  var form = document.getElementById('miForm');
  if(form) {
      form.addEventListener('submit', function(e) {
          e.preventDefault();
    
          var nombre = document.getElementById('username').value;
          var contra = document.getElementById('password').value;
    
          localStorage.setItem('nombre', nombre);
          localStorage.setItem('correo', contra);
    
          alert('Datos guardados en Local Storage ' + nombre);
        
          window.location.href = '../html/index.html';
      });
  }

  var nombre_global = localStorage.getItem('nombre');
  var contra_global = localStorage.getItem('correo');
  if (nombre_global) { // Si 'nombre' tiene un valor
      document.getElementById('nombreUsuario').textContent = nombre_global;
  }
});

