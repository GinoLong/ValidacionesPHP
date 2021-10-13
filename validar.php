<?php
echo '<pre>';
print_r($_GET); // el $_GET seria (parecido a?) un array formado con los datos enviados del form
echo '<pre>';

echo '<pre>';
var_dump($_GET);
echo '<pre>';

echo 'VALIDACIONES:<br><br>';

// VALIDACION NOMBRE prueba

if (isset($_GET['nombre'])) {                                                       // EXISTE LA VARIABLE?
    $nombre = $_GET['nombre'];
    if (!empty($nombre)) {                                                          // ESTA VACIA LA VARIABLE?
        if (strlen($nombre) >= 3 && strlen($nombre) <= 40) {                        // TIENE LA CANTIDAD DE CARACTERES ADECUADA?
            if (preg_match("/^[a-zA-z0-9 ÁÉÍÓÚáéíóúÑñ()-!*+]*$/", $nombre)) {       // TIENE LOS CARACTERES ADMITIDOS? 
                echo "Nombre: Coincide con la validacion. [$nombre]<br><br>";       // TODOS LOS PARAMETROS COINCIDEN
            } else {
                echo "(ERROR) Nombre: La variable tiene caracteres no admitidos. [$nombre]<br><br>";
            }
        } else {
            echo "(ERROR) Nombre: La variable tiene el numero incorrecto de caracteres. [$nombre]<br><br>";
        }
    } else {
        echo "(ERROR) Nombre: La variable esta vacia. [$nombre]<br><br>";
    }
} else {
    echo "(ERROR) Nombre: La variable no esta definida.<br><br>";
}


// VALIDACION PRECIO

if (isset($_GET['precio'])) {                           // EXISTE LA VARIABLE?
    $precio = $_GET['precio'];
    if (!empty($precio) | $precio == 0) {               // ESTA VACIA LA VARIABLE? (el 0 cuenta como que no esta vacia)
        if (preg_match("/^[0-9.,]*$/", $precio)) {      // TIENE CARACTERES ADMITIDOS? (falta ajustar el pattern a solo 2 decimales)
            $precio = (float)$precio;                   // CONVIERTO EL STRING A FLOTANTE
            if ($precio >= 0) {                         // EL VALOR ES POSITIVO?
                echo 'Precio: coincide con la validacion. ';
                echo '<pre>' . var_dump($precio) . '<pre><br><br>';
            } else {
                echo "(ERROR) Precio: La variable es negativa. [$precio]<br><br>";
            }
        } else {
            echo "(ERROR) Precio: La variable tiene caracteres no admitidos. [$precio]<br><br>";
        }
    } else {
        echo "(ERROR) Precio: La variable esta vacia. [$precio]<br><br>";
    }
} else {
    echo "(ERROR) Precio: La variable no esta definida.<br><br>";
}


// VALIDACION STOCK

if (isset($_GET['stock'])) {                                // EXISTE LA VARIABLE?
    $stock = $_GET['stock'];
    if (!empty($stock) | $stock === "0") {                     // ESTA VACIA LA VARIABLE? (el 0 cuenta como que no esta vacia)
        if (preg_match("/^[0-9-]*$/", $stock)) {            // TIENE CARACTERES ADMITIDOS? (el stock podia ser negativo, pero sin decimales)
            $stock = (int)$stock;                           // CONVIERTO EL STRING A ENTERO
            echo 'Stock: coincide con la validacion. ';
            echo '<pre>' . var_dump($stock) . '<pre><br><br>';
        } else {
            echo "(ERROR) Stock: La variable tiene caracteres no admitidos. [$stock]<br><br>";
        }
    } else {
        echo "(ERROR) Stock: La variable esta vacia. [$stock]<br><br>";
    }
} else {
    echo "(ERROR) Stock: La variable no esta definida.<br><br>";
}


// VALIDACION CATEGORIA

