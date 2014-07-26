<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>第一個html5網頁</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <script>
     //基本資料型態
     //javascript 是一種動態型別的語言
     //javascript 只有三種基本資料型態:number,boolean,string

     var x=100;//浮點數數值
     var y=200;//浮點數數值
     var z="200";//字串
     var b=ture;//boolean (true/false)

     var sum=x+y;
     var sub=x-y;
     var c1=(x>y);console.log(c1);//false
     var c2=(x<y);console.log(c2);//ture
     var c3=(x==y);console.log(c3);//false
     var c4=(y==z);console.log(c4);//ture  雖不同型態 寬鬆型態的比較
     var c5=(y===z);console.log(c5);//false  雖不同型態 嚴格型態的比較





     //空值
     var n=null;
     var ud=undefined;

     console.log(x+y);  //300
     console.log(x+z);  //1002000



    console.log('Hello JavaScript!');
    console.log(100+200);
    console.log('100'+'200');
    console.log(100+"200");





    //物件資料型態 陣列
    var books=[
    'html5 入門',600,
    'css入門',400,
    'js 入門',500,
    'html5 精通',450,
    'css 精通'],800;

    var book1=books[0];
    var book2=books[1];

    //迴圈一
    for (var i=0;i<books.length;i++){
      var title=books[i];
      console.log(title);
    }
    
    //迴圈二   
    for (var i in books){
      console.log(i);
      console.log(books[i]);
    }

    //物件資料型態-JSON(key:value) 陣列進化版
    //title price pages author IBSN
    //------------------------------

    //JSON物件

    var book1={
      "title":"HTML 入門"
      "price":"600"
      "pages":"560"
      "author":"sean"
      "ISBN":"1000-3000-EEE0-555"

    }



  


    </script>
   
  </head>

  <body>


  </body>

</html>