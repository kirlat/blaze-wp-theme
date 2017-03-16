
## Introduction

This is a theme's style guide. It includes all elements that are used on site's pages, or can potentially
be used there, such as Bootstrap elements. Us this guide as both a reference to the visuall appearance of
site's alements and as a pattern library from where you can copy and paste elements' code to put it into
the site's pages.

## Typography

### Body Text

    @example
    <p class="lead">This is an example of a lead text.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu justo justo.
    Suspendisse maximus pellentesque libero quis sollicitudin. Sed consectetur finibus tellus,
    id egestas neque ornare ut. Praesent in diam feugiat turpis dapibus consequat quis eu augue.
    Proin vel mi ac nisl molestie pretium ut ac velit. Sed euismod quis libero non iaculis.
    Nam id purus nec quam molestie dictum. Vestibulum vestibulum nisi ac dui vehicula,
    semper convallis libero euismod. Nam vel tristique augue. Sed ut neque nibh.
    Phasellus feugiat pulvinar finibus.</p>

    <p>Morbi rhoncus augue id dapibus pharetra. In auctor justo ac augue tristique,
    eget ultrices felis dapibus. Pellentesque et vestibulum arcu. Maecenas eget egestas massa.
    Cras consectetur fermentum nisl, sed eleifend lorem vehicula finibus. Aenean a lorem malesuada,
    vestibulum nulla quis, rutrum magna. Curabitur aliquet quis nibh ut placerat. Integer efficitur
    eget nisl a sagittis. Sed euismod sollicitudin pharetra. Aliquam mattis turpis porttitor rhoncus faucibus.
    Ut nec laoreet ex. Donec justo urna, consequat a molestie ac, pharetra ut nibh. Integer feugiat
    metus vel leo ullamcorper, vitae pharetra arcu tincidunt. Nam id urna orci. Fusce commodo
    pellentesque odio, at sodales dolor sagittis at.</p>

    <p>Nullam quis risus eget <a href="#">this text is a link</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
    <p><small>This line of text is meant to be treated as fine print.</small></p>
    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
    <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>


### Headers

    @example
    <h1>Heading 1</h1>
    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
    <h2>Heading 2</h2>
    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
    <h3>Heading 3</h3>
    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
    <h4>Heading 4</h4>
    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
    <h5>Heading 5</h5>
    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
    <h6>Heading 6</h6>
    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

### Emphasis Classes

    @example
    <h2>Emphasis classes</h2>
    <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
    <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
    <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
    <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
    <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>

### Blockquotes

    @example
    <blockquote>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
    </blockquote>

    <blockquote class="blockquote-reverse">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
    </blockquote>

## Buttons

### Unstyled Buttons

A button that does not have any style applied to it. To create an unstyled button, add the `btn` classname
to any `<a>`, `<input>` or `<button>` element.

    @example
    button.btn.btn-xs Extra Small Button
    button.btn.btn-sm Small Button
    button.btn Normal Button
    button.btn.btn-lg Large Button
    button.btn.disabled Disabled Button

### Standard (Default) Buttons

Standard button is a main button that used throughout the site. To create an standard button, add the `btn`
and `btn-default` classname to any `<a>`, `<input>` or `<button>` element.

    @example
    button.btn.btn-default.btn-xs Extra Small Button
    button.btn.btn-default.btn-sm Small Button
    button.btn.btn-default Normal Button
    button.btn.btn-default.btn-lg Large Button
    button.btn.btn-default.disabled Disabled Button

### Primary Buttons

Primary buttons are used to provide extra visual weight and identifies the primary action in a set of buttons.
To create an primary button, add the `btn` and `btn-primary` classname to any
`<a>`, `<input>` or `<button>` element.

    @example
    button.btn.btn-primary.btn-xs Extra Small Button
    button.btn.btn-primary.btn-sm Small Button
    button.btn.btn-primary Normal Button
    button.btn.btn-primary.btn-lg Large Button
    button.btn.btn-primary.disabled Disabled Button

### Success Buttons

