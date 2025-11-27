@extends('layouts.app')

@section('title-block')Мои работы@endsection

@section('content')
<div class="box-content">
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