<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Laravel')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<style>
$navbar-color: #3c3e42;

/* universal */

body {
  padding-top: 60px;
}

section {
  overflow: auto;
}

textarea {
  resize: vertical;
}

.jumbotron {
  text-align: center;
}

/* typography */

h1, h2, h3, h4, h5, h6 {
  line-height: 1;
}

h1 {
  font-size: 3em;
  letter-spacing: -2px;
  margin-bottom: 30px;
  text-align: center;
}

h2 {
  font-size: 1.2em;
  letter-spacing: -1px;
  margin-bottom: 30px;
  text-align: center;
  font-weight: normal;
  color: #777;
}

p {
  font-size: 1.1em;
  line-height: 1.7em;
}

/* header */

.navbar-inverse {
  background-color: $navbar-color;
}

#logo {
  float: left;
  margin-right: 10px;
  font-size: 1.7em;
  color: #fff;
  text-decoration: none;
  letter-spacing: -1px;
  padding-top: 9px;
  font-weight: bold;
  &:hover {
    color: #fff;
  }
}
/* footer */

footer {
  margin-top: 45px;
  padding-top: 5px;
  border-top: 1px solid #eaeaea;
  color: #777;
}
 a {
    color: #555;
  }

  a:hover {
    color: #222;
  }

  small {
    float: left;
  }

  img.brand-icon {
    width: 17px;
    height: 17px;
  }

  .slogon {
    font-size: 13px;
    font-weight: bold;
  }
  #logout {
  cursor: default;
  &:hover {
    background-color: transparent;
  }
}
  .top {
    margin-top:55px;
  }
  .delete-btn {
  float: right;
  position: relative;
  right: 0;
}
</style>
@yield('style')
<body>

@include('layouts._header')

    <div class="container">
     <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
 <script src="/js/app.js"></script>
</body>
</html>