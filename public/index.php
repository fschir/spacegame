<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>SpaceGame9000</title>
</head>
<body>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="../js/login.js"></script>


<div class="jumbotron" align="center">
    <h1 class="display-4">SpaceGame 9000</h1>
    <p class="lead">Der neue Knaller vom ITC</p>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col"></div>
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">GDPR Disclaimer</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="loginPassword">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Eingeloggt bleiben</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                <br /><br />
                <br /><br />
                <br /><br />
                <p> Wenn du noch keinen Account ahst, dann kannst du dich kostenlos registrieren </p>
                <input /><br /><br />
                <input /><br /><br />
                <input /><br /><br />
                <a class="btn btn-primary btn-lg" href="#" role="button">Registrieren</a>
            </div>
        <div class="col"></div>
    </div>
</div>

<footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://net.itc-dortmund.de/"> Florian Schirmer, Robin Hammerla, Max, Lucas Röhler</a>
    </div>
</footer>

</body>
</html>