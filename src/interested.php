<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Allegra Villa Alla Spiaggia - Interested?</title>
        <meta name="keywords" content="rental, vacation, Santa Cruz, ocean views, beach house, Allegra Villa Alla Spiaggia, Santa Cruz Escape" />
        <meta name="description" content="Santa Cruz beach house with ocean view for rent." />
        <meta name="rating" content="General" />
        <meta name="revisit-after" content="31 days" />
        <meta name="robots" content="all" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <link rel="stylesheet" href="escape.css" type="text/css" />
        
        <style>
            .test {border-width:0 2px 0 0;border-color:#FFFFFF;}
        </style>
        
        <script type="text/javascript" language="javascript">
            var http_request = false;
            function makePOSTRequest(url, parameters)
            {
                http_request = false;
                if (window.XMLHttpRequest)
                {
                    // Mozilla, Safari,...
                    http_request = new XMLHttpRequest();
                    if (http_request.overrideMimeType)
                    {
                        // set type accordingly to anticipated content type
                        //http_request.overrideMimeType('text/xml');
                        http_request.overrideMimeType('text/html');
                    }
                }
                else if (window.ActiveXObject)
                {
                    // IE
                    try
                    {
                        http_request = new ActiveXObject("Msxml2.XMLHTTP");
                    }
                    catch (e)
                    {
                        try
                        {
                            http_request = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        catch (e) {}
                    }
                }
                if (!http_request)
                {
                alert('Cannot create XMLHTTP instance');
                return false;
                }
        
                http_request.onreadystatechange = alertContents;
                http_request.open('POST', url, true);
                http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                http_request.setRequestHeader("Content-length", parameters.length);
                http_request.setRequestHeader("Connection", "close");
                http_request.send(parameters);
            }
        
            function alertContents()
            {
                if (http_request.readyState == 4)
                {
                    if (http_request.status == 200)
                    {
                        alert(http_request.responseText);
                        //result = http_request.responseText;
                        document.getElementById('status').innerHTML = "";
                                    
                    }
                    else {
                        alert('There was a problem with the request.');
                    }
                }
            }
        
            function get(obj)
            {
                var poststr =    "firstName=" + escape(encodeURI( document.getElementById("firstName").value )) +
                                "&lastName=" + escape(encodeURI( document.getElementById("lastName").value )) +
                                "&cellPhone=" + escape(encodeURI( document.getElementById("cellPhone").value )) +
                                "&eveningPhone=" + escape(encodeURI( document.getElementById("eveningPhone").value )) +
                                "&email=" + escape(encodeURI( document.getElementById("email").value )) +
                                "&numInParty=" + escape(encodeURI( document.getElementById("numInParty").value )) +
                                "&checkIn=" + escape(encodeURI( document.getElementById("checkIn").value )) +
                                "&checkOut=" + escape(encodeURI( document.getElementById("checkOut").value )) +
                                "&comments=" + escape(encodeURI( document.getElementById("comments").value ));
                makePOSTRequest('email.php', poststr);
                document.getElementById('status').innerHTML = "Processing request...";
            }
        </script>

        <?php include_once("analytics.html"); ?>
        
    </head>

    <body bgcolor="#bcc9fd">

        <?php include_once("header.php"); ?>
        
        <div class="mainDiv">
            <table class="mainTable" cellspacing="0" cellpadding="0">
                <!-- Start body of page -->
                <tr>
                    <td colspan="2">
                        <table border="0" cellspacing="0" cellpadding="0" width="100%" height="100%" bgcolor="#f8ecc5">
                            <tr>
                                <td valign="top" colspan="5" class="sidebar">
                                    <img src="bathroom.jpg" alt="Guest bathroom" width="225" height="300" /><br />
                                    <table border="0" cellspacing="0" cellpadding="0" width="225" height="200">
                                        <tr valign="top">
                                            <td width="225" class="sidebarText"id="padding">
                                                A skylight, stone floors, and a granite countertop give the guest bathroom an earthy feel.
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                
                                 <td width="48" valign="top"><img src="mm_spacer.gif" alt="" width="48" height="1" border="0" /></td>
                
                                 <td width="650" valign="top">
                                    <br /><br /><br />
                                    <table border="0" cellspacing="0" cellpadding="0" align="left" width="650">
                                        <tr>
                                            <td colspan="2" class="pageName">
                                                <h1>Reserve Your Escape Today</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="bodyText">
                                                If you want to learn more, check out our <a href="ratesandpolicies.html" target="_blank">rates and policies</a>.
                                                <br /><br />
                                                If you're ready for to escape, fill out the following form and we'll get back to you shortly.  Fields marked by an asterisk (*) are required. With difficulties, email <a href="mailto:dude@santacruzescape.com">dude@santacruzescape.com</a>.<br /><br />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="bodyText">
                                                <form action="javascript:get(document.getElementById('myform'));" name="myform" id="myform">
                                                    <table border="0" cellspacing="2" cellpadding="0" align="left" width="100%">
                                                        <tr>
                                                            <td width="200">*First Name:</td>
                                                            <td><input type="text" id="firstName" /></td>
                                                        </tr
                                                        ><tr>
                                                        <tr>
                                                            <td>*Last Name:</td>
                                                            <td><input type="text" id="lastName" /></td>
                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td>*Cell Phone:</td>
                                                            <td><input type="text" id="cellPhone" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Evening Phone:</td>
                                                            <td><input type="text" id="eveningPhone" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>*Email:</td>
                                                            <td><input type="text" id="email" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>*Number in Party:</td>
                                                            <td><input type="text" id="numInParty" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>*Check In Date (MM/DD/YY):</td>
                                                            <td><input type="text" id="checkIn" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>*Check Out Date (MM/DD/YY):</td>
                                                            <td><input type="text" id="checkOut" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Comments:</td>
                                                            <td><textarea id="comments"></textarea></td>
                                                        </tr>
                                                        </tr><tr>
                                                            <td colspan="2"><input type="submit" name="button" value="Submit!"></td>
                                                        </tr>
                                                 
                                                    </table>        
                                                </form>
                                            
                                                <span name="status" id="status"></span>

                                             </td>
                                        </tr>
                                      </table>
                                    <br /><br />
                                </td>
                                <td width="100%">&nbsp;</td>
                             </tr>
                          </table>
                    </td>
                </tr>
            
                <tr bgcolor="#FFFFFF">
                    <td colspan="6"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
                </tr>
            
                <!-- Mandatory space below end of page content -->
                <tr bgcolor="#bcc9fd">
                    <td colspan="2">&nbsp;</td>
                </tr>
            </table>
        </div>
    </body>
</html>
