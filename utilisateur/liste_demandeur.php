<?php
session_start();
if (isset($_GET['deconnexion'])) {
    if ($_GET['deconnexion'] == true) {
        session_unset();
        header("location:../index.php");
    }
} else if ($_SESSION['nom_utilisateur'] != "") {
    $user = $_SESSION['nom_utilisateur'];
    // afficher un message



}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Service secretarail</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">


    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body id="page-top">
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Liste des client</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="w-20">N° Compte</th>
                                            <th class="w-10">Nom</th>
                                            <th class="w-25">Prénom</th>
                                            <th class="w-15">Options</th>
                                            
                                       </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../client/php/database.php");
                                        //
                                        //
                                        try {
                                            $con = new PDO($dsn, $mysql_user, $mysql_password);
                                        } catch (PDOException $e) {
                                            exit("connection impossible");
                                        }

                                        // 
                                        // 
                                        $req = "SELECT * FROM client WHERE id";
                                        //
                                        foreach ($con->query($req) as $data) {
                                            echo "<tr>";
                                                echo "<td>".$data["n_compte"]."</td>";
                                                echo "<td>".$data["nom"]."</td>";
                                                echo "<td>".$data["prenom"]."</td>";
                                                echo "<td>";
                                                echo "<a href=' id=".$data['id']."' class='btn btn-success'>Accepter</a>";
                                                echo "<a href='# id=".$data['id']."' class='btn btn-danger'>Rejeter</a>";
                                            echo "</td>";
                                            echo "</tr>";
                                            
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
