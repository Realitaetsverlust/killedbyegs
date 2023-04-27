<html>
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
    <h1 id="c-mainHeadline"><i class="fa-solid fa-skull-crossbones"></i> The Epic Game Store Graveyard</h1>
    <p>Here, we mourn the fallen games that were killed by the black hole that is the EGS.</p>
</header>
<main>
    <ul id="e-panelContainer">
        @foreach($jsonContent as $content)
            @include('tile', ['content' => $content])
        @endforeach
    </ul>
</main>
<footer id="s-footer">
    <div>
        <div id="s-footer_content">
            <p>
                The Epic Game Store Graveyard serves as a list of dead or abandoned games on the store founded by Epic Games.
            </p>
            <br>
            <p>
                Information on this website is contributed by the community and may not be 100% accurate.
            </p>
            <p>
                Report any incorrect information to <a href="mailto:realitaetsverlust@realitaetsverlust.rocks">realitaetsverlust@realitaetsverlust.rocks</a> or through Discord: Realitätsverlust#8416.
            </p>
            <br>
            <p>
                The layout of this site was heavily inspired by <a href="https://www.killedbygoogle.com">killedbygoogle.com</a>.
            </p>
            <br>
            <p>
                <a href="https://github.com/Realitaetsverlust/killedbyegs">Source code for this website can be found on GitHub here.</a>. Contributions are welcome.
            </p>
        </div>
    </div>
</footer>
</body>
</html>
