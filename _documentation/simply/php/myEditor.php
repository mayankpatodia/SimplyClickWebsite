<div class="container">
    <div class="row" style="margin-top:100px">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="list-group list-group-horizontal col-md-9">
                <a href="#" id="b" class="list-group-item">
                    <span class="glyphicon glyphicon-bold" aria-hidden="true"></span>
                </a>
                <a href="#" id="i" class="list-group-item">
                    <span class="glyphicon glyphicon-italic" aria-hidden="true"></span>
                </a>
                <a href="#" id="st" class="list-group-item">
                    <strike><strong>S</strong></strike>
                </a>
                <a href="#" id="u" class="list-group-item">
                    <u><strong>U</strong></u>
                </a>
                <a href="#" id="la" class="list-group-item">
                    <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                </a>
                <a href="#" id="ra" class="list-group-item">
                    <span class="glyphicon glyphicon-align-right" aria-hidden="true"></span>
                </a>
                <a href="#" id="ca" class="list-group-item">
                    <span class="glyphicon glyphicon-align-center" aria-hidden="true"></span>
                </a>
                <a href="#" id="j" class="list-group-item">
                    <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                </a>
                <!---<a href="#" id="l" class="list-group-item">

                </a>-->

                <button id="example" type="button" class="btn btn-default list-group-item" data-container="body" data-toggle="popover" data-placement="bottom">
                    <span class="glyphicon glyphicon-link" aria-hidden="true"></span>
                </button>
                <div id="link-popover-content">
                    <h4>Bootstrap:</h4>
                    <p>
                        Hi! Bootstrap 3 rules!
                        <input type="text" id="data" value="javed chakka"/>
                        <input type="submit" id="something" />
                    </p>
                </div>
                <a href="#" id="uli" class="list-group-item">
                    <span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>
                </a>
                <a href="#" id="fc" class="list-group-item">
                    <span class="glyphicon glyphicon-text-color" aria-hidden="true"></span>
                </a>
                <a href="#" id="bc" class="list-group-item">
                    <span class="glyphicon glyphicon-text-background" aria-hidden="true"></span>
                </a>
                <a href="#" id="tsi" class="list-group-item">
                    <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
                </a>
                <a href="#" id="tsd" class="list-group-item">
                    <span class="glyphicon glyphicon-resize-small" aria-hidden="true"></span>
                </a>
                <a href="#" id="in" class="list-group-item">
                    <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span>
                </a>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <div class="form-group fontName">
                    <select class='form-control fontName fontSelect' onchange="fontEditor(this[this.selectedIndex].value)">
                        <option value="Arial" style="font-family: Arial;">Arial</option>
                        <option value="Calibri" style="font-family: Calibri;">Calibri</option>
                        <option value="Comic Sans MS" style="font-family: 'Comic Sans MS';">Comic Sans MS</option>
                        <option value="Courier New" style="font-family: Courier New;">Courier New</option>
                        <option value="Georgia" style="font-family: Georgia;">Georgia</option>
                        <option value="Helvetica" style="font-family: Helvetica;">Helvetica</option>
                        <option value="Impact" style="font-family: Impact;">Impact</option>
                        <option value="Times" style="font-family: Times;">Times</option>
                        <option value="Verdana" style="font-family: Verdana;">Verdana</option>
                        <option value="Monospace" style="font-family: Monospace;">Monospace</option>
                        <option value="Agency FB" style="font-family: Agency FB;">Agency FB</option>

                    </select>
                </div>

            </div>
        </div>
        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 20px">
            <div class="form-group">
                <div contenteditable="true" id="ctext" class="form-control ctext">
                    i am a sample text<br>

                </div>
            </div>
        </div>
        <div class="col-xs-10 col-xs-offset-1">
            <p id="text">
            </p>
        </div>

    </div>
</div>
