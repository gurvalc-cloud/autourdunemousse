# Prompt à coller dans Claude in Chrome

> Copie tout le bloc ci-dessous dans Claude in Chrome (extension Chrome). Il va naviguer sur autourdunemousse.fr, extraire proprement le contenu des 3 pages, et te renvoyer du **code WordPress / Gutenberg directement importable**.

---

Tu es chargé d'extraire et de convertir 3 pages du site https://autourdunemousse.fr en contenu WordPress prêt à coller dans l'éditeur Gutenberg. Voici exactement ce que tu dois faire, étape par étape.

## Pages à extraire (dans cet ordre)

1. https://autourdunemousse.fr/autour-dune-mousse-episode-ii
2. https://autourdunemousse.fr/autour-dune-mousse-a-la-source-episode-3
3. https://autourdunemousse.fr/constitution

## Pour chaque page

1. **Navigue** vers l'URL (`navigate`).
2. Attends que la page charge (`wait` 2 secondes si besoin).
3. Utilise `get_page_text` pour extraire tout le texte principal.
4. Utilise `javascript_tool` pour récupérer :
   - Le `<title>` de la page
   - L'URL de toutes les images : `Array.from(document.images).map(i => ({src: i.src, alt: i.alt}))`
   - L'URL du player audio / iframe si présent : `Array.from(document.querySelectorAll('iframe, audio, [data-src*="mp3"], a[href*=".mp3"], a[href*="spotify"], a[href*="anchor"], a[href*="ausha"]')).map(e => ({tag: e.tagName, src: e.src || e.href}))`
5. Note la hiérarchie des titres (H1, H2, H3) telle qu'elle apparaît visuellement.

## Format de sortie attendu pour chaque page

Produis UN bloc markdown par page, structuré ainsi :

````
### PAGE : <Titre exact de la page>
- **Slug WordPress proposé** : <slug-en-minuscules-tirets>
- **URL d'origine** : <url>
- **Images détectées** : <liste src + alt>
- **Audio / player détecté** : <url mp3 / iframe Spotify / Ausha / autre, ou "aucun">

#### Contenu Gutenberg (à coller dans l'éditeur WP → vue Code)

```html
<!-- wp:heading {"level":1} --><h1>Titre H1</h1><!-- /wp:heading -->

<!-- wp:paragraph --><p>Premier paragraphe...</p><!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="URL" alt="ALT"/></figure>
<!-- /wp:image -->

<!-- wp:heading --><h2>Sous-titre H2</h2><!-- /wp:heading -->

<!-- wp:paragraph --><p>Paragraphe suivant...</p><!-- /wp:paragraph -->

<!-- wp:separator --><hr class="wp-block-separator"/><!-- /wp:separator -->

<!-- wp:embed {"url":"URL_SPOTIFY_OU_AUSHA","type":"rich","providerNameSlug":"spotify"} -->
<figure class="wp-block-embed is-type-rich"><div class="wp-block-embed__wrapper">URL</div></figure>
<!-- /wp:embed -->
```
````

## Règles strictes

- **N'invente rien.** Si une info manque, écris `[À compléter]`.
- **Respecte la structure Gutenberg** : chaque bloc commence par `<!-- wp:... -->` et se termine par `<!-- /wp:... -->`. C'est ce qui rend le contenu éditable visuellement dans WordPress.
- Utilise `wp:paragraph`, `wp:heading`, `wp:image`, `wp:separator`, `wp:embed`, `wp:list`, `wp:quote`. **Pas de `wp:html`** — ça casse la visualisation dans l'éditeur.
- Pour les images : toujours conserver l'URL absolue originale (elles sont hébergées chez Zyro/zyrosite).
- Pour les podcasts : si tu trouves un lien Spotify, Ausha, Anchor, ou un `.mp3`, utilise `wp:embed`. Sinon, mets un simple paragraphe avec le lien.
- Pour la **Constitution** : garde les titres (Préambule, Valeurs, Gouvernance) en H2, les sous-sections en H3, et chaque principe numéroté en `wp:list` si c'est une énumération.
- Italique = `<em>…</em>` dans les paragraphes.
- Ne reproduis **aucun** bloc de plus de 90 mots en citation exacte : reformule légèrement si un paragraphe dépasse. *(Ça évite les soucis de copyright si le contenu d'origine était lui-même repris d'ailleurs.)*

## Livrable final

À la fin, concatène les 3 blocs dans un **seul fichier** que tu me proposes de télécharger sous le nom `pages-wordpress.md`. Je le collerai ensuite page par page dans WordPress (chaque section "Contenu Gutenberg" va dans l'éditeur en **vue Code** : menu trois points en haut à droite → Éditeur de code).

---
