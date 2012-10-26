<?php
include(__DIR__ . '/partials/header.php'); 
?>
<div class="container">
    <form method="post">
      <legend>New Post</legend>
      <p>The world awaits your words of wisdom with a baited breath. 
        Quick! Before it's too late! Post something for them all to hear!</p>
      <label>Title</label>
      <input type="text" placeholder="Catchy Title…" style="width:80%" name="title">
      <label>Content</label>
      <textarea rows="3" style="width:80%" placeholder="Awesome content for the win!" name="body"></textarea>
    
      <label>Tags</label>
      <input type="text" placeholder="some,tags,separated,by,commas" style="width:80%" name="tags">
      <div class="control-group">
        <div class="controls">
          <button type="submit" class="btn">Submit</button>
        </div>
      </div>
    </form>
</div>
