<template>
    <breadcrumb :category="null" :title="'Blog'"></breadcrumb>
    <div class="blog-page-area">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="blog-page-wrap blog-page-wrap-padding">
                        <div class="blog-details-wrap">
                            <div class="blog-details-img">
                                <img src="/assets/images/blog/blog-details.jpg" alt="">
                            </div>
                            <div class="blog-details-category">
                                <a href="#">Uncategorized</a>
                            </div>
                            <h1>Pink and Plaid plus a New Series</h1>
                            <div class="blog-details-meta">
                                <ul>
                                    <li>By <a href="#">HasTech</a></li>
                                    <li>May 2, 2020</li>
                                </ul>
                            </div>
                            <div class="blog-details-peragraph">
                                <p>Duis efficitur gravida tincidunt. Nam sodales vel odio at sollicitudin. Vestibulum sed rutrum nisl. Nulla diam arcu, facilisis nec blandit non, interdum et orci. Duis efficitur gravida tincidunt. Nam sodales vel odio at sollicitudin. Vestibulum sed rutrum […]</p>
                                <p>All the rumors have finally died down and many skeptics have tightened their lips, the iPod does support video format now on its fifth generation. While the iPod is not the first to come up with this, it has certainly made its stature as the greatest in the market and can be dubbed as the best multimedia portable player available.</p>
                                <p>With its popularity and iconesque standing, the iPod has made sharing videos easier. You don’t need to be lugging around different equipments for your music, your notes, your photos and your videos. You can have the standard where every other portable multimedia players are gauged to and not need anything else. Video playback capabilities have made it a complete multi media equipment, but not all formats are supported just yet. So if you want to put your videos in your iPod you have to make sure that they are in a supported format.</p>
                            </div>
                            <div class="blog-details-video">
                                <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><img src="/assets/images/blog/blog-details-video.jpg" alt=""></a>
                            </div>
                            <div class="blog-details-peragraph">
                                <h2>7 Reasons To Stay At The Peninsula Paris</h2>
                                <p>All the rumors have finally died down and many skeptics have tightened their lips, the iPod does support video format now on its fifth generation. While the iPod is not the first to come up with this, it has certainly made its stature as the greatest in the market and can be dubbed as the best multimedia portable player available.</p>
                                <p>With its popularity and iconesque standing, the iPod has made sharing videos easier. You don’t need to be lugging around different equipments for your music, your notes, your photos and your videos. You can have the standard where every other portable multimedia players are gauged to and not need anything else.</p>
                            </div>
                            <blockquote>
                                <h3>Life Is Short Make Every Outfit Count</h3>
                                <span>Phillip Caldwell</span>
                            </blockquote>
                            <div class="blog-details-peragraph">
                                <p>Aliquam convallis massa quis dignissim lobortis. Maecenas in massa non eros maximus varius et id nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc lobortis justo quis vulputate scelerisque. Mauris at nulla sed sapien tempor varius sit amet id est. uisque venenatis bibendum</p>
                                <p>All the rumors have finally died down and many skeptics have tightened their lips, the iPod does support video format now on its fifth generation. While the iPod is not the first to come up with this, it has certainly made its stature as the greatest in the market and can be dubbed as the best multimedia portable player available.</p>
                                <p>With its popularity and iconesque standing, the iPod has made sharing videos easier. You don’t need to be lugging around different equipments for your music, your notes, your photos and your videos. You can have the standard where every other portable multimedia players are gauged to and not need anything else.</p>
                            </div>
                            <div class="blog-details-tag-social">
                                <div class="blog-details-tag">
                                    <ul>
                                        <li>Tags : </li>
                                        <li><a href="#">Computer,</a></li>
                                        <li><a href="#">Design,</a></li>
                                        <li><a href="#">Technology.</a></li>
                                    </ul>
                                </div>
                                <div class="blog-details-social">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="lastudioicon-b-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="lastudioicon-b-twitter"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="lastudioicon-b-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="next-wrap">
                                <div class="next-conent">
                                    <h5><a href="#">3 Pants Trends to Try This Season</a></h5>
                                    <a href="#">Next Post</a>
                                </div>
                            </div>
                            <BlogComments></BlogComments>
                        </div>
                    </div>
                </div>
                <LeftSidebar></LeftSidebar>
            </div>
        </div>
    </div>
</template>

<script>
import Breadcrumb from "@/Pages/Component/Breadcrumb.vue";
import LeftSidebar from "@/Pages/BlogDetail/LeftSidebar.vue";
import BlogComments from "@/Pages/BlogDetail/BlogComments.vue";

export default {
    name: "Index",
    components: {BlogComments, LeftSidebar, Breadcrumb}
}
</script>

<style scoped>

</style>
