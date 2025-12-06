<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>掲示板</title>
</head>
<body>
  <h1>掲示板</h1>
  <hr>
    <section>
      <article>
        <p>名前 : A</p>
        <p>おはようございます</p>
        <time>2023-8-12 23:09:30</time>
      </article>
    </section>
    <form method="post" action="post.php">
      <div>
        <label for="">名前 : </label><br>
        <input type="text"  id="uesrname"  name="username">
      </div>
      <div>
        <label for="password">pass : </label><br>
        <input type="password" id="password" name="password">
      </div>
      <div>
        <label for="comment">本文 : </label><br>
        <textarea id="textarea" name="comment"></textarea>
      </div>
      <div>
        <input type="submit" value="書き込む" name="submitButton">
      </div>
    </form>
</body>
</html>