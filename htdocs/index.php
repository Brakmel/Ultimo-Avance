<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sublime</title>
    <link rel="StyleSheet" href="Style/Index.css" type="text/css">
</head>
<body>
<header>
        <div class="baul_header">
            <img src="https://raw.githubusercontent.com/Brakmel/jubilant-waffle/main/ProyectoUSM/img/Logo_UTFSM-768x677.png">
        </div>
        <div class="baul_header">
            <h1>Seleccione su sala</h1>
        </div>
    </header>
    <div class="salas_titulo">
        <h2>Salas disponibles</h2>
    </div>
        <!--Aqui tienen el panel de botones para invocar las salas-->
        <div class="horas">
            <button onclick="mostrar()">
                Mostrar Bloque 1 - 2 8:15 - 09:25
            </button>
            <button onclick="ocultar()">
                Ocultar Bloque 1 - 2 8:15 - 09:25
            </button>
            <button onclick="mostrar1()">
                Mostrar Bloque 3 - 4 9:35 - 10:45
            </button>
            <button onclick="ocultar1()">
                Ocultar Bloque 3 - 4 9:35 - 10:45
            </button>
            <button onclick="mostrar2()">
                Mostrar Bloque 5 - 6 10:55 - 12:05
            </button>
            <button onclick="ocultar2()">
                Ocultar Bloque 5 - 6 10:55 - 12:05
            </button>
            <button onclick="mostrar3()">
                Mostrar Bloque 5 - 6 13:25 - 13:25
            </button>
            <button onclick="ocultar3()">
                Ocultar Bloque 7 - 8 13:25 - 13:25
            </button>
        </div>
        <!--Le pertenece al calendario numero 1-->
        <div id="calendario_1">
            <div class="baul_salas">
                <div class="sala">
                    <p>A 000</p>
                    <input type="checkbox" id="check">
                </div>
                <div class="sala">
                    <p>A 000</p>
                    <input type="checkbox" id="check">
                </div>
                <div class="sala">
                    <p>B 000</p>
                    <input type="checkbox" id="check">
                </div>
                <div class="sala">
                    <p>E 000</p>
                    <input type="checkbox" id="check">
                </div>
                <div class="sala">
                    <p>A 000</p>
                    <input type="checkbox" id="check">
                </div>
                <div class="sala">
                    <p>A 000</p>
                    <input type="checkbox" id="check">
                </div>
                <div class="sala">
                    <p>B 000</p>
                    <input type="checkbox" id="check">
                </div>
                <div class="sala">
                    <p>E 000</p>
                    <input type="checkbox" id="check">
                </div>
                <div class="sala">
                    <p>A 000</p>
                    <input type="checkbox" id="check">
                </div>
                <div class="sala">
                    <p>B 000</p>
                    <input type="checkbox" id="check">
                </div>
                <div class="sala">
                    <p>E 000</p>
                    <input type="checkbox" id="check">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="baul_footer">
            <img src="https://raw.githubusercontent.com/Brakmel/jubilant-waffle/main/ProyectoUSM/img/Logo_UTFSM-768x677.png">
        </div>
        <div class="baul_footer">
            <p>+56 9 0000 0000</p>
        </div>
        <div class="baul_footer">
            <p>email@gmail.com</p>
        </div>
    </footer>
<script src="usm.js"></script>
</body>
</html>