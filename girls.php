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
			<a href=""><p>Пальто</p></a>
			<a href=""><p>Куртки</p></a>
			<a href="girls.php?name=Платья"><p>Платья</p></a>
			<a href=""><p>Спортивные</p></a>
			<a href="girls.php?name=Толстовки"><p>Толстовки</p></a>
			<a href=""><p>Пижамы</p></a>
			<a href=""><p>Легинсы</p></a>
			<a href="girls.php?name=Рубашки"><p>Рубашки</p></a>
			<a href=""><p>Футболки</p></a>
			<a href=""><p>Брюки</p></a>
			<a href="girls.php?name=Джинсы"><p>Джинсы</p></a>
			<a href="girls.php?name=Юбки"><p>Юбки</p></a>
		</div>
		<div class="aksessuary">
			<h3>АКСЕССУАРЫ</h3>
			<a href="boys.php?name=Обувь"><p>Обувь</p></a>
			<a href=""><p>Сумки</p></a>
			<a href=""><p>Ремни</p></a>
			<a href=""><p>Шапки и шарфы</p></a>
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
				<label for="m">3-4 года</label>
			</div>
			<div class="item">
				<input type="checkbox" id="n">
				<label for="n">4-5 года</label>
			</div>
			<div class="item">
				<input type="checkbox" id="o">
				<label for="o">5-6 года</label>
			</div>
			<div class="item">
				<input type="checkbox" id="p">
				<label for="p">6-7 года</label>
			</div>
			<div class="item">
				<input type="checkbox" id="q">
				<label for="q">7-8 года</label>
			</div>
			<div class="item">
				<input type="checkbox" id="r">
				<label for="r">9-10 года</label>
			</div>
			<div class="item">
				<input type="checkbox" id="s">
				<label for="s">11-12 года</label>
			</div>
			<div class="item">
				<input type="checkbox" id="t">
				<label for="t">13-14 года</label>
			</div>
			<div class="item">
				<input type="checkbox" id="u">
				<label for="u">XS</label>
			</div>
			<div class="item">
				<input type="checkbox" id="v">
				<label for="v">S</label>
			</div>
			<div class="item">
				<input type="checkbox" id="w">
				<label for="w">M</label>
			</div>
			<div class="item">
				<input type="checkbox" id="x">
				<label for="y">L</label>
			</div>
			<div class="item">
				<input type="checkbox" id="y">
				<label for="y">XL/label>
			</div>
		</div>
	</div>
</div>
<div class="www">
	<div class="www2">
		<?php
			$type=[["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33083042_05_D1.jpg?ts=1531485732353&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33045758_05.jpg?ts=1538044391609&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020861_02.jpg?ts=1531155853701&imwidth=287&imdensity=1.25","price"=>"KZT 35000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33073043_95_D1.jpg?ts=1533721024220&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33095757_94.jpg?ts=1533897200705&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33050634_81_D1.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33095740_92_D1.jpg?ts=1532108030937&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33043726_44.jpg?ts=1538472795177&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33053768_82-99999999_01.jpg?ts=1533645715663&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33079035_99-99999999_01.jpg?ts=1540301593368&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33097683_96_D5.jpg?ts=1540801968912&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33095021_76-99999999_01.jpg?ts=1536229928937&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33075023_94-99999999_01.jpg?ts=1542972785020&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020890_92_D1.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33093736_02_D1.jpg?ts=1531143606519&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33063779_94-99999999_01.jpg?ts=1533825204923&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33060931_02.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Платья","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020707_94.jpg?ts=1531474606730&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33050818_01.jpg?ts=1533033186629&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33040655_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33040655_50-99999999_01.jpg?ts=1536834792970&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33081062_50.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33040655_85.jpg?ts=1535355205241&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33043722_02.jpg?ts=1533299731431&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33063728_52.jpg?ts=1529671024200&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33047659_76-99999999_01.jpg?ts=1539257567150&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33081062_82.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/43000710_BL-99999999_01.jpg?ts=1542979996165&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33000685_48.jpg?ts=1532511537492&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33021095_TM-99999999_01.jpg?ts=1531913627666&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33000670_TM_D1.jpg?ts=1532432289687&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33083722_37-99999999_01.jpg?ts=1532514910551&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020654_TM_D1.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43000564_TN.jpg?ts=1540301593368&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/43000710_55-99999999_01.jpg?ts=1543840416114&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/outfit/S20/43000710_BB-99999999_01.jpg?ts=1542979996165&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33093825_95.jpg?ts=1535355205241&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33065715_99.jpg?ts=1537969154806&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33065715_49_D5.jpg?ts=1534430013705&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33070646_TM.jpg?ts=1525787377726&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33073046_99-99999999_01.jpg?ts=1533033186629&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33090703_94.jpg?ts=1530621265981&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33065691_37.jpg?ts=1532101625275&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43023808_TN.jpg?ts=1544779995215&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Юбки","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43080578_TC.jpg?ts=1542979996165&imwidth=287&imdensity=1.25","price"=>"KZT 10990"]];

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