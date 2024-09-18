<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Issets/css/main.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="../Issets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Pagos</title>
</head>

<body>
    <style>
        .a {
            display: none;
        }

        .container-butt {
            display: flex;
            justify-content: space-between;
        }

        a {
            text-decoration: none;
        }

        .aaa {
            display: flex;
            gap: 10px;
            flex-direction: row;
        }

        .aaa input[type="checkbox"] {
            width: 40px;
            margin: 0;
        }
    </style>
    <!-- Header  -->
    <?php
    require 'Header.php'
    ?>
    <main>
        <div class="container-butt">
            <a href="Pods.php" class="button-T">
                <i class="ri-arrow-left-line"></i>
                <p class="text">Seguir Comprando </p>
            </a>
        </div>
        <div class="container-productos-pago" id="productos-en-pago">
            <?php
            // Recibir y mostrar los productos enviados mediante POST
            if (isset($_POST['productos'])) {
                $productos = json_decode($_POST['productos'], true);
                foreach ($productos as $producto) {
            ?>
                    <div class="producto-en-pago">
                        <div class="products">
                            <img src="<?= $producto['image'] ?>" alt="<?= $producto['title'] ?>">
                            <p><?= $producto['quantity'] ?></p>
                            <h3><?= $producto['title'] ?></h3>
                        </div>
                        <?php
                        $Total = intval($producto['quantity']) * intval(substr($producto['price'], 3));;
                        ?>
                        <p>S/<?= $Total ?>.00</p>
                    </div>
            <?php
                }
                // Obtener el valor de valorTotal
                $valorTotal = isset($_POST['valorTotal']) ? $_POST['valorTotal'] : '0';
            }
            ?>
            <!-- ell precio totalllllllllllllllllllllllllllllllllll-->
            <div class="total">
                <h2>Total: </h2><span><?= $valorTotal ?></span>
            </div>
        </div>
        <div class="container-butt">
            <a class="button-T RecojoTienda">
                <i class="ri-store-fill"></i>
                <p class="text">Recojo en tienda</p>
            </a>
            <a class="button-T Delivery">
                <i class="ri-truck-line"></i>
                <p class="text">Delivery</p>
            </a>
        </div>
    </main>

    <!-- Recojo en tienda -->
    <div class="service-modal modalformrt flex-center">
        <div class="service-modal-body">
            <i class="fas fa-times modal-close-btn"></i>
            <form class="FormSeleccionTienda">
                <div class="box-input">
                    <h1 style="text-align: center;">Selecciona una direccion</h1>
                    <br>
                    <div class="Seleccion-tienda" style="text-align: center;">
                        <h4>Av. Arenales 963, Cercado de Lima, Perú</h4>
                        <p>LIMA, LIMA, LIMA, PERÚ</p>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="box-input">
                    <h1 style="text-align: center;">Horario de Recojos</h1>
                    <div class="inputs-selects">
                        <h4 for="">Dias</h4>
                        <select name="" id="">
                            <option value="1">Lunes</option>
                            <option value="2">Martes</option>
                            <option value="3">Miercoles</option>
                            <option value="4">Jueves</option>
                        </select>
                    </div>
                    <div class="inputs-selects">
                        <h4 for="">Horarios</h4>
                        <select name="" id="">
                            <option value="1">De 6 A.M a 9 P.M</option>
                        </select>
                    </div>
                    <br>
                </div>
                <div class="container-butt">
                    <a href="Pods.php" class="button-T">
                        <i class="ri-arrow-left-line"></i>
                        <p class="text">Seguir Comprando </p>
                    </a>
                    <a class="button-T datos">
                        <p class="text finalcomp">Finalizar Compra</p>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </form>

            <form class="FormDatos active">
                <h1 style="text-align: center;">Datos de facturizacion</h1>
                <div class="box-input">
                    <h4>Recoger en tienda:</h4>
                    <h5> Av. Arenales 963, Cercado de Lima, Perú</h5>
                    <h6>LIMA, LIMA, LIMA, PERÚ</h6>
                    <a href="">Cambiar</a>
                    <br>
                    <br>
                </div>
                <div class="container-butt" style="justify-content:inherit">
                    <a class="button-T active">
                        <i class="ri-arrow-left-line"></i>
                        <p class="text">Boleta</p>
                    </a>
                    <a class="button-T">
                        <p class="text finalcomp">Factura</p>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <h1 style="text-align: center;">Datos de Personales</h1>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Nombre y Apellido</label>
                    <input name="apellidos" id="apellidos" type="text" required>
                </div>
                <div class="box-input-total">
                    <div class="box-input">
                        <label for="">Documento:</label>
                        <div class="inputs-selects">
                            <select style="text-align:center" name="" id="">
                                <option value="1" class="dni">DNI</option>
                                <option value="2">Pasaporte</option>
                                <option value="3">Carnet de extranjeria</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-input">
                        <label class="labelimp" for="telefono"> Numero de Decumento:</label>
                        <input name="apellidos" id="apellidos" type="text" required>
                    </div>
                    <div class="box-input" style="display: none;">
                        <label class="labelimp" for="telefono"> Razon Social:</label>
                        <input name="apellidos" id="apellidos" type="text" required>
                    </div>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Correo Electronico:</label>
                    <input name="apellidos" id="apellidos" type="text" required>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Celular:</label>
                    <input name="apellidos" id="apellidos" type="text" required>
                </div>
                <div class="box-input">
                    <label for="">Distrito</label>
                    <br>
                    <div class="inputs-selects">
                        <select style="text-align:center" name="" id="">
                            <option value="1">Lima</option>
                            <option value="2">Pasaporte</option>
                            <option value="3">Carnet de extranjeria</option>
                        </select>
                    </div>
                    <br>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Direccion:</label>
                    <input name="apellidos" id="apellidos" type="text" required>
                </div>
                <br>
                <div class="metodos-pago">
                    <p style="text-align:center;">Metodos de Pago:</p>
                    <div class="metodos">
                        
                        <div class="colm text-right">
                            <input type="radio"   name="modalOption" value="modal1" id="modal1Option">
                        </div>
                        <div class="colm">
                            <label for="modal1Option"><img class="yape Yape" src="../Issets/img/LogoTipo/LogoYape.png"></label>
                        </div>

                        <div class="colm text-right">    
                            <input type="radio" name="modalOption" value="modal2" id="modal2Option">
                        </div>
                        <div class="colm">
                            <label for="modal2Option"><img class="visa Visa" src="../Issets/img/LogoTipo/LogoVisa.png"></label><br>
                        </div>

                        <div class="colm text-right"> 
                            <input type="radio" name="modalOption" value="modal3" id="modal3Option">
                        </div>   
                        <div class="colm">
                            <label for="modal3Option"><img class="plin Plin" src="../Issets/img/LogoTipo/LogoPlin.png"></label><br>
                            </div>

                    </div>
                </div>
                <br>
                <div class="aaa">
                    <input type="checkbox" value="Acepto los Términos y Condiciones y Políticas de privacidad">
                    <p>Acepto los Términos y Condiciones y Políticas de privacidad</p>
                </div>
                <div class="container-butt">
                    <a href="Pods.php" class="button-T">
                        <i class="ri-arrow-left-line"></i>
                        <p class="text">Seguir Comprando </p>
                    </a>
                    <a class="button-T" id="openSelectedModalBtn">
                        <p class="text finalcomp">Pagar</p>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                    

                </div>
            </form>
        </div>
        
    </div>

    <!-- delivery-->
    <div class="service-modal modalformdv flex-center">
        <div class="service-modal-body">
            <i class="fas fa-times modal-close-btn"></i>
            <form class="FormDatosDelivery active">
                <h1 style="text-align: center;">Informacion de Contacto</h1>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Nombre y Apellido</label>
                    <input name="apellidos" id="apellidos" type="text" required>
                </div>
                <div class="box-input-total">
                    <div class="box-input">
                        <label for="">Documento:</label>
                        <div class="inputs-selects">
                            <select style="text-align:center" name="" id="">
                                <option value="1" class="dni">DNI</option>
                                <option value="2">Pasaporte</option>
                                <option value="3">Carnet de extranjeria</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-input">
                        <label class="labelimp" for="telefono"> Numero de Decumento:</label>
                        <input name="apellidos" id="apellidos" type="text" required>
                    </div>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Correo Electronico:</label>
                    <input name="apellidos" id="apellidos" type="text" required>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Celular:</label>
                    <input name="apellidos" id="apellidos" type="text" required>
                </div>
                <h1 style="text-align: center;">Direccion de Envio</h1>
                <div class="box-input">
                    <label for="">Distrito</label>
                    <br>
                    <div class="inputs-selects">
                        <select style="text-align:center" name="" id="">
                            <option value="1">Lima</option>
                            <option value="2">Pasaporte</option>
                            <option value="3">Carnet de extranjeria</option>
                        </select>
                    </div>
                    <br>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono"> Direccion:</label>
                    <input name="apellidos" id="apellidos" type="text" required>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="telefono">Referencia</label>
                    <textarea name="reclamo" id="reclamo" required></textarea>
                </div>
                <br>
                <div class="metodos-pago">
                    <p style="text-align:center;">Metodos de Pago:</p>
                    <div class="metodos">
                    <div class="colm text-right">
                            <input type="radio"   name="modalOption" value="modal1" id="modal1Option">
                        </div>
                        <div class="colm">
                            <label for="modal1Option"><img class="yape Yape" src="../Issets/img/LogoTipo/LogoYape.png"></label>
                        </div>

                        <div class="colm text-right">    
                            <input type="radio" name="modalOption" value="modal2" id="modal2Option">
                        </div>
                        <div class="colm">
                            <label for="modal2Option"><img class="visa Visa" src="../Issets/img/LogoTipo/LogoVisa.png"></label><br>
                        </div>

                        <div class="colm text-right"> 
                            <input type="radio" name="modalOption" value="modal3" id="modal3Option">
                        </div>   
                        <div class="colm">
                            <label for="modal3Option"><img class="plin Plin" src="../Issets/img/LogoTipo/LogoPlin.png"></label><br>
                            </div>
                        </div>
                    </div>
                    <div class="aaa">
                    <input type="checkbox" value="Acepto los Términos y Condiciones y Políticas de privacidad">
                    <p>Acepto los Términos y Condiciones y Políticas de privacidad</p>
                </div>
                <div class="container-butt">
                    <a href="Pods.php" class="button-T">
                        <i class="ri-arrow-left-line"></i>
                        <p class="text">Seguir Comprando </p>
                    </a>
                    <a class="button-T" id="openSelectedModalBtns">
                        <p class="text finalcomp">Pagar</p>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </form>
                </div>
                
                
        </div>
    


  
