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
        /* Critical CSS for https://rilo-denation.netlify.app/service-details */
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

        @media (min-width:576px) {
            .col-sm-6 {
                flex: 0 0 auto;
                width: 50%
            }
        }

        @media (min-width:768px) {
            .col-md-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-md-9 {
                flex: 0 0 auto;
                width: 75%
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

        .accordion {
            --bs-accordion-color: var(--bs-body-color);
            --bs-accordion-bg: var(--bs-body-bg);
            --bs-accordion-border-color: var(--bs-border-color);
            --bs-accordion-border-width: var(--bs-border-width);
            --bs-accordion-border-radius: var(--bs-border-radius);
            --bs-accordion-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
            --bs-accordion-btn-padding-x: 1.25rem;
            --bs-accordion-btn-padding-y: 1rem;
            --bs-accordion-btn-color: var(--bs-body-color);
            --bs-accordion-btn-bg: var(--bs-accordion-bg);
            --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none' stroke='%23212529' stroke-linecap='round' stroke-linejoin='round'%3e%3cpath d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
            --bs-accordion-btn-icon-width: 1.25rem;
            --bs-accordion-btn-icon-transform: rotate(-180deg);
            --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none' stroke='%23052c65' stroke-linecap='round' stroke-linejoin='round'%3e%3cpath d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
            --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            --bs-accordion-body-padding-x: 1.25rem;
            --bs-accordion-body-padding-y: 1rem;
            --bs-accordion-active-color: var(--bs-primary-text-emphasis);
            --bs-accordion-active-bg: var(--bs-primary-bg-subtle)
        }

        .accordion-button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
            font-size: 1rem;
            color: var(--bs-accordion-btn-color);
            text-align: left;
            background-color: var(--bs-accordion-btn-bg);
            border: 0;
            border-radius: 0;
            overflow-anchor: none
        }

        .accordion-button:not(.collapsed) {
            color: var(--bs-accordion-active-color);
            background-color: var(--bs-accordion-active-bg);
            box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color)
        }

        .accordion-button:not(.collapsed)::after {
            background-image: var(--bs-accordion-btn-active-icon);
            transform: var(--bs-accordion-btn-icon-transform)
        }

        .accordion-button::after {
            flex-shrink: 0;
            width: var(--bs-accordion-btn-icon-width);
            height: var(--bs-accordion-btn-icon-width);
            margin-left: auto;
            content: "";
            background-image: var(--bs-accordion-btn-icon);
            background-repeat: no-repeat;
            background-size: var(--bs-accordion-btn-icon-width)
        }

        .accordion-header {
            margin-bottom: 0
        }

        .accordion-item {
            color: var(--bs-accordion-color);
            background-color: var(--bs-accordion-bg);
            border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color)
        }

        .accordion-item:first-of-type {
            border-top-left-radius: var(--bs-accordion-border-radius);
            border-top-right-radius: var(--bs-accordion-border-radius)
        }

        .accordion-item:first-of-type>.accordion-header .accordion-button {
            border-top-left-radius: var(--bs-accordion-inner-border-radius);
            border-top-right-radius: var(--bs-accordion-inner-border-radius)
        }

        .accordion-item:not(:first-of-type) {
            border-top: 0
        }

        .accordion-item:last-of-type {
            border-bottom-right-radius: var(--bs-accordion-border-radius);
            border-bottom-left-radius: var(--bs-accordion-border-radius)
        }

        .accordion-item:last-of-type>.accordion-header .accordion-button.collapsed {
            border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
            border-bottom-left-radius: var(--bs-accordion-inner-border-radius)
        }

        .accordion-item:last-of-type>.accordion-collapse {
            border-bottom-right-radius: var(--bs-accordion-border-radius);
            border-bottom-left-radius: var(--bs-accordion-border-radius)
        }

        .accordion-body {
            padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x)
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

        .border-white {
            --bs-border-opacity: 1;
            border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important
        }

        .w-100 {
            width: 100% !important
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-wrap {
            flex-wrap: wrap !important
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

        .mt-5 {
            margin-top: 3rem !important
        }

        .mb-1 {
            margin-bottom: .25rem !important
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

        .gap-2 {
            gap: .5rem !important
        }

        .gap-3 {
            gap: 1rem !important
        }

        .text-center {
            text-align: center !important
        }

        .text-white {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important
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

        .mb-30 {
            margin-bottom: 30px
        }

        .py-100 {
            padding-top: 100px;
            padding-bottom: 100px
        }

        .section-title-common {
            display: inline-block;
            font-size: clamp(20px, 2vw, 26px);
            font-weight: 600;
            background: linear-gradient(90deg, #003763 24.59%, #FF0000 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent
        }

        .gradient-common {
            display: inline-block;
            background: linear-gradient(90deg, #003763 24.59%, #FF0000 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent
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

        .title-4 {
            font-size: clamp(18px, 2vw, 26px);
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

        .accordion {
            max-width: 100%
        }

        .accordion-item {
            border-radius: 8px
        }

        .accordion-body {
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            padding-top: 0px !important;
            color: #4C5254 !important;
            line-height: 150%
        }

        .accordion-button:not(.collapsed) {
            background-color: unset !important;
            box-shadow: unset !important
        }

        .accordion-item {
            border-top: 0 !important
        }

        .accordion-header {
            border-top: 1px solid #e6e6e6 !important;
            border-radius: 8px !important;
            overflow: hidden
        }

        .accordion-item {
            color: #666666;
            border-radius: 8px !important
        }

        .accordion-item>.accordion-header .accordion-button {
            border-top-left-radius: unset !important;
            border-top-right-radius: unset !important;
            box-shadow: unset
        }

        .accordion-button:not(.collapsed)::after {
            background-image: var(--bs-accordion-btn-active-iconn) !important;
            background-size: 80%
        }

        .accordion-button {
            font-weight: 500;
            color: #192023 !important;
            font-size: clamp(16px, 2vw, 18px);
            padding: 20px
        }

        @media screen and (max-width:768px) {
            .accordion-button::after {
                background-size: 16px
            }
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

        .sidebar {
            border-radius: 8px
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0 0 40px 0
        }

        .service-list li a {
            display: flex;
            gap: 6px;
            padding: 10px 0 15px;
            color: #5C5C5C;
            font-size: 18px;
            border-bottom: 1px solid #DFDFDF
        }

        .service-list li a.active {
            color: var(--common-color);
            font-weight: 600
        }

        .arrow-right {
            display: none
        }

        .service-list li a.active .arrow-right {
            display: block
        }

        .lead-magnet {
            padding: 16px;
            margin-bottom: 40px;
            background-color: #FFE6E6
        }

        .lead-magnet h3 {
            font-size: 18px;
            margin-bottom: 20px
        }

        .lead-magnet p {
            font-size: 14px;
            margin-bottom: 20px;
            color: #585858
        }

        .contact-box {
            text-align: center;
            background: #ff0000;
            color: #fff;
            padding: 35px
        }

        .contact-box h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 18px
        }

        .border-white {
            border: 1px solid white
        }
    </style>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="preload" href="assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/breadcrumb.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/service-details.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/breadcrumb.css">
        <link rel="stylesheet" href="assets/css/service-details.css">
    </noscript>

</head>

<body>
    <header>
         <?php include('./partial/nav.php') ?>
        <div class="d-flex w-100 justify-content-center align-items-center position-relative">
            <h3 class="text-center text-white brudcumb-title title-3 animate-title position-absolute">Service Details
            </h3>
        </div>
    </header>

    <main>
        <section class="container py-100">
            <div class="row g-20">
                <div class="col-md-3 col-sm-6 sidebar ">
                    <div class="mb-4">
                        <h2 class="section-title-common mb-4">Service</h2>
                        <ul class="service-list">
                            <li class="">
                                <a class="" href="/web-development">Web Development</a>
                            </li>
                            <li><a class="active" href="/graphics-design"><span class="arrow-right"><svg width="9"
                                            height="15" viewBox="0 0 9 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.2495 8.2495L1.64967 14.8493L0 13.1997L5.775 7.42467L0 1.64967L1.64967 0L8.2495 6.59983C8.46822 6.81862 8.59108 7.11531 8.59108 7.42467C8.59108 7.73402 8.46822 8.03072 8.2495 8.2495Z"
                                                fill="#FF0000" />
                                        </svg>
                                    </span> Graphic Design</a></li>
                            <li><a href="/ui-ux-design">UI/UX Design</a></li>
                            <li><a href="/digital-marketing">Digital Marketing</a></li>
                        </ul>

                        <!-- Lead Magnet Section -->
                        <div class="lead-magnet">
                            <h3>Lead Magnet</h3>
                            <p>
                                At Relo, we focus on clean design, strong structure, and responsive layouts
                                to help your business stand out online. Custom Web Design & Development in Dhaka
                            </p>
                            <a href="#" class="contact-us-btn m-auto flipup-hover">
                                <img src="assets/image/contact-us.svg" alt="Download"> Download
                            </a>
                        </div>

                        <!-- Contact Section -->
                        <div class="contact-box">
                            <h3>Lets Talk</h3>
                            <p class="mb-1">+088 01851670403</p>
                            <p class="mb-30">contact@dnationsoft.com</p>
                            <a href="#" class="contact-us-btn m-auto border-white flipup-hover">
                                <img src="assets/image/contact-us.svg" alt="Whats App"> Whats App
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-sm-6">
                    <div class="content">
                        <h2 class="title-1 gradient-common mb-4">Creative Designs That Make You Stand Out
                        </h2>
                        <p class="mb-4">We create visually compelling designs that capture attention and communicate
                            your brand message effectively. Our designs are not just aesthetically pleasing—they are
                            strategically crafted to leave a lasting impression.</p>
                        <p class="mb-4">Whether you need branding, marketing materials, or social media content, we
                            ensure every design reflects your business identity and speaks to your audience. We focus on
                            clarity, creativity, and consistency to build a strong visual presence across all platforms.
                        </p>
                        <p class="mb-5">With the right design, your brand becomes more recognizable, professional, and
                            impactful.</p>

                        <img class="img-fluid" src="assets/image/services/1.webp" alt="services">

                        <h2 class="title-4 mt-5 mb-4">Benefits</h2>
                        <div class="d-flex gap-3 align-items-center mb-5 flex-wrap">
                            <div class="d-flex gap-2 align-items-center">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 10.46L19.56 7.68L19.9 4L16.29 3.18L14.4 0L11 1.46L7.6 0L5.71 3.18L2.1 3.99L2.44 7.67L0 10.46L2.44 13.24L2.1 16.93L5.71 17.75L7.6 20.93L11 19.46L14.4 20.92L16.29 17.74L19.9 16.92L19.56 13.24L22 10.46ZM9 15.46L5 11.46L6.41 10.05L9 12.63L15.59 6.04L17 7.46L9 15.46Z"
                                        fill="#212121" />
                                </svg>
                                <span>Unique and creative design concepts</span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 10.46L19.56 7.68L19.9 4L16.29 3.18L14.4 0L11 1.46L7.6 0L5.71 3.18L2.1 3.99L2.44 7.67L0 10.46L2.44 13.24L2.1 16.93L5.71 17.75L7.6 20.93L11 19.46L14.4 20.92L16.29 17.74L19.9 16.92L19.56 13.24L22 10.46ZM9 15.46L5 11.46L6.41 10.05L9 12.63L15.59 6.04L17 7.46L9 15.46Z"
                                        fill="#212121" />
                                </svg>
                                <span>Strong brand identity</span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 10.46L19.56 7.68L19.9 4L16.29 3.18L14.4 0L11 1.46L7.6 0L5.71 3.18L2.1 3.99L2.44 7.67L0 10.46L2.44 13.24L2.1 16.93L5.71 17.75L7.6 20.93L11 19.46L14.4 20.92L16.29 17.74L19.9 16.92L19.56 13.24L22 10.46ZM9 15.46L5 11.46L6.41 10.05L9 12.63L15.59 6.04L17 7.46L9 15.46Z"
                                        fill="#212121" />
                                </svg>
                                <span>Eye-catching visuals</span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 10.46L19.56 7.68L19.9 4L16.29 3.18L14.4 0L11 1.46L7.6 0L5.71 3.18L2.1 3.99L2.44 7.67L0 10.46L2.44 13.24L2.1 16.93L5.71 17.75L7.6 20.93L11 19.46L14.4 20.92L16.29 17.74L19.9 16.92L19.56 13.24L22 10.46ZM9 15.46L5 11.46L6.41 10.05L9 12.63L15.59 6.04L17 7.46L9 15.46Z"
                                        fill="#212121" />
                                </svg>
                                <span>Consistent design across platforms</span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 10.46L19.56 7.68L19.9 4L16.29 3.18L14.4 0L11 1.46L7.6 0L5.71 3.18L2.1 3.99L2.44 7.67L0 10.46L2.44 13.24L2.1 16.93L5.71 17.75L7.6 20.93L11 19.46L14.4 20.92L16.29 17.74L19.9 16.92L19.56 13.24L22 10.46ZM9 15.46L5 11.46L6.41 10.05L9 12.63L15.59 6.04L17 7.46L9 15.46Z"
                                        fill="#212121" />
                                </svg>
                                <span>Professional and polished output</span>
                            </div>
                        </div>
                        <h2 class="title-4 mb-4">General Ask</h2>
                        <div class="accordion mb-5" id="faqAccordion">

                            <!-- Item 1 -->
                            <div class="accordion-item flipup-hover mb-3">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What types of design do you offer?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We offer logo design, social media design, branding, and more.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item flipup-hover mb-3">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Can you follow my brand guidelines?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, we strictly follow your brand identity and guidelines.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item flipup-hover mb-3">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        How many revisions do I get?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We offer multiple revisions to ensure your satisfaction.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/contact" class="contact-us-btn m-auto flipup-hover">
                            <img src="assets/image/contact-us.svg" height="24" width="21" alt="contact us">Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </section>
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