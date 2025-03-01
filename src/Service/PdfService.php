<?php
namespace App\Service;

use Knp\Snappy\Pdf;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class PdfService
{
    private $snappy;
    private $parameterBag;

    public function __construct(Pdf $snappy, ParameterBagInterface $parameterBag)
    {
        $this->snappy = $snappy;
        $this->parameterBag = $parameterBag;
    }

    public function generateReclamationPdf($reclamation)
    {
        // Récupérer le chemin absolu de l'image
        $imagePath = $this->parameterBag->get('kernel.project_dir') . '/public/img/logo 2.png';
        $imageData = base64_encode(file_get_contents($imagePath));

        // Générer le HTML du PDF
        $html = $this->generateReclamationHtml($reclamation, $imageData);

        // Utiliser wkhtmltopdf pour générer le PDF
        $pdfContent = $this->snappy->getOutputFromHtml($html, [
            'enable-local-file-access' => true, // Autoriser l'accès aux fichiers locaux
            'no-stop-slow-scripts' => true,
            'javascript-delay' => 1000,
            'viewport-size' => '1280x1024',
        ]);

        return $pdfContent;
    }

    private function generateReclamationHtml($reclamation, $base64Image)
    {
        return "
            
        <!DOCTYPE html>
        <html lang='fr'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Détails de la Réclamation</title>
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
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
                <div class='container'>
                    <div class='header'>
                        <img src='data:image/png;base64,{$base64Image}' class='logo' alt='Logo'>
                        <h1>Détails de la Réclamation</h1>
                    </div>
                    <table class='table table-bordered mt-4'>
                        <tr><th>ID :</th><td>{$reclamation->getId()}</td></tr>
                        <tr><th>Titre :</th><td>{$reclamation->getTitre()}</td></tr>
                        <tr><th>Description :</th><td>{$reclamation->getDescription()}</td></tr>
                        <tr><th>Statut :</th><td>{$reclamation->getStatut()}</td></tr>
                        <tr><th>Date :</th><td>{$reclamation->getDateReclamation()->format('Y-m-d')}</td></tr>
                        <tr><th>Réponse :</th><td>{$reclamation->getReponse()->getDescription()}</td></tr>
                        <tr><th>Date de la Réponse :</th><td>{$reclamation->getReponse()->getDateReponse()->format('Y-m-d')}</td></tr>
                    </table>
                    <p class='text-muted text-center'>
                        Généré le : " . (new \DateTime())->format('Y-m-d H:i:s') . "<br>
                        <a href='https://127.0.0.1:8000/reclamation/client/liste' target='_blank'>Cliquez ici pour Voir toutes vos réclamations</a>
                    </p>
                </div>
            </body>
        </html>
        ";
    }
}
