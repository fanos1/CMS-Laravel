@extends('master')
@section('title', 'View the HOME page')
@section('content')

	<div class="container">
		<div class="col-12">
			<img class="img-responsive" src="/images/{{ $page->img }}" alt="{{ $page->title }}"  />
		</div>
	</div>

    <article class="container">
        <div class="col-12" style="text-align: center;">
            <div class="content">
                <h1>{!! $page->title !!}</h1>
                <h2 style="padding: 0px; ">{!! $page->h2 !!}</h2>
                <h3>{!! $page->h3 !!}</h3>
                <p class="lead"> {!! $page->content !!} </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </article>
	
	
	<div class="container">
        <div class="col-12"  style="text-align: center;">		
			<?php /* 
					@foreach($comments as $comment)
						<div class="well well bs-component">
							<div class="content">
								{!! $comment->content !!}
							</div>
						</div>
					@endforeach
				*/
			?>

			<div class="clearfix">
			@foreach($articlesForThisPage as $article)
				<div style="display: inline-block; margin: 5px;">
				   <h1> {!! $article->title !!} </h1>
				   <img class="img-responsive"  src="/images/{{ $article->img }}"  alt="{{ $page->title }}"  />
				</div>
			@endforeach
			</div>
		</div>
	</div>

	
	<div class="container" style="text-align: center;">
		<div class="col-12" style="padding-bottom: 0px;">
			<h1 style="padding-bottom: 0px;">Some Previous Clients</h1>
		</div>
	</div>
	<style type="text/css">
		#threeimg {
			text-align: center;
		}
		#threeimg .col-4:not(:last-child) {
			border-right: #ccc 1px solid;
		}
		#threeimg a {
			color: #7F7F7C;
		}
		#threeimg h4 {
			font-size: 20px;
		}
	</style>

	<section id="threeimg" class="container">
		<article class="col-4" style="">			
			<h4><a href="https://www.boatinternational.com/yachts/the-superyacht-directory/eclipse--73837" title="m/y eclipse" target="_blank">M/Y Eclipse</a></h4>
			<div class="lead">Abramovich's Superyacht Eclipse. Full refinishing completed by our experienced staff</div>
		</article>
		<article class="col-4">
			<h4><a href="https://www.boatinternational.com/yachts/news/overmarine-sells-new-build-mangusta-gransport-45--32835" title="mangusta gransport 45" target="_blank">
				Mangusta Gransport | 45
			</a></h4>
			<div class="lead">Luxury super-yacht, full fairing (plastering) and refinishing completed by our experienced staff</div>
		</article>
		<article class="col-4">
			<h4>
				<a href="https://www.pocruises.com/cruise-ships/arcadia/" title="arcadia" target="_blank">
				Arcadia</a>
			</h4>
			<div class="lead">A luxury cruise ship. Full rust removal subcontract work with Montanos GmbH, Germany.</div>
		</article>				
	</section>
	
	<article class="container">
		<div class="col-4"></div>
		<div class="col-4">
			<p class="lead" style="background-color: #027592; color: #fff; padding: 16px; text-align: center;"> Top rated quality workmanship</p>
		</div>
		<div class="col-4"></div>
	</article>
	

	
@endsection