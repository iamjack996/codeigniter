<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Memories list</title>
    <link href="https://bootswatch.com/4/cerulean/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
    <h1><?= $title ?> List</h1>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Memories list <span class="sr-only">(current)</span></a>
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

    <blockquote class="blockquote text-center">
      <p class="mb-0">使用簡潔有力的網路記事本，方便地註記生活大小事，簡單用顏色分出你的每件事。</p>
      <footer class="blockquote-footer">接下來做什麼 <cite title="Source Title">by Jack.</cite></footer>
    </blockquote>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-active">
          <th scope="row">Active</th>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr>
          <th scope="row">Default</th>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="table-primary">
          <th scope="row">Primary</th>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="table-secondary">
          <th scope="row">Secondary</th>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="table-success">
          <th scope="row">Success</th>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">Danger</th>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="table-warning">
          <th scope="row">Warning</th>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="table-info">
          <th scope="row">Info</th>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="table-light">
          <th scope="row">Light</th>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
        <tr class="table-dark">
          <th scope="row">Dark</th>
          <td>Column content</td>
          <td>Column content</td>
        </tr>
      </tbody>
    </table>

  </body>
</html>
