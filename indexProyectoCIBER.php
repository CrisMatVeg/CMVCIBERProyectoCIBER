<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cristian Mateos Vega</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./webroot/css/estilos.css">
        <link rel="stylesheet" href="./webroot/css/fonts.css">
        <style>
            main {
                flex: 1;
                margin-top: 70px;
                margin-bottom: 70px;
                display: grid;
                grid-template-columns: 1fr 1fr;
                column-gap: 10px;
                row-gap: 10px;
                max-height: 100vh;
                height: 100vh;
                justify-items: center;
                align-content: center;
                overflow: hidden;
                padding: 10px;
            }
            a{
                text-decoration:2px underline #020202;
            }

            .card {
                position: relative;
                overflow: hidden;
                border: 5px solid #020202;
                border-radius: 7px;
                transition: transform 0.3s ease;
                transform-origin: center;
                background-size: cover;
                background-position: center;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #020202;
                font-weight: bold;
                font-size: 1.2rem;
                text-align: center;
                z-index: 0;
                padding: 15px;
                background: #ffffff;
                margin: 10px;
                width: 80%;
            }

            .titulo{
                color: teal;
            }
        </style>
    </head>

    <body>
        <header>
            <h2>DAW2</h2>
            <h1>Fundamentos de Ciberseguridad</h1>
            <h2>25/26</h2>
        </header>

        <main>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span class="titulo">UT1: CIBERSEGURIDAD</span>
                    <a href="./doc/GLOSARIO.pdf" target="_blank">
                        <span>Glosario</span>
                    </a>
                    <a href="./doc/OWASP.html" target="_blank">
                        <span>Estudio Vulneabilidades OWASP</span>
                    </a>
                    <a href="./doc/10.pdf" target="_blank">
                        <span>Presentación Vulneabilidad OWASP</span>
                    </a>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span class="titulo">UT2: SERVIDOR WEB SEGURO</span>
                    <a href="https://github.com/CrisMatVeg/CMVDAWProyectoDAW" target="_blank">
                        <span>Documentación</span>
                    </a>
                    <a href="./doc/251103ProtocoloInstalaciónServidorWebAMP.pdf" target="_blank">
                        <span>Seguimiento Practico</span>
                    </a>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span class="titulo">UT3: APLICACIÓN WEB SEGURA</span>
                    <a href="../CMVDWESLoginLogoff/indexLoginLogoff.php" target="_blank">
                        <span>Login Logoff</span>
                    </a>
                    <a href="../CMVDWESAplicacionFinal/index.php" target="_blank">
                        <span>Aplicación Final</span>
                    </a>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span class="titulo">UT4: INFRAESTRUCTURA WEB SEGURA</span>
                    <a href="https://github.com/CrisMatVeg/CMVDAWProyectoDAW/blob/master/READMEEE.md" target="_blank">
                        <span>Implantación de la Aplicación</span>
                    </a>
                </span>
            </div>
        </main>

        <footer>
            <p>© 2025-26 IES Los Sauces. Todos los derechos reservados. Cristian Mateos Vega</p>
            <div id="iconos">
                <a href="https://github.com/CrisMatVeg/CMVCIBERProyectoCIBER" target="_blank" title="Github"><i
                        class="fa-brands fa-github fa-2xl"></i></a>
                <a href="../index.html" title="Inicio"><i class="fa-solid fa-house fa-xl"></i></a>
            </div>
        </footer>
    </body>

</html>