if (isset($_GET['categoria'])) {                                        // EXISTE LA VARIABLE?
    $categoria = $_GET['categoria'];
    if (!empty($categoria)) {                                           // ESTA VACIA LA VARIABLE? (en este caso el 0 cuenta como vacia)
        if (preg_match("/^[1-5]*$/", $categoria)) {                     // TIENE CARACTERES ADMITIDOS? (en este caso el rango es FIJO de 1 a 5, tal vez lo optimo seria que categoria fuera un array y este rango sea algo como "de 1 a (array.lenght)". Para no tener que modificiar esta validacion cada vez que se agregue una nueva categoria)
            echo "Stock: coincide con la validacion. [$categoria]";
        } else {
            echo "(ERROR) Categoria: La variable tiene caracteres no admitidos. [$categoria]<br><br>";
        }
    } else {
        echo "(ERROR) Categoria: La variable esta vacia. [$categoria]<br><br>";
    }
} else {
    echo "(ERROR) Categoria: La variable no esta definida.<br><br>";
}


// VALIDACION MARCA

if (isset($_GET['marca'])) {                                        // EXISTE LA VARIABLE?
    $marca = $_GET['marca'];
    if (!empty($marca)) {                                           // ESTA VACIA LA VARIABLE? (en este caso el 0 cuenta como vacia)
        if (preg_match("/^[1-6]*$/", $marca)) {                     // TIENE CARACTERES ADMITIDOS? 
            echo "Stock: coincide con la validacion. [$marca]";
        } else {
            echo "(ERROR) Marca: La variable tiene caracteres no admitidos. [$marca]<br><br>";
        }
    } else {
        echo "(ERROR) Marca: La variable esta vacia. [$marca]<br><br>";
    }
} else {
    echo "(ERROR) Marca: La variable no esta definida.<br><br>";
}

function asd ($rango, $campo) {
    if 
}
// VALIDACION GARANTIA

if (isset($_GET['garantia'])) {                                                         // EXISTE LA VARIABLE?
    $garantia = $_GET['garantia'];
    if (!empty($garantia)) {                                                            // ESTA VACIA LA VARIABLE? (en este caso el 0 cuenta como vacia)
        if ($garantia == 6 | $garantia == 12 | $garantia == 18) {                       // TIENE VALORES ADMITIDOS? 
            echo "Garantia: coincide con la validacion. [$garantia]";
        } else {
            echo "(ERROR) Garantia: La variable tiene valores no admitidos. [$garantia]<br><br>";
        }
    } else {
        echo "(ERROR) Garantia: La variable esta vacia. [$garantia]<br><br>";
    }
} else {
    echo "(ERROR) Garantia: La variable no esta definida.<br><br>";
}


// VALIDACION DESCRIPCION

if (isset($_GET['descripcion'])) {                                                      // EXISTE LA VARIABLE?
    $descripcion = $_GET['descripcion'];
    if (!empty($descripcion)) {                                                         // ESTA VACIA LA VARIABLE?
        if (strlen($descripcion) >= 10 && strlen($descripcion) <= 500) {                // TIENE LA CANTIDAD DE CARACTERES ADECUADA?
                echo "Descripcion: Coincide con la validacion. [$descripcion]<br><br>";     
        } else {
            echo "(ERROR) Descripcion: La variable tiene el numero incorrecto de caracteres. [$descripcion]<br><br>";
        }
    } else {
        echo "(ERROR) Descripcion: La variable esta vacia. [$descripcion]<br><br>";
    }
} else {
    echo "(ERROR) Descripcion: La variable no esta definida.<br><br>";
}


// VALIDACION ENVIO SIN CARGO

if (isset($_GET['envio'])) {                                                            // EXISTE LA VARIABLE?
    $envio = $_GET['envio'];
    if (!empty($envio)) {                                                               // ESTA VACIA LA VARIABLE? (en este caso el 0 cuenta como vacia)
        if ($envio == "Si") {                                                           // TIENE VALORES ADMITIDOS? 
            echo "Envio: coincide con la validacion. [$envio]";
        } else {
            echo "(ERROR) Envio: La variable tiene valores no admitidos. [$envio]<br><br>";
        }
    } else {
        echo "(ERROR) Envio: La variable esta vacia. [$envio]<br><br>";
    }
} else {
    echo "(ERROR) Envio: La variable no esta definida.<br><br>";
}


// VALIDACION FOTO????? ES CON POST?? https://www.php.net/manual/en/features.file-upload.post-method.php