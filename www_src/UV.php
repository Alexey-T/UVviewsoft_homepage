<?php
  array_shift($argv);
  if (count($argv) == 0) { echo "Arguments missing"; exit; }

  //Constants:
  $ww = 780;  //Table width
  $ww2 = 155; //Navigation width

  //Params:
  $afile = $argv[0];
  $aname = $argv[1];

  $is_index   = ($aname == "Description");
  $is_reg     = (strpos($aname, "Buy") === 0);
  $is_dl      = ($aname == "Download");
  $is_shots   = ($aname == "Screenshots");
  $is_fmt     = (strpos($aname, "Formats") === 0);
  $is_plugins = (strpos($aname, "Lister") === 0);
  $is_faq     = (strpos($aname, "FAQ") === 0);
  $is_freepro = ($aname == "Free vs Pro");
  $is_support = ($aname == "Support");
  $is_awards  = ($aname == "Awards");
  $is_history = (strpos($aname, "What") === 0);

  function langs($enable, $fn)
  {
    if ($enable) {
      //echo '<a href="'.$fn.'-ru.htm"><img src="img/icon_flag_ru.gif" width=15 height=12 alt="Russian" title="Russian"></a> ';
    }
  }

  function sel($enable)
  {
    if ($enable) { echo 'class="sel"'; } else { echo 'class="text"'; }
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <title>Universal Viewer
    <?php if ($is_index) { echo " &mdash; Open many file types: DOCX, XLSX, PDF and more"; }
                    else { echo " &mdash; ".$aname; } ?></title>
  <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>


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
            <img src="img/logo.png" alt="UV logo">
          </td>
          <td class="title_app" width=6>
          </td>
          <td class="title_app">
            <a href="http://www.uvviewsoft.com" class="title">Universal Viewer</a>
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
            &nbsp; <a href="index.htm">Home</a>  <?php langs($is_index, "index") ?>
          </td>
        </tr>

        <tr>
          <td <?php sel($is_freepro) ?> >
            &nbsp; <a href="freepro.htm">Free/Pro</a>  <?php langs($is_freepro, "freepro") ?>
          </td>
        </tr>

        <tr>
          <td <?php sel($is_dl) ?> >
            &nbsp; <a href="download.htm">Download</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($is_reg) ?> >
            &nbsp; <a href="register.htm">Buy license</a>  <?php langs($is_reg, "register") ?>
          </td>
        </tr>

        <tr>
          <td <?php sel($is_shots) ?> >
            &nbsp; <a href="screen.htm">Screenshots</a>  <?php langs($is_shots, "screen") ?>
          </td>
        </tr>

        <tr>
          <td <?php sel($is_fmt) ?> >
            &nbsp; <a href="fmt.htm">Formats</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($is_plugins) ?> >
            &nbsp; <a href="lister_plugins.htm">Lister plugins</a>
          </td>
        </tr>

        <tr>
          <td <?php sel($is_support) ?> >
            &nbsp; <a href="support.htm">Support</a>  <?php langs($is_support, "support") ?>
          </td>
        </tr>

        <tr>
          <td class="text" height="12">
          </td>
        </tr>

        <!--
        <tr>
          <td class="caption_app">
            Partners
          </td>
        </tr>

        <tr>
          <td class="text" height="20">
          </td>
        </tr>
        -->

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

        <!-- Contents text -->
        <tr>
          <td class="text" >
            <br>
            <?php
              echo file_get_contents($afile, "r")
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


<!-- Bottom table -->
<table class="adv" width=<?php echo $ww ?> align="center" >
  <tr>
    <td class="text" height="8">
    </td>
  </tr>
  <tr>
    <td class="text" align="center">
      Copyright &copy; UVviewsoft <br>
      <a href="privacy.htm">Privacy Policy</a>
      <!--<a href="lic.htm">License</a>-->
    </td>
  </tr>

</table>

</body>
</html>
