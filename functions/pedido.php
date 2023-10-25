<?php
$pedido=[
    
];
?>
<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    <header>
                        <h1>Haz tu pedido!!!</h1>
                        <h3>Cliente</h3>
                    </header>
                    <div>
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $inputs['name'] ?? '' ?>" class="<?php echo isset($errors['name']) ? 'error' : '' ?>">
                    </div>
                    <div>
                        <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="apellido" value="<?php echo $inputs['apellido'] ?? '' ?>" class="<?php echo isset($errors['apellido']) ? 'error' : '' ?>">
                    </div>
                    <div>
                        <label for="curso">Curso:</label>
                        <input type="text" class="form-control" name="curso" id="curso" placeholder="curso" value="<?php echo $inputs['curso'] ?? '' ?>" class="<?php echo isset($errors['curso']) ? 'error' : '' ?>">
                    </div>
                    <div>
                        <label for="telefono">Telefono:</label>
                        <input type="number" class="form-control" name="telefono" id="telefono" placeholder="telefono" value="<?php echo $inputs['telefono'] ?? '' ?>" class="<?php echo isset($errors['telefono']) ? 'error' : '' ?>">
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email" value="<?php echo $inputs['email'] ?? '' ?>" class="<?php echo isset($errors['email']) ? 'error' : '' ?>">
                    </div>
                    <div>
                        <label for="dni">DNI:</label>
                        <input type="number" class="form-control" name="dni" id="dni" placeholder="dni" value="<?php echo $inputs['dni'] ?? '' ?>" class="<?php echo isset($errors['dni']) ? 'error' : '' ?>">
                    </div>
                    <br>
                       <h3>Pedido</h3>
                    <div>
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="cantidad" value="<?php echo $inputs['cantidad'] ?? '' ?>" class="<?php echo isset($errors['cantidad']) ? 'error' : '' ?>">
                    </div>
                    <div>
                    <label>Tamaño</label>
                          <input type="radio" id="mini" name="mini" value="<?php echo $inputs['mini'] ?? '' ?>" class="<?php echo isset($errors['mini']) ? 'error' : '' ?>">
                          <label for="html">Mini</label>
                          <input type="radio" id="mediano" name="mediano" value="<?php echo $inputs['mediano'] ?? '' ?>" class="<?php echo isset($errors['mediano']) ? 'error' : '' ?>">
                          <label for="css">Mediano</label>
                          <input type="radio" id="grande" name="grande" value="<?php echo $inputs['grande'] ?? '' ?>" class="<?php echo isset($errors['grande']) ? 'error' : '' ?>">
                          <label for="javascript">Grande</label>
                    </div>
                    <br>
                    <button class="btn btn-outline-danger" type="submit">Hacer pedido</button>
                    <button class="btn btn-outline-danger" type="submit">Generar PDF</button>
                </form>
            </center>
        </div>
    </div>
</div>