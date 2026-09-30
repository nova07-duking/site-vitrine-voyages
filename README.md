# Voyages ESIITECH

Site vitrine de démonstration réalisé avec Laravel 13. Il présente un catalogue d'inspirations de voyage et un espace voyageur avec inscription et connexion. Il ne propose pas de réservation en ligne et n'est pas connecté à un WAF.

## Prérequis

- PHP 8.3 ou plus récent et Composer 2
- Node.js 24 et npm
- Extension PHP SQLite activée

## Installation locale (PowerShell)

```powershell
composer install
npm ci
Copy-Item .env.example .env
New-Item database/database.sqlite -ItemType File -Force
php artisan key:generate
php artisan migrate
npm run build
php artisan serve
```

Le site est ensuite accessible à l'adresse indiquée par `php artisan serve`. Le fichier `.env` et la base SQLite locale sont exclus de Git.

## Vérification

```powershell
php artisan test
npm run build
```

## Avant une mise en ligne

Configurer une clé d'application propre à l'environnement, `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL` avec le domaine HTTPS et des cookies de session sécurisés. Conserver la base SQLite sur un stockage persistant et prévoir des sauvegardes. Vérifier les informations légales et la politique de confidentialité avant de collecter des données de vrais visiteurs.

Les comptes sont ouverts à l'inscription pour les besoins de la démonstration. Aucune offre commerciale, réservation ou donnée de trafic WAF réelle n'est fournie.
