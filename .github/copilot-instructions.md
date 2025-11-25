## Quick context

- This repository is a small static multi-page website (plain HTML + images). Primary pages: `index.html`, `gishvvn.html`, `hadgalamj.html`, `zeel.html`, `holboo.html`.
- CSS/JS: uses Bootstrap from CDN (link in `index.html`) and some inline styles/scripts in the page heads. Images (logo/back*/had*.png) live in the repo root.

## Big picture for an AI coding agent

- Purpose: serve static informational pages in Mongolian (language set with `lang="mn"`). There is no server-side code, APIs, or build system present.
- Edit pattern: pages are simple HTML files. Reuse header/footer by editing each HTML file (no templating currently).

## Immediate, high-value tasks you can do

- Fix small HTML/JS bugs seen across files:
  - `index.html` includes a jQuery-style inline script using `$` but does not load jQuery. Either add a jQuery CDN script before the inline script or convert the code to vanilla JS.
  - `index.html` has a duplicate `</head>` and references `#effect` in the script but there is no element with id `effect` in the document — confirm intended behavior before changing.
  - Navigation and header markup are duplicated across pages; consider adding a single include or small build step if converting to templates.

## Conventions & patterns (project-specific)

- File layout: all site assets and HTML files live in the repository root. Keep this layout when making changes.
- Styling: small custom CSS blocks are embedded in each page's `<head>`; prefer minimal, scoped changes and avoid moving large styles unless adding a shared stylesheet.
- JS placement: inline scripts exist in `<head>`; prefer moving non-critical scripts to just before `</body>` and keep external dependencies loaded in correct order.

## External dependencies & integration points

- Bootstrap CSS/JS is loaded from jsdelivr CDN in `index.html`. No package manager is used.
- Images (logo/back*.png/had*.png) are the only local assets; any changes must keep the same filenames or update references.

## Developer workflows (how to run / test changes)

- No build: open `index.html` (or other HTML files) in a browser for manual testing.
- Serve locally (recommended) to avoid file:// issues. Example (PowerShell):

```powershell
# from repository root
python -m http.server 8000
# then open http://localhost:8000/index.html
```

- Alternatively use VS Code Live Server extension to preview pages and auto-refresh edits.

## How to approach edits (concrete examples)

- Example: If you need to fix the toggle effect in `index.html`:
  - Option A (quick): add jQuery CDN before the inline script:
    `<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>`
  - Option B (preferred lightweight fix): replace the jQuery animation with a short vanilla JS implementation and move script to bottom of the page.

- Example: to change the shared navigation, update the nav block in `index.html` and mirror-edit the other HTML files (or propose a small templating step in a follow-up PR).

## What NOT to change without confirmation

- Don't introduce a build system (webpack/rollup) or package.json without discussing; the repo is currently intentionally simple and static.
- Don't rename image files or move assets to subfolders unless you update all references.

## Where to look for examples in this repo

- `index.html` — primary page and example of inline CSS/JS patterns, plus the current toggle script bug.
- `gishvvn.html`, `hadgalamj.html`, `zeel.html`, `holboo.html` — additional pages that mirror layout and show repetition to reduce.

If anything above is unclear or you'd like me to switch to converting this project to a lightweight template-based structure (e.g., small Node/Python static generator) I can draft a PR — tell me which direction you prefer.
