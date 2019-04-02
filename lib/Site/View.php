<?php

namespace Site;

class View {
    public function head() {
        return <<<HTML
        <link href="/normalize.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Lobster|Pacifico|Patua+One|Orbitron" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="page.css">
        <link rel="shortcut icon" href="spartan-helmet-og.ico" type="image/x-icon" />
        <title> Ben Frisanco </title>
HTML;
    }
}