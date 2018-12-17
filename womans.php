<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<style>
	.www1{
		width: 15%;
		height: 100%;
		text-align: left;
		position: relative;
		left: 10px;
		top: 0px;
	}
	.cveta{
		display: flex;
		flex-direction: column;
	}
	.razmer{
		display: flex;
		flex-direction: column;
	}
	.item{
		display: inline-flex;
		color: black;
		text-decoration-line: none;
		font-size: 13px;
	}
	.odezhda a{
		color: black;
		text-decoration-line: none;
		font-size: 13px;
	}
	.aksessuary a{
		color: black;
		text-decoration-line: none;
		font-size: 13px;
	}
	input[type="checkbox"] {
		display: none;
	}
	 
	label {
		color: #000;
		cursor: default;
		font-weight: normal;
		line-height: 30px;
		padding: 10px 0;
		vertical-align: middle;
	}
	 
	label:before {
		content: " ";
		color: #000;
		display: inline-block;
		font: 20px/30px FontAwesome;
		margin-right: 15px;
		position: relative;
		text-align: center;
		text-indent: 0px;
		width: 30px;
		height: 30px;
		background: #F4F0F4;
		border: 1px solid #e3e3e3;
		border-image: initial;
		vertical-align: middle;
	}
	 
	input:checked + label:before {
		content: "\f00c";
	}
	 
	input:disabled + label:before {
		background: #eee;
		color: #aaa;
	}
	.www2{
		width: 85%;
		height: 100%;
		position: relative;
		left: 15%;
		top: 0px;
		display: flex;
		flex-wrap: wrap;
	}
	.name p{
		text-align: center;
	}
	.name {
		display: inline-block;
		justify-content: space-around;
		text-align: center;
		width: 400px;
		height: 600px;
	}
	.www{
		height: 0px;
	}
	.name img {
  		transition: transform .2s;
  		margin: 0 auto;
	}

	.name img:hover {
  		-ms-transform: scale(1.5); 
  		-webkit-transform: scale(1.5); 
  		transform: scale(1.5); 
	}
	.overlay a{
		color: black;
		text-decoration-line: none;
	}
</style>
<div class="www">
	<div class="www1">
		<div class="odezhda">
			<h3>ОДЕЖДА</h3>
			<a href="womans.php?name=Пальто"><p>Пальто</p></a>
			<a href=""><p>Куртки</p></a>
			<a href=""><p>Костюмы</p></a>
			<a href="womans.php?name=Платья"><p>Платья</p></a>
			<a href=""><p>Комбинезоны</p></a>
			<a href=""><p>Кардиганы</p></a>
			<a href=""><p>Свитеры</p></a>
			<a href="womans.php?name=Рубашки"><p>Рубашки</p></a>
			<a href=""><p>Футболки</p></a>
			<a href=""><p>Брюки</p></a>
			<a href="womans.php?name=Джинсы"><p>Джинсы</p></a>
			<a href="womans.php?name=Юбки"><p>Юбки</p></a>
		</div>
		<div class="aksessuary">
			<h3>АКСЕССУАРЫ</h3>
			<a href=""><p>Обувь</p></a>
			<a href=""><p>Сумки</p></a>
			<a href=""><p>Бижутерия</p></a>
			<a href=""><p>Кошельки и бумажники</p></a>
			<a href=""><p>Платки и шарфы</p></a>
			<a href=""><p>Солнцезащитные очки</p></a>
			<a href=""><p>Ремни</p></a>
			<a href=""><p>Шапки и перчатки</p></a>
		</div>
		<div class="cveta">
			<h3>ЦВЕТА</h3>
			<div class="item">
				<input type="checkbox" id="a" value="Черные">
				<label for="a">Черные</label>
			</div>
			<div class="item">
				<input type="checkbox" id="b" value="Белые">
				<label for="b">Белые</label>
			</div>
			<div class="item">
				<input type="checkbox" id="c" value="Красные">
				<label for="c">Красные</label>
			</div>
			<div class="item">
				<input type="checkbox" id="d" value="Серые">
				<label for="d">Серые</label>
			</div>
			<div class="item">
				<input type="checkbox" id="e" value="Синие">
				<label for="e">Синие</label>
			</div>
			<div class="item">
				<input type="checkbox" id="f" value="Бежевые">
				<label for="f">Бежевые</label>
			</div>
			<div class="item">
				<input type="checkbox" id="g" value="Зеленые">
				<label for="g">Зеленые</label>
			</div>
			<div class="item">
				<input type="checkbox" id="h" value="Коричневые">
				<label for="h">Коричневые</label>
			</div>
			<div class="item">
				<input type="checkbox" id="i" value="Кремовые">
				<label for="i">Кремовые</label>
			</div>
			<div class="item">
				<input type="checkbox" id="j" value="Розовые">
				<label for="j">Розовые</label>
			</div>
			<div class="item">
				<input type="checkbox" id="k" value="Желтые">
				<label for="k">Желтые</label>
			</div>
			<div class="item">
				<input type="checkbox" id="l" value="Фиолетовые">
				<label for="l">Фиолетовые</label>
			</div>
		</div>
		<div class="razmer">
			<h3>Размер</h3>
			<div class="item">
				<input type="checkbox" id="m">
				<label for="m">XS</label>
			</div>
			<div class="item">
				<input type="checkbox" id="n">
				<label for="n">S</label>
			</div>
			<div class="item">
				<input type="checkbox" id="o">
				<label for="o">M</label>
			</div>
			<div class="item">
				<input type="checkbox" id="p">
				<label for="p">L</label>
			</div>
			<div class="item">
				<input type="checkbox" id="q">
				<label for="q">XL</label>
			</div>
		</div>
	</div>
