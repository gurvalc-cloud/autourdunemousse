# Autour d'une Mousse — Clone WordPress

Ce dossier contient tout ce qu'il faut pour reconstituer **autourdunemousse.fr** sur un WordPress vierge, avec le même rendu parchemin (Special Elite + Courier Prime, fond `#f6eee3`, accent `#DBA472`).

## Contenu du dossier

```
site web/
├── autour-dune-mousse/            ← Le thème WordPress complet
│   ├── style.css                  (en-tête du thème + styles du parchemin)
│   ├── functions.php              (chargement des Google Fonts, supports WP)
│   ├── header.php
│   ├── footer.php
│   ├── index.php
│   ├── page.php
│   └── front-page.php             (manifeste complet — affiché même sans import)
├── autour-dune-mousse-content.xml (fichier d'import WordPress — pages Accueil + Contact)
└── README-INSTALLATION.md         (ce fichier)
```

Les pages de vente n'ont **pas** été clonées, comme demandé.

---

## Installation pas-à-pas

### 1. Installer WordPress

Hébergeur recommandé pour un site simple et francophone : **Infomaniak**, **o2switch** ou **Hostinger**. Tous proposent l'installation WordPress en un clic. Compte tenu du domaine `.fr` existant, pointer les DNS vers le nouvel hébergeur une fois le site prêt.

Si tu préfères tester en local d'abord : **Local by Flywheel** (gratuit, macOS/Windows).

### 2. Installer le thème

Deux options :

**A. Via l'interface WordPress**
1. Zipper le dossier `autour-dune-mousse/` → `autour-dune-mousse.zip`
2. Dans WP Admin → **Apparence → Thèmes → Ajouter → Téléverser un thème**
3. Sélectionner le zip, installer, **Activer**

**B. Via FTP/SFTP**
1. Copier le dossier `autour-dune-mousse/` dans `wp-content/themes/`
2. WP Admin → **Apparence → Thèmes → Activer "Autour d'une Mousse"**

### 3. Importer le contenu

1. WP Admin → **Outils → Importer**
2. Sous "WordPress", cliquer **Installer maintenant** puis **Lancer l'importateur**
3. Téléverser `autour-dune-mousse-content.xml`
4. Assigner l'auteur à ton utilisateur, cocher **"Télécharger et importer les fichiers joints"** (pour récupérer les 3 images hébergées chez Zyro)
5. Valider

### 4. Définir la page d'accueil

1. WP Admin → **Réglages → Lecture**
2. "Votre page d'accueil affiche" → **Une page statique**
3. Page d'accueil → **Autour d'une Mousse**
4. Enregistrer

### 5. Nettoyer

1. WP Admin → **Réglages → Permaliens** → cocher **Nom de l'article** → Enregistrer
2. **Apparence → Personnaliser** → retirer le titre/slogan si tu ne veux rien afficher en haut (le thème n'utilise pas de header visible par défaut, seulement les styles du parchemin)
3. Supprimer la page "Exemple" et l'article "Bonjour tout le monde" créés par WP.

---

## Comportement de secours

Le fichier `front-page.php` contient le manifeste **en dur**. Ça signifie que **même si tu ne fais pas l'import XML**, dès que tu actives le thème, la page d'accueil affiche le parchemin complet. L'import XML sert uniquement à pouvoir éditer le contenu depuis l'éditeur WordPress (Gutenberg).

---

## Personnalisation future

- Couleurs : tout est dans les variables `--fond`, `--texte`, `--accent`, `--secondaire` en haut de `style.css`.
- Polices : importées dans `functions.php` via Google Fonts (`Courier Prime` + `Special Elite`).
- Largeur max du parchemin : `body { max-width: 680px }` dans `style.css`.
- Footer : un emplacement de menu "Pied de page" est enregistré — tu peux créer un menu dans **Apparence → Menus** et l'assigner. Tant qu'il est vide, le footer n'affiche que la date de dernière modif.

---

## À faire côté utilisateur (je ne peux pas le faire pour toi)

- Acheter l'hébergement et installer WordPress.
- Pointer le domaine `autourdunemousse.fr` vers le nouvel hébergeur (DNS).
- Téléverser/activer le thème + importer le XML (étapes 2 à 5 ci-dessus).
- Remplacer les 3 images (hébergées chez Zyro/zyrosite) par des copies sur ta propre médiathèque si tu veux être autonome du prestataire précédent.
