<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- Include external CSS. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.6/css/froala_style.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <!-- Create a tag that we will use as the editable area. -->
    <!-- You can use a div tag as well. -->
<form action="/saveBlog" method="post" enctype="multipart/form-data">
    <div class="form-group col-lg-12">
        <input class="mt-4  ml-5"  type="text" name="Title" id="title" placeholder="Title" style="width: 75%;height: 50%;">
        <div class="mt-4 ml-5">
            <textarea id="editor" name="Editor"></textarea>
        </div>
        <input class="mt-4 ml-5"  type="text" name="SEO-Title" id="seo-title" placeholder="SEO Title" style="width: 75%;height: 50%;">
        <input class="mt-4 ml-5" type="text" name="SEO-Description" id="seo-description" placeholder="SEO Description" style="width: 75%;height: 50%;">
        <input class="mt-4 ml-5" type="text" name="Author" id="author" placeholder="Author" style="width: 75%;height: 50%;">
        <div class="row mt-4">
            <div class="ml-5">
                <label>Status:</label>
            </div>
                <div class="ml-5">
                    <input class=""form-check-input" type="radio" id="draft" name="status-option" value="draft">
                    <label class="" for="draft">Draft</label>
                </div>
                <div class="ml-5 ">
                    <input class=""form-check-input" type="radio" id="publish" name="status-option" value="publish">
                    <label class="" for="publish">Publish</label>
                </div>
            </div>
            <div class="mt-4 ml-5">
                <button type="submit">Save</button>
            </div>
    </div>
</form>

    <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.6/js/froala_editor.pkgd.min.js"></script>

    <!-- Initialize the editor. -->
    <script> $(function() {
        $('textarea').froalaEditor(
            {
            height: 500, width: 1418,imageUploadURL: '/image'
            }) });
    </script>
  </body>
</html>
