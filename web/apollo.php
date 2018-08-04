<HTML>

<HEAD>
<TITLE>WebApollo</TITLE>
<link rel="stylesheet" href="http://www.slimsuite.unsw.edu.au/stylesheets/slimhtml.css" TYPE="text/css" MEDIA="screen">

<style>
p.form {
    color:blue;
}
</style>

</HEAD>

<BODY>

<TABLE width=1170 border=0><TR width=100%>
<TD width=240 valign=top align=LEFT>

 <?php
        readfile("http://www.slimsuite.unsw.edu.au/html/links.html");
 ?>

</TD>
<TD valign=top></TD>

<TD width=900  valign=top>

<?php
        readfile("http://www.slimsuite.unsw.edu.au/html/server_head.html");
 ?>


<?php
        readfile("http://www.slimsuite.unsw.edu.au/html/apollo_genomes.html");
 ?>

<hr>

<h1>WebApollo Genome search tool</h1>

<p>This server allows simple Exonerate or BLAST+ searches of DNA, CDS or protein sequences against one of our WebApollo genomes. Select the genome to search and the WebApollo instance to generate links for. Optionally, tracks to display can be listed under Advanced Options. Private genomes will need a <code>password</code> for access. This password will also be required to access the REST server results.</p>

<p><b>Note:</b> some genomes may have multiple WebApollo annotations. It is the <i>genome</i> status, not the <i>Apollo</i> status that determines password requirements. If no WebApollo ID is selected, no links table will be generated - other search results will still be returned.</p>


<?php
        readfile("http://www.slimsuite.unsw.edu.au/servers/apollo.form");
 ?>


    <pgold><hr>&copy; 2018 RJ Edwards. Contact: <a href="mailto:richard.edwards@unsw.edu.au">richard.edwards@unsw.edu.au</a>.</pgold>

</TD></TR></TABLE>



 </body>

</HTML>
