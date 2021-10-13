<?php
echo '<pre>';
print_r($_POST); // el $_POST seria (parecido a?) un array formado con los datos enviados del form
echo '<pre>';

echo '<pre>';
var_dump($_POST);
echo '<pre>';

echo 'VALIDACIONES:<br><br>';

// VALIDACION NOMBRE prueba
//            if (preg_match("/^[a-zA-z0-9 ÁÉÍÓÚáéíóúÑñ()-!*+]*$/", $nombre))
if (isset($_POST['nombre'])) {                                                       // EXISTE LA VARIABLE?
    $nombre = $_POST['nombre'];
    if (!empty($nombre)) {                                                          // ESTA VACIA LA VARIABLE?
        if (strlen($nombre) >= 3 && strlen($nombre) <= 40) {                        // TIENE LA CANTIDAD DE CARACTERES ADECUADA?
            echo "Nombre: Coincide con la validacion. [$nombre]<br><br>";       // TODOS LOS PARAMETROS COINCIDEN
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

if (isset($_POST['precio'])) {                           // EXISTE LA VARIABLE?
    $precio = $_POST['precio'];
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

if (isset($_POST['stock'])) {                                // EXISTE LA VARIABLE?
    $stock = $_POST['stock'];
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

if (isset($_POST['categoria'])) {                                        // EXISTE LA VARIABLE?
    $categoria = $_POST['categoria'];
    if (!empty($categoria)) {                                           // ESTA VACIA LA VARIABLE? (en este caso el 0 cuenta como vacia)
        if (preg_match("/^[1-5]*$/", $categoria)) {                     // TIENE CARACTERES ADMITIDOS? (en este caso el rango es FIJO de 1 a 5, tal vez lo optimo seria que categoria fuera un array y este rango sea algo como "de 1 a (array.lenght)". Para no tener que modificiar esta validacion cada vez que se agregue una nueva categoria)
            echo "Stock: coincide con la validacion. [$categoria]<br><br>";
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

if (isset($_POST['marca'])) {                                        // EXISTE LA VARIABLE?
    $marca = $_POST['marca'];
    if (!empty($marca)) {                                           // ESTA VACIA LA VARIABLE? (en este caso el 0 cuenta como vacia)
        if (preg_match("/^[1-6]*$/", $marca)) {                     // TIENE CARACTERES ADMITIDOS? 
            echo "Stock: coincide con la validacion. [$marca]<br><br>";
        } else {
            echo "(ERROR) Marca: La variable tiene caracteres no admitidos. [$marca]<br><br>";
        }
    } else {
        echo "(ERROR) Marca: La variable esta vacia. [$marca]<br><br>";
    }
} else {
    echo "(ERROR) Marca: La variable no esta definida.<br><br>";
}

// function asd ($rango, $campo) {
//     if 
// }
// VALIDACION GARANTIA

if (isset($_POST['garantia'])) {                                                         // EXISTE LA VARIABLE?
    $garantia = $_POST['garantia'];
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

if (isset($_POST['descripcion'])) {                                                      // EXISTE LA VARIABLE?
    $descripcion = $_POST['descripcion'];
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

if (isset($_POST['envio'])) {                                                            // EXISTE LA VARIABLE?
    $envio = $_POST['envio'];
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


// VALIDACION FOTO


if (file_exists($_FILES['foto']['tmp_name'])) { // En este caso no trabajo en el campo 'foto' con un isset() o empty() como haria en el resto de las validaciones ($_POST['envio'], 'descripcion' etc.), en su lugar chequeo si el archivo existe con la funcion file_exists() con uno de los keys dentro del archivo $_FILES['foto']

    $extensionesPermitidas = array("png", "jpg", "jpeg", "bmp"); // Creo un array con las extensiones permitidas

    $imgExtension = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION); // la funcion pathinfo() me brinda informacion basica como el nombre y extension, en este caso solo retorna la extension

    if (in_array($imgExtension, $extensionesPermitidas)) {
        if (($_FILES["foto"]["size"] < 2000000)) {
            $imgInfo = getimagesize($_FILES["foto"]["tmp_name"]); // la funcion getimagesize() arroja el tamaño en pixels, ademas de otra info en forma de array.
            $imgAncho = $imgInfo[0];
            $imgAlto = $imgInfo[1];
            if ($imgAncho < 300 && $imgAlto < 200) {
                $rutaDeGuardado = "imagen cargada/" . basename($_FILES["foto"]["name"]);
                if (move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaDeGuardado)) {
                    echo "Imagen: Se cargo exitosamente!<br><br>";
                } else {
                    echo "(ERROR) Imagen: Hubo un error en la carga de la imagen.<br><br>";
                }
            } else {
                echo "(ERROR) Imagen: La imagen excede la dimension maxima de 300x200.<br><br>";
            }
        } else {
            echo "(ERROR) Imagen: El archivo excede el tamaño maximo de 2MB.<br><br>";
        }
    } else {
        echo "(ERROR) Imagen: La extension del archivo (.$imgExtension) no esta permitida.<br><br>";
    }
} else {
    echo "(ERROR) Imagen: El archivo no existe.<br><br>";
}

echo "<hr>INFORMACION DEL ARCHIVO:<br><br>";
var_dump($_FILES);




/*como es la validacion para multiples archivos? 
conviene hacer las validaciones chequeando lo negativo (como el ejemplo de abajo)? 
ver donde conviene implementar funciones*/



/*<?php
if (isset($_POST["upload"])) {
    // Get Image Dimension
    $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valid images. Only PNG and JPEG are allowed."
        );
        echo $result;
    }    // Validate image file size
    else if (($_FILES["file-input"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 2MB"
        );
    }    // Validate image file dimension
    else if ($width > "300" || $height > "200") {
        $response = array(
            "type" => "error",
            "message" => "Image dimension should be within 300X200"
        );
    } else {
        $target = "image/" . basename($_FILES["file-input"]["name"]);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
    }
}
?>*/