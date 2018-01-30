<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Memories list</title>
    <link href="https://bootswatch.com/4/cerulean/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/codeigniter/memories">Memories list <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">未開發</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">未開發</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <h1><?= $title ?></h1>

    <blockquote class="blockquote text-center">
      <p class="mb-0">使用簡潔有力的網路記事本，方便地註記生活大小事，簡單用顏色分出你的每件事。</p>
      <footer class="blockquote-footer">接下來做什麼 <cite title="Source Title">by Jack.</cite></footer>
    </blockquote>

    <?php echo validation_errors(); ?>

    <?php echo form_open('/updatePost/'.$memories['slug']);?>
    <!-- <form action="/codeigniter/createPost"> -->
    <fieldset>
      <legend>Create a new Memo :</legend>
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $memories['title']; ?>" aria-describedby="emailHelp" placeholder="Enter Memo Title">
        <small id="emailHelp" class="form-text text-muted">This is your memories title.</small>
      </div>
      <div class="form-group">
        <label>Slug</label>
        <input type="text" class="form-control" name="slug" value="<?php echo $memories['slug']; ?>" aria-describedby="emailHelp" placeholder="Enter Slug">
        <small id="emailHelp" class="form-text text-muted">This is your URL name(/slug).</small>
      </div>
      <div class="form-group">
        <label>Date</label>
        <input type="date" class="form-control" name="date" value="<?php echo $memories['date']; ?>" aria-describedby="emailHelp" placeholder="Enter Date">
      </div>
      <div class="form-group">
        <label>Color select</label>
        <select class="form-control" name="type">
          <option class="<?php echo $memories['type']; ?>" value="<?php echo $memories['type']; ?>"><?= $color ?></option>
          <option class="table-secondary" value="table-secondary">白色</option>
          <option class="table-primary" value="table-primary">天空藍</option>
          <option class="table-success" value="table-success">草地綠</option>
          <option class="table-danger" value="table-danger">標記紅</option>
          <option class="table-warning" value="table-warning">清新橘</option>
          <option class="table-info" value="table-info">靛藍色</option>
        </select>
      </div>
      <div class="form-group">
        <label>Description Content textarea</label>
        <textarea class="form-control" name="ps" rows="3"><?php echo $memories['ps']; ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </fieldset>
  </form>

  <br>
  <?php echo form_open('/delete/'.$memories['slug']);?>
    <button type="submit" class="btn btn-primary">Delete</button>
  </form>

  </body>
</html>
