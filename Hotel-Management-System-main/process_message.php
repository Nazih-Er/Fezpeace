<?php
    include 'config.php';

    if (isset($_POST['submit_message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $remarks = $_POST['remarks'];

        // Requête d'insertion dans la base de données
        $sql = "INSERT INTO messages (name, email, country, remarks) VALUES ('$name', '$email', '$country', '$remarks')";
        $result = $conn->query($sql);

        if ($result === TRUE) {
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