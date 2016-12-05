<div class="media common-media-list">
    <div class="pull-left">
        <a href="{link}"><img
                    class="img-responsive" title="{name}"
                    src="{img}"
                    alt="{name}"></a>
    </div><!--/.pull-left-->


    <div class="media-body">
        <h3 class="title"><a style="color: #00aeef;"
                    href="{link}">{name}</a></h3>
        <div class="media-body-content">
            {content}
        </div><!--/.media-body-content-->

        <!--<div class="package-share" style="margin-top: 10px">
           <i class="fa fa-calendar"></i> {created} | <i class="fa fa-eye"></i> {view}
        </div>-->

        <ul class="package-share">
            <li><a href="https://www.facebook.com/sharer/sharer.php?u={link}" target="_blank"><i
                            class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/intent/tweet?source=webclient&text={link}" target="_blank"><i
                            class="fa fa-twitter"></i></a></li>
            <li><a href="https://plus.google.com/share?url={link}" onclick='javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;' target="_blank"><i
                            class="fa fa-google-plus"></i></a></li>
            <li><a href="http://pinterest.com/pin/create/button/?url={link}" onclick="window.open(this.href); return false;" title="Pinterest" target="_blank"><i
                            class="fa fa-pinterest"></i></a></li>
            <li><a  href="mailto:?Subject={name}?&amp;body={name}:{content}" target="_blank"><i
                            class="fa fa-envelope"></i></a></li>
        </ul>
    </div><!--/.media-body-->
</div><!--/.media-->