<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $subject = $_POST["subject"];
  $mailFrom = $_POST["mail"];
  $message = $_POST["message"];

  $mailTo = "info@prodmet.com";
  $headers = "De: ".$mailFrom;
  $txt = "Has recibido un mail de ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  echo "<script>alert('El formulario ha sido enviado exitosamente'); window.location.href='contactenos.php';</script>";
  // header("Location: contactenos.php?mailsend");
}
?>