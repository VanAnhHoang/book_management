<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="pdf/real3d-demo/css/flipbook.style.css">

<script src="pdf/real3d-demo/js/flipbook.min.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        $("#container").flipBook({
            pdfUrl: "pdf/real3d-demo/pdf/example.pdf"
        });

    })
</script>

</head>

<body>
<div id="container">
</body>

</html>
