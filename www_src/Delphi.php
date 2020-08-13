<?php
  array_shift($argv);
  if (count($argv) == 0) { echo "Arguments missing"; exit; }

  //Constants:
  $ww = 780;          //Table width
  $ww2 = 150;         //Navigation width

  //Params:
  $acomp = $argv[0] == "comp";
  $acompsw = $argv[0] == "compsw";
  $afile = $argv[1];
  $aname = $argv[2];
  $aver = $argv[3];
  $asize = $argv[4];
  $abeta = $argv[5] == "beta";
  $abeta_ver = $argv[6];
  $abeta_size = $argv[7];

  function sel($enable)
  {
    if ($enable) { echo 'class="sel"'; } else { echo 'class="text"'; }
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <title>Components for Delphi/C++Builder<?php if ($acomp | $acompsw) { echo " - ".$aname; } ?></title>
  <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Upper table -->
<center>
<table class="noborder" width=<?php echo $ww ?> >
  <tr>
    <td class="title_delphi" align="center">
      Components for Delphi/C++Builder
    </td>
  </tr>
  <tr>
    <td class="text" height="8">
    </td>
  </tr>
</table>
<!-- Upper table end -->

<!-- Main table -->
<table class="main" width=<?php echo $ww ?> >
  <tr>
    <!-- Navigation cell -->
    <td class="pad" width=<?php echo $ww2 ?> valign="top">
      <table class="noborder" width="100%">
        <tr>
          <td class="caption_delphi">
            Navigation
          </td>
        </tr>

        <tr>
          <td class="text" height="16">
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "News") ?> >
            &nbsp; <a href="index.htm">News</a>
          </td>
        </tr>

        <tr>
          <td class="text" >
            &nbsp; Components:
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "ATViewer") ?> >
            &nbsp;&nbsp;&nbsp; <a href="atviewer.htm">ATViewer</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "ATBinHex") ?> >
            &nbsp;&nbsp;&nbsp; <a href="atbinhex.htm">ATBinHex</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "ATImageBox") ?> >
            &nbsp;&nbsp;&nbsp; <a href="atimagebox.htm">ATImageBox</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "ATStreamSearch") ?> >
            &nbsp;&nbsp;&nbsp; <a href="atstreamsearch.htm">ATStreamSearch</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "ATFileNotification") ?> >
            &nbsp;&nbsp;&nbsp; <a href="atfilenotification.htm">ATFileNotification</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "ATPrintPreview") ?> >
            &nbsp;&nbsp;&nbsp; <a href="atprintpreview.htm">ATPrintPreview</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "ATImageMap") ?> >
            &nbsp;&nbsp;&nbsp; <a href="atimagemap.htm">ATImageMap</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "GradientLabel") ?> >
            &nbsp;&nbsp;&nbsp; <a href="gradlab.htm">GradientLabel</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "Junctions") ?> >
            &nbsp;&nbsp;&nbsp; <a href="junctions.htm">Junctions</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "Donation") ?> >
            &nbsp; <a href="donation.htm">Donation</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($aname == "Support") ?> >
            &nbsp; <a href="support.htm">Contact</a>
          </td>
        </tr>

        <tr>
          <td class="text" height="16">
          </td>
        </tr>

        <tr>
          <td class="caption_delphi">
            Links
          </td>
        </tr>

        <tr>
          <td class="text" height="4">
          </td>
        </tr>
        <tr>
          <td class="text" align="center">
            <a href="http://www.torry.net" target="_blank"><img src="img/icon_Torry.gif" alt="Published on Torry" title="Published on Torry"></a>
          </td>
        </tr>

        <tr>
          <td class="text" height="4">
          </td>
        </tr>
        <tr>
          <td class="text" align="center">
            <a href="http://www.trichview.com" target="_blank"><img src="img/icon_RV.gif" alt="RichView" title="RichView"></a>
          </td>
        </tr>
        <tr>
          <td class="text" height="4">
          </td>
        </tr>
      </table>
    </td>
    <!-- Navigation cell end -->

    <!-- Contents cell -->
    <td class="pad" valign="top">
      <table class="noborder" width="100%">
        <tr>
          <td class="caption_delphi">
            <?php echo $aname ?>
          </td>
        </tr>

        <tr>
          <td class="text" height="16">
          </td>
        </tr>

        <tr>
          <td class="text" >
            <!---------------------------------------------->
            <?php
              echo file_get_contents($afile, "r")
            ?>

            <!---------------------------------------------->
            <?php
              if ($acomp) { //------------ Component
            ?>

            <!--
            <p>
            <b>License</b>
            <p>
            Component is a free software and is distributed under
            <a href="http://www.mozilla.org/MPL/" target="_blank">Mozilla Public License</a> Version 1.1.
            -->
            <p>
            <b>Download</b>

            <p>
            Version <?php echo $aver ?> for Delphi 5-XE2, C++Builder 5-2010 <br>
            Download:
            <a href="https://sourceforge.net/projects/atviewer/files/" target=_blank>See SF.net page</a> <br>
            (ATViewer pack contains also other components)

            <?php
              } //----------- Component end
            ?>

            <p>
          </td>
        </tr>
      </table>
    </td>
    <!-- Contents cell end -->
  </tr>
</table>
<!-- Main table end -->

<p>
Copyright &copy; Alexey Torgashin
</p>      
</center>

</body>
</html>