<!-- Fardy-->
    <div id="modal1" class="modal">
        <div class="modal-content">
        <i class="fas fa-times modal-close-btn"></i>
            
            <h1>Pago con yape</h1>
            <div class="box-input">
                <img src="/Issets/img/kr.webp" class="yas" alt="Yape">
                <br>
                <h2>Numero: +51 999 999 999</h2>
                <br>
                <h2>Monto a pagar: <?= $valorTotal ?></h2>
            </div>
            <div class="container-butt">
                    <a  class="button-T">
                        <p class="text">Listo</p>
                    </a>
        </div>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Pago con Tarjeta</h1>
            <div class="box-input">
                <img src="/Issets/img/kr.webp" class="yas" alt="visa">
                <br>
                <h2>Numero de Cuenta Bancario: <br>
                    1234 5678 9012 3456</h2>
                <br>
                <h2>Numero de Cuenta Inter Bancario: <br>
                    12345 67891 54321 98765</h2>
                <br>
                <h2>Monto a pagar: <?= $valorTotal ?></h2>
            </div>
            <div class="container-butt">
                    <a  class="button-T">
                        <p class="text">Listo</p>
                    </a>
        </div>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Pago con plin</h1>
            <div class="box-input">
                <img src="/Issets/img/kr.webp" class="yas" alt="Yape">
                <br>
                <h2>Numero: +51 999 999 999</h2>
                <br>
                <h2>Monto a pagar: <?= $valorTotal ?></h2>
                
            </div>
            <div class="container-butt">
                    <a  class="button-T">
                        <p class="text">Listo</p>
                    </a>
        </div>
        
        </div>
    </div>

    <script>
        const finalcompra = document.querySelectorAll(".finalcomp");
        const FormSeleccionTienda = document.querySelector(".FormSeleccionTienda"); // Cambiado a querySelector
        const FormDatos = document.querySelector(".FormDatos"); // Cambiado a querySelector

        finalcompra.forEach((finalcompr, i) => {
            finalcompr.addEventListener("click", () => {
                FormSeleccionTienda.classList.add('active');
                FormDatos.classList.remove('active');
            });
        });

        const serviceModalsrt = document.querySelectorAll(".modalformrt");
        const serviceModalsdv = document.querySelectorAll(".modalformdv");
        
        const RecojoTiendaBtns = document.querySelectorAll(".RecojoTienda");
        const DeliveryBtns = document.querySelectorAll(".Delivery");
        



        const modalCloseBtns = document.querySelectorAll(".modal-close-btn");

        var modalrt = function(modalClick) {
            serviceModalsrt[modalClick].classList.add("active");
        }

        var modaldv = function(modalClick) {
            serviceModalsdv[modalClick].classList.add("active");
        }




        RecojoTiendaBtns.forEach((RecojoTiendaBtn, i) => {
            RecojoTiendaBtn.addEventListener("click", () => {
                modalrt(i);
            });
        });

        DeliveryBtns.forEach((DeliveryBtn, i) => {
            DeliveryBtn.addEventListener("click", () => {
                modaldv(i);
            });
        });

       

        modalCloseBtns.forEach((modalCloseBtn) => {
            modalCloseBtn.addEventListener("click", () => {
                serviceModalsrt.forEach((modalView) => {
                    FormSeleccionTienda.classList.remove('active');
                    FormDatos.classList.add('active');
                    modalView.classList.remove("active");
                });
                serviceModalsdv.forEach((modalView) => {
                    modalView.classList.remove("active");
                });
            });
        });
    </script>
    


