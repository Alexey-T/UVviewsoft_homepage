@echo off
set out=..\Site\delphi

php Delphi.php "comp" "Delphi\gradlab.htm"            "GradientLabel"      "1.1.1 (mar 2012)" "380 Kb" "rel" "-" "-"    > %out%\gradlab.htm
php Delphi.php "comp" "Delphi\atviewer.htm"           "ATViewer"           "3.1.0 (jan 2013)" "450 Mb" "rel" "" ""      > %out%\atviewer.htm
php Delphi.php "comp" "Delphi\atbinhex.htm"           "ATBinHex"           "2.8.1 (jan 2013)" "450 Kb" "rel" "" ""      > %out%\atbinhex.htm
php Delphi.php "comp" "Delphi\atimagebox.htm"         "ATImageBox"         "1.7.5 (jan 2012)" "400 Kb" "rel" "-" "-"    > %out%\atimagebox.htm
php Delphi.php "comp" "Delphi\atfilenotification.htm" "ATFileNotification" "1.1.6 (sep 2012)" "240 Kb" "rel" "-" "-"    > %out%\atfilenotification.htm
php Delphi.php "comp" "Delphi\atstreamsearch.htm"     "ATStreamSearch"     "1.2.4 (Oct 2008)" "490 Kb" "rel" "-" "-"    > %out%\atstreamsearch.htm
php Delphi.php "comp" "Delphi\junctions.htm"          "Junctions"          "1.1.3 (Nov 2007)" "40 Kb" "rel" "-" "-"     > %out%\junctions.htm
php Delphi.php "comp" "Delphi\atprintpreview.htm"     "ATPrintPreview"     "1.3.6a (jan 2013)" "480 Kb" "rel"           > %out%\atprintpreview.htm
php Delphi.php "comp" "Delphi\atimagemap.htm"         "ATImageMap"         "1.1.0 (2008)"      "690 Kb" "rel"           > %out%\atimagemap.htm

php Delphi.php "text" "Delphi\news.htm"    "News"       > %out%\index.htm
php Delphi.php "text" "Delphi\support.htm" "Support"    > %out%\support.htm
php Delphi.php "text" "Delphi\donation.htm" "Donation"  > %out%\donation.htm
start  %out%\index.htm

















