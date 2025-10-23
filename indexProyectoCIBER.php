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
                    <a href="./doc/GLOSARIO.pdf" target="_blank">
                        <span>Glosario</span>
                    </a>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT4: TÉCNICAS DE ACCESO A DATOS EN PHP</span>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT5: DESARROLLO DE APLICACIONES WEB</span>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT6: APLICACIONES WEB MULTICAPA</span>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT7: PROGRAMACIÓN DE SERVICIOS WEB</span>
                </span>
            </div>
            <div class="card">
                <div class="overlay"></div>
                <span>
                    <span>UT8: DESARROLLO DE APLICACIONES WEB HÍBRIDAS</span>
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