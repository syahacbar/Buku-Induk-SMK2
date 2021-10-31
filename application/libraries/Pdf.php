<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }

    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logo_example.jpg';
        $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        $logoX = 7; // 186mm. The logo will be displayed on the right side close to the border of the page
        $logoFileName = base_url('resources/admintheme/assets/img/logo-footer-cetak.png');
        $logoWidth = 40; // 15mm
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        $this->Image($logoFileName, $logoX, $this->GetY(), $logoWidth);
        $footertext = '
        <table border="0" width="100%">
        <tr><td align="left"></td>
            <td align="center"></td>
            <td align="right">&copy; SI-SIKAT 2021</td>
        </tr>
        <tr><td align="left"></td>
            <td align="center">Page '.$this->getAliasNumPage().' of '.$this->getAliasNbPages().'</td>
            <td align="right">Print date: '.date("d-m-Y H:i:s").'</td>
        </tr>
        </table>';
        $this->writeHTML($footertext); 

    }
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */