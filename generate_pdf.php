<?php
require_once "connect.php";
require_once "fpdf183/fpdf.php";

$result="SELECT * FROM crud ";
$sql= $con->query($result);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('arial','B',12);
while($row = $sql->fetch_object()){
    $id = $row->id;
    $name =$row->name;
    $email =$row->email;
    $mobile =$row->mobile;
    $password =$row->password;
    $pdf->Cell(40,20,$id,1);
    $pdf->Cell(40,20,$name,1);
    $pdf->Cell(40,20,$email,1);
    $pdf->Cell(40,20,$mobile,1);
    $pdf->Cell(40,20,$password,1);
    $pdf->Ln();
}
$pdf->Output();
?>