<?php 
// Check ob upload in der $_POST GLOBAL einen Wert enthält

if (isset($_POST['upload'])) {
    $file = $_FILES['file'];

// Variablen erhalten File Daten
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
// Die Dateiendung wird mit explode getrennt und in einem array gespeichert
    $fileExt = explode('.', $fileName);
// Im Array wird der Pointer mit "end" an die letzte Stelle gesetzt und mit "strtolower" wird sichergestellt dass es sich um kleinbuchstaben handelt
    $fileActualExt = strtolower(end($fileExt));
// $allowed erhält ein Array an erlaubten Dateiendungen
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
// Die eigentliche Dateendung wird mit in_array auf das Vorhandensein erlaubter Endungen, überprüft
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError ===  0) {
            if ($fileSize < 5000000) {
// File bekommt einen neuen Namen mit uniqid und wird unter "uploads/"
                $fileNameNew = uniqid('', true). "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php#contact");
// Error falls die Datei die maximale Größe überschreitet
            } else {
                echo "Filesize must be under 5mb!";
            }
// Meldung falls ein Error vorliegt
        } else {
            echo "There was an error uploading your file!";
        }
// Error falls die Dateiendung nicht mit den erlaubten übereinstimmt
    } else {
        header("Location: index.php#contact");
        echo "<script> alert('No file or unsupported filetype!') </script>";
    }
}



// Check ob Name, Email und eine Checkbox engetragen wurden. Textarea und Fileupload sind nicht Pflicht!
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['check'])) {
// TExt input in Variablen speichern
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

   
// Textfile öffnen und die aus den Inputfeldern erhaltenen Daten in ein txt file schreiben und anschließend schließen.
    $file = fopen($name . ".txt", 'a');
    fwrite($file, $name . " ");
    fwrite($file, $email . " ");
    fwrite($file, $message);
    
    fclose($file);
}




?>