</div>
<div class="www">
	<div class="www2">
		<?php
			$name=["Пальто","Куртки","Костюмы","Платья","Комбинезоны","Кардиганы","Свитеры","Рубажки","Футболки","Брюки","Джинсы","Юбки","Обувь","Сумки","Бижутерия","Кошельки и бумажники","Платки и шарфы","Солнцезащитные","Ремни","Шапки и перчатки","","","","","",""];

			$type=[["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33025720_09-99999999_01.jpg?ts=1531839191559&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31035730_69.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33085760_70.jpg?ts=1535563950083&imwidth=287&imdensity=1.25","price"=>"KZT 35000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31028815_99.jpg?ts=1534873106726&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31055004_99.jpg?ts=1529422567344&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33097010_94_D3.jpg?ts=1536928440657&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31060796_96.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33095756_CG-99999999_01.jpg?ts=1535643397220&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33035006_65.jpg?ts=1534926801923&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43090613_99.jpg?ts=1541773990395&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/41050808_92-99999999_01.jpg?ts=1541576034199&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/41070842_99-99999999_01.jpg?ts=1541420711937&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/41040739_02-99999999_01.jpg?ts=1542220614050&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43050975_99.jpg?ts=1542728007847&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/43090745_05-99999999_01.jpg?ts=1542306785714&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/41085736_99-99999999_01.jpg?ts=1542303229497&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/43010753_01-99999999_01.jpg?ts=1541576034199&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43090566_01.jpg?ts=1540827230027&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31057028_08_D2.jpg?ts=1537542543261&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31088807_85_D1.jpg?ts=1536309181965&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31093765_50.jpg?ts=1530295208802&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31090919_09-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33087668_82-99999999_01.jpg?ts=1543948571752&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31065776_92_D2.jpg?ts=1541759814350&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33013830_02-99999999_01.jpg?ts=1531406117577&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31080759_85.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33065802_TG-99999999_01.jpg?ts=1535463160984&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33013713_TM-99999999_01.jpg?ts=1529422567344&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33055772_TG-99999999_01.jpg?ts=1535455958058&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31005720_78-99999999_01.jpg?ts=1531762661819&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33073644_TO-99999999_01.jpg?ts=1537169601074&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33093744_TO-99999999_01.jpg?ts=1530636222298&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33010593_01-99999999_01.jpg?ts=1522863418350&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33055708_TS-99999999_01.jpg?ts=1529422567344&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33000601_TM-99999999_01.jpg?ts=1529056044147&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33067640_TG-99999999_01.jpg?ts=1536773532978&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33037653_02-99999999_01.jpg?ts=1531849074182&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33040467_TM-99999999_01.jpg?ts=1525365215839&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33043645_TN.jpg?ts=1529340588473&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/31073796_99-99999999_01.jpg?ts=1532003565381&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31067032_05_D2.jpg?ts=1537195055451&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33063695_TN-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33073762_91-99999999_01.jpg?ts=1531402500073&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33083696_TS-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/31077009_70.jpg?ts=1533659913014&imwidth=287&imdensity=1.25","price"=>"KZT 10990"]];

		if(isset($_GET['name'])){
			$name =  $_GET['name'];
			foreach($type as $element){
				if($element['name'] == $name)
					echo "<div class=\"name\">
								<a href =\"#\"><img src=\"" . $element['img'] ."\"/></>
								<div class=\"overlay\"><a href=\"\">"."Добавить"."
								".$element['price']."
								</div>
							</div>";
			}
		}
	?>
</div>
</div>
<script>
</script>












