Success buttons are used to indicate a successful or positive action.
To create an success button, add the `btn` and `btn-success` classname to any
`<a>`, `<input>` or `<button>` element.

    @example
    button.btn.btn-success.btn-xs Extra Small Button
    button.btn.btn-success.btn-sm Small Button
    button.btn.btn-success Normal Button
    button.btn.btn-success.btn-lg Large Button
    button.btn.btn-success.disabled Disabled Button

### Info Buttons

Contextual button for informational alert messages.
To create an info button, add the `btn` and `btn-info` classname to any
`<a>`, `<input>` or `<button>` element.

    @example
    button.btn.btn-info.btn-xs Extra Small Button
    button.btn.btn-info.btn-sm Small Button
    button.btn.btn-info Normal Button
    button.btn.btn-info.btn-lg Large Button
    button.btn.btn-info.disabled Disabled Button

### Warning Buttons

Warning buttons are used to indicate that caution should be taken with this action.
To create an warning button, add the `btn` and `btn-warning` classname to any
`<a>`, `<input>` or `<button>` element.

    @example
    button.btn.btn-warning.btn-xs Extra Small Button
    button.btn.btn-warning.btn-sm Small Button
    button.btn.btn-warning Normal Button
    button.btn.btn-warning.btn-lg Large Button
    button.btn.btn-warning.disabled Disabled Button

### Danger Buttons

Danger buttons are used to indicates a dangerous or potentially negative action.
To create an danger button, add the `btn` and `btn-danger` classname to any
`<a>`, `<input>` or `<button>` element.

    @example
    button.btn.btn-danger.btn-xs Extra Small Button
    button.btn.btn-danger.btn-sm Small Button
    button.btn.btn-danger Normal Button
    button.btn.btn-danger.btn-lg Large Button
    button.btn.btn-danger.disabled Disabled Button

### Link Buttons

Link buttons are used to deemphasize a button by making it look like a
link while maintaining button behavior.
To create a link button, add the `btn` and `btn-link` classname to any
`<a>`, `<input>` or `<button>` element.

    @example
    button.btn.btn-link.btn-xs Extra Small Button
    button.btn.btn-link.btn-sm Small Button
    button.btn.btn-link Normal Button
    button.btn.btn-link.btn-lg Large Button
    button.btn.btn-link.disabled Disabled Button

### Button Sizes

All buttnos can have the following sizes:
extra small (`btn-xs` classname), small (`btn-sm` classname), normal (no size-specific classname), large (`btn-lg` classname), and
extra large (`btn-xl` classname).

    @example
    button.btn.btn-xs Extra Small Button
    button.btn.btn-sm Small Button
    button.btn Normal Button
    button.btn.btn-lg Large Button
    button.btn.btn-xl Disabled Button

### Block Level Buttons

    @example
    <a href="#" class="btn btn-default btn-lg btn-block">Block level button</a>

### Button Groups

    @example
    <div class="btn-group btn-group-justified">
    <a href="#" class="btn btn-default">Left</a>
    <a href="#" class="btn btn-default">Middle</a>
    <a href="#" class="btn btn-default">Right</a>
    </div>

### Dropdown Buttons

    @example
    <div style="margin-bottom: 150px;">
    <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
    </ul>
    </div>
    </div>

### Button Toolbar

    @example
    <div style="margin-bottom: 100px;">

    <div class="btn-toolbar">
    <div class="btn-group">
    <a href="#" class="btn btn-default">1</a>
    <a href="#" class="btn btn-default">2</a>
    <a href="#" class="btn btn-default">3</a>
    <a href="#" class="btn btn-default">4</a>
    </div>

    <div class="btn-group">
    <a href="#" class="btn btn-default">5</a>
    <a href="#" class="btn btn-default">6</a>
    <a href="#" class="btn btn-default">7</a>
    </div>

    <div class="btn-group">
    <a href="#" class="btn btn-default">8</a>
    <div class="btn-group">
    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    Dropdown
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
    <li><a href="#">Dropdown link</a></li>
    <li><a href="#">Dropdown link</a></li>
    <li><a href="#">Dropdown link</a></li>
    </ul>
    </div>
    </div>
    </div>

    </div>

