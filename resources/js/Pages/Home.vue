<template>
    <body class="bg-dark-subtle">
        
        <Header ></Header>

        <div class="container" style="padding-top: 15px;">
            <div class="d-flex" style="height: 380px;">
                <div id="div-list-categories" class="bg-body shadow-sm d-none d-md-block">
                    <div class="d-flex align-items-center" style="height: 10%;padding: 5px;">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item"><a class="nav-link fw-bold link-body-emphasis"><svg class="me-2"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                        fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M256 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H256C273.7 32 288 46.33 288 64C288 81.67 273.7 96 256 96zM256 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32 288H256C273.7 288 288 302.3 288 320C288 337.7 273.7 352 256 352zM0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z">
                                        </path>
                                    </svg> Catégories </a></li>
                        </ul>
                    </div>
                    <div id="div-cont-categories">
                        <div>
                            <ul class="nav nav-pills flex-column mb-auto">
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-speedometer2 me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z">
                                            </path>
                                        </svg> Dashboard </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-calendar-plus me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z">
                                            </path>
                                            <path
                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z">
                                            </path>
                                        </svg> Orders </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-grid me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z">
                                            </path>
                                        </svg> Products </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"><svg
                                            class="bi bi-people me-2" xmlns="http://www.w3.org/2000/svg" width="1em"
                                            height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z">
                                            </path>
                                        </svg> Customers </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="div-pub-panel">
                    <div style="padding-bottom: 15px;overflow: hidden;/*height: 17%;*/">
                        <div class="bg-body border rounded-pill border-0 shadow-sm"
                            style="/*border-radius: 15px;*//*border-style: solid;*//*border-color: var(--bs-light-border-subtle);*/overflow: hidden;">
                            <form class="d-flex" method="post">
                                <button
                                    class="btn btn-primary link-light border rounded-pill shadow-none d-flex d-md-none align-items-center"
                                    type="button" style="margin: 2px;outline: none;" data-bs-target="#modal-1"
                                    data-bs-toggle="modal"><i class="fas fa-tasks"></i></button>
                                    <input class="bg-transparent border-0 shadow-none form-control" type="search"
                                    placeholder="Recherche" name="search" data-bs-theme="dark" />
                                    <button class="btn btn-primary link-light border rounded-pill border-0" type="submit"
                                    style="margin: 3px;outline: none;"><i class="fas fa-search"></i></button>
                                </form>
                        </div>
                    </div>
                    <div id="pub-panel" class="carousel slide shadow-sm" data-bs-ride="carousel" data-bs-interval="2000"
                        data-bs-pause="false">
                        <div class="carousel-inner shadow-sm" style="height: 100%;border-radius: 15px;cursor: pointer;">
                            <div id="my-slide" class="carousel-item active bg-dark"></div>
                            <div id="my-slide" class="carousel-item bg-secondary"></div>
                            <div id="my-slide" class="carousel-item bg-body-secondary"></div>
                        </div>
                        <div class="carousel-indicators"><button class="active" type="button" data-bs-target="#pub-panel"
                                data-bs-slide-to="0"></button><button type="button" data-bs-target="#pub-panel"
                                data-bs-slide-to="1"></button><button type="button" data-bs-target="#pub-panel"
                                data-bs-slide-to="2"></button></div>
                    </div>
                </div>
                <div id="div-account" class="d-none d-lg-block">
                    <div style="height: 40%;padding-bottom: 15px;">
                        <div class="bg-body shadow-sm"
                            style="height: 100%;padding: 9px;border-radius: 15px;/*border: 0.7px solid var(--bs-gray-400);*/">
                            <div class="theme-switcher dropdown"><button class="btn btn-link" aria-expanded="false"
                                    data-bs-toggle="dropdown" type="button" style="color: var(--bs-body-color);"><i
                                        class="fas fa-adjust mb-1"></i></button>
                                <div class="dropdown-menu border-0 shadow-sm" style="padding: 0px;"><a id="item-dropdown"
                                        class="dropdown-item d-flex align-items-center" href="#"
                                        data-bs-theme-value="light"><svg class="bi bi-sun-fill opacity-50 me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                                            </path>
                                        </svg>Light</a><a id="item-dropdown" class="dropdown-item d-flex align-items-center"
                                        href="#" data-bs-theme-value="dark"><svg
                                            class="bi bi-moon-stars-fill opacity-50 me-2" xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
                                            </path>
                                            <path
                                                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                                            </path>
                                        </svg>Dark</a><a id="item-dropdown" class="dropdown-item d-flex align-items-center"
                                        href="#" data-bs-theme-value="auto"><svg class="bi bi-circle-half opacity-50 me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                                        </svg>Auto</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-body shadow-sm" style="height: 60%;border-radius: 15px;padding-top: 10px;">
                        <div class="align-content-center" style="padding: 10px;padding-bottom: 0px;">
                            <div class="bg-body-secondary border rounded-pill border-0 d-flex"><input id="input_research"
                                    class="bg-transparent border-0" type="text" placeholder="Recherche"
                                    style="outline: none;" data-bs-theme="dark" /><i class="fas fa-search"
                                    style="margin: 7px;"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="div-pub-sellers" class="bg-body shadow-sm d-flex">
                <div style="width: 30%;"></div>
                <div id="div-pub-articles" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner" style="height: 100%;">
                        <div class="carousel-item active" style="height: 100%;">
                            <div class="d-flex" style="height: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div><button id="btn-panier" class="btn btn-primary border-0 shadow" type="button" data-bs-target="#panier"
                data-bs-toggle="modal" style="outline: none;"><i class="fas fa-shopping-cart"></i></button>
        </div>
        <div id="panier" class="modal fade" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Title</h4><button class="btn-close" type="button" aria-label="Close"
                            data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>The content of your modal.</p>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button"
                            data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                            type="button">Save</button></div>
                </div>
            </div>
        </div>
        <div id="welcom-modal" class="modal fade" role="dialog" tabindex="-1" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down" role="document">
                <div class="modal-content">
                    <div class="modal-body border-0 shadow-lg" style="height: 398px;padding: 0px;">
                        <div class="d-flex flex-column justify-content-center" style="height: 100%;padding: 20px;">
                            <div class="text-center">
                                <div class="d-flex justify-content-center mb-4">
                                    <div class="bg-primary border rounded-circle border-0 shadow-sm" style="padding: 14px;">
                                        <i class="fas fa-user-lock text-body-emphasis" style="font-size: 20px;"></i></div>
                                </div>
                                <h6 class="fw-bold mb-4">Présentation de votre profile</h6>
                                <div>
                                    <p class="d-flex justify-content-center">Le choix du type de compte dépend de vos
                                        besoins spécifiques. Il est donc important de bien comprendre les différences entre
                                        ces deux types de compte avant de vous décider.</p>
                                </div>
                                <div class="mt-4"><button
                                        class="btn btn-primary btn-lg link-light border rounded-pill border-0 shadow"
                                        type="button"
                                        style="font-size: 13px;padding-right: 25px;padding-left: 25px;">Consultez votre
                                        compte</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="offcanvas-menu" class="offcanvas offcanvas-start" tabindex="-1">
            <div class="offcanvas-header"><a
                    class="link-body-emphasis d-flex align-items-center me-md-auto mb-3 mb-md-0 text-decoration-none"
                    href="/"><svg class="bi bi-bootstrap-fill me-3" xmlns="http://www.w3.org/2000/svg" width="1em"
                        height="1em" fill="currentColor" viewBox="0 0 16 16" style="font-size: 25px;">
                        <path
                            d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z">
                        </path>
                        <path
                            d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z">
                        </path>
                    </svg><span class="fs-4">#MPlace officiel</span></a></div>
            <div class="offcanvas-body d-flex flex-column pt-0">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item"><a id="link-nav-menu" class="nav-link link-light bg-primary" href="#"
                            ><i
                                class="fas fa-tachometer-alt me-2"></i><span id="spam-item-nav-3"
                                style="font-size: 15px;">
                                <a href="{ name: 'account' }">Account</a>
                                </span></a></li>
                    <li class="nav-item"><a id="link-nav-menu-3" class="nav-link link-body-emphasis" href="#"><i
                                class="fas fa-utensils me-2"></i><span id="spam-item-nav-4" style="font-size: 15px;"> 
                            Produits</span></a></li>
                <li class="nav-item"><a id="link-nav-menu-4" class="nav-link link-body-emphasis" href="#"><i
                            class="fas fa-shopping-basket me-2"></i><span id="spam-item-nav-5"
                            class="badge bg-primary float-end">+9</span><span id="spam-item-nav-6"
                            style="font-size: 15px;"> Commandes</span></a></li>
                <li class="nav-item"><a id="link-nav-menu-5" class="nav-link link-body-emphasis" href="#"><i
                            class="fas fa-shopping-cart me-2"></i><span id="spam-item-nav-8"
                            style="font-size: 15px;">Ventes</span></a></li>
                <li class="nav-item"><a id="link-nav-menu-6" class="nav-link link-body-emphasis" href="#"><i
                            class="fas fa-donate me-2"></i><span id="spam-item-nav" class="float-end"
                            style="width: 50px;">
                            <div id="carousel-1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><span class="badge bg-primary">$42.500000</span>
                                    </div>
                                    <div class="carousel-item"><span class="badge bg-primary">900Fc</span></div>
                                </div>
                            </div>
                        </span><span id="spam-item-nav-9" style="font-size: 15px;"> Caisse</span></a></li>
                <li class="nav-item"><a id="link-nav-menu-7" class="nav-link link-body-emphasis" href="#"><i
                            class="fas fa-bell me-2" style="width: 14.5px;"></i><span id="spam-item-nav-10"
                            class="badge bg-primary float-end">+9</span><span id="spam-item-nav-11"
                            style="font-size: 15px;"> Notifications</span></a></li>
                <li class="nav-item"><a id="link-nav-menu-8" class="nav-link link-body-emphasis" href="#"><i
                            class="fas fa-user-cog me-2" style="width: 14.5px;"></i><span id="spam-item-nav-12"
                            style="font-size: 15px;"> Utilisateurs</span></a></li>
                <li class="nav-item"><a id="link-nav-menu-1" class="nav-link link-body-emphasis" href="#"><i
                            class="fas fa-user-check me-2" style="width: 14.5px;"></i><span id="spam-item-nav-1"
                            style="font-size: 15px;"> Abonné(es)</span></a></li>
                <li id="count-link-nav-1" class="nav-item">
                    <hr style="width: 87%;margin: auto;" />
                </li>
                <li class="nav-item"><a id="link-nav-menu-9" class="nav-link link-body-emphasis" href="#"><i
                            class="fas fa-cog me-2" style="width: 14.5px;"></i><span id="spam-item-nav-14"
                            style="font-size: 15px;"> Paramètres</span></a></li>
                <li class="nav-item"><a id="link-nav-menu-10" class="nav-link link-body-emphasis" href="#"><i
                            class="fas fa-question-circle me-2"></i><span id="spam-item-nav-15"
                            style="font-size: 15px;">  A propos</span></a></li>
            </ul>
            <div style="padding: 5px;">
                <div class="d-flex" style="margin-bottom: 5px;border-radius: 15px;/*padding: 10px;*/">
                    <div id="dropdown-account" class="dropdown"><a id="btn-account"
                            class="btn btn-primary link-body-emphasis bg-transparent border-0 d-flex align-items-center"
                            aria-expanded="false" data-bs-toggle="dropdown" role="button"><img
                                class="border rounded-circle" style="width: 45px;height: 45px;border-radius: 100%;"
                                src="images/img_profile1.jpg" /><span style="margin-left: 20px;font-size: 15px;">RUHAMYA
                                Elie</span></a>
                        <div class="dropdown-menu text-body-emphasis border-0 shadow"
                            style="padding: 0px;margin: 0px;overflow: hidden;"><a id="item-dropdown"
                                class="dropdown-item" href="#" style="font-size: 13px;"><i class="fas fa-user"></i><span
                                    style="font-size: 14px;">   Profile</span></a><a id="item-dropdown"
                                class="dropdown-item" href="#" style="font-size: 13px;"><i class="fas fa-bell"></i><span
                                    style="font-size: 14px;">   Notifications</span></a>
                            <div class="dropdown-divider" style="margin: 0px;"></div><a id="item-dropdown"
                                class="dropdown-item" href="#" style="font-size: 13px;"><i
                                    class="fas fa-sign-out-alt"></i><span style="font-size: 14px;"> 
                                     Déconnexion</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-1" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Title</h4><button class="btn-close" type="button" aria-label="Close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>The content of your modal.</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal">Close</button><button class="btn btn-primary"
                        type="button">Save</button></div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6">Services</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-secondary" href="#">Web design</a></li>
                        <li><a class="link-secondary" href="#">Development</a></li>
                        <li><a class="link-secondary" href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6">About</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-secondary" href="#">Company</a></li>
                        <li><a class="link-secondary" href="#">Team</a></li>
                        <li><a class="link-secondary" href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6">Careers</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-secondary" href="#">Job openings</a></li>
                        <li><a class="link-secondary" href="#">Employee success</a></li>
                        <li><a class="link-secondary" href="#">Benefits</a></li>
                    </ul>
                </div>
                <div
                    class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                    <div class="fw-bold d-flex align-items-center mb-2"><span
                            class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2"><svg
                                class="bi bi-bezier" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                                </path>
                                <path
                                    d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                                </path>
                            </svg></span><span>Brand</span></div>
                    <p class="text-muted copyright">Sem eleifend donec molestie, integer quisque orci aliquam.</p>
                </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between align-items-center pt-3">
                <p class="text-muted mb-0">Copyright © 2023 Brand</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg"
                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg"
                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg"
                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</template>

<script setup>

import Header from '../Components/Header/Header.vue';

</script>

