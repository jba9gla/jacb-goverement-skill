<?php /** GOV.UK-style head. Put govuk-style.css in /assets/css/ */ ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $page->isHomePage() ? $site->title()->esc() : $page->title()->esc() . ' - ' . $site->title()->esc() ?></title>
<?php if ($page->description()->isNotEmpty()): ?><meta name="description" content="<?= $page->description()->esc() ?>"><?php endif ?>
<?= css('assets/css/govuk-style.css') ?>
</head>
<body>
<a href="#main" class="gs-skip">Skip to main content</a>
<?php snippet('cookie-banner') ?>
<?php snippet('header') ?>
