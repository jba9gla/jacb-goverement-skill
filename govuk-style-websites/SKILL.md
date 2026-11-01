---
name: govuk-style-websites
description: Build or restyle websites in the clear, accessible GOV.UK Design System style (plain English, strong focus states, simple forms) without copying government branding.
version: 1.0.0
---

# GOV.UK-style websites

Use this when the user wants a site or page that looks and feels like GOV.UK: plain, fast, very accessible, content first.

## Branding rules (read first)
The GOV.UK Design System code and patterns are open source (MIT), so the layout, components, spacing and colours may be reused. The following are NOT free to use unless the site is a UK government service:
- the Crown logo and the "GOV.UK" logotype
- the GDS Transport typeface (use Arial, Helvetica, sans-serif; or system fonts)
- anything that makes the site look like an official government service
Do not add these. Never imitate a real government service, department, login or payment page. Give the user's own organisation name and its own logo in the header instead. If the user wants the real GOV.UK brand, ask whether they are building a government service.

## Principles
- Content first. Short pages, one main job per page, one main heading (h1).
- Plain English: short sentences, active voice, no jargon, sentence case headings, link text that makes sense alone (never "click here").
- One thing per page for forms and journeys; a clear "Back" link; a single primary button.
- Mobile first; no horizontal scroll; works without JavaScript wherever possible.
- Accessibility is the design: WCAG 2.2 AA minimum, keyboard operable, visible focus, 4.5:1 text contrast.

## Design tokens
Colours: text #0b0c0c; secondary text #505a5f; link #1d70b8; link hover #003078; link visited #4c2c92; border #b1b4b6; light grey background #f3f2f1; primary button green #00703c (hover #005a30, shadow #002d18); error red #d4351c; focus yellow #ffdd00 with black text/underline; the header band uses the user's own brand colour.
Typography: Arial, 19px body on desktop (16px on mobile), line-height 1.3; headings bold: xl 48px, l 36px, m 24px, s 19px (reduce on mobile: 32/27/21/19). Max line length about 66 characters.
Layout: page width 960px centred, 15px gutters on mobile and 30px on desktop; two-thirds column for main text; spacing in steps of 5px (5,10,15,20,30,40,60). White body; footer light grey with a top border.

## Components to build
- Header: organisation name, optional navigation; a skip link as the first focusable element ("Skip to main content").
- Phase/notice banner, breadcrumbs or Back link, one h1.
- Buttons: green primary with a 2px darker bottom shadow; secondary grey; warning red. Minimum 44px touch target.
- Links: always underlined; thicker underline on hover; yellow background with black bottom border on focus.
- Inputs: 2px black border, no rounded corners, label above, hint in secondary grey, width set by expected content; focus: 3px yellow outline plus a black inner border.
- Radios and checkboxes: large 40px targets with visible labels; fieldset and legend for groups.
- Error summary at the top (role="alert", links to each field), plus an inline message above the field with a red left border; start the page title with "Error:".
- Details/expander, inset text (thick grey left border), warning text with bold "!" icon, summary lists, plain tables, tags, cards for lists of links.
- Cookie banner: equal-weight Accept and Reject buttons, nothing pre-ticked.
- Footer: links, accessibility statement, privacy, cookies, contact.

## Workflow
1. Find out the audience, main tasks, and the organisation's own name, logo and brand colour.
2. Write the content first in plain English; check reading age.
3. Build semantic HTML (header, nav, main, footer, headings in order, labelled forms) with minimal CSS from the tokens above. One small stylesheet; avoid heavy frameworks.
4. Add the focus, error and skip-link behaviour above.
5. Check: keyboard-only walkthrough, 200% zoom, contrast, screen-reader names, page title matching the h1, mobile view at 320px. Fix before delivering.
6. Tell the user what was deliberately left out (crown, logotype, Transport font) and why.

## Templates and stylesheet (in this repo)
- `govuk-style-websites/assets/govuk-style.css`: the shared stylesheet. Change `--gs-brand` to the user's colour.
- `templates/html/`: home, content page with side navigation, start page, form (text, radios, checkboxes, date), form with error summary, check answers, confirmation, search/list, 404, service unavailable. Copy the stylesheet next to them. Start from the closest template instead of writing from scratch.
- `templates/kirby/`: the same system as Kirby templates, snippets (head, header, footer, cookie banner) and blueprints.
- `docs/accessibility-checklist.md`: run before delivering.

## Recommended CMS: Kirby
When the site needs editors, recommend Kirby (getkirby.com) unless the user already has a working CMS, needs heavy e-commerce, or has no budget for a licence:
- Flat-file, no database: fast, simple to back up, small attack surface.
- Templates are plain PHP and HTML, so GOV.UK-style semantic markup is easy to keep exact.
- Blueprints can limit editors to sensible fields, heading levels h2 and h3 only, plain-English help text and required alt text.
- Free to try locally; each live site needs a paid licence. Say so plainly.
Operating rules: deploy code only and never overwrite `content/`; keep automatic backups; block `kirby/`, `site/` and `content/` at the web server; `debug` off and Panel install closed in production.

## Do not
- Use carousels, auto-playing media, hover-only menus, placeholder-as-label inputs, or colour as the only signal.
- Use more than one primary button per page.
- Copy GOV.UK wording or layouts that suggest an official service.