### Vertical Groups

    @example
    <div class="btn-group-vertical">
    <a href="#" class="btn btn-default">Button</a>
    <a href="#" class="btn btn-default">Button</a>
    <a href="#" class="btn btn-default">Button</a>
    <a href="#" class="btn btn-default">Button</a>
    </div>

## Tables

### Striped table with borders

    @example
    <table class="table table-striped table-bordered">
    <thead>
    <tr>
    <th>#</th>
    <th>Column heading</th>
    <th>Column heading</th>
    <th>Column heading</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
    </tr>
    <tr>
    <td>3</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
    </tr>
    <tr>
    <td>4</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
    </tr>
    <tr>
    <td>5</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
    </tr>
    <tr>
    <td>6</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
    </tr>
    <tr>
    <td>7</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
    </tr>
    </tbody>
    </table>

### Table with highlighted rows and hover effect, without borders

    @example
    <table class="table table-striped table-hover ">
    <thead>
    <tr>
    <th>#</th>
    <th>Column heading</th>
    <th>Column heading</th>
    <th>Column heading</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
    </tr>
    <tr class="info">
    <td>3</td>
    <td>Column content (info)</td>
    <td>Column content (info)</td>
    <td>Column content (info)</td>
    </tr>
    <tr class="success">
    <td>4</td>
    <td>Column content (success)</td>
    <td>Column content (success)</td>
    <td>Column content (success)</td>
    </tr>
    <tr class="danger">
    <td>5</td>
    <td>Column content (danger)</td>
    <td>Column content (danger)</td>
    <td>Column content (danger)</td>
    </tr>
    <tr class="warning">
    <td>6</td>
    <td>Column content (warning)</td>
    <td>Column content (warning)</td>
    <td>Column content (warning)</td>
    </tr>
    <tr class="active">
    <td>7</td>
    <td>Column content (active)</td>
    <td>Column content (active)</td>
    <td>Column content (active)</td>
    </tr>
    </tbody>
    </table>

## Forms

    @example
    <form class="form-horizontal">
    <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-10">
    <input class="form-control" id="inputEmail" placeholder="Email" type="text">
    </div>
    </div>
    <div class="form-group">
    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
    <div class="col-lg-10">
    <input class="form-control" id="inputPassword" placeholder="Password" type="password">
    <div class="checkbox">
    <label>
    <input type="checkbox"> Checkbox
    </label>
    </div>
    </div>
    </div>
    <div class="form-group">
    <label for="textArea" class="col-lg-2 control-label">Textarea</label>
    <div class="col-lg-10">
    <textarea class="form-control" rows="3" id="textArea"></textarea>
    <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
    </div>
    </div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Radios</label>
    <div class="col-lg-10">
    <div class="radio">
    <label>
    <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
    Option one is this
    </label>
    </div>
    <div class="radio">
    <label>
    <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
    Option two can be something else
    </label>
    </div>
    </div>
    </div>
    <div class="form-group">
    <label for="select" class="col-lg-2 control-label">Selects</label>
    <div class="col-lg-10">
    <select class="form-control" id="select">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    </select>
    <br>
    <select multiple="" class="form-control">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    </select>
    </div>
    </div>
    <div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
    <button type="reset" class="btn btn-default">Cancel</button>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </fieldset>
    </form>

