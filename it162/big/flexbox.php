<?php include('includes/header.php');?>

<section>
<h2>Flexbox: What Is It?</h2>
<p>Introduced in CSS3, Flexbox layout distributes space along a single column or row. 
    Flexbox was created to replace float and table layout hacking issues. Flexbox layouts 
    consist of a flex container that holds flex items. Flex containers can be laid out 
    horizontally or vertically, which is referred to as a main or cross axis (see below 
    for more details). Ideally, Flexbox is having the ability to alter items in its 
    container to best fill the available space.</p>
<br>

<h3>Flexbox & Its Properties</h3>
<p>There are many properties to Flexbox, but layouts can be created with often very
    little code involved:</p>
<p>Example:</p>
<div class = "code">
 <pre>   
 .flex-container {
    display: flex;
 }
 </pre>
</div>

<p>These few lines of code can do the following:</p>
<ul>
    <li>Considers .flex-container to be a flex container</li>
    <li>Items will be laid in a horizonal line.</li>
    <li>Items will be sized based on their regular width properties.</li>
    <li>If you need to shrink contents, each item shrinks equally.</li>
    <li>Items will be laid out starting on the left side.</li>
</ul>
<p>These are just some of the properties Flexbox can achieve with this sample code.</p>
<ul style = "list-style-type:square;">
    <li>One thing to note: <code>display:flex;</code> is essentially a parent container. 
    Elements placed inside the container are the items. There is flex-start and 
    flex-end points to each container.</li>
</ul>
<figure class="flexbox">
    <img class="fb.sample" src="images/fb.sample.png" alt="fb.sample" />
        <figcaption>Fig.1: A visual look at Flexbox (JavaScript Teacher 2018)</figcaption>
</figure>
<p>As seen in the image, there are two coordinate axes used to define the container:</p>
<ul>
    <li>The Main Axis - Represents the horizonal axis. To control the contents width along
        the main axis, <u>justify</u> properties would be used.</li>
    <li>The Cross Axis - Represents the vertical axis. To control verticl aspects of 
        items, <u>align</u> properties would be used.</li>
</ul>
<p>Visit any CSS syntax library for various formatting rules or visit any of the sites 
    linked in the Cited Resources section for more details.</p> 
<br>

<h3>Browser Compatibility</h3>
<p>Flexbox is fully supported in all modern browsers:</p>
<figure class="flexbox">
    <img class="fb.cap" src="images/fb.cap.png" alt="fb.cap" />
        <figcaption>Fig.2: CSS Flexible Box Layout Browser Support 2020 (caniuse.com 2020)</figcaption>
</figure>
<p>If browsers see a rule that is not understood, like the above example 
    <code>display: flex;</code>, the flex container will and items then fall back to 
    the default settings like <code>display: block;</code> for example.</p>
<br>

<h3>Getting Familiarized with Flexbox</h3>
<p>These are some fun interactive tools to help you quickly understand the 
    properties of Flexbox:</p>
<div class = "linkscss">       
<ul>
    <li><a href="https://flexboxfroggy.com/"
         target="_blank">Flexbox Froggy</a> - A game for learning CSS Flexbox.</li>
    <li><a href="https://the-echoplex.net/flexyboxes/"
         target="_blank">Flexy Boxes</a> - A CSS Flexbox playground and code-generating 
         tool.</li>
    <li><a href="http://www.csstutorial.org/flex-both.html"
         target="_blank">Visual CSS Flex</a> - A Flexbox layout editor/ online tool.</li>
</ul>
 </div>
<br>
</section>

<aside>
<div class = "ainfo">
<h3>Cited Resources</h3>
<p>Modzilla. “Basic Concepts of Flexbox.” MDN Web Docs, 2020, 
   <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" 
   target="_blank">developer.mozilla.org/</a>.</p>
<br>
<p>Vandehey, Scott. “What IS Flexbox?” Space Ninja, Space Ninja, 18 Sept. 2018,
    <a href="https://spaceninja.com/2015/08/24/what-is-flexbox/"
    target="_blank">spaceninja.com/</a>.</p>
<br>
<p>Teacher, JavaScript. “The Complete CSS Flex Box Tutorial.” Medium, Medium, 
    30 Mar. 2020,
    <a href="https://medium.com/@js_tut/the-complete-css-flex-box-tutorial-d17971950bdc" 
    target="_blank">medium.com/</a>.</p>
<br>
<p>Andrew, Rachel, and About The Author. “A Guide To CSS Support In Browsers.” 
    Smashing Magazine, 4 Feb. 2019, 
    <a href="http://www.smashingmagazine.com/2019/02/css-browser-support/" 
    target="_blank">www.smashingmagazine.com/</a>.</p>
<br>
<p>Can I Use... Support Tables for HTML5, CSS3, Etc, 
   <a href="https://caniuse.com/flexbox" 
    target="_blank">caniuse.com/</a>.</p>   
</div>
<br>
</aside>

<?php include('includes/footer.php');?>