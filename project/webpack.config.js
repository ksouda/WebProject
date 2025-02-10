const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/') // Dossier de sortie pour les assets compilés
    .setPublicPath('/build') // Chemin public pour les assets
    .addEntry('app', './assets/app.js') // Point d'entrée principal
    .enableSingleRuntimeChunk() // Un seul fichier runtime.js
    .cleanupOutputBeforeBuild() // Nettoie le dossier de sortie avant chaque build
    .enableBuildNotifications() // Notifications lors de la compilation
    .enableSourceMaps(!Encore.isProduction()) // Active les source maps en mode développement
    .enableVersioning(Encore.isProduction()) // Ajoute un hash aux noms de fichiers en production
    .enableSassLoader() // Active le support pour SASS/SCSS
    .enablePostCssLoader() // Active le support pour PostCSS
    .autoProvidejQuery(); // Fournit jQuery automatiquement

module.exports = Encore.getWebpackConfig();