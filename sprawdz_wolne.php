<?php
  require 'header.php';
  require 'dbconnection.php';

  $sql="SELECT klienci.id_klienta, rezerwacje.id_ksiazki1,rezerwacje.id_ksiazki2,rezerwacje.id_ksiazki3,rezerwacje.id_ksiazki4,rezerwacje.id_ksiazki5,rezerwacje.id_ksiazki6 FROM rezerwacje INNER JOIN  klienci ON klienci.id_klienta=rezerwacje.id_klienta INNER JOIN konta ON konta.id_klienta=klienci.id_klienta WHERE konta.login='".$_SESSION['user']."'";
  $_SESSION['book']=$_POST['id'];
  if($result = mysqli_query($conn, $sql)){
      while($row = mysqli_fetch_array($result)){
        $_SESSION['id_klienta']=$row['id_klienta'];
        if($row['id_ksiazki1']==0){
          $_SESSION['free']=1;
          header('Location: zarezerwuj_ksiazke.php');
        }
        else if($row['id_ksiazki2']==0){
          $_SESSION['free']=2;
          header('Location: zarezerwuj_ksiazke.php');
        }
        else if($row['id_ksiazki3']==0){
          $_SESSION['free']=3;
          header('Location: zarezerwuj_ksiazke.php');
        }
        else if($row['id_ksiazki4']==0){
          $_SESSION['free']=4;
          header('Location: zarezerwuj_ksiazke.php');
        }
        else if($row['id_ksiazki5']==0){
          $_SESSION['free']=5;
          header('Location: zarezerwuj_ksiazke.php');
        }

        else if($row['id_ksiazki6']==0){
          $_SESSION['free']=6;
          header('Location: zarezerwuj_ksiazke.php');
        }
        else{
          echo "Nie można wypożyczyć książki";
        }
      }
    }

require 'footer.php';
?>
