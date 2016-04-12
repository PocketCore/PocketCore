<!--
NOTE::::::
This entire file is just a concept by me (HotFireyDeath) for the docs.
if you like this concept, leave your comment and we can extend from this.


THANKS!


Every method and thing in here is just as an example, they will probably not be
in the actual API!
-->
<script>
    var page_data = new Object();
    page_data["current_viewing"] = null;
    page_data["transitionTo"] = function(page){
        $('#' + page_data["current_viewing"]).hide();
        page_data["current_viewing"] = page;
        $('#' + page_data["current_viewing"]).show();
        Materialize.showStaggeredList('#' + page_data["current_viewing"]);
    }
</script>
<style>
    .fbg {
        opacity: 0;
    }
    .dhk {
        /* Use this class whenever declaring a new ul for staggered list. */
        display: none;
    }
</style>
<div class="row">
    <div class="col s2">
        <div class="card">
            <div class="card-content">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header theme-color">[Example] Players</div>
                        <div class="collapsible-body">
                            <div class="container">
                                <ul>
                                    <li><a onclick="page_data.transitionTo('player_getKills')">getKills()</a></li>
                                    <li><a onclick="page_data.transitionTo('player_getFriends')">getFriends()</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col s10">
        <ul id="player_getKills" class="dhk">
            <li class="fbg"><h4>Player::getKills()</h4></li>
            <li class="fbg"><p style="font-weight: 100;">Method type: Static</p></li>
            <br>
            <li class="fbg">Returns the number of kills a player currently has.</li>
            <br>
            <br>
            <li class="fbg"><strong>Returns</strong></li>
            <li class="fbg"><p style="font-weight: 100;">Integer</p></li>
        </ul>
        <ul id="player_getFriends" class="dhk">
            <li class="fbg"><h4>Player::getFriends()</h4></li>
            <li class="fbg"><p style="font-weight: 100;">Method type: Function</p></li>
            <br>
            <li class="fbg">Returns an array of the player's friends.</li>
            <br>
            <br>
            <li class="fbg"><strong>Returns</strong></li>
            <li class="fbg"><p style="font-weight: 100;">Array</p></li>
        </ul>
    </div>
</div>