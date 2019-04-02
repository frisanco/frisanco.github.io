<?php
$open = true;
$view = new Site\View();
?>

<!DOCTYPE html>
<html>
  <head>
    <?php $view->head(); ?>
  </head>
  <body>

    <?php $view->header(); ?>

<br>

  <div class="Buttons">
    <button id="about" onclick="aboutFunction()" title="About Me!"> About </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button id="education" onclick="educationFunction()" title="Education"> Education </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button id="workexp" onclick="workFunction()" title="Work Experiences"> Work </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button id="crt" onclick="certFunction()" title="Certifications"> Certifications </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button id="project" onclick="projectsFunction()" title="Projects"> Projects </button>
  </div>

  <div class="About">
    <h2 id="about me"> About Me </h2>
    <p> My name is Benjamin Frisanco, and I am a senior at Michigan State University. I am currently studying Computer Science
    with a minor in Information Technology. I grew up in Crystal Falls, a small town in Michigan's Upper Peninsula. I have always
    been fascinated with computers and computer networks, and I plan to one day work as a Network and Security Adminsitrator for
    an IT firm or equivalent.</p>
  </div>

<br>

  <div class="Education">
    <h2 id="edu"> Education </h2>
    <dl>
      <dt> Michigan State University (2015-2019) </dt>
       <dd> &nbsp;&nbsp;&nbsp;&nbsp;B.S., Computer Science </dd>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;Minor in Information Technology</dd>
    </dl>
  </div>

<br>

  <div class="Work">
    <h2 id="work"> Work Experiences </h2>
    <dl>
      <dt> Sentinel Technologies, Inc. </dt>
        <dd> Crystal Falls, MI; Downers Grove, IL; Lansing, MI </dd>
        <dd><i> Bench Technician / Onboarding Analyst </i></dd>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;·	Hardware repair on computers, printers, and mobile devices; perform first-tier software support and installation to ensure maximum customer satisfaction and product understanding </dd>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;·	Install and configure computers, printers, and physical networking equipment in home and business settings to gain better understanding of the technical requirements of each location </dd>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;·	Onboard customer routing, switching, wireless, and security devices into monitoring system; create, analyze, and troubleshoot network configurations and diagrams to ensure optimal network performance </dd>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;·	Manage product inventory and client transactions to achieve maximum customer satisfaction </dd>
    </dl>
    <dl>
      <dt> Eli Broad College of Business </dt>
        <dd> East Lansing, MI </dd>
        <dd><i> Student Computer Technician </i></dd>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;·	Perform hardware repair and troubleshooting on computers, printers, and mobile devices to ensure workability among faculty members </dd>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;·	Provide first-tier software support for various data analytics applications and email clients for successful communication between departments both inside and outside of the college </dd>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;·	Assist with and oversee the deployment and administration of MacOS, along with Microsoft Windows 7, 8.1, and 10 to efficiently inform and assist users of various computer operating systems </dd>
    </dl>
    <dl>
      <dt> Auto-Owners Insurance </dt>
        <dd> Lansing, MI </dd>
        <dd><i> Network Administration Intern </i></dd>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;·	TBA </dd>
    </dl>
  </div>

<br>

  <div class="Certifications">
    <h2 id="certs"> Certifications </h2>
    <dl>
      <dt> Cisco </dt>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;Cisco Certified Entry Network Technician (CCENT) </dd>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;Cisco Certified Network Associate Routing & Switching (CCNA) </dd>
    </dl>
  </div>

<br>

  <div class="Projects">
    <h2 id="proj"> Projects </h2>
    <dl>
      <dt> Web Design </dt>
        <dd> &nbsp;&nbsp;&nbsp;&nbsp;Personal Website with HTML5, CSS, and JavaScript </dd>
    </dl>
  </div>

<br>

  <?php $view->footer(); ?>

  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

  <!-- JavaScript in page.js -->
  <script src="page.js"></script>

  </body>
</html>
