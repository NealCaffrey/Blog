@foreach ($articles as $article)
    <li class="media mt-4 mb-4 article">
        <div class="media-body font-weight-light">
            <p class="mt-0 mb-3 article-title"><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></p>
            <span class="article-introduction">
              <a href="{{ route('article.show', $article->id) }}">{{ $article->introduction }}</a>
            </span>
            <div class="mt-3">
                <span>
                    <i class="fa fa-align-left text-muted"></i>
                    <a href="{{ route('category.show', $article->category->title) }}">{{ $article->category->title }}</a>
                </span>
                <span class="margin-left-20">
                  <i class="fa fa-eye text-muted pl-3"></i>
                  <span>{{ $article->visits }}</span>
                </span>
                <span class="float-right margin-left-20" id="create_at">{{ $article->created_at }}</span>
            </div>
        </div>
    </li>
@endforeach
