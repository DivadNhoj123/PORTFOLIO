<div class="sidebar">
    <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                DJC
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                Portfilio
            </a>
        </div>
        <ul class="nav">
            <li class="active ">
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-tv-2"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('about.index') }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>About</p>
                </a>
            </li>
            <li>
                <a href="{{ route('social.index') }}">
                    <i class="tim-icons icon-camera-18"></i>
                    <p>Social Media</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples" class="collapsed" aria-expanded="false">
                    <i class="tim-icons icon-trophy"></i>
                    <p>
                        Experience
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples" style="">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('talent.index') }}">
                                <span class="sidebar-mini-icon">P</span>
                                <span class="sidebar-normal"> Skills </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('jobs.index') }}">
                                <span class="sidebar-mini-icon">P</span>
                                <span class="sidebar-normal"> Job </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('about.index') }}">
                    <i class="tim-icons icon-video-66"></i>
                    <p>Blogs</p>
                </a>
            </li>
        </ul>
    </div>
</div>
