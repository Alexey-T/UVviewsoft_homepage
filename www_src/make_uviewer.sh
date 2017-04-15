#!/bin/sh
out=../uviewer

php UV.php UV/privacy.htm "Privacy Policy"  > $out/privacy.htm
php UV.php UV/index.htm "Description"  > $out/index.htm
php UV.php UV/screen.htm "Screenshots"  > $out/screen.htm
php UV.php UV/fmt.htm "Formats"  > $out/fmt.htm
php UV.php UV/fmt_vid.htm "Formats: audio/video"  > $out/fmt_vid.htm
php UV.php UV/fmt_raw.htm "Formats: supported cameras"  > $out/fmt_raw.htm
php UV.php UV/download.htm "Download"  > $out/download.htm
php UV.php UV/lister_plugins.htm "Lister plugins"  > $out/lister_plugins.htm
php UV.php UV/awards.htm "Awards"  > $out/awards.htm
php UV.php UV/freepro.htm "Free vs Pro"  > $out/freepro.htm
php UV.php UV/support.htm "Support"  > $out/support.htm
php UV.php UV/register.htm "Buy license"  > $out/register.htm

firefox $out/index.htm
