<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Memories list</title>
    <link href="https://bootswatch.com/4/cerulean/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

    <blockquote class="blockquote text-center">
      <p class="mb-0">使用簡潔有力的網路記事本，方便地註記生活大小事，簡單用顏色分出你的每件事。</p>
      <footer class="blockquote-footer">接下來做什麼 <cite title="Source Title">by Jack.</cite></footer>
    </blockquote>


    <div class="<?php echo $memories['type']; ?>">
      <h1><?= $title ?></h1>
      <hr>
    </div>
    <p><b><?php echo $memories['date']; ?></b></p>
    <a id="memo-touch-edit" class="list-group-item list-group-item-action flex-column align-items-start" href="javascript:void(0);" onclick="memoTouch();">
      <p id="show-memo-ps"><?php echo $memories['ps']; ?></p>
    </a>

    <div id="edit-memo" class="form-group" style="display: none;">
      <label>Edit Description Content Textarea</label>
      <textarea class="form-control" id="new-memo-ps" rows="3"><?php echo $memories['ps']; ?></textarea><br>
      <button id="change-memo-ps" type="button" class="btn btn-primary">Done</button>　
      <button id="unchange-memo-ps" type="button" class="btn btn-primary">Cencel</button>
    </div>

    <input type="hidden" id="slug" value="<?php echo $memories['slug']; ?>">
    <input type="hidden" id="ps" value="<?php echo $memories['ps']; ?>">

    <!-- <script type="text/javascript" src = "../user_guide/_static/js/app.js"></script> -->

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <script type="text/javascript">

    function memoTouch(){
      $("#memo-touch-edit").toggle();
      $("#edit-memo").toggle();
    }

    $("#unchange-memo-ps").click(function(){
      $("#memo-touch-edit").toggle();
      $("#edit-memo").toggle();
      $("#new-memo-ps").val($("#ps").val());
    });

    // $("#change-memo-ps").click(function(e){
    //   e.preventDefault();
    //   $.ajax({
    //     type: "POST",
    //     url: "/changeMemoPs/\slug",
    //     data: {slug:$("#slug").val(),ps:$("#new-memo-ps").val()},
    //     success: function(data){
    //       console.log(data);
    //       var item =
    //       '<a id="memo-touch-edit" class="list-group-item list-group-item-action flex-column align-items-start" href="javascript:void(0);" onclick="memoTouch()">'+
    //         '<p>'+data.ps+'</p>'+
    //       '</a>';
    //       $("#change-memo-ps").replaceWith(item);
    //     }
    //   })
    // });
    //
    $("#change-memo-ps").click(function(e){
      e.preventDefault();
      $.ajax({
        type: "ajax",
        method: "post",
        url: '<?php echo base_url() ?>changeMemoPs',
        data: {slug:$("#slug").val(),ps:$("#new-memo-ps").val()},
        success: function(data){
          console.log(data);
          $("#show-memo-ps").replaceWith('<p id="show-memo-ps">'+$("#new-memo-ps").val()+'</p>');
          $("#ps").val($("#new-memo-ps").val());
          $("#memo-touch-edit").toggle();
          $("#edit-memo").toggle();
        },error: function(){
          alert('Fail');
        }
      })
    });


    </script>

  </body>
</html>
