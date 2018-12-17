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
			<a href=""><p>Костюмы</p></a>
			<a href=""><p>Спортивные</p></a>
			<a href="boys.php?name=Толстовки"><p>Толстовки</p></a>
			<a href=""><p>Жилеты</p></a>
			<a href=""><p>Свитеры</p></a>
			<a href="boys.php?name=Рубашки"><p>Рубашки</p></a>
			<a href=""><p>Футболки</p></a>
			<a href="boys.php?name=Брюки"><p>Брюки</p></a>
			<a href="boys.php?name=Джинсы"><p>Джинсы</p></a>
			<a href=""><p>Парки</p></a>
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
			$type=[["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020613_77_D1.jpg?ts=1530791370950&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33010614_76-99999999_01.jpg?ts=1536834792970&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33010614_94_D1.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 35000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33071048_37-99999999_01.jpg?ts=1535535140756&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33013046_99_D1.jpg?ts=1533116125224&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33055720_77_D1.jpg?ts=1535708194222&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33043043_36_D1.jpg?ts=1531758887956&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33090590_92.jpg?ts=1528979730394&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Толстовки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33047682_65_D1.jpg?ts=1538562793887&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33055726_54_D5.jpg?ts=1538055203988&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33083034_92-99999999_01.jpg?ts=1532422937377&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33063024_99.jpg?ts=1536076859053&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33053033_16-99999999_01.jpg?ts=1535027779600&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33063024_76_D1.jpg?ts=1533202474971&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33063023_28.jpg?ts=1533202474971&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33063023_56-99999999_01.jpg?ts=1530632098823&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33038809_99.jpg?ts=1538562793887&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33055726_92_D1.jpg?ts=1534505590682&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33067656_43_D1.jpg?ts=1536076859053&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33060623_01-99999999_01.jpg?ts=1530193406278&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33053743_70.jpg?ts=1533202474971&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33047657_99-99999999_01.jpg?ts=1542302039005&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33060623_56.jpg?ts=1533202474971&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33070625_01_D1.jpg?ts=1529502659683&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33013037_16.jpg?ts=1533724400141&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33060623_59.jpg?ts=1533739701716&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33050448_52_D4.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33070655_TM-99999999_01.jpg?ts=1530261534927&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33070911_TN-99999999_01.jpg?ts=1530193406278&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33080724_TO_D1.jpg?ts=1531758887956&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33040656_TU-99999999_01.jpg?ts=1543836819752&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33060762_BL.jpg?ts=1530193406278&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33003018_TO_D1.jpg?ts=1534505590682&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33003018_TG.jpg?ts=1534505590682&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33063771_TS-99999999_01.jpg?ts=1533728527480&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33070655_TM-99999999_01.jpg?ts=1530261534927&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33090816_56_B.jpg?ts=1529322757426&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33090756_01_B.jpg?ts=1524756833041&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33095003_69_B.jpg?ts=1533220563343&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T2/fotos/S20/23063606_76_B.jpg?ts=1511890641560&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33080795_37_B.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33095003_69_B.jpg?ts=1533220563343&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33063029_01_B.jpg?ts=1530632098823&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33015005_20_B.jpg?ts=1530632098823&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33093028_99_B.jpg?ts=1533555427669&imwidth=287&imdensity=1.25","price"=>"KZT 10990"]];

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