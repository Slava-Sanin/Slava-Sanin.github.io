<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Show programs</title>
    <link rel="stylesheet" type="text/css" href="shows.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>


<body>

<div id="content"></div>

</body>




<script>

var NewImg = new Image ();
var s;

    $(document).ready(function(){

        $.getJSON('shows.json', function(data) {

            for (i=0; i<data.length; i++)
            print_block(data[i], i);
//console.log(data[4);
        });

    });

///////////////////////////////////////////////////////////////////////

function print_block(arr , x)
{
//console.log(arr);

    document.write('<br>' + '<div id="block' + x + '" style="display: block; border: 2px solid #a1a1a1;">' +
                    '<h1>' + arr.title + '</h1>' +
                    '<h2>' + arr.description + '</h2>' +
                    '<h3>' + arr.tvChannel + '</h3>' +
                    '</div>');

                NewImg.src = arr.image.showImage;
                NewImg.width = 200;
                //NewImg.height = 80;
                s = NewImg.cloneNode(1);
                //document.body.appendChild (s);
                document.getElementById("block"+x).appendChild(s);
}

///////////////////////////////////////////////////////////////////////

</script>
</html>