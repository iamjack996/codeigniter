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

    <h1><?= $title ?> List</h1>

    <blockquote class="blockquote text-center">
      <p class="mb-0">使用簡潔有力的網路記事本，方便地註記生活大小事，簡單用顏色分出你的每件事。</p>
      <footer class="blockquote-footer">接下來做什麼 <cite title="Source Title">by Jack.</cite></footer>
    </blockquote>

    <div align="right">
      <sup>
        <a class="btn btn-primary btn-lg" href="/codeigniter/GetCreate">C R E A T E</a>
      </sup>
    </div>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">按鈕</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($memories as $memory): ?>
          <tr class=<?php echo $memory['type']; ?>>
            <th scope="row"><?php echo $memory['date']; ?></th>
            <td><a class="nav-link" href="<?php echo ('memories/'.$memory['slug']); ?>"><?php echo $memory['title']; ?></a></td>
            <td><?php echo word_limiter($memory['ps'], 10); ?></td>
            <td><a class="btn btn-primary" href="<?php echo ('memories/update/'.$memory['slug']); ?>">E D I T</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </body>
</html>
