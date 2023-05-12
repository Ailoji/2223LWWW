<div class="footer">
    <footer class="bg-light py-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">El meu portfoli</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">

                    <a class="nav-link" href="sobreAutor.php">Sobre mi</a>

                </div>

            </nav>
        </div>
    </footer>

</div>
</div>
<!-- Bloqueo de pantalla -->
<div id="lock-screen" style="position: fixed; z-index: 500; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); display: none;"></div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Ingrese la contraseña</h3>
            </div>
            <div class="modal-body">
                <h4>Per visualitzar el portfoli has d'entrar la teva clau, si no la coneixes pots accedir com anonim amb la clau 000</h4>

                <input type="password" id="password" class="form-control" placeholder="Contraseña">
                <p id="password-error" style="color: red; display: none;">La contraseña es incorrecta</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" id="submit-password" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        // Verifica si la cookie "contrasenaCorrecta" existe
        if (getCookie("contrasenaCorrecta") === "true") {
            // Si la cookie existe y tiene un valor de "true", no se muestra el modal
            return;
        }

        // Si la cookie no existe o tiene un valor diferente a "true", se muestra el modal
        $('#myModal').modal('show');
        // Muestra el bloqueo de pantalla
        $('#lock-screen').show();

        $('#submit-password').click(function() {
            var password = $('#password').val();
            if (password === '000') {
                $('#myModal').modal('hide');
                // Oculta el bloqueo de pantalla
                $('#lock-screen').hide();
                // Crea la cookie "contrasenaCorrecta" con un valor de "true"
                document.cookie = "contrasenaCorrecta=true; expires=Thu, 18 Dec 2025 12:00:00 UTC; path=/";
            } else {
                $('#password-error').show();
            }
        });
    });

    // Función para obtener el valor de una cookie
    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length === 2) {
            return parts.pop().split(";").shift();
        }
    }
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="musica.js"></script>
<script src="meteo.js"></script>






</body>

</html>