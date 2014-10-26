<div id="navcontainer">
		<ul>
		<li>
			<h2>
			<a href=<?php echo ($this->aboutRef) ? $this->eprint($this->aboutRef) : "index.php"; ?> >О чемпионате</a>
		</h2></li><li>
			<h2><a href=<?php echo ($this->participantsRef) ? $this->eprint($this->participantsRef) : "index.php"; ?> >Участники</a></h2>
		</li><li>
			<h2>Арены</h2>
				<ul type="none">
					<li><a href="arenas/arena_da_baishada.html">Арена да Байшада</a></li>
					<li><a href="arenas/arena_amazonia.html">Арена Амазония</a></li>
					<li><a href="arenas/arena_das_dunas.html">Арена дас Дунас</a></li>
					<li><a href="arenas/arena_de_corintians.html">Арена де Коринтианс</a></li>
					<li><a href="arenas/arena_pantanal.html">Арена Пантаналь</a></li>
					<li><a href="arenas/arena_pernambuku.html">Арена Пернамбуку</a></li>
					<li><a href="arenas/beira_rio.html">Бейра-Рио</a></li>
					<li><a href="arenas/marakana.html">Маракана</a></li>
					<li><a href="arenas/mineirao.html">Минейрао</a></li>
					<li><a href="arenas/mane_harrinch.html">Стадион Манэ Гарринча</a></li>
					<li><a href="arenas/fonte_nova.html">Фонте-Нова</a></li>
					<li><a href="arenas/estadio_castelan.html">Эстадио Кастелан</a></li>
				</ul>
			</li>
		</ul>

		<form>
			<ul>
				<li><p>Login: <input type="text" name="login"/></p></li>
				<li><p>Password: <input type="password" name="password"/></p></li>
				<li><button name="submit">Войти</button></li>
			</ul>
		</form>

	</div>
