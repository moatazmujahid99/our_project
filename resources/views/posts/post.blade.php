<div class="col-md-6">
    <div class="panel panel-success rounded shadow">
        <div class="panel-heading no-border" style=" background-color:rgb(66 103 178) ">
            <div class="pull-left half">
                <div class="media">
                    <div class="media-object pull-left">
                        <!--************Posted Friend Profile photo************-->
                        <img src="{{ asset('images/users/' . $post->user->user_img) }}" alt="..."
                            class="img-circle img-post">
                    </div>
                    <div class="media-body" style="color: aliceblue">
                        <!--************Posted Friend name************-->
                        <a href="/users/{{$post->user_id}}/profile"
                            class="media-heading block mb-0 h4 text-white">{{ $post->user->first_name . ' ' . $post->user->last_name }}</a><br>
                        <!--************Posted Date************-->
                        <span class="text-white h6">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div><!-- /.pull-left -->
            <div class="pull-right" style="color: aliceblue">
                <a href="" class="text-white h4"><i class="fa fa-heart" style="color:deeppink"></i> 15.5K</a>
            </div><!-- /.pull-right -->
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding">
            <!--************Post Body************-->
            <p>{{ $post->description }}</p>
            <!--************Posted photo if there is one************-->
            {{-- @php
                if (isset($post->post_img)) {
                    $image_path = asset('images/posts/' . $post->post_img);
                } else {
                    $image_path = 'https://via.placeholder.com/340x210/';
                }
                
            @endphp --}}
            <img src="{{ asset('images/posts/' . $post->post_img) }}" alt="..." class="img-responsive full-width">
            <!-- /.inner-all -->
            <div class="line no-margin"></div><!-- /.line -->
            @foreach ($post->comments as $comment)
                @include('posts.comment', ['comment' => $comment])
            @endforeach
            <div class="line no-margin"></div><!-- /.line -->
        </div><!-- /.panel-body -->
        <!--************Add Comment ************-->
        @include('posts.create_comment', ['post_id' => $post->id])
    </div><!-- /.panel -->
</div>
