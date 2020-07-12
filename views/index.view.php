<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,              initial-scale=1.0">;
    <title>AntiCOD</title>
</head>
<body>
    <h1>AntiCod</h1>
    
    <h3>Add HTML TAGS</h3>
    <form method="POST" action="/tags">
        <select name="tag">
            <option value="<html>">html Tag Start</option>
            <option value="</html>">html Tag End</option>
            <option value="<head>">head Tag Start</option>
            <option value="</head>">head Tag End</option>
            <option value="<body ">body Tag Start</option>
            <option value="</body>">body Tag End</option>
            <option value="<div ">div Tag Start</option>
            <option value="</div>">div Tag End</option>
            <option value="<h1 ">h1 Tag Start</option>
            <option value="</h1>">h1 Tag End</option>
            <option value="<p ">p Tag Start</option>
            <option value="</p>">p Tag End</option>
            <option value="<a ">a Tag Start</option>
            <option value="<img ">Img Tag Start</option>
            <option value="<link ">link Tag Start</option>
            <option value="<script ">script Tag Start</option>
            <option value=">">Any Tag End</option>
            <option value="" style="visibility: hiddin;display:none;" selected></option>
        </select>
        <button type="text" name="data" value=" > ">End Any Tag</button>
        <button type="submit">Add</button>
    </form>

    <h3>Add TAGS ATTRIBUTES</h3>
    <form method="POST" action="/tags">
    <input type="hidden" name="dt" value="attributes">
        <select name="attribute">
            <option value="class=">class</option>
            <option value="id=">id</option>
            <option value="style=">style</option>
            <option value="width=">width</option>
            <option value="height=">height</option>
            <option value="src=">src</option>
            <option value="rel=">rel</option>
            <option value="type=">type</option>
            <option value="href=">href</option>

        </select>
        <input type="text" name="data">
        <button type="submit">Add</button>
    </form>
    
    <h3>Add Data</h3>
    <form method="POST" action="/tags">
        <input type="text" name="data">
        <button type="submit">Add</button>
    </form>
    <hr>
	<button><a href="/output" style="text-decoration:none;">Open Preview In A New Tab</a></button>
    <h2>Preview : </h2>
    <section style="width:100%;min-height:30vh;">
        <iframe src="target/index.html" frameborder="0" style="width:100%;min-height:30vh;"></iframe>
    </section>
    <hr>
    <h2>Code Preview : </h2>
    <code style="width:100%;min-height:30vh;" id="text_preview">
		<?php echo htmlspecialchars(file_get_contents("target/index.html"));?>
    </code>
</body>
</html>