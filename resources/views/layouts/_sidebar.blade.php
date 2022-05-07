<div class="sidebar mt-4 mb-4">
  <div class="col-md-12">
    <div class="avatar">
      <img src="/images/bg.jpg" width="100px">
    </div>
    <div class="about-list">
      <p>刘传其</p>
    </div>
    <div class="about-list">
      <i class="fa fa-briefcase" aria-hidden="true" style="color: #a5a5a5"></i>后端开发工程师
    </div>
    <div class="about-list">
      <i class="fa fa-map-marker" aria-hidden="true" style="color: #a5a5a5"></i>成都
    </div>
    <div class="about-list">
      <i class="fa fa-envelope" aria-hidden="true" style="color: #a5a5a5"></i>1434376870@qq.com
    </div>
  </div>
</div>

<div class="sidebar mt-4 mb-4">
    <div class="header">
        <div class="col-md-12">
            热门文章
        </div>
    </div>
    <div class="col-md-12">
        <ul class="list-unstyled font-weight-light">
            @foreach( $active['active_article'] as $k => $act)
                <li>
                    <a href="{{ url('article', [$act->id]) }}">{{ $k+1 }}. {{ $act->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="sidebar mt-4 mb-4">
  <div class="header">
    <div class="col-md-12">
      最新文章
    </div>
  </div>
  <div class="col-md-12">
    <ul class="list-unstyled font-weight-light">
      @foreach( $active['new_article'] as $k => $act)
        <li>
          <a href="{{ url('article', [$act->id]) }}">{{ $k+1 }}. {{ $act->title }}</a>
        </li>
      @endforeach
    </ul>
  </div>
</div>

<div class="sidebar mt-4 mb-4">
  <div class="header">
    <div class="col-md-12">
      所有分类
    </div>
  </div>
  <div class="col-md-12">
    <ul class="list-unstyled font-weight-light">
      @foreach( $active['category_list'] as $k => $cate)
        <li>
          <a href="{{ url('category', [$cate->title]) }}">{{ $k+1 }}. {{ $cate->title }}</a>
        </li>
      @endforeach
    </ul>
  </div>
</div>
