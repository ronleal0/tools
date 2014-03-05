<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/css/foundation.css">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <style>
          .row{
            margin-top:3em;
          }
          textarea{
            height:450px;
            font-family: "Courier New", Courier, monospace;
            font-size: 12px;
          }
          input['type']{
            float:right;
          }
        </style>
    </head>
    <body>
       <div class="row">
       		<div class="large-9 large-centered columns">
       			<form action="parse.php" method="post" >
       				<textarea name="html" id="html"></textarea>
       				<input type="submit" style="float:right" value="submit" class="button">
       			</form>
       		</div>
       </div>
    </body>
</html>