<?php
//include("security.php");
include("dbconfig.php");
session_start();    

if(isset($_POST['employeebtn']))
{
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom'];
    $position = $_POST['position']; 
    $departement = $_POST['departement']; 
    $salaire = $_POST['salaire']; 
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $tel = $_POST['tel']; 
    $email = $_POST['email']; 
    $date_naissance = $_POST['date_naissance']; 
    $sexe = $_POST["sexe"]; 
    $cin = $_POST['cin']; 
    $rib = $_POST['rib'];
    $id_rh_agent = 1 ; 
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];


    $email_query = "SELECT * FROM employe WHERE email = '$email' AND cin = '$email' ";
    $email_cin_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_cin_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: gerer_empl.php');  
    }
    else
    {
            $query = "INSERT INTO contrat(date_debut , date_fin , position) VALUES ('$date_debut' , '$date_fin' , '$position')" ; 
            $query_run1 = mysqli_query($connection, $query);
            $query2 = "SELECT id FROM contrat WHERE date_debut = '$date_debut' AND date_fin = '$date_fin' AND position = '$position' LIMIT 1"; 
            $query2_run = mysqli_query($connection, $query2);
            if(mysqli_num_rows($query2_run) > 0){
                $row = mysqli_fetch_assoc($query2_run) ; 
                $id_contrat = $row['id'] ; 
            } 
            $query = "INSERT INTO employe (nom,prenom,position , departement , salaire , username , password , tel , email , date_naissance ,sexe, cin , rib , contrat_id , rh_agent_id ) 
            VALUES ('$nom','$prenom','$position' , '$departement' , '$salaire' , '$username' , 
            '$password' , '$tel' , '$email' , '$date_naissance' , '$sexe' , '$cin' , '$rib' ,'$id_contrat' , '$id_rh_agent' )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // "Saved";
                $_SESSION['status'] = "Employee Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: gerer_empl.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: gerer_empl.php');  
            }
    }

}
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $nom = $_POST['edit_nom']; 
    $prenom = $_POST['edit_prenom'];
    $position = $_POST['edit_position']; 
    $departement = $_POST['edit_departement']; 
    $salaire = $_POST['edit_salaire']; 
    $username = $_POST['edit_username']; 
    $password = $_POST['edit_password'];
    $tel = $_POST['edit_tel']; 
    $email = $_POST['edit_email']; 
    $date_naissance = $_POST['edit_date_naissance']; 
    $sexe = $_POST["edit_sexe"]; 
    $cin = $_POST['edit_cin']; 
    $rib = $_POST['edit_rib'];

    // $conn = mysqli_connect('localhost','root','','f_g_club');
    $query = "UPDATE employe SET nom='$nom' , prenom = '$prenom',position = '$position',departement = '$departement',salaire = '$salaire',
    username = '$username',password = '$password',tel = '$tel',email = '$email',date_naissance = '$date_naissance',sexe = '$sexe',
    cin = '$cin',rib = '$rib' WHERE id = '$id'";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: gerer_empl.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: gerer_empl.php'); 
    }
}




if(isset($_POST['delete_btn_reg']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM employe WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: gerer_empl.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: gerer_empl.php'); 
    }    
}


if(isset($_POST['accept_btn']))
{
    $id = $_POST['accept_id'];
    $accept = "Accepté" ; 
    $query = "UPDATE demande SET  statut ='$accept' WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query); 
    // $query = "DELETE FROM demande WHERE id = '$id' " ; 
    // $query_run = mysqli_query($connection, $query); 
    if($query_run)
    {
        $_SESSION['status'] = "La demande été Accépté";
        $_SESSION['status_code'] = "success";
        header('Location: gerer_dem.php'); 
    }
    else
    {
        $_SESSION['status'] = "Erreur ";       
        $_SESSION['status_code'] = "error";
        header('Location: gerer_dem.php'); 
    } 

}


if(isset($_POST['refuse_btn']))
{
    $id = $_POST['refuse_id'];
    $refuser = "Refusé" ; 
    $query = "UPDATE demande SET  statut ='$refuser' WHERE id ='$id'";
    $query_run = mysqli_query($connection, $query); 
    // $query = "DELETE FROM demande WHERE id = '$id' " ; 
    // $query_run = mysqli_query($connection, $query); 
    if($query_run)
    {
        $_SESSION['status'] = "La demande été Refusé";
        $_SESSION['status_code'] = "success";
        header('Location: gerer_dem.php'); 
    }
    else
    {
        $_SESSION['status'] = "Erreur ";       
        $_SESSION['status_code'] = "error";
        header('Location: gerer_dem.php'); 
    } 

}







