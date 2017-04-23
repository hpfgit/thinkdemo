<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      * {margin: 0px;padding: 0px;}
      li {list-style: none;}
      .sidebar {width: 120px;height: auto;float: left;}
      .sidebar-hide {display: none;height: 36px;line-height: 36px;text-align: center;}
      .publish-form {display: none;}
      .publish-form {margin-left: 150px;}
    </style>
  </head>
  <body>
    <div class="sidebar">
      <div class="sidebar-title">
        文章管理
      </div>
      <ul class="sidebar-hide">
        <li class="publish">发表文章</li>
      </ul>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="##">Home</a></li>
      <li><a href="##">CSS3</a></li>
      <li><a href="##">Sass</a></li>
      <li><a href="##">jQuery</a></li>
      <li><a href="##">Responsive</a></li>
    </ul>
        </div>
        <div class="col-md-10">
          
    <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="##">Home</a></li>
      <li><a href="##">CSS3</a></li>
      <li><a href="##">Sass</a></li>
      <li><a href="##">jQuery</a></li>
      <li><a href="##">Responsive</a></li>
    </ul>
        </div>
      </div>
    </div>
    <div class="publish-form">
      <form class="form-horizontal" role="form" action="../demo/index.php/Index/index" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-1 control-label">邮箱</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="请输入您的邮箱地址">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="请输入您的邮箱密码">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox"> 记住密码
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">进入邮箱</button>
          </div>
        </div>
      </form>
    </div>
    <ul class="pagination pagination">
      <li><a href="#">&laquo;第一页</a></li>
      <li><a href="#">11</a></li>
      <li><a href="#">12</a></li>
      <li class="active"><a href="#">13</a></li>
      <li><a href="#">14</a></li>
      <li><a href="#">15</a></li>
      <li class="disabled"><a href="#">最后一页&raquo;</a></li>
    </ul>
    <!-- <div>
      <ul>
        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><li><?php echo ($vo["username"]); ?></li><?php endforeach; endif; ?>
      </ul>
    </div> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(".sidebar-title").click(function(){
        $(".sidebar-hide").css({
          'display':'block'
        });
      });
      $(".publish").click(function(){
        $(".publish-form").css({
          'display':'block'
        });
      });
    </script>
  </body>
</html>