<script>
        document.addEventListener("DOMContentLoaded", function () {
    const modals = document.querySelectorAll(".service-modal");
    const openSelectedModalBtn = document.getElementById("openSelectedModalBtn");
    const openSelectedModalBtnp = document.getElementById("openSelectedModalBtns");
    

    const closeModal = function () {
        modals.forEach(modal => {
            modal.style.display = "none";
        });
    };

    openSelectedModalBtnp.addEventListener("click", function () {
        const selectedOption = document.querySelector('input[name="modalOption"]:checked');
        if (selectedOption) {
            closeModal();
            const modalId = selectedOption.value;
            document.getElementById(modalId).style.display="block";
        } else {
            alert("Selecciona un modal antes de abrirlo.");
        }
    });

    openSelectedModalBtn.addEventListener("click", function () {
        const selectedOption = document.querySelector('input[name="modalOption"]:checked');
        if (selectedOption) {
            closeModal();
            const modalId = selectedOption.value;
            document.getElementById(modalId).style.display="block";
        } else {
            alert("Selecciona un modal antes de abrirlo.");
        }
    });

    modals.forEach(modal => {
        const closeBtn = modal.querySelector(".close");
        closeBtn.addEventListener("click", function () {
            closeModal();
        });

        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    });
});
</script>
    <script src="../Issets/js/main.js"></script>
</body>

</html>