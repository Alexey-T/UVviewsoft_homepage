




<?php
  array_shift($argv);
  if (count($argv) == 0) { echo "Arguments missing"; exit; }

  //Constants:
  $ww = 780;          //Table width
  $ww2 = 155;         //Navigation width

  //Params:
  $afile = $argv[0];
  $aname = $argv[1];

  $is_index   = ($aname == "Description");
  $is_reg     = ($aname == "Register");
  $is_dl      = ($aname == "Download");
  $is_support = ($aname == "Support");

  function sel($enable)
  {
    if ($enable) { echo 'class="sel"'; } else { echo 'class="text"'; }
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <title>LogViewer Pro<?php if ($is_index) { echo " - Home page"; } else { echo " - ".$aname; } ?></title>
  <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>


<!-- Upper table -->
<table class="adv" width=<?php echo $ww ?> align="center" >
  <!-- Ads -->
  <tr>
    <td class="text" align="center">
      <?php require('Ads\UVTop.htm'); ?>
    </td>
  </tr>
  <tr>
    <td class="text" height="4">
    </td>
  </tr>
</table>

<table class="main" width=<?php echo $ww ?> align="center" >
  <!-- Logo -->
  <tr>
    <td class="text" align="center">

      <table class="noborder" width="100%">
        <tr>
          <td class="text" align="right">
            <?php require('head.php'); ?>
          </td>
        </tr>
      </table>

      <table class="noborder">
        <tr>
          <td class="title_app">
            <img src="img/icon_logo.png" alt="LV logo">
          </td>
          <td class="title_app" width=6>
          </td>

          <td class="title_app">
            <a href="http://www.uvviewsoft.com/logviewer/" class="title">LogViewer Pro</a>
          </td>
        </tr>
      </table>

    </td>
  </tr>

  <tr>
    <td class="text" height="2">
    </td>
  </tr>
</table>
<!-- Upper table end -->


<!-- Main table -->
<table class="main" width=<?php echo $ww ?> align="center" >
  <tr>
    <!-- Navigation cell -->
    <td class="pad" width=<?php echo $ww2 ?> valign="top">
      <table class="noborder" width="100%" >
        <tr>
          <td class="caption_app">
            Navigation
          </td>
        </tr>

        <tr>
          <td class="text" height="16">
          </td>
        </tr>

        <tr>
          <td <?php sel($is_index) ?> >
            &nbsp; <a href="index.htm">Home</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($is_dl) ?> >
            &nbsp; <a href="download.htm">Download</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($is_reg) ?> >
            &nbsp; <a href="register.htm">Register</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($is_support) ?> >
            &nbsp; <a href="support.htm">Support</a>
          </td>
        </tr>

        <tr>
          <td class="text" height="16">
          </td>
        </tr>

        <tr>
          <td class="caption_app">
            Links
          </td>
        </tr>

        <tr>
          <td class="text" height="16">
          </td>
        </tr>

        <!--
        <tr>
          <td class="text" align="center">
            <a href="http://www.softpedia.com/progClean/Universal-Viewer-ATViewer-Clean-56841.html" target="_blank"><img src="img/award_softpedia_sm.gif" alt="Softpedia award" title="Softpedia award"></a>
          </td>
        </tr>

        <tr>
          <td class="text" height="8">
          </td>
        </tr>

        <tr>
          <td class="text" height="8">
          </td>
        </tr>
        -->

        <tr>
          <td class="text" align="center">
            <a href="pad_logviewer.xml" target="_blank"><img src="img/logo_pad.gif" alt="PAD file" title="PAD file"></a>
          </td>
        </tr>

        <tr>
          <td class="text" height="16">
          </td>
        </tr>

      </table>
    </td>
    <!-- Navigation cell end -->

    <!-- Contents cell -->
    <td class="pad" valign="top">
      <table class="noborder" width="100%">
        <!-- Contents caption -->
        <tr>
          <td class="caption_app">
            <?php echo $aname ?>
          </td>
        </tr>
        <!-- Contents gap -->
        <tr>
          <td class="text" height="16">
          </td>
        </tr>
        <!-- Contents text -->
        <tr>
          <td class="text" >
            <?php
              echo file_get_contents($afile, "r")
            ?>
            <p>
          </td>
        </tr>
        <!-- Contents end -->
      </table>
    </td>
    <!-- Contents cell end -->
  </tr>
</table>
<!-- Main table end -->


<!-- Bottom table -->
<table class="adv" width=<?php echo $ww ?> align="center" >
  <tr>
    <td class="text" height="8">
    </td>
  </tr>
  <tr>
    <td class="text" align="center">
      Copyright &copy; UVViewSoft <br>
      Icons by <a href="http://www.readyicons.com" target="_blank" class="title">ReadyIcons.com</a>
    </td>
  </tr>

  <!-- Ads -->
  <tr>
    <td class="text" height="8">
    </td>
  </tr>
  <tr>
    <td class="text" align="center">
      <?php require('Ads\UVTop.htm'); ?>
    </td>
  </tr>
</table>
  <table width=480 align=center>
  <tr>
    <td>
        <hr>
        <?php require("Ads\adLV.php"); ?>
    </td>
  </tr>
  </table>
<!-- Bottom table end -->

</body>
</html>
