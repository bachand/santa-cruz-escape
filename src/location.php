<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title>Allegra Villa Alla Spiaggia - Location</title>
  <meta name="keywords" content="rental, vacation, Santa Cruz, ocean views, beach house, Allegra Villa Alla Spiaggia, Santa Cruz Escape" />
  <meta name="description" content="Santa Cruz beach house with ocean view for rent." />
  <meta name="rating" content="General" />
  <meta name="revisit-after" content="31 days" />
  <meta name="robots" content="all" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <link rel="stylesheet" href="escape.css" type="text/css" />

  <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA-IEGBo68NxS6PQfJj3P1VxSc-eA-o1jV77oJZry6bcNjmgUW7xSBiiS2MHp88sVHtZ04d4kQtISLSg"
  type="text/javascript"></script>

  <script type="text/javascript">

        //<![CDATA[

        function load()
        {
          if (GBrowserIsCompatible())
          {
            var map = new GMap2(document.getElementById("map"));
            map.setCenter(new GLatLng(36.9607,-121.985931), 18, G_HYBRID_MAP);
            map.addControl(new GMapTypeControl());
            map.addControl(new GSmallMapControl());

            var house = new GMarker(new GLatLng(36.96083,-121.98589));


            GEvent.addListener
            (    house, "click",
              function()
              {
                var html = '<div style="width: 210px;" align="left"><h2>Address:</h2><p style="font-size: small">22020 East Cliff Drive<br>Santa Cruz, CA 95062</p></div>';
                house.openInfoWindowHtml(html);
              }
              );

            map.addOverlay(house);


          }
        }

        //]]>
      </script>

      <?php include_once("analytics.html"); ?>

    </head>

    <body bgcolor="#bcc9fd" onload="load()" onunload="GUnload()">

      <?php include_once("header.php"); ?>

      <div class="mainDiv">
        <table class="mainTable" cellspacing="0" cellpadding="0">
          <!-- Start body of page -->
          <tr>
            <td colspan="2">
              <table width="1000" border="0" cellspacing="0" cellpadding="0" bgcolor="#f8ecc5">
                <tr>
                  <td width="225" valign="top" colspan="2" class="sidebar">
                    <img src="beach.jpg" alt="Beach View" width="225" height="300" /><br />
                    <table border="0" cellspacing="0" cellpadding="0" width="225" height="200">
                      <tr valign="top">
                        <td width="225" class="sidebarText" id="padding">
                          Take in the beach view from the spacious deck or walk outside and harness your inner surfer.
                        </td>
                      </tr>
                    </table>
                  </td>

                  <td valign="right" width="773" colspan="4">
                    <div id="map" style="width: 773px; height: 500px"></div>
                  </td>
                </tr>

                <tr bgcolor="#FFFFFF">
                  <td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
                </tr>

                <tr bgcolor="#bcc9fd">
                  <td width="15">&nbsp;</td>
                  <td width="215">&nbsp;</td>
                  <td width="50">&nbsp;</td>
                  <td width="440">&nbsp;</td>
                  <td width="40">&nbsp;</td>
                  <td width="100%">&nbsp;</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </div>
    </body>
    </html>
