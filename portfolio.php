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
    <title>Portfolio | Rilo </title>

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
        /* Critical CSS for https://rilo-denation.netlify.app/portfolio */
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

        .list-unstyled {
            padding-left: 0;
            list-style: none
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

        @media (min-width:576px) {
            .col-sm-6 {
                flex: 0 0 auto;
                width: 50%
            }
        }

        @media (min-width:768px) {
            .row-cols-md-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .col-md-6 {
                flex: 0 0 auto;
                width: 50%
            }
        }

        @media (min-width:992px) {
            .row-cols-lg-3>* {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-lg-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-lg-4 {
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

        .justify-content-center {
            justify-content: center !important
        }

        .align-items-center {
            align-items: center !important
        }

        .m-auto {
            margin: auto !important
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
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

        .pt-4 {
            padding-top: 1.5rem !important
        }

        .gap-3 {
            gap: 1rem !important
        }

        .text-center {
            text-align: center !important
        }

        .text-decoration-underline {
            text-decoration: underline !important
        }

        .text-white {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important
        }

        @media (min-width:768px) {
            .justify-content-md-end {
                justify-content: flex-end !important
            }

            .mb-md-0 {
                margin-bottom: 0 !important
            }

            .text-md-start {
                text-align: left !important
            }
        }

        @media (min-width:992px) {
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

        .contact-us-btn {
            height: 44px;
            top: 496px;
            left: 664px;
            gap: 10px;
            padding: 10px 16px;
            border-radius: 56px;
            background: var(--common-color);
            color: #FFFFFF;
            font-family: Poppins;
            font-weight: 500;
            display: inline-flex
        }

        .title-1 {
            font-size: clamp(24px, 5vw, 44px);
            font-family: "Poppins", sans-serif;
            font-weight: 600
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
            background-image: url('../assets/image/brudcumb-image.webp')
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

        .portfolio-card {
            position: relative;
            background: #FFD7D7;
            padding: 24px;
            max-width: 409px;
            overflow: hidden
        }

        .portfolio-card {
            position: relative;
            background: #FFD7D7;
            padding: 24px;
            max-width: 409px;
            margin: 0 auto;
            overflow: hidden
        }

        .portfolio-card-details {
            height: 100%;
            width: 100%;
            background-color: #FF0000;
            position: absolute;
            top: 0;
            left: 0;
            transform: translateY(120%)
        }

        .portfolio-card-details .title {
            font-size: 30px;
            color: white
        }

        .portfolio-card-details a {
            font-size: 20px;
            color: white
        }

        .consultation-today-section {
            padding: 175px 0
        }

        .consultation-today-section h2 {
            font-weight: 600;
            line-height: 110.00000000000001%;
            text-transform: capitalize;
            color: #FFFFFF
        }

        .consultation-today-section p {
            font-weight: 400;
            line-height: 150%;
            text-align: center;
            margin-bottom: 70px
        }
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="preload" href="assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/breadcrumb.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/portfolio.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/breadcrumb.css">
        <link rel="stylesheet" href="assets/css/portfolio.css">
    </noscript>
</head>

<body>
    <header>
        <?php include('./partial/nav.php') ?>

        <div class="d-flex w-100 justify-content-center align-items-center position-relative">
            <h3 class="text-center text-white brudcumb-title title-3 animate-title position-absolute">Portfolio</h3>
        </div>
    </header>

    <main>
        <!-- Portfolio card section start -->
        <section class="container py-120">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Solutions</h2>
                <p class="section-subtitle">Powerful tools to grow your business</p>
            </div>

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">

                <!-- 1. Architect Solution -->
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <img class="img-fluid" height="245" width="353"
                            src="assets/image/portfolio/4.webp"
                            alt="Architect Solution">
                        <div class="portfolio-card-details d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h2 class="title mb-3">Architect Solution</h2>
                                <a class="text-decoration-underline" href="/portfolio-details?id=architect-solution">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Account Management System -->
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <img class="img-fluid" height="245" width="353"
                            src="assets/image/portfolio/3.webp"
                            alt="Account Management">
                        <div class="portfolio-card-details d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h2 class="title mb-3">Account Management</h2>
                                <a class="text-decoration-underline" href="/portfolio-details?id=account-management">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. C-Cart Ecommerce -->
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <img class="img-fluid" height="245" width="353"
                            src="assets/image/portfolio/2.webp"
                            alt="C-Cart">
                        <div class="portfolio-card-details d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h2 class="title mb-3">C-Cart</h2>
                                <a class="text-decoration-underline" href="/portfolio-details?id=c-cart">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Domain & Hosting -->
                <div class="col">
                    <div class="portfolio-card flipup-hover">
                        <img class="img-fluid" height="245" width="353"
                            src="assets/image/portfolio/1.webp"
                            alt="Domain & Hosting">
                        <div class="portfolio-card-details d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h2 class="title mb-3">Domain & Hosting</h2>
                                <a class="text-decoration-underline" href="/portfolio-details?id=domain-hosting">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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
                    <img src="assets/image/contact-us.svg" alt=" Free Consultation"> Free Consultation
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