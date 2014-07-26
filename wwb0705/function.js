// JavaScript Document
//計時器應用-文字跑馬燈
	//a = strShowHideMen (顯隱的人)
	//b = intAnimationTime (動畫時間)
	//c = ClockMen (拿計時器的人-想顯示東西的上一層，用id命名)
	//d = ClockTime (計時器時間)
	//e = intTotal (總共切換的張數-最上限數字)
function getTextshow(a,b,c,d,e){

			$(a).hide()
			$(a+":eq(0)").show(b)
			var i=0
			$(c).everyTime(d,c1)
			function c1(){
				i++
				if(i>5){i=0}
				$(a).hide()
				$(a+":eq("+i+")").show(b)
			}
}