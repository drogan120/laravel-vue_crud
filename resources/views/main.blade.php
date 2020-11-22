<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Laravel, initial-scale=1.0">
    <title>Larvel Crud with vue</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
<body>
    <div id="app">
        <navbar-component></navbar-component>
        <router-view></router-view>
        <footer-component></footer-component>
    </div>
<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
