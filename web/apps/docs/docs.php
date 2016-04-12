<script>
    /* global $ */
    /* global Materialize */
    var page_data = new Object();
    page_data["current_viewing"] = "title_";
    page_data["transitionTo"] = function(page){
        $('#' + page_data["current_viewing"]).hide();
        page_data["current_viewing"] = page;
        $('#' + page_data["current_viewing"]).show();
        Materialize.showStaggeredList('#' + page_data["current_viewing"]);
    }
</script>
<link rel="stylesheet" href="template/css/highlight/github.css">
<script src="template/js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<style>
    .fbg {
        opacity: 0;
    }
    .dhk {
        /* Use this class whenever declaring a new ul for staggered list. */
        display: none;
    }
    .methods li {
        margin: 5px;
    }
    .methods a:hover {
        cursor: pointer;
    }
    .methods a:active {
        font-weight: 800;
    }
    .collapsible-header {
        box-shadow: none !important;
    }
    .card .card-content {
         height: 100%;
         margin: 0;
    }
</style>

<div class="row">
    <div class="col s2">
        <div class="card z-depth-1">
            <div class="card-content">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header theme-color z-depth-1">Web</div>
                        <div class="collapsible-body">
                            <div class="container">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li>
                                        <div class="collapsible-header theme-color">BanManager</div>
                                        <div class="collapsible-body">
                                            <div class="container">
                                                <ul class="methods">
                                                    <li><a onclick="page_data.transitionTo('banmgr___construct')">__construct()</a></li>
                                                    <li><a onclick="page_data.transitionTo('banmgr_isBanned')">isBanned()</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header theme-color">AuthManager</div>
                                        <div class="collapsible-body">
                                            <div class="container">
                                                <ul class="methods">
                                                    <li><a onclick="page_data.transitionTo('authmgr___construct')">__construct()</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col s10">
        <ul id="title_">
            <li><h4>PocketCore Documentation</h4></li>
            <li><hr><br></li>
            <li><p>Paragraph about our documentation...</p></li>
        </ul>
        <ul id="banmgr___construct" class="dhk">
            <li class="fbg"><h4>__construct()</h4></li>
            <li class="fbg"><p style="font-weight: 100;">Method type: Class</p></li>
            <br>
            <li class="fbg">New BanManager class's construct.</li>
            <li><pre><code class="php">BanManager::__construct(Main $api)</code></pre></li>
            <li class="fbg"><strong>Arguments</strong></li>
            <li class="fbg"><p style="font-weight: 100;">Main $api</p></li>
            <li class="fbg"><br><br><strong>Returns</strong></li>
            <li class="fbg"><p style="font-weight: 100;">BanManager</p></li>
        </ul>
        <ul id="banmgr_isBanned" class="dhk">
            <li class="fbg"><h4>BanManager::isBanned(String $name)</h4></li>
            <li class="fbg"><p style="font-weight: 100;">Method type: Function</p></li>
            <br>
            <li class="fbg">Checks if the specified player is banned.</li>
            <br>
            <br>
            <li class="fbg"><strong>Arguments</strong></li>
            <li class="fbg"><p style="font-weight: 100;">String $name</p></li>
            <li class="fbg"><br><br><strong>Returns</strong></li>
            <li class="fbg"><p style="font-weight: 100;">Boolean</p></li>
        </ul>
        <ul id="authmgr___construct" class="dhk">
            <li class="fbg"><h4>__construct()</h4></li>
            <li class="fbg"><p style="font-weight: 100;">Method type: Class</p></li>
            <br>
            <li class="fbg">New AuthManager class's construct.</li>
            <br>
            <br>
            <li class="fbg"><strong>Arguments</strong></li>
            <li class="fbg"><p style="font-weight: 100;">Main $api</p></li>
            <li class="fbg"><br><br><strong>Returns</strong></li>
            <li class="fbg"><p style="font-weight: 100;">AuthManager</p></li>
        </ul>
    </div>
</div>