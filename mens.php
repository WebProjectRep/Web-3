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
			<a href="mens.php?name=Пальто"><p>Пальто</p></a>
			<a href=""><p>Куртки</p></a>
			<a href=""><p>Костюмы</p></a>
			<a href=""><p>Пиджаки</p></a>
			<a href=""><p>Толстовки</p></a>
			<a href=""><p>Кожа</p></a>
			<a href=""><p>Свитеры</p></a>
			<a href="mens.php?name=Рубашки"><p>Рубашки</p></a>
			<a href=""><p>Футболки</p></a>
			<a href="mens.php?name=Брюки"><p>Брюки</p></a>
			<a href="mens.php?name=Джинсы"><p>Джинсы</p></a>
			<a href=""><p>Парки</p></a>
		</div>
		<div class="aksessuary">
			<h3>АКСЕССУАРЫ</h3>
			<a href="mens.php?name=Обувь"><p>Обувь</p></a>
			<a href=""><p>Сумки</p></a>
			<a href=""><p>Бумажники</p></a>
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
			$type=[["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33055724_56.jpg?ts=1533663517968&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33083746_09-99999999_01.jpg?ts=1532003565381&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33085718_98-99999999_01.jpg?ts=1533663517968&imwidth=287&imdensity=1.25","price"=>"KZT 35000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33023741_99-99999999_01.jpg?ts=1534509192176&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43049063_52.jpg?ts=1543836819752&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33097625_03.jpg?ts=1536327180339&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33077632_99.jpg?ts=1536060718509&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33065727_92-99999999_01.jpg?ts=1531327744344&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Пальто","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43069061_09.jpg?ts=1544607182124&imwidth=287&imdensity=1.25","price"=>"KZT 30000"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33053745_16-99999999_01.jpg?ts=1533663517968&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33023041_01-99999999_01.jpg?ts=1535380633303&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33035808_57.jpg?ts=1539189206105&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33043733_93-99999999_01.jpg?ts=1533645715663&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33075718_77.jpg?ts=1533145948034&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020541_37.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33073746_64.jpg?ts=1534501985602&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33065724_39-99999999_01.jpg?ts=1535477236293&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Брюки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020542_69.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 25990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33080625_99_D1.jpg?ts=1528972687676&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33023748_52_D2.jpg?ts=1533645715663&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33017640_56.jpg?ts=1538134384348&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33023749_01_D1.jpg?ts=1533663517968&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33053731_TC.jpg?ts=1533645715663&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33037638_92.jpg?ts=1537525989900&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33070681_20.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33075720_01.jpg?ts=1535477236293&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Рубашки","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33063784_01.jpg?ts=1533645715663&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33020570_TO-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33090808_TG-99999999_01.jpg?ts=1531139611977&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33010592_TS.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020567_TS_D1.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33013806_BB-99999999_01.jpg?ts=1534505590682&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33010595_TN-99999999_01.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020573_TG.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/outfit/S20/33010586_TC-99999999_01.jpg?ts=1524232408591&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Джинсы","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33020572_TG.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33080837_99_B.jpg?ts=1538479994920&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33030606_CU.jpg?ts=1525941454813&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33095750_99_D8.jpg?ts=1541011204971&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33080567_01_B.jpg?ts=1524562425784&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33090567_92_B.jpg?ts=1530636222298&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33080645_99_D8.jpg?ts=1541414599513&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T4/fotos/S20/43085024_CU_D3.jpg?ts=1544617991730&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33070568_37_B.jpg?ts=1522921151503&imwidth=287&imdensity=1.25","price"=>"KZT 10990"],["name"=>"Обувь","img"=>"https://st.mngbcn.com/rcs/pics/static/T3/fotos/S20/33050838_30_D3.jpg?ts=1528908162308&imwidth=287&imdensity=1.25","price"=>"KZT 10990"]];

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
