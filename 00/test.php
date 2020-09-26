<!DOCTYPE html>
<head>
    <title>my fisrt page</title>
</head>
<iframe src="demo_iframe.htm" style="border:none" height="200" width="300" title="Iframe Example"></iframe>
<body>
<hr>
    <script>
    
    document.getElementById("demo").innerHTML ="hello JavaScript"
    </script>
    <h1>My first heading</h1>
    <pre>My first paragraph
        contains a lot of lines
        in the source code,
        but the browser
        ignores it
    </pre>
    <p>This <del>is</del> is <ins>subscripted</ins> text <mark>text</mark> which is <em>good</em> <i>for every one</i>,
     <strong>that's it</strong> .</p>
<hr>
<head>
<style>
    body {background-color: powderblue;}
    h1   {color: blue;}
    p    {color: red;}
</style>
</head>
    <form action="" method="get" class="form-example">
        <div class = "form-example">
            <label for="name">Enter your name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-example">
            <label for="email">Enter your email: </label>
            <input type="email" name="email"id="email" required><br>
            <input type="submit" value="submit">
        </div>
        <div class="form-example">
            <input type="submit" value="Subscribe!">
        </div>
        <div class="city">
        <h2>London</h2>
         <p>London is the capital of England.</p>
        </div>
        
        
        <button class = "form-example" style = "font-family:courier; font-size:300%"> 
            Add to favorites
        </button><br>
        <label for="cars">Choose a car:</label>
        <select name="cars" id="cars">
        <option value="volvo">Volvo</option>
        <option value="Toyota">Toyota</option>
        <option value="Honda">Honda</option>
        </select><br><br>
        <label for="phone">Enter a phone number:</label>
        <br>
        <br>
        <input type="tel" id="phone" name="phone"
        placeholder="123-45-678"
        pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
        <br>

    </form>
    <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button"> THis is a link</a>
    <address>
        Written by John Doe.<br>
        Visit us at:<br>
        Example.com<br>
        Box 564, Disneyland<br>
        USA
    </address>
    <p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>
    <p><cite>The Scream</cite> by Edvard Munch. Painted in 1893.</p>

    <input type="checkbox" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <br>
    <img src="D:\My document\phto\a1.PNG" alt="team">
    <br>
    
    
    <table>
    <tr>
        <th>firstname</th>
        <th>lastname</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
  </tr>
    
</body>