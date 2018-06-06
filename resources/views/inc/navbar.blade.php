<style>
    body {
        font-family: "ITC Avant Garde Gothic LT";
    }

    .topnav {
        overflow: hidden;
        text-align: center;
        background-color: black;
    }

    .topnav a {
        display: inline-block;
        color: #FFFFFF;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 14px;
    }

    .topnav a:hover {
        background-color: #000000;
        color: #878686;
    }

</style>

<div class="topnav">
    <a href="{{ URL::to('/') }}">Home</a>
    <a href="{{ URL::to('/about') }}">About</a>
    <a href="{{ URL::to('/services') }}">Services</a>
    <a href="{{ URL::to('/posts') }}">Blog</a>
</div>