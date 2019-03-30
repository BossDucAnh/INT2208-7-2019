<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dịch đoạn văn bản</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <style>
  	.hidden{display:none!important}
  </style>
  <title>Dịch đoạn văn bản</title>
  <link rel="icon" href="img/globe-2x.png">
  <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <style>
        textarea {
            width: 100%;
            height: 300px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
            resize: vertical;
        }
        p {
            width: 100%;
            height: 300px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background: #f8f8f8;
            font-size: 16px;
            resize: vertical;
            overflow: auto;
        }

    </style>
     
</head>
<body>
<!-- Begin: HEADER -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark nav-justified nav-pills" role="navigation">
<a class="navbar-brand" href="./translate.php">Dictionary</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto nav-pills">
        <li class="nav-item">
            <a class="nav-link disabled" href="./index.php">Tra từ online</a>
        </li>
	</ul>
    <ul class="navbar-nav mr-auto nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="./translate.php">Dịch đoạn văn</a>
        </li>
    </ul>
	<ul class="navbar-nav mr-auto nav-pills">
        <li class="nav-item ">
            <a class="nav-link disabled" href="./link.php">Một số khóa học gợi ý cho bạn</a>
        </li>    
    </ul>
</div>
</nav>
<!-- END HEADER -->
  
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      	<textarea type="text" name="word" id="word" placeholder="Nội dung cần dịch"></textarea>
            <select name="source" id="source">
                <option selected value="en">English</option>
                <option value="vi">Vietnamese</option>
                <option value="fr">French</option>
                <option value="zh-TW">Chinese (Traditional)</option>
                <option value="zh-CN">Chinese (Simplified)</option>
                <option value="de">German</option>
                <option value="ja">Japanese</option>
                <option value="it">Italian</option>
                <option value="ko">Korean</option>
                <option value="ru">Russian</option>
            </select>
        <input type="image" src="./img/swap.gif" id="SwapButton" onclick="swap();return false;">Sang</input>
            <select name="target" id="target">
                <option value="en">English</option>
                <option selected value="vi">Vietnamese</option>
                <option value="fr">French</option>
                <option value="zh-TW">Chinese (Traditional)</option>
                <option value="zh-CN">Chinese (Simplified)</option>
                <option value="de">German</option>
                <option value="ja">Japanese</option>
                <option value="it">Italian</option>
                <option value="ko">Korean</option>
                <option value="ru">Russian</option>
            </select>
            <button class="btn btn-primary btn-sm" >Translate</button>                  
    </div>
    <div class="col-sm-6">   
    <p id="result"></p>
    </div>
  </div>
</div>
<!--FOOTER-->
<footer class="container-fluid text-center starter-template" style="margin-top:120px">
        <span style="color: #084B8A"><b>Contact Me</b></br></br></span>       
        <a href="https://github.com/ThaoIE3/INT2208-7-2019" class="fa fa-github fa-3x" title="Mã nguồn ứng dụng" target="_blank"></a>
        <span style="color: #084B8A"></br>Copyright &copy; <a href="./translate.php">Nhóm 19-CNPM 2209_7</a></span>
    </footer>
    <!--END FOOTER-->
</body>
</html>
