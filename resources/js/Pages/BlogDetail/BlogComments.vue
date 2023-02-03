<template>
    <div class="blog-details-comment">
        <h4>This post has one comment</h4>
        <div class="single-blog-comment">
            <div class="blog-comment-img">
                <img alt="" src="/assets/images/blog/blog-comment.png">
            </div>
            <div class="blog-comment-content">
                <div class="blog-comment-top">
                    <div class="comment-author">
                        <h3><a href="#">A WordPress Commenter</a><span>5 Mar 2020</span></h3>
                    </div>
                    <p>Hi, this is a comment. <br>
                        To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.
                        <br> Commenter avatars come from <a href="#">Gravatar.</a>
                    </p>
                </div>
                <div class="blog-comment-bottom">
                    <a href="#"><i class="lastudioicon-voice-recognition"></i> Reply</a>
                </div>
            </div>
        </div>
    </div>
    <div class="comment-form">
        <h4>Leave a Reply</h4>
        <form action="#">
            <div class="row">
                <div class="col-md-12">
                    <div class="leave-form">
                        <textarea placeholder="Your Comment Here..."></textarea>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="leave-form">
                        <input placeholder="Name (required)" type="text">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="leave-form">
                        <input placeholder="Email" type="text">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="leave-form">
                        <input placeholder="Website" type="text">
                    </div>
                </div>
            </div>
            <div class="save-comment-info">
                <input type="checkbox">
                <span>Save my name, email, and website in this browser for the next time I comment.</span>
            </div>
            <div class="text-submit">
                <input type="submit" value="Post Comment">
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "BlogComments"
}
</script>

<style scoped>

</style>
