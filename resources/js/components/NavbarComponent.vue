<template>
    <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-light"
    >
        <a class="navbar-brand" href="#">
            <img
                src="/vue.png"
                width="30"
                height="30"
                class="d-inline-block align-top"
                alt=""
            />
            Laravel Vue
        </a>
         <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <router-link class="nav-link" to="/">Home </router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/about"
                        >About</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/users"
                        >Users</router-link
                    >
                </li>
            </ul>
        </div>
    </nav>
</template>
