<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Lightbox with the help of YUI2</title>

        <!-- Combo-handled YUI JS files: -->
        <script type="text/javascript" src="http://yui.yahooapis.com/combo?2.8.2r1/build/yahoo-dom-event/yahoo-dom-event.js&2.8.2r1/build/animation/animation-min.js&2.8.2r1/build/connection/connection_core-min.js&2.8.2r1/build/json/json.js&2.8.2r1/build/selector/selector-min.js"></script>
        <script type="text/javascript" src="dn.js"></script>
        <script type="text/javascript" src="lightbox.js"></script>
        <link rel="stylesheet" type="text/css" href="lightbox.css">
        <link rel="stylesheet" type="text/css" href="lightbox-ui.css">
        <style>
        /* Example Page Styles */
        body {
            font-family: Arial;
        }
        #wrap {
            width: 950px;
            margin: auto;
        }
        .xmp {
            border: 1px solid silver;
            padding: 10px;
            overflow: auto;
            margin: 5px 0;
            white-space: pre;
            font-family: monospace;
        }
        .lb-bd h1 {
            margin-top: 0;
        }
        </style>
    </head>
    <body>
        <div id="wrap">
            <h1>Lightbox with the help of YUI2</h1>
            By Brian Moon
            <p>
            This is a lightbox that is created with the help of YUI2. It purposely does not use YUI's Panel. Panel is nice sometimes, but it comes with some baggage I find annoying. Likewise, I don't always use YUI for every possible interaction, such as setting styles. All my target browsers support the same syntax for that action. The one exception is opacity which is not the same across browsers. Basically, I use YUI to make dealing with the hard parts of javascript easier. Nothing more, nothing less.
            <h2>Features</h2>
            <ul>
                <li>Lightbox and contents can be created via:
                    <ul>
                        <li>Javascript</li>
                        <li>Existing markup</li>
                        <li>Asynchronus (AJAX) request (contents only)</li>
                    </ul>
                </li>
                <li>Lightbox will close when ESC is pressed</li>
                <li>Rounded corners and box shadow using CSS3.</li>
            </ul>
            <p>
            <h2>Compatibility</h2>
            <ul>
                <li>Firefox 3.5+</li>
                <li>Chrome 4+</li>
                <li>Safari 5+</li>
                <li>Internet Explorer 9 (Animation is not working due to YUI's lack of opacity support in IE9)</li>
                <li>Internet Explorer 8 (Via IE9 in IE8 compatibility mode. No rounded corners, no shadows)</li>
                <li>Internet Explorer 7 (Via IE9 in IE7 compatibility mode. No rounded corners, no shadows)</li>
                <li>Opera 10.53</li>
            </ul>
            <h2>Files</h2>
            <ul>
                <li><a href="lightbox.js">lightbox.js</a> - The Lightbox object.</li>
                <li><a href="lightbox.css">lightbox.css</a> - The core CSS need for layout.</li>
                <li><a href="lightbox-ui.css">lightbox-ui.css</a> - The styles used to make it all pretty.</li>
            </ul>
            Optionally you can use the <a href="dn.js">DN object</a> for its selector function. If you don't want to use it, you can replace the DN.selector calls in Lightbox with YAHOO.util.Selector.query and rename DN.Lightbox to just Lightbox.
            <h2>YUI Requirements</h2>
            <ul>
                <li>Dom</li>
                <li>Event</li>
                <li>Connection Core</li>
                <li>JSON</li>
                <li>Selector</li>
                <li>Animation (if animate set to tru)</li>
            </ul>
            <h2>Examples</h2>
            <h3>Creating it all in javascript</h3>
            You can pass in the contents of the lighbox when creating it.
            <div class="xmp"><?=htmlspecialchars("var lb1 = new DN.Lightbox(
    {
        contentString: '<h1>This is dynamic content from javascript</h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit nibh sit amet lectus blandit egestas. Integer ac rutrum erat. Donec nec auctor risus. Ut dapibus eleifend turpis, ut adipiscing ligula tempor eu. Ut volutpat nisl non sem mollis feugiat. Praesent ornare lobortis erat, in imperdiet metus congue et. Cras orci massa, venenatis rhoncus convallis eu, ultricies nec velit. Aenean in libero vitae odio auctor ullamcorper. Suspendisse vestibulum pretium mi eget tempus. Nam vitae lacus massa, vel dictum lacus. Nulla quam odio, tempor a rhoncus eget, consectetur ac ante. Vivamus a turpis eu velit mollis eleifend. Fusce a odio ac turpis gravida fringilla. Aliquam vestibulum, neque in venenatis dictum, massa turpis gravida sem, pellentesque auctor sapien felis ut leo. Phasellus ac urna non risus fermentum aliquet pharetra sed nibh.',
        animate: true,
        maxWidth: 500
    }
);
YAHOO.util.Event.addListener(\"showMe1\", \"click\", lb1.show, lb1, true);")?>
            </div>
            <button id="showMe1">Show</button>

            <h3>Using existing markup</h3>
            You can set contentElement to an existing element name to use existing markup for the lightbox. Here we use existing markup with the lb-bx-dk class set on the inner box so that it has a black background suitable for showing an image.
            <div class="xmp"><?=htmlspecialchars("<div id=\"imgLB\" class=\"dn-lightbox\">
    <div class=\"lb-bg\"></div>
    <div class=\"lb-bx lb-bx-dk\">
        <a class=\"lb-close\" href=\"#\"><span class=\"txt\">Close</span></a>
        <div class=\"lb-bd\" style=\"font-size: small; text-align: center;\">
            <h4>This is existing markup</h4>
            <a href=\"http://www.flickr.com/photos/loush555/2829474635/in/photostream/\"><img border=0 src=\"http://farm4.static.flickr.com/3249/2829474635_fd4ae879e8.jpg\"><br>http://www.flickr.com/photos/loush555/2829474635/in/photostream/</a>
        </div>
    </div>
</div>

<script>
var lb2 = new DN.Lightbox(
    {
        contentElement: 'imgLB',
        animate: true
    }
);
YAHOO.util.Event.addListener(\"showMe2\", \"click\", lb2.show, lb2, true);
</script>
")?>
            </div>

            <button id="showMe2">Show</button>

            <h3>Using existing markup, light background</h3>
            This is the same as the above, but we set a class to make the background light instead of dark.
            <div class="xmp"><?=htmlspecialchars("<div id=\"imgLB2\" class=\"dn-lightbox\">
    <div class=\"lb-bg lb-bg-lt\"></div>
    <div class=\"lb-bx lb-bx-dk\">
        <a class=\"lb-close\" href=\"#\"><span class=\"txt\">Close</span></a>
        <div class=\"lb-bd\" style=\"font-size: small; text-align: center;\">
            <h4>This is existing markup</h4>
            <a href=\"http://www.flickr.com/photos/loush555/2829474635/in/photostream/\"><img border=0 src=\"http://farm4.static.flickr.com/3249/2829474635_fd4ae879e8.jpg\"><br>http://www.flickr.com/photos/loush555/2829474635/in/photostream/</a>
        </div>
    </div>
</div>

<script>
var lb3 = new DN.Lightbox(
    {
        contentElement: 'imgLB2',
        animate: true
    }
);
YAHOO.util.Event.addListener(\"showMe3\", \"click\", lb3.show, lb3, true);
</script>
")?>
            </div>

            <button id="showMe3">Show</button>

            <h3>Dynamically create a lightbox with contents from an asynchronus (AJAX) request.</h3>
            Here we set contentURL in the lightbox config. When shown, the URL will be used to fetch the lightbox contents.
            <div class="xmp"><?=htmlspecialchars("var lb4 = new DN.Lightbox(
    {
        contentURL: \"http://brian.moonspot.net/lightbox/async.php\",
        animate: true,
        maxWidth: 500
    }
);
YAHOO.util.Event.addListener(\"showMe4\", \"click\", lb4.show, lb4, true);")?>
            </div>
            <button id="showMe4">Show</button>

            <h3>This shows how you can use a custom listener to set the contentURL before calling the show() method.</h3>
            <div class="xmp"><?=htmlspecialchars("YAHOO.util.Event.addListener(DN.selector(\"button\", \"showMe5Set\"), \"click\", function(e){
    target = Y.Event.getTarget(e);
    if(target.id == \"showMe5-1\"){
        mode = \"1\";
    } else if(target.id == \"showMe5-2\"){
        mode = \"2\";
    } else {
        return;
    }
    lb5.cfg.contentURL = \"http://brian.moonspot.net/lightbox/async.php?mode=\" + mode;
    lb5.show(e);
}, lb5, true);")?>
            </div>

            <div id="showMe5Set">
                <button id="showMe5-1">Show 1</button>
                <button id="showMe5-2">Show 2</button>
            </div>

            <p>
            Visit <a href="/">my blog</a>.



            <div id="imgLB" class="dn-lightbox">
                <div class="lb-bg"></div>
                <div class="lb-bx lb-bx-dk">
                    <a class="lb-close" href="#"><span class="txt">Close</span></a>
                    <div class="lb-bd" style="font-size: small; text-align: center;">
                        <h4>This is existing markup</h4>
                        <a href="http://www.flickr.com/photos/loush555/2829474635/in/photostream/"><img border=0 src="http://farm4.static.flickr.com/3249/2829474635_fd4ae879e8.jpg"><br>http://www.flickr.com/photos/loush555/2829474635/in/photostream/</a>
                    </div>
                </div>
            </div>

            <div id="imgLB2" class="dn-lightbox">
                <div class="lb-bg lb-bg-lt"></div>
                <div class="lb-bx lb-bx-dk">
                    <a class="lb-close" href="#"><span class="txt">Close</span></a>
                    <div class="lb-bd" style="font-size: small; text-align: center;">
                        <h4>This is existing markup</h4>
                        <a href="http://www.flickr.com/photos/loush555/2829474635/in/photostream/"><img border=0 src="http://farm4.static.flickr.com/3249/2829474635_fd4ae879e8.jpg"><br>http://www.flickr.com/photos/loush555/2829474635/in/photostream/</a>
                    </div>
                </div>
            </div>
        </div>

        <script>
        var lb1 = new DN.Lightbox(
            {
                contentString: '<h1>This is dynamic content from javascript</h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit nibh sit amet lectus blandit egestas. Integer ac rutrum erat. Donec nec auctor risus. Ut dapibus eleifend turpis, ut adipiscing ligula tempor eu. Ut volutpat nisl non sem mollis feugiat. Praesent ornare lobortis erat, in imperdiet metus congue et. Cras orci massa, venenatis rhoncus convallis eu, ultricies nec velit. Aenean in libero vitae odio auctor ullamcorper. Suspendisse vestibulum pretium mi eget tempus. Nam vitae lacus massa, vel dictum lacus. Nulla quam odio, tempor a rhoncus eget, consectetur ac ante. Vivamus a turpis eu velit mollis eleifend. Fusce a odio ac turpis gravida fringilla. Aliquam vestibulum, neque in venenatis dictum, massa turpis gravida sem, pellentesque auctor sapien felis ut leo. Phasellus ac urna non risus fermentum aliquet pharetra sed nibh.',
                animate: true,
                maxWidth: 500
            }
        );
        Y.Event.addListener("showMe1", "click", lb1.show, lb1, true);

        var lb2 = new DN.Lightbox(
            {
                contentElement: 'imgLB',
                animate: true
            }
        );
        Y.Event.addListener("showMe2", "click", lb2.show, lb2, true);

        var lb3 = new DN.Lightbox(
            {
                contentElement: 'imgLB2',
                animate: true
            }
        );
        Y.Event.addListener("showMe3", "click", lb3.show, lb3, true);

        var lb4 = new DN.Lightbox(
            {
                contentURL: "http://brian.moonspot.net/lightbox/async.php",
                animate: true,
                maxWidth: 500
            }
        );
        Y.Event.addListener("showMe4", "click", lb4.show, lb4, true);

        var lb5 = new DN.Lightbox(
            {
                animate: true,
                maxWidth: 500
            }
        );

        Y.Event.addListener(DN.selector("button", "showMe5Set"), "click", function(e){
            target = Y.Event.getTarget(e);
            if(target.id == "showMe5-1"){
                mode = "1";
            } else if(target.id == "showMe5-2"){
                mode = "2";
            } else {
                return;
            }
            lb5.cfg.contentURL = "http://brian.moonspot.net/lightbox/async.php?mode=" + mode;
            lb5.show(e);
        }, lb5, true);

        </script>
    </body>
</html>