### Form Elements

    @example
    <div class="form-group">
    <label class="control-label" for="focusedInput">Focused input</label>
    <input class="form-control" id="focusedInput" value="This is focused..." type="text">
    </div>

    <div class="form-group">
    <label class="control-label" for="disabledInput">Disabled input</label>
    <input class="form-control" id="disabledInput" placeholder="Disabled input here..." disabled="" type="text">
    </div>

    <div class="form-group has-warning">
    <label class="control-label" for="inputWarning">Input warning</label>
    <input class="form-control" id="inputWarning" type="text">
    </div>

    <div class="form-group has-error">
    <label class="control-label" for="inputError">Input error</label>
    <input class="form-control" id="inputError" type="text">
    </div>

    <div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Input success</label>
    <input class="form-control" id="inputSuccess" type="text">
    </div>

    <div class="form-group">
    <label class="control-label" for="inputLarge">Large input</label>
    <input class="form-control input-lg" id="inputLarge" type="text">
    </div>

    <div class="form-group">
    <label class="control-label" for="inputDefault">Default input</label>
    <input class="form-control" id="inputDefault" type="text">
    </div>

    <div class="form-group">
    <label class="control-label" for="inputSmall">Small input</label>
    <input class="form-control input-sm" id="inputSmall" type="text">
    </div>

    <div class="form-group">
    <label class="control-label">Input addons</label>
    <div class="input-group">
    <span class="input-group-addon">$</span>
    <input class="form-control" type="text">
    <span class="input-group-btn">
    <button class="btn btn-default" type="button">Button</button>
    </span>
    </div>
    </div>

### Input Groups

An input group example.

    @example
    <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
    <div class="input-group-addon">$</div>
    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
    <a class="input-group-addon">.00</a>
    </div>
    </div>

## Navs

### Tabs

    @example
    <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
    <li><a href="#profile" data-toggle="tab">Profile</a></li>
    <li class="disabled"><a>Disabled</a></li>
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
    Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
    <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
    <li class="divider"></li>
    <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
    </ul>
    </li>
    </ul>
    <div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="home">
    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
    </div>
    <div class="tab-pane fade" id="profile">
    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
    </div>
    <div class="tab-pane fade" id="dropdown1">
    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
    </div>
    <div class="tab-pane fade" id="dropdown2">
    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
    </div>
    </div>

### Pills

    @example
    <ul class="nav nav-pills">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Profile</a></li>
    <li class="disabled"><a href="#">Disabled</a></li>
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
    Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
    </ul>
    </li>
    </ul>

### Pills Stacked

    @example
    <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Profile</a></li>
    <li class="disabled"><a href="#">Disabled</a></li>
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
    Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
    </ul>
    </li>
    </ul>

### Breadcrumbs

    @example
    <ul class="breadcrumb">
    <li class="active">Home</li>
    </ul>

    <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Library</li>
    </ul>

    <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Library</a></li>
    <li class="active">Data</li>
    </ul>

### Pagination

    @example
    <ul class="pagination">
    <li class="disabled"><a href="#">«</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">»</a></li>
    </ul>

    <ul class="pagination pagination-lg">
    <li class="disabled"><a href="#">«</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">»</a></li>
    </ul>

    <ul class="pagination pagination-sm">
    <li class="disabled"><a href="#">«</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">»</a></li>
    </ul>

### Pager

    @example
    <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
    </ul>

    <ul class="pager">
    <li class="previous disabled"><a href="#">← Older</a></li>
    <li class="next"><a href="#">Newer →</a></li>
    </ul>


## Navbar

### Navbar Standard

    @example
    <div style="margin-bottom: 150px;">
    <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
    <li><a href="#">Link</a></li>
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
    <li class="divider"></li>
    <li><a href="#">One more separated link</a></li>
    </ul>
    </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="#">Link</a></li>
    </ul>
    </div>
    </div>
    </nav>
    </div>

### Navbar Inversed

    @example
    <div style="margin-bottom: 150px;">
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
    <ul class="nav navbar-nav">
    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
    <li><a href="#">Link</a></li>
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
    <li class="divider"></li>
    <li><a href="#">One more separated link</a></li>
    </ul>
    </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="#">Link</a></li>
    </ul>
    </div>
    </div>
    </nav>
    </div>

## Indicators

### Alerts

    @example
    <div class="alert alert-dismissible alert-warning">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h4>Warning!</h4>
    <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
    </div>

    <div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
    </div>

    <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
    </div>

    <div class="alert alert-dismissible alert-info">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
    </div>

### Labels

    @example
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
    <span class="label label-info">Info</span>

