<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
  </head>
  <body>
    <form action="" method="Get">

    <script>
        tinymce.init({
          selector: "textarea",
          plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>

    <textarea name="nomedavariavel"></textarea>
    <button type="submit" name="button"></button>
  </form>
  <?php
  var_dump($_GET);
  echo $_GET['nomedavariavel']; ?>

  </body>
</html>
