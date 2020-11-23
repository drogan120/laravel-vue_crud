<template>
    <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-light"
    >
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
        <a class="navbar-brand" href="#">
            <img
                src="http://localhost/doc/bs4/assets/brand/bootstrap-solid.svg"
                width="30"
                height="30"
                class="d-inline-block align-top"
                alt=""
            />
            Laravel Vue
        </a>
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
            <form class="form-inline my-2 my-lg-0">
                <input
                    class="form-control mr-sm-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                />
                <button
                    class="btn btn-outline-success my-2 my-sm-0"
                    type="submit"
                >
                    Search
                </button>
            </form>
        </div>
    </nav>
</template>
