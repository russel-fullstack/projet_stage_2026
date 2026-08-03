# 🎓 Projet Stage 2026 - Plateforme d'Apprentissage (LMS)

Bienvenue dans le dépôt du **Projet Stage 2026**, une plateforme d'apprentissage en ligne (LMS - Learning Management System) moderne, performante et sécurisée. Conçue avec les technologies les plus récentes, cette application permet d'organiser des parcours d'études, de dispenser des cours interactifs et de suivre la progression des apprenants de manière intuitive.

---

## 🏛️ Architecture et Structure des Cours

La plateforme repose sur une structure d'apprentissage hautement structurée et hiérarchique à 5 niveaux, ce qui permet de classifier les apprentissages avec une grande précision :

1. **📁 Programmes (`Program`)** : Les grands domaines d'études ou filières générales (ex: *Développement Web*, *Marketing Digital*).
2. **🏷️ Spécialités (`Specialty`)** : Les options de spécialisation au sein d'un programme (ex: *Backend PHP*, *Frontend React*).
3. **📖 Cours (`Course`)** : Les sujets d'apprentissage spécifiques, dotés d'une description, d'un statut de complétion et d'une image de couverture stockée de manière sécurisée.
4. **🔖 Chapitres (`Chapiter`)** : Les modules ou sections ordonnés pour organiser la progression d'un cours.
5. **📝 Leçons (`Lesson`)** : Le contenu pédagogique final de chaque chapitre, incluant :
   - Du texte riche (rédigé et formaté via **CKEditor**).
   - Un lecteur de cours vidéo interactif (intégrant **Plyr** pour une expérience de visionnage haut de gamme).

---

## ✨ Fonctionnalités Clés

### 👨‍🎓 Espace Apprenant / Étudiant
- **Tableau de bord personnalisé (`user-dashboard`)** : Suivi en temps réel de la progression globale.
- **Accès structuré aux leçons** : Navigation fluide au sein des chapitres et lecture de vidéos interactive.
- **Suivi des certifications** : Visualisation des compétences acquises et des certifications obtenues.
- **Système de Quiz** : Évaluation des acquis à la fin des modules.
- **Suggestion de Cours** : Outil permettant aux apprenants de proposer de nouveaux sujets de formation.

### 👑 Espace Administration (`admin`)
- **Tableau de bord analytique** : Statistiques globales sur les inscriptions, le taux de complétion et l'engagement des élèves.
- **Rapports détaillés (`rapports.index`)** : Génération de synthèses de données avec intégration de graphiques dynamiques (**Chart.js**).
- **Assistant de Création de Cours (`CourseWizard`)** : Un parcours guidé (wizard) multi-étapes pour faciliter la publication de nouveaux cours par l'administrateur.
- **Gestion des Ressources** : CRUD complet des utilisateurs, programmes, spécialités, cours, chapitres et leçons.

### 🔒 Sécurité & Authentification Moderne
- **Laravel Fortify** : Gestion robuste des flux d'authentification (connexion, inscription, réinitialisation de mot de passe).
- **Double Authentification (2FA)** : Sécurité accrue des comptes utilisateurs.
- **Authentification sans mot de passe (Passkeys)** : Support des technologies de sécurité biométrique/matérielle de pointe via `@laravel/passkeys`.
- **Contrôle d'accès par rôles (Middleware)** : Distinction stricte entre les privilèges administrateur (`admin`) et les privilèges étudiant (`user`).

### 📦 Gestion du Stockage (MinIO / S3)
- Intégration d'un service de stockage objet S3/MinIO via le composant `MinioService` pour stocker, récupérer, et supprimer les fichiers (images de couverture de cours, etc.) de manière évolutive et sécurisée.

---

## 🛠️ Stack Technique

Cette application utilise une stack moderne et ultra-performante combinant le meilleur de Laravel et de l'écosystème web moderne :

