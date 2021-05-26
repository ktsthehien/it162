<?php include "includes/header.php";?>
<p>Flexbox is a part of CSS that provides an efficient way to lay out, align and distribute space among items in a container. The flex layout allows responsive elements within a container to be automatically arranged depending upon screen size. According to W3C, “The specification describes a CSS box model optimized for user interface design. In the flex layout model, the children of a flex container can be laid out in any direction, and can “flex” their sizes, either growing to fill unused space or shrinking to avoid overflowing the parent. Both horizontal and vertical alignment of the children can be easily manipulated. Nesting of these boxes (horizontal inside vertical, or vertical inside horizontal) can be used to build layouts in two dimensions”(CSS Flexible Box).</p>
<p>When regular layout is based on both block and inline flow directions, the flex layout is based on flex-flow directions. According to Chris Coyier, “Since flexbox is a whole module and not a single property, it involves a lot of things including its whole set of properties. Some of them are meant to be set on the container (parent element, known as “flex container”) whereas the others are meant to be set on the children (flex items)”(Coyier).
</p>
<p>Flexbox is very well supported across modern browsers, and the majority of browsers do not need a prefix at this point. Safari was the last of the major browsers to remove prefixes, with the release of Safari 9 in 2015. Chris Coyier noted that “The biggest limiting factor of course being IE, but otherwise it’s pretty good. If you’re doing a mobile-specific version of a site, you’re in even better shape. If someone can test it on Windows Phone, lemme know. Firefox 19- is a bit buggy and you’ll need to watch it. For instance, in this demo I wasn’t able to figure a way to force the sidebars to actually be 20%. They just collapse to the width of the content inside, which is a bit arbitrary as it’s text. As of September 2020, 98.69% of installed browsers (99.29% of desktop browsers and 100% of mobile browsers) support CSS Flexible Box Layout”(Coyier).
</p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Citations</h3>
    <p>“CSS Flexible Box Layout Module Level 1.” W3C, 19 Nov. 2018, www.w3.org/TR/2018/CR-css-flexbox-1-20181119/. 
</p>
    <p>Coyier, Chris. “A Complete Guide to Flexbox: CSS-Tricks.” CSS Tricks, 7 Apr. 2021, css-tricks.com/snippets/css/a-guide-to-flexbox/.</p>
 </aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>