### Badges

    @example
    <ul class="nav nav-pills">
    <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
    <li><a href="#">Profile <span class="badge"></span></a></li>
    <li><a href="#">Messages <span class="badge">3</span></a></li>
    </ul>


## Progress Bars

### Basic

    @example
    <div class="progress">
    <div class="progress-bar" style="width: 60%;"></div>
    </div>

### Contextual alternatives

    @example
    <div class="progress">
    <div class="progress-bar progress-bar-info" style="width: 20%"></div>
    </div>

    <div class="progress">
    <div class="progress-bar progress-bar-success" style="width: 40%"></div>
    </div>

    <div class="progress">
    <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
    </div>

    <div class="progress">
    <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
    </div>

### Striped

    @example
    <div class="progress progress-striped">
    <div class="progress-bar progress-bar-info" style="width: 20%"></div>
    </div>

    <div class="progress progress-striped">
    <div class="progress-bar progress-bar-success" style="width: 40%"></div>
    </div>

    <div class="progress progress-striped">
    <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
    </div>

    <div class="progress progress-striped">
    <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
    </div>

### Animated

    @example
    <div class="progress progress-striped active">
    <div class="progress-bar" style="width: 45%"></div>
    </div>

### Stacked

    @example
    <div class="progress">
    <div class="progress-bar progress-bar-success" style="width: 35%"></div>
    <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
    <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
    </div>


## Containers

### Jumbotron

    @example
    <div class="jumbotron">
    <h1>Jumbotron</h1>
    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <p><a class="btn btn-primary btn-lg">Learn more</a></p>
    </div>

### List Groups

    @example
    <ul class="list-group">
    <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
    </li>
    <li class="list-group-item">
    <span class="badge">2</span>
    Dapibus ac facilisis in
    </li>
    <li class="list-group-item">
    <span class="badge">1</span>
    Morbi leo risus
    </li>
    </ul>

    <div class="list-group">
    <a href="#" class="list-group-item active">
    Cras justo odio
    </a>
    <a href="#" class="list-group-item">Dapibus ac facilisis in
    </a>
    <a href="#" class="list-group-item">Morbi leo risus
    </a>
    </div>

    <div class="list-group">
    <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    </a>
    <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    </a>
    </div>

### Panels

    @example
    <div class="panel panel-default">
    <div class="panel-body">
    Basic panel
    </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-heading">Panel heading</div>
    <div class="panel-body">
    Panel content
    </div>
    </div>

    <div class="panel panel-default">
    <div class="panel-body">
    Panel content
    </div>
    <div class="panel-footer">Panel footer</div>
    </div>

    <div class="panel panel-primary">
    <div class="panel-heading">
    <h3 class="panel-title">Panel primary</h3>
    </div>
    <div class="panel-body">
    Panel content
    </div>
    </div>

    <div class="panel panel-success">
    <div class="panel-heading">
    <h3 class="panel-title">Panel success</h3>
    </div>
    <div class="panel-body">
    Panel content
    </div>
    </div>

    <div class="panel panel-warning">
    <div class="panel-heading">
    <h3 class="panel-title">Panel warning</h3>
    </div>
    <div class="panel-body">
    Panel content
    </div>
    </div>

    <div class="panel panel-danger">
    <div class="panel-heading">
    <h3 class="panel-title">Panel danger</h3>
    </div>
    <div class="panel-body">
    Panel content
    </div>
    </div>

    <div class="panel panel-info">
    <div class="panel-heading">
    <h3 class="panel-title">Panel info</h3>
    </div>
    <div class="panel-body">
    Panel content
    </div>
    </div>

## Dialogs

### Modals

    @example
    <div class="modal" style="position: relative; top: auto; right: auto; left: auto; bottom: auto; z-index: 1; display: block;">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">
    <p>One fine body…</p>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div>
    </div>
    </div>

### Popovers

    @example
    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Left</button>

    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Top</button>

    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
    sagittis lacus vel augue laoreet rutrum faucibus.">Bottom</button>

    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Right</button>

### Tooltips

    @example
    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>

    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</button>

    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>

    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>