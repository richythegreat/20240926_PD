<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" />
    <title>Webinārs</title>
</head>
<body>
    <div> 
    <h1>Piesakies Webināram</h1>

    <form>
    <div>
    <label for="myname">Kāds ir jūsu Vārds?: </label>
    <input type="text" id="myname" name="name" />
  </div>
  <div>
    <label for="email">Kāds ir jūsu epasts?: </label>
    <input type="text" id="email" name="mail" />
  </div>
  <div>
    <button>Submit</button>
  </div>
</form>
<form>
    <fieldset>
    <label for="howadvanced">kursa līmenis</label> <br />
<div>
<select name="limenis" id="howadvanced">
  <option value="">izvelieties savu kursa līmeni</option>
  <hr />
  <optgroup label="kurss">
    <option value="beginner">beginner</option>
    <option value="intermediate">intermediate</option>
    <option value="advanced">advanced</option>
  </optgroup>
  
  </select>
  <div>
      <button type="submit">Submit</button>
    </div>
  
</div>

</fieldset>
<form>
  <fieldset>
    <legend>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</legend>
    <div>
      <input type="radio" id="choice-ja" name="info" value="ja" />
      <label for="choice-ja">Jā!</label>
      <input type="radio" id="choice-ne" name="info" value="ne" />
      <label for="choice-ne">Nē!</label>
      
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </fieldset>
</form>
<input id="myURL" name="myURL" type="url" list="defaultURLs" />

<datalist id="defaultURLs">
  <option value="http://localhost:8080/blog.php"></option>
    
</body>
</html>