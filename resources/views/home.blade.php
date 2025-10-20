@extends('layouts.app')

@section('title-block')Сайт рузюме Сафиуллин Руслан@endsection

@section('content')
<div class="box-content">
		
			<section class="posts">
				<div class="posts__link center">
					<h2 class="posts__head">Познавательные статьи</h2>
					<a href="#" class="view-all">View all</a>
				</div>

				<div class="posts__articles center">
					<div class="posts__article">
						<h3 class="posts__articleH3">
							Flexbox: Гибкость в веб-дизайне
						</h3>
						<div class="posts__date">
							<p>18 Янв 2025</p>
							<p>|</p>
							<p>Frontend, Pattern</p>
						</div>
						<p class="posts__articleText">
							Flexbox (Flexible Box Layout) — это модуль CSS, который
							предоставляет более эффективный способ расположения,
							выравнивания и распределения пространства между элементами
							в контейнере, даже когда их размер неизвестен и/или
							динамичен. Это делает Flexbox идеальным для создания
							адаптивных и отзывчивых макетов.
						</p>
					</div>
					<div class="posts__article">
						<h3 class="posts__articleH3">
							CSS Grid: Мощный инструмент для создания макетов
						</h3>
						<div class="posts__date">
							<p>17 Янв 2025</p>
							<p>|</p>
							<p>Frontend, Pattern</p>
						</div>
						<p class="posts__articleText">
							CSS Grid Layout — это современный модуль CSS, который
							предоставляет разработчикам возможность создавать сложные и
							адаптивные макеты с помощью сеточной системы. Grid
							позволяет легко управлять расположением элементов на
							странице, обеспечивая гибкость и контроль над дизайном.
						</p>
					</div>
				</div>
			</section>

			<section class="works center">
				<h2 class="works__h2">Последние работы</h2>
				<article class="works__mainTopic">
					<img class="works__img" src="{{ asset('img/the-brand.png') }}" alt="work" />
					<div class="works__article">
						<h3 class="works__topic">THE BRAND OF LUXERIOUS FASHION</h3>
						<div class="works__categorysDate">
							<p class="works__date">2025</p>
							<a
								href="https://advanced-html-css-beryl.vercel.app/"
								class="works__catygory"
								target="_blank"
							>
								Перейти к просмотру
							</a>
						</div>
						<p class="works__text">
							Верстка интернет-магазина одежды HTML5 CSS3
						</p>
					</div>
				</article>

				<article class="works__mainTopic">
					<img
						class="works__img"
						src="{{ asset('img/programming-school-website.png') }}"
						alt="work"
					/>
					<div class="works__article">
						<h3 class="works__topic">Школа {программирования}</h3>
						<div class="works__categorysDate">
							<p class="works__date">2024</p>
							<a
								href="https://programming-chool-website.vercel.app/"
								class="works__catygory"
								target="_blank"
							>
								Перейти к просмотру
							</a>
						</div>
						<p class="works__text">
							Верстка сайта школы программирования (desktop version)
						</p>
					</div>
				</article>

				<article class="works__mainTopic">
					<img class="works__img" src="{{ asset('img/likeimg.jpg') }}" alt="work" />
					<div class="works__article">
						<h3 class="works__topic">"Лайк" изображению</h3>
						<div class="works__categorysDate">
							<p class="works__date">2025</p>
							<a
								href="lickeimg.html"
								class="works__catygory"
								target="_blank"
							>
								Перейти к просмотру
							</a>
						</div>
						<p class="works__text">
							Веб-приложение, которое каждый день отображает новое случайное изображение из коллекции Unsplash, и дает пользователю возможность узнать больше о фотографе и сделать "лайк" изображению.
						</p>
					</div>
				</article>
			</section>
</div>
@endsection
