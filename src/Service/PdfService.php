<?php
namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{
    public function generateReclamationPdf($reclamation)
    {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf = new Dompdf($options);

        $html = $this->getReclamationHtml($reclamation);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        return $dompdf->output();
    }

    private function getReclamationHtml($reclamation)
    {
        // Chemin du logo
        $logoPath = __DIR__ . '/../../public/img/logo 2.png'; // Ajuste selon ton projet

        // Vérifie si le fichier existe
        if (file_exists($logoPath)) {
            $logoData = base64_encode(file_get_contents($logoPath));
            $logoSrc = 'data:image/png;base64,' . $logoData;
        } else {
            $logoSrc = ''; // Pas de logo si fichier manquant
        }

        return '
        <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; font-size: 12px; line-height: 1.6; text-align: center; }
                    h1 { color: white; font-size: 18px; margin-bottom: 20px; text-align: center; }
                    .header { background-color: #8B4513; color: white; padding: 10px; }
                    .logo { width: 100px; margin-bottom: 10px; }
                    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                    th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
                    th { background-color: #f2f2f2; }
                    .footer { text-align: center; font-size: 10px; margin-top: 20px; }
                </style>
            </head>
            <body>
                <div class="header">
                    ' . ($logoSrc ? '<img src="' . $logoSrc . '" class="logo" />' : '') . '
                    <h1>Détails de la Réclamation</h1>
                </div>
                <table>
                    <tr><th>ID :</th><td>' . $reclamation->getId() . '</td></tr>
                    <tr><th>Titre :</th><td>' . $reclamation->getTitre() . '</td></tr>
                    <tr><th>Description :</th><td>' . $reclamation->getDescription() . '</td></tr>
                    <tr><th>Statut :</th><td>' . $reclamation->getStatut() . '</td></tr>
                    <tr><th>Date :</th><td>' . $reclamation->getDateReclamation()->format('Y-m-d') . '</td></tr>
                    <tr><th>Réponse :</th><td>' . ($reclamation->getReponse() ? $reclamation->getReponse()->getDescription() : 'Pas encore répondu') . '</td></tr>
                    <tr><th>Date de la réponse :</th><td>' . ($reclamation->getReponse() ? $reclamation->getReponse()->getDateReponse()->format('Y-m-d') : 'Pas encore répondu') . '</td></tr>
                </table>
                <div class="footer">
                    Généré le : ' . date("Y-m-d H:i:s") . '<br>
                    <a href="https://127.0.0.1:8000/reclamation/client/liste" target="_blank" style="color: blue; text-decoration: underline;">
                    Voir toutes les réclamations
                    </a>
                </div>
            </body>
        </html>';
    }
}


