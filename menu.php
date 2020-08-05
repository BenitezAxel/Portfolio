<nav class="navbar navbar-expand-sm">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $pg == "inicio"? "active": "";?>" href="index.php">INICIO <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $pg == "sobremi"? "active": "";?>" href="sobre-mi.php">SOBRE MI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $pg == "proyectos"? "active": "";?>" href="proyectos.php">PROYECTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $pg == "contacto"? "active": "";?>" href="contacto.php">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </nav>