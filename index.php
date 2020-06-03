<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="urf-8">
    <link href="css.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $("p").hide();
            });
            $("#show").click(function(){
                $("p").show();
            });
            $("button").click(function(){
                let div = $("div");
                div.animate({left: '200px'}, "slow");
                div.animate({fontSize: '100px'}, "slow");
            });
        });
    </script>
</head>
<body>
<p>If you click on the "Hide" button, I will disappear.</p>
<button id="hide">Hide</button>
<button id="show">Show</button>
<hr>
<button>Start Animation</button>
<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>
<div style="background:#98bf21;height:100px;width:300px;position:absolute;">HELLO</div>

<br><br><br><br><br><br><br><br><br><br><br>

<div class="">
    <div id="myDIV" class="header">
        <h2 style="margin:5px">My To Do List</h2>
        <input type="text" id="myInput" placeholder="Title...">
        <span class="addBtn" onclick="newElement()">Add</span>
    </div>

    <ul id="myUL">
        <li>Hit the gym</li>
        <li>Pay bills</li>
        <li>Meet George</li>
        <li>Buy eggs</li>
        <li>Read a book</li>
        <li>Organize office</li>
    </ul>
</div>
<script src="js.js"></script>
</body>
</html>