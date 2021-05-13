<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $file = $_POST["file"];
  $mailFrom = $_POST["mail"];
  $message = $_POST["message"];

  $mailTo = "info@prodmet.com";
  $headers = "De: ".$mailFrom;
  $txt = "Has recibido un mail de ".$name.".\n\n".$message;

  mail($mailTo, $file, $txt, $headers);
  echo "<script>alert('El formulario ha sido enviado exitosamente'); window.location.href='index.php';</script>";
  // header("Location: index.php?mailsend");
}
?>