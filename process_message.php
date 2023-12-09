<?php
if (isset($_POST['submit_message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $remarks = $_POST['remarks'];

    // Effectuer les opérations nécessaires, tels que l'enregistrement des données dans la base de données ou l'envoi d'e-mails.

    // Exemple : Enregistrement des données dans la base de données
    $sql = "INSERT INTO messages (name, email, country, remarks) VALUES ('$name', '$email', '$country', '$remarks')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>swal({
            title: 'Message sent successfully',
            icon: 'success',
        });
        </script>";
    } else {
        echo "<script>swal({
            title: 'Something went wrong',
            icon: 'error',
        });
        </script>";
    }
}
?>