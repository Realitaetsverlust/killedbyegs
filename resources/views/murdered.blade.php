<html>
<head>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
<header>
    <h1 id="c-mainHeadline">The Epic Game Store Graveyard</h1>
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
                The Epic Game Store Graveyard serves as a list of dead or abandoned games on the store founded by epic games.
            </p>
            <p>
                The information on the Epic Game Store Graveyard were collected by the community. While I try to fact-check everything before it's put up here, I can't 100% guarantee that every detail is correct.
            </p>
            <p>
                In case you come across incorrect information, please do not hesistate to drop me a mail via <a href="mailto:realitaetsverlust@realitaetsverlust.rocks">realitaetsverlust@realitaetsverlust.rocks</a> or contact me via discord: Realitätsverlust#8416.
            </p>
            <p>
                The layout of this site was heaviely inspired by <a href="https://www.killedbygoogle.com">killedbygoogle.com</a>.
            </p>
            <p>
                The source code for this website is open sourced on <a href="https://github.com/Realitaetsverlust/killedbyegs">GitHub</a>. Contributions are welcome.
            </p>
        </div>
    </div>
</footer>
</body>
</html>