* **Backend** : [Laravel 13.x](https://laravel.com) (Version majeure ultra-récente) & **PHP 8.3+**
* **Frontend** : **Tailwind CSS v4.0** (la dernière version avec compilation instantanée intégrée à Vite) et **Alpine.js**
* **Dynamicité & Rapidité** : **Hotwire Turbo** (Turbo Drive) pour des transitions de pages instantanées sans l'overhead et la complexité d'un framework SPA (React/Vue).
* **Base de données** : SQLite (par défaut en local) ou MySQL/PostgreSQL.
* **Composants d'interface** :
  - [Plyr](https://plyr.io/) : Lecteur multimédia moderne et personnalisable pour les vidéos de cours.
  - [CKEditor](https://ckeditor.com/) : Éditeur de texte enrichi pour rédiger les leçons côté administration.
  - [Chart.js](https://www.chartjs.org/) : Pour les graphiques interactifs des rapports d'activité.
* **Qualité de code & Tests** :
  - **Pest PHP** : Framework de test élégant et moderne pour les tests unitaires et d'intégration.
  - **Laravel Pint** : Formateur de code PHP automatique pour garantir des standards de code élevés.
  - **Laravel Pail** : Outil interactif pour monitorer les logs d'application en temps réel.

---

## 🚀 Installation & Configuration Locale

Suivez ces étapes pour installer et exécuter l'application sur votre machine de développement :

### 📋 Prérequis
Assurez-vous d'avoir installé sur votre système :
- **PHP 8.3+** (avec les extensions requises pour Laravel)
- **Composer** (Gestionnaire de paquets PHP)
- **Node.js** (v18 ou supérieur) & **NPM**

### 1. Cloner le projet
```bash
git clone <url-du-depot>
cd projet_stage_2026
```

### 2. Configurer l'environnement (`.env`)
Copiez le fichier d'exemple et renseignez vos paramètres locaux (base de données, stockage, etc.) :
```bash
cp .env.example .env
```
*Note : Par défaut, la base de données peut utiliser un fichier SQLite local ou une instance MySQL en fonction de vos besoins.*

### 3. Installation automatisée
Pour simplifier l'installation, un script Composer personnalisé a été mis en place. Exécutez simplement :
```bash
composer run setup
```
Ce script exécutera automatiquement les étapes suivantes :
1. Installation des dépendances PHP (`composer install`).
2. Copie du fichier `.env` (si non existant).
3. Génération de la clé d'application (`php artisan key:generate`).
4. Exécution forcée des migrations de la base de données (`php artisan migrate --force`).
5. Installation des dépendances JavaScript (`npm install --ignore-scripts`).
6. Compilation initiale des assets frontend (`npm run build`).

---

## 💻 Lancement de l'environnement de développement

Grâce au paquet `concurrently` intégré, vous pouvez démarrer l'ensemble des services nécessaires au projet (Serveur web PHP, compilateur d'assets Vite, worker pour les files d'attente, moniteur de logs Pail) en une **seule** commande simple :

```bash
composer run dev
```

Cette commande démarre :
- **Serveur web local** : accessible par défaut sur `http://localhost:8000`
- **Queue Worker** : écoute de la file d'attente pour le traitement des jobs en arrière-plan.
- **Vite** : compilation à chaud des styles Tailwind CSS v4 et scripts Alpine.js.
- **Laravel Pail** : affichage en temps réel des erreurs et logs applicatifs.

---

## 🧪 Tests & Qualité du Code

### Lancer les tests unitaires et fonctionnels
L'application utilise **Pest** pour valider son comportement. Vous pouvez lancer la suite de tests via :

```bash
composer run test
```
*(ou en utilisant directement `vendor/bin/pest`)*

### Formatage du code (Standards)
Pour formater automatiquement votre code selon les règles d'écriture du projet :
```bash
vendor/bin/pint
```

---

## ☁️ Configuration du stockage S3 / MinIO

La plateforme utilise le disque `s3` par défaut pour la gestion des médias de cours (via `MinioService.php`). Pour configurer votre instance MinIO locale ou vos buckets AWS S3, configurez ces variables dans votre fichier `.env` :

```env
FILESYSTEM_DISK=s3

AWS_ACCESS_KEY_ID=votre_cle_acces
AWS_SECRET_ACCESS_KEY=votre_cle_secrete
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=nom-du-bucket
AWS_ENDPOINT=http://127.0.0.1:9000  # Adresse locale de votre serveur MinIO
AWS_USE_PATH_STYLE_ENDPOINT=true     # Requis pour MinIO
```

---

## 📝 Licence
Ce projet est développé dans le cadre d'un stage et est sous licence propriétaire.
