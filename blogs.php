<?php
require_once __DIR__ . '/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Our services elevate your brand with tailored solutions in web design, graphic design, UI/UX, and digital marketing. Explore our Food App Design portfolio project." />
    <title>Blogs| Rilo </title>

    <!-- Preconnect -->
    <link rel="preload" href="/assets/image/brudcumb-image.webp" as="image">
    <!-- Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    </noscript>


    <style>
        /* Critical CSS for https://rilo-denation.netlify.app/blogs */
        @charset "UTF-8";

        :root {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-black: #000;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-gray-100: #f8f9fa;
            --bs-gray-200: #e9ecef;
            --bs-gray-300: #dee2e6;
            --bs-gray-400: #ced4da;
            --bs-gray-500: #adb5bd;
            --bs-gray-600: #6c757d;
            --bs-gray-700: #495057;
            --bs-gray-800: #343a40;
            --bs-gray-900: #212529;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-primary-rgb: 13, 110, 253;
            --bs-secondary-rgb: 108, 117, 125;
            --bs-success-rgb: 25, 135, 84;
            --bs-info-rgb: 13, 202, 240;
            --bs-warning-rgb: 255, 193, 7;
            --bs-danger-rgb: 220, 53, 69;
            --bs-light-rgb: 248, 249, 250;
            --bs-dark-rgb: 33, 37, 41;
            --bs-primary-text-emphasis: #052c65;
            --bs-secondary-text-emphasis: #2b2f32;
            --bs-success-text-emphasis: #0a3622;
            --bs-info-text-emphasis: #055160;
            --bs-warning-text-emphasis: #664d03;
            --bs-danger-text-emphasis: #58151c;
            --bs-light-text-emphasis: #495057;
            --bs-dark-text-emphasis: #495057;
            --bs-primary-bg-subtle: #cfe2ff;
            --bs-secondary-bg-subtle: #e2e3e5;
            --bs-success-bg-subtle: #d1e7dd;
            --bs-info-bg-subtle: #cff4fc;
            --bs-warning-bg-subtle: #fff3cd;
            --bs-danger-bg-subtle: #f8d7da;
            --bs-light-bg-subtle: #fcfcfd;
            --bs-dark-bg-subtle: #ced4da;
            --bs-primary-border-subtle: #9ec5fe;
            --bs-secondary-border-subtle: #c4c8cb;
            --bs-success-border-subtle: #a3cfbb;
            --bs-info-border-subtle: #9eeaf9;
            --bs-warning-border-subtle: #ffe69c;
            --bs-danger-border-subtle: #f1aeb5;
            --bs-light-border-subtle: #e9ecef;
            --bs-dark-border-subtle: #adb5bd;
            --bs-white-rgb: 255, 255, 255;
            --bs-black-rgb: 0, 0, 0;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --bs-body-font-family: var(--bs-font-sans-serif);
            --bs-body-font-size: 1rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #212529;
            --bs-body-color-rgb: 33, 37, 41;
            --bs-body-bg: #fff;
            --bs-body-bg-rgb: 255, 255, 255;
            --bs-emphasis-color: #000;
            --bs-emphasis-color-rgb: 0, 0, 0;
            --bs-secondary-color: rgba(33, 37, 41, 0.75);
            --bs-secondary-color-rgb: 33, 37, 41;
            --bs-secondary-bg: #e9ecef;
            --bs-secondary-bg-rgb: 233, 236, 239;
            --bs-tertiary-color: rgba(33, 37, 41, 0.5);
            --bs-tertiary-color-rgb: 33, 37, 41;
            --bs-tertiary-bg: #f8f9fa;
            --bs-tertiary-bg-rgb: 248, 249, 250;
            --bs-heading-color: inherit;
            --bs-link-color: #0d6efd;
            --bs-link-color-rgb: 13, 110, 253;
            --bs-link-decoration: underline;
            --bs-link-hover-color: #0a58ca;
            --bs-link-hover-color-rgb: 10, 88, 202;
            --bs-code-color: #d63384;
            --bs-highlight-color: #212529;
            --bs-highlight-bg: #fff3cd;
            --bs-border-width: 1px;
            --bs-border-style: solid;
            --bs-border-color: #dee2e6;
            --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
            --bs-border-radius: 0.375rem;
            --bs-border-radius-sm: 0.25rem;
            --bs-border-radius-lg: 0.5rem;
            --bs-border-radius-xl: 1rem;
            --bs-border-radius-xxl: 2rem;
            --bs-border-radius-2xl: var(--bs-border-radius-xxl);
            --bs-border-radius-pill: 50rem;
            --bs-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            --bs-box-shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
            --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
            --bs-focus-ring-width: 0.25rem;
            --bs-focus-ring-opacity: 0.25;
            --bs-focus-ring-color: rgba(13, 110, 253, 0.25);
            --bs-form-valid-color: #198754;
            --bs-form-valid-border-color: #198754;
            --bs-form-invalid-color: #dc3545;
            --bs-form-invalid-border-color: #dc3545
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        @media (prefers-reduced-motion:no-preference) {
            :root {
                scroll-behavior: smooth
            }
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%
        }

        hr {
            margin: 1rem 0;
            color: inherit;
            border: 0;
            border-top: var(--bs-border-width) solid;
            opacity: .25
        }

        h2,
        h3 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
            color: var(--bs-heading-color)
        }

        h2 {
            font-size: calc(1.325rem + .9vw)
        }

        @media (min-width:1200px) {
            h2 {
                font-size: 2rem
            }
        }

        h3 {
            font-size: calc(1.3rem + .6vw)
        }

        @media (min-width:1200px) {
            h3 {
                font-size: 1.75rem
            }
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ul {
            padding-left: 2rem
        }

        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ul ul {
            margin-bottom: 0
        }

        a {
            color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
            text-decoration: underline
        }

        img,
        svg {
            vertical-align: middle
        }

        button {
            border-radius: 0
        }

        button {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button {
            text-transform: none
        }

        [type=button],
        button {
            -webkit-appearance: button
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-fields-wrapper,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-minute,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-text,
        ::-webkit-datetime-edit-year-field {
            padding: 0
        }

        ::-webkit-inner-spin-button {
            height: auto
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        ::file-selector-button {
            font: inherit;
            -webkit-appearance: button
        }

        .img-fluid {
            max-width: 100%;
            height: auto
        }

        .container,
        .container-fluid {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width:576px) {
            .container {
                max-width: 540px
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 720px
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 960px
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1140px
            }
        }

        @media (min-width:1400px) {
            .container {
                max-width: 1320px
            }
        }

        :root {
            --bs-breakpoint-xs: 0;
            --bs-breakpoint-sm: 576px;
            --bs-breakpoint-md: 768px;
            --bs-breakpoint-lg: 992px;
            --bs-breakpoint-xl: 1200px;
            --bs-breakpoint-xxl: 1400px
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x))
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y)
        }

        .col {
            flex: 1 0 0
        }

        .row-cols-1>* {
            flex: 0 0 auto;
            width: 100%
        }

        .g-4 {
            --bs-gutter-x: 1.5rem
        }

        .g-4 {
            --bs-gutter-y: 1.5rem
        }

        @media (min-width:768px) {
            .row-cols-md-2>* {
                flex: 0 0 auto;
                width: 50%
            }
        }

        @media (min-width:992px) {
            .row-cols-lg-3>* {
                flex: 0 0 auto;
                width: 33.33333333%
            }
        }

        .collapse:not(.show) {
            display: none
        }

        .dropdown {
            position: relative
        }

        .dropdown-toggle {
            white-space: nowrap
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent
        }

        .dropdown-menu {
            --bs-dropdown-zindex: 1000;
            --bs-dropdown-min-width: 10rem;
            --bs-dropdown-padding-x: 0;
            --bs-dropdown-padding-y: 0.5rem;
            --bs-dropdown-spacer: 0.125rem;
            --bs-dropdown-font-size: 1rem;
            --bs-dropdown-color: var(--bs-body-color);
            --bs-dropdown-bg: var(--bs-body-bg);
            --bs-dropdown-border-color: var(--bs-border-color-translucent);
            --bs-dropdown-border-radius: var(--bs-border-radius);
            --bs-dropdown-border-width: var(--bs-border-width);
            --bs-dropdown-inner-border-radius: calc(var(--bs-border-radius) - var(--bs-border-width));
            --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
            --bs-dropdown-divider-margin-y: 0.5rem;
            --bs-dropdown-box-shadow: var(--bs-box-shadow);
            --bs-dropdown-link-color: var(--bs-body-color);
            --bs-dropdown-link-hover-color: var(--bs-body-color);
            --bs-dropdown-link-hover-bg: var(--bs-tertiary-bg);
            --bs-dropdown-link-active-color: #fff;
            --bs-dropdown-link-active-bg: #0d6efd;
            --bs-dropdown-link-disabled-color: var(--bs-tertiary-color);
            --bs-dropdown-item-padding-x: 1rem;
            --bs-dropdown-item-padding-y: 0.25rem;
            --bs-dropdown-header-color: #6c757d;
            --bs-dropdown-header-padding-x: 1rem;
            --bs-dropdown-header-padding-y: 0.5rem;
            position: absolute;
            z-index: var(--bs-dropdown-zindex);
            display: none;
            min-width: var(--bs-dropdown-min-width);
            padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
            margin: 0;
            font-size: var(--bs-dropdown-font-size);
            color: var(--bs-dropdown-color);
            text-align: left;
            list-style: none;
            background-color: var(--bs-dropdown-bg);
            background-clip: padding-box;
            border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
            border-radius: var(--bs-dropdown-border-radius)
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
            clear: both;
            font-weight: 400;
            color: var(--bs-dropdown-link-color);
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
            border-radius: var(--bs-dropdown-item-border-radius, 0)
        }

        .nav-link {
            display: block;
            padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
            font-size: var(--bs-nav-link-font-size);
            font-weight: var(--bs-nav-link-font-weight);
            color: var(--bs-nav-link-color);
            text-decoration: none;
            background: 0 0;
            border: 0
        }

        .navbar {
            --bs-navbar-padding-x: 0;
            --bs-navbar-padding-y: 0.5rem;
            --bs-navbar-color: rgba(var(--bs-emphasis-color-rgb), 0.65);
            --bs-navbar-hover-color: rgba(var(--bs-emphasis-color-rgb), 0.8);
            --bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
            --bs-navbar-active-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-brand-padding-y: 0.3125rem;
            --bs-navbar-brand-margin-end: 1rem;
            --bs-navbar-brand-font-size: 1.25rem;
            --bs-navbar-brand-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-brand-hover-color: rgba(var(--bs-emphasis-color-rgb), 1);
            --bs-navbar-nav-link-padding-x: 0.5rem;
            --bs-navbar-toggler-padding-y: 0.25rem;
            --bs-navbar-toggler-padding-x: 0.75rem;
            --bs-navbar-toggler-font-size: 1.25rem;
            --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            --bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
            --bs-navbar-toggler-border-radius: var(--bs-border-radius);
            --bs-navbar-toggler-focus-width: 0.25rem;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x)
        }

        .navbar>.container-fluid {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between
        }

        .navbar-brand {
            padding-top: var(--bs-navbar-brand-padding-y);
            padding-bottom: var(--bs-navbar-brand-padding-y);
            margin-right: var(--bs-navbar-brand-margin-end);
            font-size: var(--bs-navbar-brand-font-size);
            color: var(--bs-navbar-brand-color);
            text-decoration: none;
            white-space: nowrap
        }

        .navbar-nav {
            --bs-nav-link-padding-x: 0;
            --bs-nav-link-padding-y: 0.5rem;
            --bs-nav-link-font-weight: ;
            --bs-nav-link-color: var(--bs-navbar-color);
            --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
            --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .navbar-nav .nav-link.active {
            color: var(--bs-navbar-active-color)
        }

        .navbar-nav .dropdown-menu {
            position: static
        }

        .navbar-collapse {
            flex-grow: 1;
            flex-basis: 100%;
            align-items: center
        }

        .navbar-toggler {
            padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
            font-size: var(--bs-navbar-toggler-font-size);
            line-height: 1;
            color: var(--bs-navbar-color);
            background-color: transparent;
            border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
            border-radius: var(--bs-navbar-toggler-border-radius)
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-image: var(--bs-navbar-toggler-icon-bg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%
        }

        @media (min-width:992px) {
            .navbar-expand-lg {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: var(--bs-navbar-nav-link-padding-x);
                padding-left: var(--bs-navbar-nav-link-padding-x)
            }

            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-lg .navbar-toggler {
                display: none
            }
        }

        .navbar-dark {
            --bs-navbar-color: rgba(255, 255, 255, 0.55);
            --bs-navbar-hover-color: rgba(255, 255, 255, 0.75);
            --bs-navbar-disabled-color: rgba(255, 255, 255, 0.25);
            --bs-navbar-active-color: #fff;
            --bs-navbar-brand-color: #fff;
            --bs-navbar-brand-hover-color: #fff;
            --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
            --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
        }

        :root {
            --bs-btn-close-filter:
        }

        :root {
            --bs-carousel-indicator-active-bg: #fff;
            --bs-carousel-caption-color: #fff;
            --bs-carousel-control-icon-filter:
        }

        .d-inline-block {
            display: inline-block !important
        }

        .d-flex {
            display: flex !important
        }

        .d-inline-flex {
            display: inline-flex !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .w-100 {
            width: 100% !important
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .align-items-center {
            align-items: center !important
        }

        .mb-3 {
            margin-bottom: 1rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .gap-2 {
            gap: .5rem !important
        }

        .text-center {
            text-align: center !important
        }

        .text-white {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important
        }

        * {
            padding: 0;
            margin: 0
        }

        :root {
            --base-color: #000000;
            --common-color: #FF0000;
            --theme-pink-light: #FFE6E6;
            --bs-accordion-btn-active-iconn: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 14 14' fill='none'%3e%3cpath d='M12.1748 0.5C12.3391 0.5 12.4411 0.548503 12.5215 0.628906C12.6017 0.709215 12.6503 0.810702 12.6504 0.974609C12.6504 1.13881 12.6018 1.2409 12.5215 1.32129L7.26758 6.5752L7.62109 6.92871L12.5215 11.8281C12.6019 11.9085 12.6504 12.0106 12.6504 12.1748C12.6504 12.3391 12.6019 12.4411 12.5215 12.5215C12.4411 12.6019 12.3391 12.6504 12.1748 12.6504C12.0106 12.6504 11.9085 12.6019 11.8281 12.5215L6.92871 7.62109L6.5752 7.26758L1.32129 12.5215C1.2409 12.6018 1.13881 12.6504 0.974609 12.6504C0.810702 12.6503 0.709215 12.6017 0.628906 12.5215C0.548503 12.4411 0.5 12.3391 0.5 12.1748C0.500038 12.0106 0.548535 11.9085 0.628906 11.8281L5.88184 6.5752L5.52832 6.22168L0.628906 1.32129C0.548504 1.24089 0.5 1.13888 0.5 0.974609C0.500076 0.810568 0.548567 0.709245 0.628906 0.628906C0.709245 0.548567 0.810568 0.500076 0.974609 0.5C1.13888 0.5 1.24089 0.548504 1.32129 0.628906L6.22168 5.52832L6.5752 5.88184L11.8281 0.628906C11.9085 0.548535 12.0106 0.500038 12.1748 0.5Z' fill='%23192023' stroke='%23192023'/%3e%3c/svg%3e") !important
        }

        body {
            font-family: "Poppins", sans-serif
        }

        a {
            text-decoration: none
        }

        h2,
        h3 {
            padding: 0;
            margin: 0
        }

        p {
            padding: 0;
            margin: 0
        }

        .container {
            max-width: 1273px
        }

        .title-3 {
            font-size: clamp(20px, 5vw, 36px);
            font-family: "Poppins", sans-serif;
            font-weight: 600
        }

        header {
            background: #FFFFFF99;
            backdrop-filter: blur(22px);
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 9
        }

        .navbar-expand-lg .nav-item-text.navbar-nav .nav-link {
            font-family: Poppins;
            font-weight: 500;
            font-size: 1rem;
            padding: 20px 25px;
            color: #121212;
            border: none
        }

        .navbar-expand-lg .nav-item-text.navbar-nav .nav-link.active {
            border-bottom: 2px solid var(--common-color);
            color: #FFFFFF;
            background: #141414
        }

        .py-120 {
            padding-top: 120px;
            padding-bottom: 120px
        }

        header {
            padding-top: 20px;
            height: 271px;
            position: unset !important;
            background-color: transparent;
            backdrop-filter: unset;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('../image/brudcumb-image.webp')
        }

        .navbar-expand-lg .nav-item-text.navbar-nav .nav-link {
            color: white;
            padding: 20px 0;
            margin-left: 32px
        }

        .navbar-expand-lg .nav-item-text.navbar-nav .nav-link.active {
            background: unset
        }

        @media (max-width:768px) {
            .navbar-nav .dropdown-menu {
                background-color: #192023;
                border: none;
                box-shadow: none
            }

            .navbar-nav .dropdown-item {
                color: #fff
            }

            .navbar-expand-lg .nav-item-text.navbar-nav .nav-link.active {
                background: var(--common-color);
                border: none !important;
                box-shadow: none !important
            }

            .navbar-expand-lg .nav-item-text.navbar-nav .nav-link {
                margin-left: 0px !important;
                padding: 4px 8px;
                margin-bottom: 8px
            }
        }

        .brudcumb-title {
            margin-top: 60px
        }

        .animate-title {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: clamp(16px, 2.5vw, 34px);
            color: var(--common-white)
        }

        .animate-title {
            opacity: 0;
            transform: translate(-50%, -50%) translateY(-100%);
            animation: fadeSlideUp 1s ease-out forwards;
            animation-delay: .3s
        }

        @keyframes fadeSlideUp {
            from {
                opacity: 0;
                transform: translate(-50%, -50%) translateY(200%)
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%) translateY(50%)
            }
        }

        .tab-link-container {
            margin-bottom: 70px
        }

        .tab-link {
            text-decoration: none;
            border: 1px solid #193A50;
            padding: 10px 22px;
            color: #212121;
            border-radius: 32px;
            margin-left: 15px;
            font-size: 16px
        }

        .tab-link.active {
            border: 1px solid #B4D7EE;
            background: #E3F4FF
        }

        .portfolio-card {
            border-radius: 10px;
            overflow: hidden;
            max-width: 400px;
            border: 1px solid #EAEAEA;
            margin: 0 auto
        }

        .portfolio-card img {
            width: 100%;
            object-fit: cover
        }

        .p-date {
            padding: 8px 10px;
            color: white;
            background-color: #FF0000;
            border-radius: 5px;
            position: absolute;
            bottom: 20px;
            left: 20px;
            gap: 8px;
            align-items: center
        }

        .separetor {
            width: 1px !important;
            background-color: #EAEAEA;
            height: auto;
            margin: 0 20px
        }

        .user-intarantion {
            color: #858585;
            font-size: 14px;
            padding: 12px 0
        }

        .portfolio-description {
            padding: 30px;
            padding-top: 0px
        }

        .portfolio-description .title {
            display: inline-block;
            font-size: 20px;
            line-height: 30px;
            color: #2B2B52;
            font-weight: 500;
            margin-bottom: 16px;
            min-height: 60px
        }

        .portfolio-description p {
            color: #52525C
        }

        .read-more {
            color: #FF0000;
            text-decoration: none
        }
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="preload" href="assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/breadcrumb.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/blogs.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/breadcrumb.css">
        <link rel="stylesheet" href="assets/css/blogs.css">
    </noscript>
</head>

<body>
    <header>
        <?php include('./partial/nav.php') ?>
        <div class="d-flex w-100 justify-content-center align-items-center position-relative">
            <h3 class="text-center text-white brudcumb-title title-3 animate-title position-absolute">Blog</h3>
        </div>
    </header>

    <main>
        <!-- Portfolio card section start -->
        <section class="container py-120">
            <div class="text-center tab-link-container">
                <div class="tab-list">
                    <a href="" class="tab-link flipup-hover d-inline-block  active">All</a>
                    <a href="" class="tab-link flipup-hover d-inline-block ">Bag</a>
                    <a href="" class="tab-link flipup-hover d-inline-block ">Shoes</a>
                    <a href="" class="tab-link flipup-hover d-inline-block ">Man</a>
                    <a href="" class="tab-link flipup-hover d-inline-block ">Small Leather Goods</a>
                    <a href="" class="tab-link flipup-hover d-inline-block ">Jewelry</a>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 justify-content-center">
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/image/portfolio-details/1.webp" alt="">
                            <div class="p-date d-inline-flex">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.125 16.3125C1.125 17.2441 1.88086 18 2.8125 18H15.1875C16.1191 18 16.875 17.2441 16.875 16.3125V6.75H1.125V16.3125ZM12.375 9.42188C12.375 9.18984 12.5648 9 12.7969 9H14.2031C14.4352 9 14.625 9.18984 14.625 9.42188V10.8281C14.625 11.0602 14.4352 11.25 14.2031 11.25H12.7969C12.5648 11.25 12.375 11.0602 12.375 10.8281V9.42188ZM12.375 13.9219C12.375 13.6898 12.5648 13.5 12.7969 13.5H14.2031C14.4352 13.5 14.625 13.6898 14.625 13.9219V15.3281C14.625 15.5602 14.4352 15.75 14.2031 15.75H12.7969C12.5648 15.75 12.375 15.5602 12.375 15.3281V13.9219ZM7.875 9.42188C7.875 9.18984 8.06484 9 8.29688 9H9.70312C9.93516 9 10.125 9.18984 10.125 9.42188V10.8281C10.125 11.0602 9.93516 11.25 9.70312 11.25H8.29688C8.06484 11.25 7.875 11.0602 7.875 10.8281V9.42188ZM7.875 13.9219C7.875 13.6898 8.06484 13.5 8.29688 13.5H9.70312C9.93516 13.5 10.125 13.6898 10.125 13.9219V15.3281C10.125 15.5602 9.93516 15.75 9.70312 15.75H8.29688C8.06484 15.75 7.875 15.5602 7.875 15.3281V13.9219ZM3.375 9.42188C3.375 9.18984 3.56484 9 3.79688 9H5.20312C5.43516 9 5.625 9.18984 5.625 9.42188V10.8281C5.625 11.0602 5.43516 11.25 5.20312 11.25H3.79688C3.56484 11.25 3.375 11.0602 3.375 10.8281V9.42188ZM3.375 13.9219C3.375 13.6898 3.56484 13.5 3.79688 13.5H5.20312C5.43516 13.5 5.625 13.6898 5.625 13.9219V15.3281C5.625 15.5602 5.43516 15.75 5.20312 15.75H3.79688C3.56484 15.75 3.375 15.5602 3.375 15.3281V13.9219ZM15.1875 2.25H13.5V0.5625C13.5 0.253125 13.2469 0 12.9375 0H11.8125C11.5031 0 11.25 0.253125 11.25 0.5625V2.25H6.75V0.5625C6.75 0.253125 6.49687 0 6.1875 0H5.0625C4.75312 0 4.5 0.253125 4.5 0.5625V2.25H2.8125C1.88086 2.25 1.125 3.00586 1.125 3.9375V5.625H16.875V3.9375C16.875 3.00586 16.1191 2.25 15.1875 2.25Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span>June 10, 2022</span>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <div class="d-flex user-intarantion">
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.875 9C10.3605 9 12.375 6.98555 12.375 4.5C12.375 2.01445 10.3605 0 7.875 0C5.38945 0 3.375 2.01445 3.375 4.5C3.375 6.98555 5.38945 9 7.875 9ZM11.025 10.125H10.4379C9.65742 10.4836 8.78906 10.6875 7.875 10.6875C6.96094 10.6875 6.09609 10.4836 5.31211 10.125H4.725C2.11641 10.125 0 12.2414 0 14.85V16.3125C0 17.2441 0.755859 18 1.6875 18H14.0625C14.9941 18 15.75 17.2441 15.75 16.3125V14.85C15.75 12.2414 13.6336 10.125 11.025 10.125Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Admin</span>

                                </div>
                                <div class="separetor"></div>
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3130_22151)">
                                                <path
                                                    d="M13 7C13 4.2375 10.0906 2 6.5 2C2.90937 2 0 4.2375 0 7C0 8.07187 0.440625 9.05937 1.1875 9.875C0.76875 10.8187 0.078125 11.5687 0.06875 11.5781C0 11.65 -0.01875 11.7562 0.021875 11.85C0.0625 11.9437 0.15 12 0.25 12C1.39375 12 2.34062 11.6156 3.02187 11.2187C4.02812 11.7094 5.21875 12 6.5 12C10.0906 12 13 9.7625 13 7ZM16.8125 13.875C17.5594 13.0625 18 12.0719 18 11C18 8.90937 16.3281 7.11875 13.9594 6.37187C13.9875 6.57812 14 6.7875 14 7C14 10.3094 10.6344 13 6.5 13C6.1625 13 5.83437 12.975 5.50938 12.9406C6.49375 14.7375 8.80625 16 11.5 16C12.7812 16 13.9719 15.7125 14.9781 15.2187C15.6594 15.6156 16.6063 16 17.75 16C17.85 16 17.9406 15.9406 17.9781 15.85C18.0187 15.7594 18 15.6531 17.9312 15.5781C17.9219 15.5687 17.2313 14.8219 16.8125 13.875Z"
                                                    fill="#FF0000" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3130_22151">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>(<span>0</span>) Comments</span>
                                </div>
                            </div>
                            <hr>
                            <h2><a href="blog-details" class="title mb-3">CD Lady Dior Mini
                                    (Special) 08</a></h2>
                            <p class="mb-3">Lorem ipsum dolor sit amet consecttur adipiscing elit. Pellentesque sagittis
                                sit amet
                                felis
                                lobortis.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/image/portfolio-details/2.webp" alt="">
                            <div class="p-date d-inline-flex">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.125 16.3125C1.125 17.2441 1.88086 18 2.8125 18H15.1875C16.1191 18 16.875 17.2441 16.875 16.3125V6.75H1.125V16.3125ZM12.375 9.42188C12.375 9.18984 12.5648 9 12.7969 9H14.2031C14.4352 9 14.625 9.18984 14.625 9.42188V10.8281C14.625 11.0602 14.4352 11.25 14.2031 11.25H12.7969C12.5648 11.25 12.375 11.0602 12.375 10.8281V9.42188ZM12.375 13.9219C12.375 13.6898 12.5648 13.5 12.7969 13.5H14.2031C14.4352 13.5 14.625 13.6898 14.625 13.9219V15.3281C14.625 15.5602 14.4352 15.75 14.2031 15.75H12.7969C12.5648 15.75 12.375 15.5602 12.375 15.3281V13.9219ZM7.875 9.42188C7.875 9.18984 8.06484 9 8.29688 9H9.70312C9.93516 9 10.125 9.18984 10.125 9.42188V10.8281C10.125 11.0602 9.93516 11.25 9.70312 11.25H8.29688C8.06484 11.25 7.875 11.0602 7.875 10.8281V9.42188ZM7.875 13.9219C7.875 13.6898 8.06484 13.5 8.29688 13.5H9.70312C9.93516 13.5 10.125 13.6898 10.125 13.9219V15.3281C10.125 15.5602 9.93516 15.75 9.70312 15.75H8.29688C8.06484 15.75 7.875 15.5602 7.875 15.3281V13.9219ZM3.375 9.42188C3.375 9.18984 3.56484 9 3.79688 9H5.20312C5.43516 9 5.625 9.18984 5.625 9.42188V10.8281C5.625 11.0602 5.43516 11.25 5.20312 11.25H3.79688C3.56484 11.25 3.375 11.0602 3.375 10.8281V9.42188ZM3.375 13.9219C3.375 13.6898 3.56484 13.5 3.79688 13.5H5.20312C5.43516 13.5 5.625 13.6898 5.625 13.9219V15.3281C5.625 15.5602 5.43516 15.75 5.20312 15.75H3.79688C3.56484 15.75 3.375 15.5602 3.375 15.3281V13.9219ZM15.1875 2.25H13.5V0.5625C13.5 0.253125 13.2469 0 12.9375 0H11.8125C11.5031 0 11.25 0.253125 11.25 0.5625V2.25H6.75V0.5625C6.75 0.253125 6.49687 0 6.1875 0H5.0625C4.75312 0 4.5 0.253125 4.5 0.5625V2.25H2.8125C1.88086 2.25 1.125 3.00586 1.125 3.9375V5.625H16.875V3.9375C16.875 3.00586 16.1191 2.25 15.1875 2.25Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span>June 10, 2022</span>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <div class="d-flex user-intarantion">
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.875 9C10.3605 9 12.375 6.98555 12.375 4.5C12.375 2.01445 10.3605 0 7.875 0C5.38945 0 3.375 2.01445 3.375 4.5C3.375 6.98555 5.38945 9 7.875 9ZM11.025 10.125H10.4379C9.65742 10.4836 8.78906 10.6875 7.875 10.6875C6.96094 10.6875 6.09609 10.4836 5.31211 10.125H4.725C2.11641 10.125 0 12.2414 0 14.85V16.3125C0 17.2441 0.755859 18 1.6875 18H14.0625C14.9941 18 15.75 17.2441 15.75 16.3125V14.85C15.75 12.2414 13.6336 10.125 11.025 10.125Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Admin</span>

                                </div>
                                <div class="separetor"></div>
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3130_22152)">
                                                <path
                                                    d="M13 7C13 4.2375 10.0906 2 6.5 2C2.90937 2 0 4.2375 0 7C0 8.07187 0.440625 9.05937 1.1875 9.875C0.76875 10.8187 0.078125 11.5687 0.06875 11.5781C0 11.65 -0.01875 11.7562 0.021875 11.85C0.0625 11.9437 0.15 12 0.25 12C1.39375 12 2.34062 11.6156 3.02187 11.2187C4.02812 11.7094 5.21875 12 6.5 12C10.0906 12 13 9.7625 13 7ZM16.8125 13.875C17.5594 13.0625 18 12.0719 18 11C18 8.90937 16.3281 7.11875 13.9594 6.37187C13.9875 6.57812 14 6.7875 14 7C14 10.3094 10.6344 13 6.5 13C6.1625 13 5.83437 12.975 5.50938 12.9406C6.49375 14.7375 8.80625 16 11.5 16C12.7812 16 13.9719 15.7125 14.9781 15.2187C15.6594 15.6156 16.6063 16 17.75 16C17.85 16 17.9406 15.9406 17.9781 15.85C18.0187 15.7594 18 15.6531 17.9312 15.5781C17.9219 15.5687 17.2313 14.8219 16.8125 13.875Z"
                                                    fill="#FF0000" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3130_22152">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>(<span>0</span>) Comments</span>
                                </div>
                            </div>
                            <hr>
                            <h2><a href="blog-details" class="title mb-3">CD Lady Dior Mini
                                    (Special) 08</a></h2>
                            <p class="mb-3">Lorem ipsum dolor sit amet consecttur adipiscing elit. Pellentesque sagittis
                                sit amet
                                felis
                                lobortis.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/image/portfolio-details/3.webp" alt="">
                            <div class="p-date d-inline-flex">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.125 16.3125C1.125 17.2441 1.88086 18 2.8125 18H15.1875C16.1191 18 16.875 17.2441 16.875 16.3125V6.75H1.125V16.3125ZM12.375 9.42188C12.375 9.18984 12.5648 9 12.7969 9H14.2031C14.4352 9 14.625 9.18984 14.625 9.42188V10.8281C14.625 11.0602 14.4352 11.25 14.2031 11.25H12.7969C12.5648 11.25 12.375 11.0602 12.375 10.8281V9.42188ZM12.375 13.9219C12.375 13.6898 12.5648 13.5 12.7969 13.5H14.2031C14.4352 13.5 14.625 13.6898 14.625 13.9219V15.3281C14.625 15.5602 14.4352 15.75 14.2031 15.75H12.7969C12.5648 15.75 12.375 15.5602 12.375 15.3281V13.9219ZM7.875 9.42188C7.875 9.18984 8.06484 9 8.29688 9H9.70312C9.93516 9 10.125 9.18984 10.125 9.42188V10.8281C10.125 11.0602 9.93516 11.25 9.70312 11.25H8.29688C8.06484 11.25 7.875 11.0602 7.875 10.8281V9.42188ZM7.875 13.9219C7.875 13.6898 8.06484 13.5 8.29688 13.5H9.70312C9.93516 13.5 10.125 13.6898 10.125 13.9219V15.3281C10.125 15.5602 9.93516 15.75 9.70312 15.75H8.29688C8.06484 15.75 7.875 15.5602 7.875 15.3281V13.9219ZM3.375 9.42188C3.375 9.18984 3.56484 9 3.79688 9H5.20312C5.43516 9 5.625 9.18984 5.625 9.42188V10.8281C5.625 11.0602 5.43516 11.25 5.20312 11.25H3.79688C3.56484 11.25 3.375 11.0602 3.375 10.8281V9.42188ZM3.375 13.9219C3.375 13.6898 3.56484 13.5 3.79688 13.5H5.20312C5.43516 13.5 5.625 13.6898 5.625 13.9219V15.3281C5.625 15.5602 5.43516 15.75 5.20312 15.75H3.79688C3.56484 15.75 3.375 15.5602 3.375 15.3281V13.9219ZM15.1875 2.25H13.5V0.5625C13.5 0.253125 13.2469 0 12.9375 0H11.8125C11.5031 0 11.25 0.253125 11.25 0.5625V2.25H6.75V0.5625C6.75 0.253125 6.49687 0 6.1875 0H5.0625C4.75312 0 4.5 0.253125 4.5 0.5625V2.25H2.8125C1.88086 2.25 1.125 3.00586 1.125 3.9375V5.625H16.875V3.9375C16.875 3.00586 16.1191 2.25 15.1875 2.25Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span>June 10, 2022</span>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <div class="d-flex user-intarantion">
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.875 9C10.3605 9 12.375 6.98555 12.375 4.5C12.375 2.01445 10.3605 0 7.875 0C5.38945 0 3.375 2.01445 3.375 4.5C3.375 6.98555 5.38945 9 7.875 9ZM11.025 10.125H10.4379C9.65742 10.4836 8.78906 10.6875 7.875 10.6875C6.96094 10.6875 6.09609 10.4836 5.31211 10.125H4.725C2.11641 10.125 0 12.2414 0 14.85V16.3125C0 17.2441 0.755859 18 1.6875 18H14.0625C14.9941 18 15.75 17.2441 15.75 16.3125V14.85C15.75 12.2414 13.6336 10.125 11.025 10.125Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Admin</span>

                                </div>
                                <div class="separetor"></div>
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3130_22153)">
                                                <path
                                                    d="M13 7C13 4.2375 10.0906 2 6.5 2C2.90937 2 0 4.2375 0 7C0 8.07187 0.440625 9.05937 1.1875 9.875C0.76875 10.8187 0.078125 11.5687 0.06875 11.5781C0 11.65 -0.01875 11.7562 0.021875 11.85C0.0625 11.9437 0.15 12 0.25 12C1.39375 12 2.34062 11.6156 3.02187 11.2187C4.02812 11.7094 5.21875 12 6.5 12C10.0906 12 13 9.7625 13 7ZM16.8125 13.875C17.5594 13.0625 18 12.0719 18 11C18 8.90937 16.3281 7.11875 13.9594 6.37187C13.9875 6.57812 14 6.7875 14 7C14 10.3094 10.6344 13 6.5 13C6.1625 13 5.83437 12.975 5.50938 12.9406C6.49375 14.7375 8.80625 16 11.5 16C12.7812 16 13.9719 15.7125 14.9781 15.2187C15.6594 15.6156 16.6063 16 17.75 16C17.85 16 17.9406 15.9406 17.9781 15.85C18.0187 15.7594 18 15.6531 17.9312 15.5781C17.9219 15.5687 17.2313 14.8219 16.8125 13.875Z"
                                                    fill="#FF0000" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3130_22153">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>(<span>0</span>) Comments</span>
                                </div>
                            </div>
                            <hr>
                            <h2><a href="blog-details" class="title mb-3">CD Lady Dior Mini
                                    (Special) 08</a></h2>
                            <p class="mb-3">Lorem ipsum dolor sit amet consecttur adipiscing elit. Pellentesque sagittis
                                sit amet
                                felis
                                lobortis.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/image/portfolio-details/4.webp" alt="">
                            <div class="p-date d-inline-flex">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.125 16.3125C1.125 17.2441 1.88086 18 2.8125 18H15.1875C16.1191 18 16.875 17.2441 16.875 16.3125V6.75H1.125V16.3125ZM12.375 9.42188C12.375 9.18984 12.5648 9 12.7969 9H14.2031C14.4352 9 14.625 9.18984 14.625 9.42188V10.8281C14.625 11.0602 14.4352 11.25 14.2031 11.25H12.7969C12.5648 11.25 12.375 11.0602 12.375 10.8281V9.42188ZM12.375 13.9219C12.375 13.6898 12.5648 13.5 12.7969 13.5H14.2031C14.4352 13.5 14.625 13.6898 14.625 13.9219V15.3281C14.625 15.5602 14.4352 15.75 14.2031 15.75H12.7969C12.5648 15.75 12.375 15.5602 12.375 15.3281V13.9219ZM7.875 9.42188C7.875 9.18984 8.06484 9 8.29688 9H9.70312C9.93516 9 10.125 9.18984 10.125 9.42188V10.8281C10.125 11.0602 9.93516 11.25 9.70312 11.25H8.29688C8.06484 11.25 7.875 11.0602 7.875 10.8281V9.42188ZM7.875 13.9219C7.875 13.6898 8.06484 13.5 8.29688 13.5H9.70312C9.93516 13.5 10.125 13.6898 10.125 13.9219V15.3281C10.125 15.5602 9.93516 15.75 9.70312 15.75H8.29688C8.06484 15.75 7.875 15.5602 7.875 15.3281V13.9219ZM3.375 9.42188C3.375 9.18984 3.56484 9 3.79688 9H5.20312C5.43516 9 5.625 9.18984 5.625 9.42188V10.8281C5.625 11.0602 5.43516 11.25 5.20312 11.25H3.79688C3.56484 11.25 3.375 11.0602 3.375 10.8281V9.42188ZM3.375 13.9219C3.375 13.6898 3.56484 13.5 3.79688 13.5H5.20312C5.43516 13.5 5.625 13.6898 5.625 13.9219V15.3281C5.625 15.5602 5.43516 15.75 5.20312 15.75H3.79688C3.56484 15.75 3.375 15.5602 3.375 15.3281V13.9219ZM15.1875 2.25H13.5V0.5625C13.5 0.253125 13.2469 0 12.9375 0H11.8125C11.5031 0 11.25 0.253125 11.25 0.5625V2.25H6.75V0.5625C6.75 0.253125 6.49687 0 6.1875 0H5.0625C4.75312 0 4.5 0.253125 4.5 0.5625V2.25H2.8125C1.88086 2.25 1.125 3.00586 1.125 3.9375V5.625H16.875V3.9375C16.875 3.00586 16.1191 2.25 15.1875 2.25Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span>June 10, 2022</span>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <div class="d-flex user-intarantion">
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.875 9C10.3605 9 12.375 6.98555 12.375 4.5C12.375 2.01445 10.3605 0 7.875 0C5.38945 0 3.375 2.01445 3.375 4.5C3.375 6.98555 5.38945 9 7.875 9ZM11.025 10.125H10.4379C9.65742 10.4836 8.78906 10.6875 7.875 10.6875C6.96094 10.6875 6.09609 10.4836 5.31211 10.125H4.725C2.11641 10.125 0 12.2414 0 14.85V16.3125C0 17.2441 0.755859 18 1.6875 18H14.0625C14.9941 18 15.75 17.2441 15.75 16.3125V14.85C15.75 12.2414 13.6336 10.125 11.025 10.125Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Admin</span>

                                </div>
                                <div class="separetor"></div>
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3130_22154)">
                                                <path
                                                    d="M13 7C13 4.2375 10.0906 2 6.5 2C2.90937 2 0 4.2375 0 7C0 8.07187 0.440625 9.05937 1.1875 9.875C0.76875 10.8187 0.078125 11.5687 0.06875 11.5781C0 11.65 -0.01875 11.7562 0.021875 11.85C0.0625 11.9437 0.15 12 0.25 12C1.39375 12 2.34062 11.6156 3.02187 11.2187C4.02812 11.7094 5.21875 12 6.5 12C10.0906 12 13 9.7625 13 7ZM16.8125 13.875C17.5594 13.0625 18 12.0719 18 11C18 8.90937 16.3281 7.11875 13.9594 6.37187C13.9875 6.57812 14 6.7875 14 7C14 10.3094 10.6344 13 6.5 13C6.1625 13 5.83437 12.975 5.50938 12.9406C6.49375 14.7375 8.80625 16 11.5 16C12.7812 16 13.9719 15.7125 14.9781 15.2187C15.6594 15.6156 16.6063 16 17.75 16C17.85 16 17.9406 15.9406 17.9781 15.85C18.0187 15.7594 18 15.6531 17.9312 15.5781C17.9219 15.5687 17.2313 14.8219 16.8125 13.875Z"
                                                    fill="#FF0000" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3130_22154">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>(<span>0</span>) Comments</span>
                                </div>
                            </div>
                            <hr>
                            <h2><a href="blog-details" class="title mb-3">CD Lady Dior Mini
                                    (Special) 08</a></h2>
                            <p class="mb-3">Lorem ipsum dolor sit amet consecttur adipiscing elit. Pellentesque sagittis
                                sit amet
                                felis
                                lobortis.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/image/portfolio-details/5.webp" alt="">
                            <div class="p-date d-inline-flex">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.125 16.3125C1.125 17.2441 1.88086 18 2.8125 18H15.1875C16.1191 18 16.875 17.2441 16.875 16.3125V6.75H1.125V16.3125ZM12.375 9.42188C12.375 9.18984 12.5648 9 12.7969 9H14.2031C14.4352 9 14.625 9.18984 14.625 9.42188V10.8281C14.625 11.0602 14.4352 11.25 14.2031 11.25H12.7969C12.5648 11.25 12.375 11.0602 12.375 10.8281V9.42188ZM12.375 13.9219C12.375 13.6898 12.5648 13.5 12.7969 13.5H14.2031C14.4352 13.5 14.625 13.6898 14.625 13.9219V15.3281C14.625 15.5602 14.4352 15.75 14.2031 15.75H12.7969C12.5648 15.75 12.375 15.5602 12.375 15.3281V13.9219ZM7.875 9.42188C7.875 9.18984 8.06484 9 8.29688 9H9.70312C9.93516 9 10.125 9.18984 10.125 9.42188V10.8281C10.125 11.0602 9.93516 11.25 9.70312 11.25H8.29688C8.06484 11.25 7.875 11.0602 7.875 10.8281V9.42188ZM7.875 13.9219C7.875 13.6898 8.06484 13.5 8.29688 13.5H9.70312C9.93516 13.5 10.125 13.6898 10.125 13.9219V15.3281C10.125 15.5602 9.93516 15.75 9.70312 15.75H8.29688C8.06484 15.75 7.875 15.5602 7.875 15.3281V13.9219ZM3.375 9.42188C3.375 9.18984 3.56484 9 3.79688 9H5.20312C5.43516 9 5.625 9.18984 5.625 9.42188V10.8281C5.625 11.0602 5.43516 11.25 5.20312 11.25H3.79688C3.56484 11.25 3.375 11.0602 3.375 10.8281V9.42188ZM3.375 13.9219C3.375 13.6898 3.56484 13.5 3.79688 13.5H5.20312C5.43516 13.5 5.625 13.6898 5.625 13.9219V15.3281C5.625 15.5602 5.43516 15.75 5.20312 15.75H3.79688C3.56484 15.75 3.375 15.5602 3.375 15.3281V13.9219ZM15.1875 2.25H13.5V0.5625C13.5 0.253125 13.2469 0 12.9375 0H11.8125C11.5031 0 11.25 0.253125 11.25 0.5625V2.25H6.75V0.5625C6.75 0.253125 6.49687 0 6.1875 0H5.0625C4.75312 0 4.5 0.253125 4.5 0.5625V2.25H2.8125C1.88086 2.25 1.125 3.00586 1.125 3.9375V5.625H16.875V3.9375C16.875 3.00586 16.1191 2.25 15.1875 2.25Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span>June 10, 2022</span>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <div class="d-flex user-intarantion">
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.875 9C10.3605 9 12.375 6.98555 12.375 4.5C12.375 2.01445 10.3605 0 7.875 0C5.38945 0 3.375 2.01445 3.375 4.5C3.375 6.98555 5.38945 9 7.875 9ZM11.025 10.125H10.4379C9.65742 10.4836 8.78906 10.6875 7.875 10.6875C6.96094 10.6875 6.09609 10.4836 5.31211 10.125H4.725C2.11641 10.125 0 12.2414 0 14.85V16.3125C0 17.2441 0.755859 18 1.6875 18H14.0625C14.9941 18 15.75 17.2441 15.75 16.3125V14.85C15.75 12.2414 13.6336 10.125 11.025 10.125Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Admin</span>

                                </div>
                                <div class="separetor"></div>
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3130_22155)">
                                                <path
                                                    d="M13 7C13 4.2375 10.0906 2 6.5 2C2.90937 2 0 4.2375 0 7C0 8.07187 0.440625 9.05937 1.1875 9.875C0.76875 10.8187 0.078125 11.5687 0.06875 11.5781C0 11.65 -0.01875 11.7562 0.021875 11.85C0.0625 11.9437 0.15 12 0.25 12C1.39375 12 2.34062 11.6156 3.02187 11.2187C4.02812 11.7094 5.21875 12 6.5 12C10.0906 12 13 9.7625 13 7ZM16.8125 13.875C17.5594 13.0625 18 12.0719 18 11C18 8.90937 16.3281 7.11875 13.9594 6.37187C13.9875 6.57812 14 6.7875 14 7C14 10.3094 10.6344 13 6.5 13C6.1625 13 5.83437 12.975 5.50938 12.9406C6.49375 14.7375 8.80625 16 11.5 16C12.7812 16 13.9719 15.7125 14.9781 15.2187C15.6594 15.6156 16.6063 16 17.75 16C17.85 16 17.9406 15.9406 17.9781 15.85C18.0187 15.7594 18 15.6531 17.9312 15.5781C17.9219 15.5687 17.2313 14.8219 16.8125 13.875Z"
                                                    fill="#FF0000" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3130_22155">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>(<span>0</span>) Comments</span>
                                </div>
                            </div>
                            <hr>
                            <h2><a href="blog-details" class="title mb-3">CD Lady Dior Mini
                                    (Special) 08</a></h2>
                            <p class="mb-3">Lorem ipsum dolor sit amet consecttur adipiscing elit. Pellentesque sagittis
                                sit amet
                                felis
                                lobortis.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/image/portfolio-details/6.webp" alt="">
                            <div class="p-date d-inline-flex">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.125 16.3125C1.125 17.2441 1.88086 18 2.8125 18H15.1875C16.1191 18 16.875 17.2441 16.875 16.3125V6.75H1.125V16.3125ZM12.375 9.42188C12.375 9.18984 12.5648 9 12.7969 9H14.2031C14.4352 9 14.625 9.18984 14.625 9.42188V10.8281C14.625 11.0602 14.4352 11.25 14.2031 11.25H12.7969C12.5648 11.25 12.375 11.0602 12.375 10.8281V9.42188ZM12.375 13.9219C12.375 13.6898 12.5648 13.5 12.7969 13.5H14.2031C14.4352 13.5 14.625 13.6898 14.625 13.9219V15.3281C14.625 15.5602 14.4352 15.75 14.2031 15.75H12.7969C12.5648 15.75 12.375 15.5602 12.375 15.3281V13.9219ZM7.875 9.42188C7.875 9.18984 8.06484 9 8.29688 9H9.70312C9.93516 9 10.125 9.18984 10.125 9.42188V10.8281C10.125 11.0602 9.93516 11.25 9.70312 11.25H8.29688C8.06484 11.25 7.875 11.0602 7.875 10.8281V9.42188ZM7.875 13.9219C7.875 13.6898 8.06484 13.5 8.29688 13.5H9.70312C9.93516 13.5 10.125 13.6898 10.125 13.9219V15.3281C10.125 15.5602 9.93516 15.75 9.70312 15.75H8.29688C8.06484 15.75 7.875 15.5602 7.875 15.3281V13.9219ZM3.375 9.42188C3.375 9.18984 3.56484 9 3.79688 9H5.20312C5.43516 9 5.625 9.18984 5.625 9.42188V10.8281C5.625 11.0602 5.43516 11.25 5.20312 11.25H3.79688C3.56484 11.25 3.375 11.0602 3.375 10.8281V9.42188ZM3.375 13.9219C3.375 13.6898 3.56484 13.5 3.79688 13.5H5.20312C5.43516 13.5 5.625 13.6898 5.625 13.9219V15.3281C5.625 15.5602 5.43516 15.75 5.20312 15.75H3.79688C3.56484 15.75 3.375 15.5602 3.375 15.3281V13.9219ZM15.1875 2.25H13.5V0.5625C13.5 0.253125 13.2469 0 12.9375 0H11.8125C11.5031 0 11.25 0.253125 11.25 0.5625V2.25H6.75V0.5625C6.75 0.253125 6.49687 0 6.1875 0H5.0625C4.75312 0 4.5 0.253125 4.5 0.5625V2.25H2.8125C1.88086 2.25 1.125 3.00586 1.125 3.9375V5.625H16.875V3.9375C16.875 3.00586 16.1191 2.25 15.1875 2.25Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span>June 10, 2022</span>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <div class="d-flex user-intarantion">
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.875 9C10.3605 9 12.375 6.98555 12.375 4.5C12.375 2.01445 10.3605 0 7.875 0C5.38945 0 3.375 2.01445 3.375 4.5C3.375 6.98555 5.38945 9 7.875 9ZM11.025 10.125H10.4379C9.65742 10.4836 8.78906 10.6875 7.875 10.6875C6.96094 10.6875 6.09609 10.4836 5.31211 10.125H4.725C2.11641 10.125 0 12.2414 0 14.85V16.3125C0 17.2441 0.755859 18 1.6875 18H14.0625C14.9941 18 15.75 17.2441 15.75 16.3125V14.85C15.75 12.2414 13.6336 10.125 11.025 10.125Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Admin</span>

                                </div>
                                <div class="separetor"></div>
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3130_22156)">
                                                <path
                                                    d="M13 7C13 4.2375 10.0906 2 6.5 2C2.90937 2 0 4.2375 0 7C0 8.07187 0.440625 9.05937 1.1875 9.875C0.76875 10.8187 0.078125 11.5687 0.06875 11.5781C0 11.65 -0.01875 11.7562 0.021875 11.85C0.0625 11.9437 0.15 12 0.25 12C1.39375 12 2.34062 11.6156 3.02187 11.2187C4.02812 11.7094 5.21875 12 6.5 12C10.0906 12 13 9.7625 13 7ZM16.8125 13.875C17.5594 13.0625 18 12.0719 18 11C18 8.90937 16.3281 7.11875 13.9594 6.37187C13.9875 6.57812 14 6.7875 14 7C14 10.3094 10.6344 13 6.5 13C6.1625 13 5.83437 12.975 5.50938 12.9406C6.49375 14.7375 8.80625 16 11.5 16C12.7812 16 13.9719 15.7125 14.9781 15.2187C15.6594 15.6156 16.6063 16 17.75 16C17.85 16 17.9406 15.9406 17.9781 15.85C18.0187 15.7594 18 15.6531 17.9312 15.5781C17.9219 15.5687 17.2313 14.8219 16.8125 13.875Z"
                                                    fill="#FF0000" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3130_22156">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>(<span>0</span>) Comments</span>
                                </div>
                            </div>
                            <hr>
                            <h2><a href="blog-details" class="title mb-3">CD Lady Dior Mini
                                    (Special) 08</a></h2>
                            <p class="mb-3">Lorem ipsum dolor sit amet consecttur adipiscing elit. Pellentesque sagittis
                                sit amet
                                felis
                                lobortis.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/image/portfolio-details/7.webp" alt="">
                            <div class="p-date d-inline-flex">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.125 16.3125C1.125 17.2441 1.88086 18 2.8125 18H15.1875C16.1191 18 16.875 17.2441 16.875 16.3125V6.75H1.125V16.3125ZM12.375 9.42188C12.375 9.18984 12.5648 9 12.7969 9H14.2031C14.4352 9 14.625 9.18984 14.625 9.42188V10.8281C14.625 11.0602 14.4352 11.25 14.2031 11.25H12.7969C12.5648 11.25 12.375 11.0602 12.375 10.8281V9.42188ZM12.375 13.9219C12.375 13.6898 12.5648 13.5 12.7969 13.5H14.2031C14.4352 13.5 14.625 13.6898 14.625 13.9219V15.3281C14.625 15.5602 14.4352 15.75 14.2031 15.75H12.7969C12.5648 15.75 12.375 15.5602 12.375 15.3281V13.9219ZM7.875 9.42188C7.875 9.18984 8.06484 9 8.29688 9H9.70312C9.93516 9 10.125 9.18984 10.125 9.42188V10.8281C10.125 11.0602 9.93516 11.25 9.70312 11.25H8.29688C8.06484 11.25 7.875 11.0602 7.875 10.8281V9.42188ZM7.875 13.9219C7.875 13.6898 8.06484 13.5 8.29688 13.5H9.70312C9.93516 13.5 10.125 13.6898 10.125 13.9219V15.3281C10.125 15.5602 9.93516 15.75 9.70312 15.75H8.29688C8.06484 15.75 7.875 15.5602 7.875 15.3281V13.9219ZM3.375 9.42188C3.375 9.18984 3.56484 9 3.79688 9H5.20312C5.43516 9 5.625 9.18984 5.625 9.42188V10.8281C5.625 11.0602 5.43516 11.25 5.20312 11.25H3.79688C3.56484 11.25 3.375 11.0602 3.375 10.8281V9.42188ZM3.375 13.9219C3.375 13.6898 3.56484 13.5 3.79688 13.5H5.20312C5.43516 13.5 5.625 13.6898 5.625 13.9219V15.3281C5.625 15.5602 5.43516 15.75 5.20312 15.75H3.79688C3.56484 15.75 3.375 15.5602 3.375 15.3281V13.9219ZM15.1875 2.25H13.5V0.5625C13.5 0.253125 13.2469 0 12.9375 0H11.8125C11.5031 0 11.25 0.253125 11.25 0.5625V2.25H6.75V0.5625C6.75 0.253125 6.49687 0 6.1875 0H5.0625C4.75312 0 4.5 0.253125 4.5 0.5625V2.25H2.8125C1.88086 2.25 1.125 3.00586 1.125 3.9375V5.625H16.875V3.9375C16.875 3.00586 16.1191 2.25 15.1875 2.25Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span>June 10, 2022</span>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <div class="d-flex user-intarantion">
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.875 9C10.3605 9 12.375 6.98555 12.375 4.5C12.375 2.01445 10.3605 0 7.875 0C5.38945 0 3.375 2.01445 3.375 4.5C3.375 6.98555 5.38945 9 7.875 9ZM11.025 10.125H10.4379C9.65742 10.4836 8.78906 10.6875 7.875 10.6875C6.96094 10.6875 6.09609 10.4836 5.31211 10.125H4.725C2.11641 10.125 0 12.2414 0 14.85V16.3125C0 17.2441 0.755859 18 1.6875 18H14.0625C14.9941 18 15.75 17.2441 15.75 16.3125V14.85C15.75 12.2414 13.6336 10.125 11.025 10.125Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Admin</span>

                                </div>
                                <div class="separetor"></div>
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3130_22157)">
                                                <path
                                                    d="M13 7C13 4.2375 10.0906 2 6.5 2C2.90937 2 0 4.2375 0 7C0 8.07187 0.440625 9.05937 1.1875 9.875C0.76875 10.8187 0.078125 11.5687 0.06875 11.5781C0 11.65 -0.01875 11.7562 0.021875 11.85C0.0625 11.9437 0.15 12 0.25 12C1.39375 12 2.34062 11.6156 3.02187 11.2187C4.02812 11.7094 5.21875 12 6.5 12C10.0906 12 13 9.7625 13 7ZM16.8125 13.875C17.5594 13.0625 18 12.0719 18 11C18 8.90937 16.3281 7.11875 13.9594 6.37187C13.9875 6.57812 14 6.7875 14 7C14 10.3094 10.6344 13 6.5 13C6.1625 13 5.83437 12.975 5.50938 12.9406C6.49375 14.7375 8.80625 16 11.5 16C12.7812 16 13.9719 15.7125 14.9781 15.2187C15.6594 15.6156 16.6063 16 17.75 16C17.85 16 17.9406 15.9406 17.9781 15.85C18.0187 15.7594 18 15.6531 17.9312 15.5781C17.9219 15.5687 17.2313 14.8219 16.8125 13.875Z"
                                                    fill="#FF0000" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3130_22157">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>(<span>0</span>) Comments</span>
                                </div>
                            </div>
                            <hr>
                            <h2><a href="blog-details" class="title mb-3">CD Lady Dior Mini
                                    (Special) 08</a></h2>
                            <p class="mb-3">Lorem ipsum dolor sit amet consecttur adipiscing elit. Pellentesque sagittis
                                sit amet
                                felis
                                lobortis.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/image/portfolio-details/8.webp" alt="">
                            <div class="p-date d-inline-flex">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.125 16.3125C1.125 17.2441 1.88086 18 2.8125 18H15.1875C16.1191 18 16.875 17.2441 16.875 16.3125V6.75H1.125V16.3125ZM12.375 9.42188C12.375 9.18984 12.5648 9 12.7969 9H14.2031C14.4352 9 14.625 9.18984 14.625 9.42188V10.8281C14.625 11.0602 14.4352 11.25 14.2031 11.25H12.7969C12.5648 11.25 12.375 11.0602 12.375 10.8281V9.42188ZM12.375 13.9219C12.375 13.6898 12.5648 13.5 12.7969 13.5H14.2031C14.4352 13.5 14.625 13.6898 14.625 13.9219V15.3281C14.625 15.5602 14.4352 15.75 14.2031 15.75H12.7969C12.5648 15.75 12.375 15.5602 12.375 15.3281V13.9219ZM7.875 9.42188C7.875 9.18984 8.06484 9 8.29688 9H9.70312C9.93516 9 10.125 9.18984 10.125 9.42188V10.8281C10.125 11.0602 9.93516 11.25 9.70312 11.25H8.29688C8.06484 11.25 7.875 11.0602 7.875 10.8281V9.42188ZM7.875 13.9219C7.875 13.6898 8.06484 13.5 8.29688 13.5H9.70312C9.93516 13.5 10.125 13.6898 10.125 13.9219V15.3281C10.125 15.5602 9.93516 15.75 9.70312 15.75H8.29688C8.06484 15.75 7.875 15.5602 7.875 15.3281V13.9219ZM3.375 9.42188C3.375 9.18984 3.56484 9 3.79688 9H5.20312C5.43516 9 5.625 9.18984 5.625 9.42188V10.8281C5.625 11.0602 5.43516 11.25 5.20312 11.25H3.79688C3.56484 11.25 3.375 11.0602 3.375 10.8281V9.42188ZM3.375 13.9219C3.375 13.6898 3.56484 13.5 3.79688 13.5H5.20312C5.43516 13.5 5.625 13.6898 5.625 13.9219V15.3281C5.625 15.5602 5.43516 15.75 5.20312 15.75H3.79688C3.56484 15.75 3.375 15.5602 3.375 15.3281V13.9219ZM15.1875 2.25H13.5V0.5625C13.5 0.253125 13.2469 0 12.9375 0H11.8125C11.5031 0 11.25 0.253125 11.25 0.5625V2.25H6.75V0.5625C6.75 0.253125 6.49687 0 6.1875 0H5.0625C4.75312 0 4.5 0.253125 4.5 0.5625V2.25H2.8125C1.88086 2.25 1.125 3.00586 1.125 3.9375V5.625H16.875V3.9375C16.875 3.00586 16.1191 2.25 15.1875 2.25Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span>June 10, 2022</span>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <div class="d-flex user-intarantion">
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.875 9C10.3605 9 12.375 6.98555 12.375 4.5C12.375 2.01445 10.3605 0 7.875 0C5.38945 0 3.375 2.01445 3.375 4.5C3.375 6.98555 5.38945 9 7.875 9ZM11.025 10.125H10.4379C9.65742 10.4836 8.78906 10.6875 7.875 10.6875C6.96094 10.6875 6.09609 10.4836 5.31211 10.125H4.725C2.11641 10.125 0 12.2414 0 14.85V16.3125C0 17.2441 0.755859 18 1.6875 18H14.0625C14.9941 18 15.75 17.2441 15.75 16.3125V14.85C15.75 12.2414 13.6336 10.125 11.025 10.125Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Admin</span>

                                </div>
                                <div class="separetor"></div>
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3130_22158)">
                                                <path
                                                    d="M13 7C13 4.2375 10.0906 2 6.5 2C2.90937 2 0 4.2375 0 7C0 8.07187 0.440625 9.05937 1.1875 9.875C0.76875 10.8187 0.078125 11.5687 0.06875 11.5781C0 11.65 -0.01875 11.7562 0.021875 11.85C0.0625 11.9437 0.15 12 0.25 12C1.39375 12 2.34062 11.6156 3.02187 11.2187C4.02812 11.7094 5.21875 12 6.5 12C10.0906 12 13 9.7625 13 7ZM16.8125 13.875C17.5594 13.0625 18 12.0719 18 11C18 8.90937 16.3281 7.11875 13.9594 6.37187C13.9875 6.57812 14 6.7875 14 7C14 10.3094 10.6344 13 6.5 13C6.1625 13 5.83437 12.975 5.50938 12.9406C6.49375 14.7375 8.80625 16 11.5 16C12.7812 16 13.9719 15.7125 14.9781 15.2187C15.6594 15.6156 16.6063 16 17.75 16C17.85 16 17.9406 15.9406 17.9781 15.85C18.0187 15.7594 18 15.6531 17.9312 15.5781C17.9219 15.5687 17.2313 14.8219 16.8125 13.875Z"
                                                    fill="#FF0000" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3130_22158">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>(<span>0</span>) Comments</span>
                                </div>
                            </div>
                            <hr>
                            <h2><a href="blog-details" class="title mb-3">CD Lady Dior Mini
                                    (Special) 08</a></h2>
                            <p class="mb-3">Lorem ipsum dolor sit amet consecttur adipiscing elit. Pellentesque sagittis
                                sit amet
                                felis
                                lobortis.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <div class="position-relative">
                            <img class="img-fluid" src="assets/image/portfolio-details/9.webp" alt="">
                            <div class="p-date d-inline-flex">
                                <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.125 16.3125C1.125 17.2441 1.88086 18 2.8125 18H15.1875C16.1191 18 16.875 17.2441 16.875 16.3125V6.75H1.125V16.3125ZM12.375 9.42188C12.375 9.18984 12.5648 9 12.7969 9H14.2031C14.4352 9 14.625 9.18984 14.625 9.42188V10.8281C14.625 11.0602 14.4352 11.25 14.2031 11.25H12.7969C12.5648 11.25 12.375 11.0602 12.375 10.8281V9.42188ZM12.375 13.9219C12.375 13.6898 12.5648 13.5 12.7969 13.5H14.2031C14.4352 13.5 14.625 13.6898 14.625 13.9219V15.3281C14.625 15.5602 14.4352 15.75 14.2031 15.75H12.7969C12.5648 15.75 12.375 15.5602 12.375 15.3281V13.9219ZM7.875 9.42188C7.875 9.18984 8.06484 9 8.29688 9H9.70312C9.93516 9 10.125 9.18984 10.125 9.42188V10.8281C10.125 11.0602 9.93516 11.25 9.70312 11.25H8.29688C8.06484 11.25 7.875 11.0602 7.875 10.8281V9.42188ZM7.875 13.9219C7.875 13.6898 8.06484 13.5 8.29688 13.5H9.70312C9.93516 13.5 10.125 13.6898 10.125 13.9219V15.3281C10.125 15.5602 9.93516 15.75 9.70312 15.75H8.29688C8.06484 15.75 7.875 15.5602 7.875 15.3281V13.9219ZM3.375 9.42188C3.375 9.18984 3.56484 9 3.79688 9H5.20312C5.43516 9 5.625 9.18984 5.625 9.42188V10.8281C5.625 11.0602 5.43516 11.25 5.20312 11.25H3.79688C3.56484 11.25 3.375 11.0602 3.375 10.8281V9.42188ZM3.375 13.9219C3.375 13.6898 3.56484 13.5 3.79688 13.5H5.20312C5.43516 13.5 5.625 13.6898 5.625 13.9219V15.3281C5.625 15.5602 5.43516 15.75 5.20312 15.75H3.79688C3.56484 15.75 3.375 15.5602 3.375 15.3281V13.9219ZM15.1875 2.25H13.5V0.5625C13.5 0.253125 13.2469 0 12.9375 0H11.8125C11.5031 0 11.25 0.253125 11.25 0.5625V2.25H6.75V0.5625C6.75 0.253125 6.49687 0 6.1875 0H5.0625C4.75312 0 4.5 0.253125 4.5 0.5625V2.25H2.8125C1.88086 2.25 1.125 3.00586 1.125 3.9375V5.625H16.875V3.9375C16.875 3.00586 16.1191 2.25 15.1875 2.25Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span>June 10, 2022</span>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <div class="d-flex user-intarantion">
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.875 9C10.3605 9 12.375 6.98555 12.375 4.5C12.375 2.01445 10.3605 0 7.875 0C5.38945 0 3.375 2.01445 3.375 4.5C3.375 6.98555 5.38945 9 7.875 9ZM11.025 10.125H10.4379C9.65742 10.4836 8.78906 10.6875 7.875 10.6875C6.96094 10.6875 6.09609 10.4836 5.31211 10.125H4.725C2.11641 10.125 0 12.2414 0 14.85V16.3125C0 17.2441 0.755859 18 1.6875 18H14.0625C14.9941 18 15.75 17.2441 15.75 16.3125V14.85C15.75 12.2414 13.6336 10.125 11.025 10.125Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </span>
                                    <span>Admin</span>

                                </div>
                                <div class="separetor"></div>
                                <div class="d-flex gap-2 align-items-center">
                                    <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3130_22159)">
                                                <path
                                                    d="M13 7C13 4.2375 10.0906 2 6.5 2C2.90937 2 0 4.2375 0 7C0 8.07187 0.440625 9.05937 1.1875 9.875C0.76875 10.8187 0.078125 11.5687 0.06875 11.5781C0 11.65 -0.01875 11.7562 0.021875 11.85C0.0625 11.9437 0.15 12 0.25 12C1.39375 12 2.34062 11.6156 3.02187 11.2187C4.02812 11.7094 5.21875 12 6.5 12C10.0906 12 13 9.7625 13 7ZM16.8125 13.875C17.5594 13.0625 18 12.0719 18 11C18 8.90937 16.3281 7.11875 13.9594 6.37187C13.9875 6.57812 14 6.7875 14 7C14 10.3094 10.6344 13 6.5 13C6.1625 13 5.83437 12.975 5.50938 12.9406C6.49375 14.7375 8.80625 16 11.5 16C12.7812 16 13.9719 15.7125 14.9781 15.2187C15.6594 15.6156 16.6063 16 17.75 16C17.85 16 17.9406 15.9406 17.9781 15.85C18.0187 15.7594 18 15.6531 17.9312 15.5781C17.9219 15.5687 17.2313 14.8219 16.8125 13.875Z"
                                                    fill="#FF0000" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3130_22159">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>(<span>0</span>) Comments</span>
                                </div>
                            </div>
                            <hr>
                            <h2><a href="blog-details" class="title mb-3">CD Lady Dior Mini
                                    (Special) 08</a></h2>
                            <p class="mb-3">Lorem ipsum dolor sit amet consecttur adipiscing elit. Pellentesque sagittis
                                sit amet
                                felis
                                lobortis.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="pagination d-flex justify-content-center">
                <ul>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">→</a></li>
                </ul>
            </nav>


        </section>
        <!--  Portfolio card section end-->
        <!-- Free Consultaion Start -->
        <section class="bg-dark text-white text-center consultation-today-section"
            style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('assets/image/consultation-today.webp') center/cover;">
            <div class="consultation-today-container">
                <h2 class="mb-4 title-1">Get Your Free Consultation Today</h2>
                <p>
                    Get a website that looks great and converts visitors. Choose the right digital solution for your
                    business. Let’s create something fast, modern, and affordable.
                </p>
                <a href="#" class="contact-us-btn m-auto flipup-hover">
                    <img src="assets/image/contact-us.svg" alt="Free Consultation"> Free Consultation
                </a>
            </div>
        </section>
        <!-- Free Consultaion End -->
    </main>

    <?php include('./partial/footer.php'); ?>
    <script src="assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="assets/lenis/package/dist/lenis.min.js" defer></script>
    <script src="assets/js/common-js.js" defer></script>

</body>

</html>