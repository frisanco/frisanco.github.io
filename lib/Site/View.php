<?php

namespace Site;

class View
{
    public function head() {
        return <<<HTML
    <link href="/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
    integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="page.css">
    <link rel="shortcut icon" href="spartan-helmet-og.ico" type="image/x-icon" />
    <title> Ben Frisanco </title>
HTML;

    }

    public function header() {
        return <<<HTML
  <header>
    <img class="Portrait" src="images/29881A0347e.jpg" alt="Self Portrait" height="200" width="200">
    <h1> Ben Frisanco </h1>
    <h2 id="location"> Okemos, MI | (906) 284-0875 | frisanco@msu.edu </h2>
  </header>
HTML;

    }

    public function footer() {
        return <<<HTML
    <footer>
      <div class="Icons">
        <a href="https://www.facebook.com/bfriz96" target="_blank">
        <img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="40" height="40" align="middle" hspace="15" />
        </a>
        <a href="https://www.linkedin.com/in/frisanco/" target="_blank">
        <img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" width="40" height="40" align="middle" hspace="15" />
        </a>
        <a href="https://msu.joinhandshake.com/users/1841725" target="_blank">
        <img title="Handshake" alt="Handshake" src="https://cdn.uconnectlabs.com/wp-content/uploads/sites/41/2018/02/Handshake_Logo_2.png" width="75" height="40" align="middle" />
        </a>
        <a href="https://github.com/frisanco" target="_blank">
        <img title="GitHub" alt="GitHub" src="https://image.flaticon.com/icons/svg/25/25231.svg" width="40" height="40" align="middle" hspace="15" />
        </a>
        <a href="https://www.hackerrank.com/frisanco" target="_blank">
        <img title="HackerRank" alt="HackerRank" src="https://hrcdn.net/hackerrank/assets/brand/h_mark_medium-a456857be737628eada00d05e5fad5f7.png" width="40" height="40" align="middle" hspace="15" />
        </a>
        <a href="https://www.sololearn.com/Profile/7202002" target="_blank">
        <img title="SoloLearn" alt="Sololearn" src="https://www.sololearn.com/Icons/Courses/0.png" width="40" height="40" align="middle" hspace="15" />
        </a>
        <a href="https://twitter.com/IAmMSYooper" target="_blank">
        <img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="40" height="40" align="middle" hspace="15" />
        </a>
        <a href="https://www.youtube.com/channel/UCrclVA_YAI7jFixClB-msOA" target="_blank">
        <img title="YouTube" alt="YouTube" src="https://www.youtube.com/yt/about/media/images/brand-resources/icons/YouTube_icon_full-color.svg" width="40" height="40" align="middle" hspace="15" />
        </a>
      </div>
    </footer>
HTML;

    }
}