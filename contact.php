<?php
require_once __DIR__ . '/init.php';
?>
<?php
session_start();   // ← This MUST be at the absolute top

// Rest of your PHP code here
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Our services elevate your brand with tailored solutions in web design, graphic design, UI/UX, and digital marketing. Explore our Food App Design portfolio project." />
    <title>Service Details | Rilo </title>

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
        /* Critical CSS for https://rilo-denation.netlify.app/contact */
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

        small {
            font-size: .875em
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

        button,
        input,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button {
            text-transform: none
        }

        [type=button],
        [type=submit],
        button {
            -webkit-appearance: button
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        textarea {
            resize: vertical
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

        .list-unstyled {
            padding-left: 0;
            list-style: none
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

        @media (min-width:576px) {
            .col-sm-6 {
                flex: 0 0 auto;
                width: 50%
            }
        }

        @media (min-width:768px) {
            .col-md-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .g-md-5 {
                --bs-gutter-x: 3rem
            }

            .g-md-5 {
                --bs-gutter-y: 3rem
            }
        }

        @media (min-width:992px) {
            .col-lg-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-lg-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-lg-6 {
                flex: 0 0 auto;
                width: 50%
            }
        }

        .form-control {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--bs-body-color);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: var(--bs-body-bg);
            background-clip: padding-box;
            border: var(--bs-border-width) solid var(--bs-border-color);
            border-radius: var(--bs-border-radius)
        }

        .form-control::-webkit-date-and-time-value {
            min-width: 85px;
            height: 1.5em;
            margin: 0
        }

        .form-control::-webkit-datetime-edit {
            display: block;
            padding: 0
        }

        .form-control::-webkit-file-upload-button {
            padding: .375rem .75rem;
            margin: -.375rem -.75rem;
            -webkit-margin-end: .75rem;
            margin-inline-end: .75rem;
            color: var(--bs-body-color);
            background-color: var(--bs-tertiary-bg);
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: var(--bs-border-width);
            border-radius: 0
        }

        textarea.form-control {
            min-height: calc(1.5em + .75rem + calc(var(--bs-border-width) * 2))
        }

        .btn {
            --bs-btn-padding-x: 0.75rem;
            --bs-btn-padding-y: 0.375rem;
            --bs-btn-font-family: ;
            --bs-btn-font-size: 1rem;
            --bs-btn-font-weight: 400;
            --bs-btn-line-height: 1.5;
            --bs-btn-color: var(--bs-body-color);
            --bs-btn-bg: transparent;
            --bs-btn-border-width: var(--bs-border-width);
            --bs-btn-border-color: transparent;
            --bs-btn-border-radius: var(--bs-border-radius);
            --bs-btn-hover-border-color: transparent;
            --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
            --bs-btn-disabled-opacity: 0.65;
            --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
            display: inline-block;
            padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
            font-family: var(--bs-btn-font-family);
            font-size: var(--bs-btn-font-size);
            font-weight: var(--bs-btn-font-weight);
            line-height: var(--bs-btn-line-height);
            color: var(--bs-btn-color);
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
            border-radius: var(--bs-btn-border-radius);
            background-color: var(--bs-btn-bg)
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

        .card {
            --bs-card-spacer-y: 1rem;
            --bs-card-spacer-x: 1rem;
            --bs-card-title-spacer-y: 0.5rem;
            --bs-card-title-color: ;
            --bs-card-subtitle-color: ;
            --bs-card-border-width: var(--bs-border-width);
            --bs-card-border-color: var(--bs-border-color-translucent);
            --bs-card-border-radius: var(--bs-border-radius);
            --bs-card-box-shadow: ;
            --bs-card-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
            --bs-card-cap-padding-y: 0.5rem;
            --bs-card-cap-padding-x: 1rem;
            --bs-card-cap-bg: rgba(var(--bs-body-color-rgb), 0.03);
            --bs-card-cap-color: ;
            --bs-card-height: ;
            --bs-card-color: ;
            --bs-card-bg: var(--bs-body-bg);
            --bs-card-img-overlay-padding: 1rem;
            --bs-card-group-margin: 0.75rem;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            height: var(--bs-card-height);
            color: var(--bs-body-color);
            word-wrap: break-word;
            background-color: var(--bs-card-bg);
            background-clip: border-box;
            border: var(--bs-card-border-width) solid var(--bs-card-border-color);
            border-radius: var(--bs-card-border-radius)
        }

        .card-body {
            flex: 1 1 auto;
            padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
            color: var(--bs-card-color)
        }

        :root {
            --bs-btn-close-filter:
        }

        :root {
            --bs-carousel-indicator-active-bg: #fff;
            --bs-carousel-caption-color: #fff;
            --bs-carousel-control-icon-filter:
        }

        .opacity-75 {
            opacity: .75 !important
        }

        .d-flex {
            display: flex !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .border-top {
            border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important
        }

        .border-secondary {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important
        }

        .w-100 {
            width: 100% !important
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .align-items-start {
            align-items: flex-start !important
        }

        .align-items-center {
            align-items: center !important
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .mt-3 {
            margin-top: 1rem !important
        }

        .me-3 {
            margin-right: 1rem !important
        }

        .mb-0 {
            margin-bottom: 0 !important
        }

        .mb-2 {
            margin-bottom: .5rem !important
        }

        .mb-3 {
            margin-bottom: 1rem !important
        }

        .mb-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-5 {
            margin-bottom: 3rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .py-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .pt-4 {
            padding-top: 1.5rem !important
        }

        .pt-5 {
            padding-top: 3rem !important
        }

        .pb-5 {
            padding-bottom: 3rem !important
        }

        .gap-3 {
            gap: 1rem !important
        }

        .text-center {
            text-align: center !important
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .text-white {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important
        }

        @media (min-width:768px) {
            .justify-content-md-end {
                justify-content: flex-end !important
            }

            .mb-md-0 {
                margin-bottom: 0 !important
            }

            .mb-md-4 {
                margin-bottom: 1.5rem !important
            }

            .pb-md-0 {
                padding-bottom: 0 !important
            }

            .text-md-start {
                text-align: left !important
            }

            .text-md-end {
                text-align: right !important
            }
        }

        @media (min-width:992px) {
            .flex-lg-row {
                flex-direction: row !important
            }

            .mb-lg-0 {
                margin-bottom: 0 !important
            }
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

        .footer-section {
            padding: 80px 0;
            background: #00080B
        }

        .footer-col h2 {
            font-weight: 600;
            font-size: 16px;
            line-height: 150%;
            color: #FFFFFF
        }

        .footer-section .footer-col .list-unstyled li a {
            font-weight: 400;
            font-size: 14px;
            line-height: 150%;
            color: #FFFFFF
        }

        .footer-section .footer-col p {
            font-weight: 400;
            font-size: 14px;
            line-height: 150%;
            color: #FFFFFF
        }

        .footer-section .copy-right-text {
            font-weight: 400;
            font-size: 14px;
            line-height: 150%;
            color: #FFFFFF
        }

        .footer-section .policy {
            font-weight: 400;
            font-size: 14px;
            line-height: 150%;
            text-decoration: underline;
            text-decoration-style: solid;
            text-decoration-thickness: 0%;
            color: #FFFFFF
        }

        .footer-section .contact-link {
            color: #fff
        }

        .btn-back-to-top {
            position: fixed;
            bottom: 30px;
            right: 0px;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: #fff;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999
        }

        header {
            padding-top: 20px;
            height: 271px;
            position: unset !important;
            background-color: transparent;
            backdrop-filter: unset;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('../image/brudcumb-image.png')
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

        .contact-query-section .card {
            border: none;
            box-shadow: 0px 0px 0px 0px #00000012, 1px 15px 34px 0px #00000012, 4px 61px 61px 0px #0000000F, 10px 137px 83px 0px #0000000A, 17px 244px 98px 0px #00000003, 27px 381px 107px 0px #00000000
        }

        .contact-query-section .card-body {
            padding: 42px 50px
        }

        .contact-query-section .form-control {
            padding: 15px 21px
        }

        @media screen and (max-width:768px) {
            .contact-query-section .card-body {
                padding: 30px 30px
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px)
            }

            to {
                opacity: 1;
                transform: translateX(0)
            }
        }

        .contact-info-item {
            opacity: 0;
            animation: fadeInLeft 0.8s ease-out forwards;
            padding: 15px;
            border-radius: 10px
        }

        .contact-info-item:nth-child(2) {
            animation-delay: 0.2s
        }

        .contact-info-item:nth-child(3) {
            animation-delay: 0.3s
        }

        .social-section {
            opacity: 0;
            animation: fadeInLeft 0.8s ease-out 0.4s forwards
        }

        .social-icon {
            height: 30px;
            width: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid var(--common-color);
            position: relative;
            overflow: hidden
        }

        .social-icon::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: var(--common-color);
            transform: translate(-50%, -50%);
            z-index: 0
        }

        .social-icon svg {
            position: relative;
            z-index: 1
        }

        .btn-slide-fill {
            position: relative;
            padding: 15px 50px;
            font-size: 16px;
            font-weight: 600;
            color: var(--common-color);
            background: white;
            border: 2px solid var(--common-color);
            border-radius: 6px !important;
            overflow: hidden;
            z-index: 1
        }

        .btn-slide-fill::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(135deg, var(--common-color) 0%, var(--common-color) 100%);
            z-index: -1
        }

        .btn-slide-fill span {
            position: relative;
            z-index: 2
        }

        .content-text {
            color: #333333
        }

        .qurey {
            font-size: 22px
        }

        #contactForm .mb-3 {
            margin-bottom: 10px !important
        }

        .contact-title {
            color: #020922;
            font-weight: 700;
            font-size: 27px
        }
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="preload" href="assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/breadcrumb.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/contact.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/breadcrumb.css">
        <link rel="stylesheet" href="assets/css/contact.css">
    </noscript>
</head>

<body>
    <header>
        <?php include('./partial/nav.php') ?>
        <div class="d-flex w-100 justify-content-center align-items-center position-relative">
            <h3 class="text-center text-white brudcumb-title title-3 animate-title position-absolute">Contact Us</h3>
        </div>
    </header>

    <main>
        <!-- contact section start -->
        <section class="container py-120 contact-query-section ">
            <?php

            // Show success or error message ONLY ONCE
            if (isset($_SESSION['contact_message'])) {
                $msg = $_SESSION['contact_message'];

                if ($msg['status'] === 'success') {
                    echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">';
                    echo $msg['text'];
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                } else {
                    echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">';
                    echo $msg['text'];
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                }
                echo '</div>';

                // Clear the message so it doesn't show again on refresh
                unset($_SESSION['contact_message']);
            }
            ?>
            <div class="row g-md-5 align-items-start flex-column-reverse flex-lg-row">

                <!-- Contact Info -->
                <div class="col-lg-6">
                    <h3 class="title-two mb-4 fade-in-observer contact-title">Address & Contact No</h3>

                    <div class="contact-info-item d-flex gap-3 align-items-start mb-md-4">
                        <span class="floating">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="37" height="37" rx="18.5" fill="white" />
                                <rect x="0.5" y="0.5" width="37" height="37" rx="18.5" stroke="#FF0000" />
                                <path
                                    d="M19.0026 18.6068C18.4777 18.6068 17.9743 18.3983 17.6031 18.0271C17.232 17.6559 17.0234 17.1525 17.0234 16.6276C17.0234 16.1027 17.232 15.5993 17.6031 15.2281C17.9743 14.857 18.4777 14.6484 19.0026 14.6484C19.5275 14.6484 20.0309 14.857 20.4021 15.2281C20.7733 15.5993 20.9818 16.1027 20.9818 16.6276C20.9818 16.8875 20.9306 17.1449 20.8311 17.385C20.7317 17.6251 20.5859 17.8433 20.4021 18.0271C20.2183 18.2109 20.0001 18.3567 19.76 18.4561C19.5199 18.5556 19.2625 18.6068 19.0026 18.6068ZM19.0026 11.0859C17.5329 11.0859 16.1233 11.6698 15.0841 12.7091C14.0448 13.7483 13.4609 15.1579 13.4609 16.6276C13.4609 20.7839 19.0026 26.9193 19.0026 26.9193C19.0026 26.9193 24.5443 20.7839 24.5443 16.6276C24.5443 15.1579 23.9604 13.7483 22.9212 12.7091C21.8819 11.6698 20.4723 11.0859 19.0026 11.0859Z"
                                    fill="#FF0000" />
                            </svg>
                        </span>
                        <p class="content-text mb-0">
                            Room No. 203 (1st Floor), National Sports Council, Old Building, 62/3 Purana Paltan,
                            Dhaka-1000, Bangladesh.
                        </p>
                    </div>

                    <div class="contact-info-item d-flex gap-3 align-items-center mb-md-4">
                        <span class="floating">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="37" height="37" rx="18.5" fill="white" />
                                <rect x="0.5" y="0.5" width="37" height="37" rx="18.5" stroke="#FF0000" />
                                <path
                                    d="M14.7408 18.0421C15.8808 20.2825 17.7175 22.1112 19.9579 23.2592L21.6996 21.5175C21.9133 21.3038 22.23 21.2325 22.5071 21.3275C23.3938 21.6204 24.3517 21.7788 25.3333 21.7788C25.7688 21.7788 26.125 22.135 26.125 22.5704V25.3333C26.125 25.7688 25.7688 26.125 25.3333 26.125C17.8996 26.125 11.875 20.1004 11.875 12.6667C11.875 12.2312 12.2312 11.875 12.6667 11.875H15.4375C15.8729 11.875 16.2292 12.2312 16.2292 12.6667C16.2292 13.6562 16.3875 14.6063 16.6804 15.4929C16.7675 15.77 16.7042 16.0788 16.4825 16.3004L14.7408 18.0421Z"
                                    fill="#FF0000" />
                            </svg>
                        </span>
                        <a href="tel:+8801336097353" class="content-text mb-0">
                            +880 1336-097353
                        </a>
                    </div>

                    <div class="contact-info-item d-flex gap-3 align-items-center mb-md-4">
                        <span class="floating">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="37" height="37" rx="18.5" fill="white" />
                                <rect x="0.5" y="0.5" width="37" height="37" rx="18.5" stroke="#FF0000" />
                                <path
                                    d="M25.3359 12.6641H12.6693C11.7984 12.6641 11.0939 13.3766 11.0939 14.2474L11.0859 23.7474C11.0859 24.6182 11.7984 25.3307 12.6693 25.3307H25.3359C26.2068 25.3307 26.9193 24.6182 26.9193 23.7474V14.2474C26.9193 13.3766 26.2068 12.6641 25.3359 12.6641ZM25.3359 15.8307L19.0026 19.7891L12.6693 15.8307V14.2474L19.0026 18.2057L25.3359 14.2474V15.8307Z"
                                    fill="#FF0000" />
                            </svg>
                        </span>
                        <a href="mailto:bdnpc@yahoo.com" class="content-text mb-0">
                            bdnpc@yahoo.com
                        </a>
                    </div>

                    <div class="social-section pt-5 pb-md-0 pb-5">
                        <h3 class="title-two mb-4 fade-in-observer contact-title">Social Media</h3>
                        <div class="d-flex gap-3">
                            <a href="#" target="_blank" class="social-icon">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.7321 9L12.1768 6.10437H9.39641V4.22531C9.39641 3.43313 9.7848 2.66094 11.03 2.66094H12.294V0.195625C12.294 0.195625 11.147 0 10.0503 0C7.7606 0 6.26394 1.38688 6.26394 3.8975V6.10437H3.71875V9H6.26394V16H9.39641V9H11.7321Z"
                                        fill="#FF0000" />
                                </svg>
                            </a>
                            <a href="#" target="_blank" class="social-icon">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.0103 3.41172C5.02143 3.41172 3.4172 5.01484 3.4172 7.00234C3.4172 8.98984 5.02143 10.593 7.0103 10.593C8.99917 10.593 10.6034 8.98984 10.6034 7.00234C10.6034 5.01484 8.99917 3.41172 7.0103 3.41172ZM7.0103 9.33672C5.72504 9.33672 4.67431 8.28984 4.67431 7.00234C4.67431 5.71484 5.72191 4.66797 7.0103 4.66797C8.29868 4.66797 9.34628 5.71484 9.34628 7.00234C9.34628 8.28984 8.29556 9.33672 7.0103 9.33672V9.33672ZM11.5884 3.26484C11.5884 3.73047 11.2132 4.10234 10.7504 4.10234C10.2844 4.10234 9.9123 3.72734 9.9123 3.26484C9.9123 2.80234 10.2876 2.42734 10.7504 2.42734C11.2132 2.42734 11.5884 2.80234 11.5884 3.26484ZM13.9682 4.11484C13.9151 2.99297 13.6586 1.99922 12.8362 1.18047C12.0169 0.361719 11.0224 0.105469 9.89979 0.0492187C8.74274 -0.0164062 5.27473 -0.0164062 4.11768 0.0492187C2.99816 0.102344 2.00372 0.358594 1.18128 1.17734C0.358841 1.99609 0.105541 2.98984 0.0492527 4.11172C-0.0164176 5.26797 -0.0164176 8.73359 0.0492527 9.88984C0.102414 11.0117 0.358841 12.0055 1.18128 12.8242C2.00372 13.643 2.99503 13.8992 4.11768 13.9555C5.27473 14.0211 8.74274 14.0211 9.89979 13.9555C11.0224 13.9023 12.0169 13.6461 12.8362 12.8242C13.6555 12.0055 13.9119 11.0117 13.9682 9.88984C14.0339 8.73359 14.0339 5.27109 13.9682 4.11484V4.11484ZM12.4734 11.1305C12.2295 11.743 11.7573 12.2148 11.1413 12.4617C10.2188 12.8273 8.02975 12.743 7.0103 12.743C5.99084 12.743 3.79871 12.8242 2.87933 12.4617C2.2664 12.218 1.7942 11.7461 1.54716 11.1305C1.18128 10.2086 1.26572 8.02109 1.26572 7.00234C1.26572 5.98359 1.18441 3.79297 1.54716 2.87422C1.79108 2.26172 2.26328 1.78984 2.87933 1.54297C3.80184 1.17734 5.99084 1.26172 7.0103 1.26172C8.02975 1.26172 10.2219 1.18047 11.1413 1.54297C11.7542 1.78672 12.2264 2.25859 12.4734 2.87422C12.8393 3.79609 12.7549 5.98359 12.7549 7.00234C12.7549 8.02109 12.8393 10.2117 12.4734 11.1305Z"
                                        fill="#FF0000" />
                                </svg>
                            </a>
                            <a href="#" target="_blank" class="social-icon">
                                <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.3652 3.23856C14.3754 3.38069 14.3754 3.52284 14.3754 3.66497C14.3754 7.99997 11.0736 12.9949 5.039 12.9949C3.17985 12.9949 1.45278 12.4568 0 11.5228C0.264151 11.5533 0.518107 11.5634 0.792421 11.5634C2.32645 11.5634 3.73861 11.0457 4.86629 10.1624C3.42367 10.132 2.21471 9.18781 1.79818 7.88831C2.00138 7.91875 2.20455 7.93906 2.41792 7.93906C2.71252 7.93906 3.00716 7.89844 3.28145 7.82741C1.77788 7.52281 0.650167 6.20303 0.650167 4.60913V4.56853C1.087 4.81219 1.595 4.96447 2.13341 4.98475C1.24955 4.39591 0.670493 3.39084 0.670493 2.25378C0.670493 1.64466 0.833011 1.08628 1.11749 0.598969C2.73282 2.58881 5.1609 3.88828 7.88355 4.03044C7.83277 3.78678 7.80228 3.533 7.80228 3.27919C7.80228 1.47206 9.26522 0 11.0837 0C12.0285 0 12.8819 0.395938 13.4813 1.03553C14.2229 0.893406 14.9341 0.619281 15.564 0.243656C15.3201 1.00509 14.802 1.64469 14.1213 2.05075C14.7817 1.97972 15.4217 1.79694 16.011 1.54316C15.564 2.19287 15.0052 2.77153 14.3652 3.23856V3.23856Z"
                                        fill="#FF0000" />
                                </svg>

                            </a>
                            <a href="#" target="_blank" class="social-icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.13591 13.9997H0.231409V4.65281H3.13591V13.9997ZM1.6821 3.37781C0.753331 3.37781 0 2.60906 0 1.68094C6.6477e-09 1.23513 0.17722 0.807572 0.492674 0.492335C0.808129 0.177098 1.23598 0 1.6821 0C2.12822 0 2.55606 0.177098 2.87152 0.492335C3.18697 0.807572 3.36419 1.23513 3.36419 1.68094C3.36419 2.60906 2.61055 3.37781 1.6821 3.37781ZM14.0065 13.9997H11.1083V9.44969C11.1083 8.36531 11.0864 6.97469 9.59817 6.97469C8.08807 6.97469 7.85666 8.15281 7.85666 9.37156V13.9997H4.95529V4.65281H7.74096V5.92781H7.78161C8.16938 5.19344 9.11659 4.41844 10.5298 4.41844C13.4693 4.41844 14.0096 6.35281 14.0096 8.86531V13.9997H14.0065Z"
                                        fill="#FF0000" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Query Form -->
                <div class="col-lg-6 mb-5 mb-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <h3 class="qurey mb-3 fade-in-observer">Query</h3>
                                <p class="content-text mb-0 fade-in-observer">If you have any query about us then you
                                    can direct message from here.</p>
                            </div>

                            <form id="contactForm" action="send.php" method="POST">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email (Required)"
                                        required>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Subject (Required)" required>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="mb-4">
                                    <textarea class="form-control" id="description" name="description" rows="4"
                                        placeholder="Description (Required)" required></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <button type="submit" class="btn w-100 py-3 btn-slide-fill" id="submitBtn">
                                    <span id="btnText">Send Message</span>
                                    <span id="loadingSpinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
                                </button>
                            </form>
                            <div id="formMessage" class="mt-3"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Contact Section End -->
    </main>

    <?php include('./partial/footer.php'); ?>
    <script src="assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="assets/lenis/package/dist/lenis.min.js" defer></script>
    <script src="assets/js/common-js.js" defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("contactForm");
            const submitBtn = document.getElementById("submitBtn"); // Make sure your button has this ID
            const btnText = document.getElementById("btnText");
            const loadingSpinner = document.getElementById("loadingSpinner");

            const email = document.getElementById("email");
            const subject = document.getElementById("subject");
            const description = document.getElementById("description");

            let isSubmitting = false; // Prevent multiple submissions

            function showError(field, message) {
                field.classList.add("is-invalid");
                field.classList.remove("is-valid");
                const feedback = field.nextElementSibling;
                if (feedback && feedback.classList.contains("invalid-feedback")) {
                    feedback.textContent = message;
                }
            }

            function showSuccess(field) {
                field.classList.remove("is-invalid");
                field.classList.add("is-valid");
                const feedback = field.nextElementSibling;
                if (feedback) feedback.textContent = "";
            }

            function validateField(field) {
                const value = field.value.trim();
                const minLength = 8;

                if (!value) {
                    showError(field, "This field is required.");
                    return false;
                }

                if (value.length < minLength) {
                    showError(field, `Must be at least ${minLength} characters long.`);
                    return false;
                }

                if (field.type === "email") {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(value)) {
                        showError(field, "Please enter a valid email address.");
                        return false;
                    }
                }

                showSuccess(field);
                return true;
            }

            // Real-time validation on blur
            [email, subject, description].forEach(field => {
                field.addEventListener("blur", () => validateField(field));
            });

            // Form Submit Handling
            form.addEventListener("submit", function(e) {

                // Prevent multiple submissions
                if (isSubmitting) {
                    e.preventDefault();
                    return false;
                }

                let isValid = true;

                if (!validateField(email)) isValid = false;
                if (!validateField(subject)) isValid = false;
                if (!validateField(description)) isValid = false;

                if (!isValid) {
                    e.preventDefault();
                    return false;
                }

                // === If form is valid ===
                isSubmitting = true;
                submitBtn.disabled = true;

                // Show loading state
                btnText.textContent = "Sending...";
                if (loadingSpinner) loadingSpinner.classList.remove("d-none");

            });
        });
    </script>
</body>

</html>