# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Dev server

Two options — both serve on port 3000 with live reload:

```bash
npm run dev          # npx live-server (requires Node)
python3 server.py    # custom SSE-based server (no dependencies)
```

`server.py` injects a live-reload `<script>` tag via SSE into every HTML response and watches all files for changes.

## Architecture

Pure static site — no build step, no framework, no bundler.

- **`styles.css`** — the single active stylesheet, shared by all pages. Defines CSS variables (`--fond`, `--texte`, `--accent`, `--secondaire`, `--surface`) and all component styles. Edit this file for any visual changes.
- **`scripts.js`** — shared across all pages. Handles two things: active nav link highlighting (header `nav a`) and the scroll-nav rouleau toggle (bottom fixed menu).
- **`styles/theme.css` + `styles/utilities.css`** — an alternative dark theme (navy, `--bg: #0f1724`). Not linked in any page — kept as a design exploration, not in production.

## Adding or editing pages

Every page follows the same structure:
1. `<head>` links `styles.css` + Google Fonts (Special Elite, Courier Prime)
2. `<header class="site-header">` with inline `<nav>` (active state set by JS)
3. `<main class="container"><article class="content-card">` wrapping all content
4. `<footer class="site-footer">` with last-update date
5. The `#scrollNav` bottom rouleau block (see below)
6. `<script src="scripts.js"></script>` just before `</body>`

When adding a new page, copy the scroll-nav block from any existing page verbatim and add the new page's link to the `<nav>` inside `.scroll-panel` **in all pages**.

## Scroll-nav (rouleau)

The bottom navigation is a fixed panel that unrolls upward. It is manually duplicated in each HTML file — there is no templating. The nav contains 6 links with `<hr class="scroll-sep">` dividers. Stagger animation uses `nth-of-type` (not `nth-child`) because `<hr>` elements are mixed siblings.

Active page detection in JS: matches `window.location.pathname.split('/').pop()` against each `<a href>`.

## WordPress migration

`Specs/` contains assets for migrating to WordPress — not part of the live site:
- `autour-dune-mousse/` — a WordPress theme replicating the parchment design
- `autour-dune-mousse-content.xml` — WP import file
- `PROMPT-claude-in-chrome.md` — prompt for extracting page content via Claude in Chrome extension
- `pages-wordpress.md` — generated Gutenberg blocks for each page

## Design tokens

| Variable | Value | Usage |
|---|---|---|
| `--fond` | `#f6eee3` | Page background (parchment) |
| `--texte` | `#35282C` | Body text |
| `--accent` | `#DBA472` | Links hover, em, separators |
| `--secondaire` | `#F9D0AE` | Subtle borders, hr |
| `--surface` | `rgba(255,255,255,0.9)` | `.content-card` background |
