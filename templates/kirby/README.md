# Kirby templates (Kirby 4 and 5)

1. Copy `govuk-style.css` to `assets/css/`.
2. Copy `snippets/`, `templates/` and `blueprints/pages/` into `site/` (blueprints go in `site/blueprints/pages/`).
3. In `site/blueprints/site.yml` add a `footerlinks` pages field for the footer links.
4. Name the site in the Panel; it appears in the header.
5. Images: make `alt` required in your files blueprint.

Operating notes: deploy code only and never overwrite `content/`; keep backups; block `kirby/`, `site/`, `content/` at the web server; `debug` off in production; `panel.install` false once set up.
