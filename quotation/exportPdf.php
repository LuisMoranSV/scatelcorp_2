<?php

    require('../assets/fpdf/fpdf.php');

    $quotation_name = $_POST["quotation_id"];
    $quotation_version = $_POST["quotation_version"];
    $quotation_proyect = $_POST["quotation_proyect"];
    $quotation_valid = $_POST["quotation_valid"];
    $quotation_payment = $_POST["quotation_payment"];
    $quotation_delivery = $_POST["quotation_deliverytime"];
    $quotation_conditions = $_POST["quotation_conditions"];
    $quotation_warranty = $_POST["quotation_warranty"];

        
    class myPDF extends FPDF{

        function header(){
            $this->SetFont('Arial', 'B', 14);
            $this->Cell(180, 5, 'Cotizacion de Servicio', 0, 0, 'C');
            $this->Ln();
            $this->SetFont('Arial', '', 12);
            $this->Cell(180, 5, 'SCATELCORP', 0, 0, 'C');
            $this->Ln(30);
            $this->Line(10, 25, 200, 25);
            $this->Line(10, 30, 200, 30);
        }
        
        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial', '', 8);
            $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }

        function Form(){

            $quotation_name = $_POST["quotation_id"];
            $quotation_version = $_POST["quotation_version"];
            $quotation_proyect = $_POST["quotation_proyect"];
            $quotation_valid = $_POST["quotation_valid"];
            $quotation_delivery = $_POST["quotation_deliverytime"];
            $quotation_conditions = $_POST["quotation_conditions"];
            $quotation_warranty = $_POST["quotation_warranty"];

            switch ($_POST["quotation_payment"]) {
                case 1:
                    $quotation_payment = 'Efectivo';
                    break;

                case 2:
                    $quotation_payment = 'Deposito';
                    break;
                
                case 3:
                    $quotation_payment = 'Cheque';
                    break;
                
                default:
                    $quotation_payment = 'Efectivo';
                    break;
            }

            $this->SetFont('Arial', '', 10);
            $this->Cell(50, 8, 'Nombre de la Cotizacion:', 1, 0, 'L');
            $this->Cell(50, 8, $quotation_name, 1, 0, 'C');
            $this->Cell(50, 8, 'Version de la Cotizacion:', 1, 0, 'L');
            $this->Cell(40, 8, $quotation_version, 1, 0, 'C');
            $this->Ln(15);
            $this->Cell(80, 10, 'Proyecto:', 1, 0, 'L');
            $this->Cell(110, 10, $quotation_proyect, 1, 0, 'C');
            $this->Ln(12);
            $this->Cell(80, 10, 'Validez de la Cotizacion:', 1, 0, 'L');
            $this->Cell(110, 10, $quotation_valid . ' dias', 1, 0, 'C');
            $this->Ln(12);
            $this->Cell(80, 10, 'Forma de Pago:', 1, 0, 'L');
            $this->Cell(110, 10, $quotation_payment, 1, 0, 'C');
            $this->Ln(12);
            $this->Cell(80, 10, 'Tiempo de entrega:', 1, 0, 'L');
            $this->Cell(110, 10, $quotation_delivery . ' dias', 1, 0, 'C');
            $this->Ln(30);

            $this->Line(10, 115, 200, 115);

            $this->Cell(80, 10, 'Condiciones:', 1, 0, 'L');
            $this->Cell(110, 10, $quotation_conditions, 1, 0, 'C');
            $this->Ln(12);
            $this->Cell(80, 10, 'Garantias:', 1, 0, 'L');
            $this->Cell(110, 10, $quotation_warranty, 1, 0, 'C');
            $this->Ln(12);
        }
    }
    
    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('P', 'A4', 0);
    $pdf->Form();
    $pdf->Output();
