@extends('layouts/contentLayoutMaster')

@section('title', 'Helper Classes')

@section('content')
{{-- Borders --}}
<section id="borders" class="card">
    <div class="card-header">
      <h4 class="card-title">Borders</h4>
    </div>
    <div class="card-content">
      {{--Add borders--}}
      <div class="card-body">
        <div class="card-text my-1">
          <p class="bd-lead">Use border utilities to quickly style the border and border-radius of an element. Great for
            images, buttons, or any other element.</p>
          <h5 class="text-bold-600">Add border</h5>
          <p>Add one of these to class to add border on the required side.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.border</code></td>
              <td>Add solid border of 1px on each side.</td>
            </tr>
            <tr>
              <td><code>.border-{top/bottom/left/right}</code></td>
              <td>Add solid border top/bottom/left/right of 1px.</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Add borders--}}

      {{--Remove borders--}}
      <div class="card-body">
        <div class="card-text my-1">
          <h5 class="text-bold-600">Remove border</h5>
          <p>Add one of these to class to remove border on the required side.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.no-border</code></td>
              <td>Remove border from all side.</td>
            </tr>
            <tr>
              <td><code>.border-{top/bottom/left/right}-0</code></td>
              <td>Remove border from the top/bottom/left/right side.</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Remove borders--}}

      {{--Border widths--}}
      <div class="card-body">
        <div class="card-text my-1">
          <h5 class="text-bold-600">Border widths</h5>
          <p>Add one of these to class to change border width on the required side.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.border-2</code></td>
              <td>Chande border width to 2px on each side.</td>
            </tr>
            <tr>
              <td><code>.border-{side}-{size}</code></td>
              <td>Chande border width of given size (2px, 3px, ...) on given side (top, bottom, left, right).</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Border width--}}

      {{--Border color--}}
      <div class="card-body">
        <div class="card-text my-1">
          <h5 class="text-bold-600">Border color</h5>
          <p>Change the border color using utilities built on our theme colors. For more border color related options
            please check color palette pages.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.border border-{colorName}</code></td>
              <td>Add colored border to all side. ColorName can be primary, success, danger, warning, info, secondary light, dark, white.</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Border color--}}

      {{--Border-radius--}}
      <div class="card-body">
        <div class="card-text my-1">
          <h5 class="text-bold-600">Border-radius</h5>
          <p>Add classes to an element to easily round its corners.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.rounded</code></td>
              <td>Add round corners border to all side.</td>
            </tr>
            <tr>
              <td><code>.rounded-{side}</code></td>
              <td>Add round corners border to the given side only (top, bottom, left, right).</td>
            </tr>
            <tr>
              <td><code>.rounded-circle</code></td>
              <td>Create round circle border.</td>
            </tr>
            <tr>
              <td><code>.rounded-0</code></td>
              <td>Remove border corder from the all side.</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Border-radius--}}


      {{--Remove border radius--}}
      <div class="card-body">
        <div class="card-text my-1">
          <h5 class="text-bold-600">Remove border radius</h5>
          <p>Add one of these to class to remove border radius on the required side.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table mb-0">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.no-border-{top/bottom}-radius</code></td>
              <td>Remove border radius from top / bottom side.</td>
            </tr>
            <tr>
              <td><code>.no-border-{top/bottom}-{left/right}-radius</code></td>
              <td>Remove top / bottom border radius from left / right side.</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Remove borders--}}
    </div>
  </section>
  {{--/ Borders--}}

  {{--Clearfix--}}
  <section id="clearfix" class="card">
    <div class="card-header">
      <h4 class="card-title">Clearfix</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text my-1">
          <p>Quickly and easily clear floated content within a container by adding a clearfix utility.</p>
          <p>Easily clear <code class="highlighter-rouge">float</code>s by adding <code
              class="highlighter-rouge">.clearfix</code> <strong>to the parent element</strong>. Can also be used as a
            mixin.</p>
        </div>
        <pre>
          <code class="language-html">
              &lt;div class="clearfix"&gt;...&lt;/div&gt;
          </code>
        </pre>
        <pre>
          <code class="language-css">// Mixin itself
            @mixin clearfix() {
              &::after {
                display: block;
                content: "";
                clear: both;
              }
            }

            {{-- .element {
              @include clearfix;
            } --}}
          </code>
        </pre>
        <p class="py-1">The following example shows how the clearfix can be used. Without the clearfix the wrapping div
          would not span around the buttons which would cause a broken layout.</p>
        <div class="bd-example my-3">
          <div class="bg-info clearfix">
            <button type="button" class="btn btn-danger float-left">Example Button floated left</button>
            <button type="button" class="btn btn-warning float-right">Example Button floated right</button>
          </div>
        </div>
        <pre><code class="language-html">
              &lt;div class="bg-info clearfix"&gt;
                &lt;button type="button" class="btn btn-danger float-left"&gt;Example Button floated left&lt;/button&gt;
                &lt;button type="button" class="btn btn-warning float-right"&gt;Example Button floated right&lt;/button&gt;
              &lt;/div&gt;
              </code></pre>
      </div>
    </div>
  </section>
  {{--/Clearfix--}}

  {{--Close icon--}}
  <section id="close-icon" class="card">
    <div class="card-header">
      <h4 class="card-title">Close icon</h4>
    </div>
    <div class="card-content">


      <div class="card-body">
        <div class="card-text my-1">
          <p>Use a generic close icon for dismissing content like modals and alerts.</p>
          <p><strong>Be sure to include text for screen readers</strong>, as we’ve done with <code
              class="highlighter-rouge">aria-label</code>.</p>
        </div>
        <div class="bd-example d-flex">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <pre>
          <code class="language-html">
              &lt;button type="button" class="close" aria-label="Close"&gt;
                        &lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;
                      &lt;/button&gt;
          </code>
        </pre>
      </div>
    </div>
  </section>
  {{--/Close icon--}}

  {{-- Display property --}}
  <section id="display-property" class="card">
    <div class="card-header">
      <h4 class="card-title">Display property</h4>
    </div>
    <div class="card-content">
      {{--Display--}}
      <div class="card-body">
        <div class="card-text">
          <p>Quickly and responsively toggle the display value of components and more with our display utilities. Includes
            support for some of the more common values, as well as some extras for controlling display when printing.</p>
          <h5 class="text-bold-600 my-1">Common display values</h5>
          <p>The <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/display"><code
                class="highlighter-rouge">display</code> property</a> accepts a handful of values and we support many of
            them with utility classes. We purposefully don’t provide every value as a utility, so here’s what we support:
          </p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.d-none</code></td>
              <td>Forces the element to hide on all viewports.</td>
            </tr>
            <tr>
              <td><code>.d-inline</code></td>
              <td>Forces the element to behave like an inline element.</td>
            </tr>
            <tr>
              <td><code>.d-inline-block</code></td>
              <td>Forces the element to behave like an inline-block element.</td>
            </tr>
            <tr>
              <td><code>.d-block</code></td>
              <td>Forces the element to behave like an block element.</td>
            </tr>
            <tr>
              <td><code>.d-table</code></td>
              <td>Forces the element to behave like <code>&lt;table&gt;</code> element.</td>
            </tr>
            <tr>
              <td><code>.d-table-cell</code></td>
              <td>Forces the element to behave like <code>&lt;td&gt;</code> element.</td>
            </tr>
            <tr>
              <td><code>.d-flex</code></td>
              <td>Forces the element as a block-level flex container.</td>
            </tr>
            <tr>
              <td><code>.d-inline-flex</code></td>
              <td>Forces the element as an inline-level flex container.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-body">
        <div class="card-text">
          <p>Put them to use by applying any of the classes to an element of your choice. For example, here’s how you
            could use the inline, block, or inline-block utilities (the same applies to the other classes).</p>
          <div class="bd-example my-3">
            <div class="d-inline bg-success p-1 white">d-inline</div>
            <div class="d-inline bg-success  p-1 white">d-inline</div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-inline bg-success"&gt;d-inline&lt;/div&gt;
                  &lt;div class="d-inline bg-success"&gt;d-inline&lt;/div&gt;
                  </code></pre>

          <div class="bd-example my-3">
            <span class="d-block bg-primary p-1 white">d-block</span>
          </div>

          <pre><code class="language-html">
                  &lt;span class="d-block bg-primary"&gt;d-block&lt;/span&gt;
                  </code></pre>
          <div class="bd-example my-3">
            <div class="d-inline-block bg-warning p-1 white">d-inline-block</div>
            <div class="d-inline-block bg-warning p-1 white">d-inline-block</div>
          </div>
          <pre><code class="language-html">
                  &lt;div class="d-inline-block bg-warning"&gt;d-inline-block&lt;/div&gt;
                  &lt;div class="d-inline-block bg-warning"&gt;d-inline-block&lt;/div&gt;
                  </code></pre>
          <p>Responsive variations also exist for every single utility mentioned above.</p>
          <ul>
            <li><code class="highlighter-rouge">.d-none</code></li>
            <li><code class="highlighter-rouge">.d-inline</code></li>
            <li><code class="highlighter-rouge">.d-inline-block</code></li>
            <li><code class="highlighter-rouge">.d-block</code></li>
            <li><code class="highlighter-rouge">.d-table</code></li>
            <li><code class="highlighter-rouge">.d-table-cell</code></li>
            <li><code class="highlighter-rouge">.d-flex</code></li>
            <li><code class="highlighter-rouge">.d-inline-flex</code></li>
            <li><code class="highlighter-rouge">.d-{breakPoint}-none</code></li>
            <li><code class="highlighter-rouge">.d-{breakPoint}-inline</code></li>
            <li><code class="highlighter-rouge">.d-{breakPoint}-inline-block</code></li>
            <li><code class="highlighter-rouge">.d-{breakPoint}-block</code></li>
            <li><code class="highlighter-rouge">.d-{breakPoint}-table</code></li>
            <li><code class="highlighter-rouge">.d-{breakPoint}-table-cell</code></li>
            <li><code class="highlighter-rouge">.d-{breakPoint}-flex</code></li>
            <li><code class="highlighter-rouge">.d-{breakPoint}-inline-flex</code></li>
          </ul>
          <h5 class="text-bold-600 my-1">Hiding Elements</h5>
          <p>For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide element responsively for each screen size.</p>
          <p>To hide elements simply use the <code class="highlighter-rouge">.d-none</code> class or one of the <code class="highlighter-rouge">.d-{sm,md,lg,xl}-none</code> classes for any responsive screen variation.</p>
          <p>To show an element only on a given interval of screen sizes you can combine one <code class="highlighter-rouge">.d-*-none</code> class with a <code class="highlighter-rouge">.d-*-*</code> class, for example <code class="highlighter-rouge">.d-none.d-md-block.d-xl-none</code> will hide the element for all
            screen sizes except on medium and large devices.</p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Screen Size</th>
                  <th>Class</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Hidden on all</td>
                  <td><code class="highlighter-rouge">d-none</code></td>
                </tr>
                <tr>
                  <td>Hidden only on breakpoint size.</td>
                  <td><code class="highlighter-rouge">d-{breakPoint}-none d-{breakPoint}-block</code></td>
                </tr>
                <tr>
                  <td>Visible on all</td>
                  <td><code class="highlighter-rouge">d-block</code></td>
                </tr>
                <tr>
                  <td>Visible only on breakpoint size</td>
                  <td><code class="highlighter-rouge">d-{breakPoint}-none d-{breakPoint}-block </code></td>
                </tr>
              </tbody>
            </table>
          </div>
          <h5 class="text-bold-600 my-1">Display in print</h5>
          <p>Change the <code class="highlighter-rouge">display</code> value of elements when printing with our print
            display utilities.</p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Class</th>
                  <th>Print style</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><code class="highlighter-rouge">.d-print-block</code></td>
                  <td>Applies <code class="highlighter-rouge">display: block</code> to the element when printing</td>
                </tr>
                <tr>
                  <td><code class="highlighter-rouge">.d-print-inline</code></td>
                  <td>Applies <code class="highlighter-rouge">display: inline</code> to the element when printing</td>
                </tr>
                <tr>
                  <td><code class="highlighter-rouge">.d-print-inline-block</code></td>
                  <td>Applies <code class="highlighter-rouge">display: inline-block</code> to the element when printing
                  </td>
                </tr>
                <tr>
                  <td><code class="highlighter-rouge">.d-print-none</code></td>
                  <td>Applies <code class="highlighter-rouge">display: none</code> to the element when printing</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      {{--/Display--}}
    </div>
  </section>


  {{--Embeds--}}
  <section id="embeds" class="card">
    <div class="card-header">
      <h4 class="card-title">Embeds</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Create responsive video or slideshow embeds based on the width of the parent by creating an intrinsic ratio
            that scales on any device.</p>
          <p>Rules are directly applied to <code class="highlighter-rouge">&lt;iframe&gt;</code>, <code
              class="highlighter-rouge">&lt;embed&gt;</code>, <code class="highlighter-rouge">&lt;video&gt;</code>, and
            <code class="highlighter-rouge">&lt;object&gt;</code> elements; optionally use an explicit descendant class
            <code class="highlighter-rouge">.embed-responsive-item</code> when you want to match the styling for other
            attributes.</p>
          <p><strong>Pro-Tip!</strong> You don’t need to include <code class="highlighter-rouge">frameborder="0"</code> in
            your <code class="highlighter-rouge">&lt;iframe&gt;</code>s as we override that for you.</p>
          <h5>Example</h5>
          <p>Wrap any embed like an <code class="highlighter-rouge">&lt;iframe&gt;</code> in a parent element with <code
              class="highlighter-rouge">.embed-responsive</code> and an aspect ratio. The <code
              class="highlighter-rouge">.embed-responsive-item</code> isn’t strictly required, but we encourage it.</p>
          <div class="bd-example">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WALZwXyxpHQ"
                allowfullscreen=""></iframe>
            </div>
          </div>
          <pre><code class="language-html">
                  &lt;div class="embed-responsive embed-responsive-16by9"&gt;
                    &lt;iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen&gt;&lt;/iframe&gt;
                  &lt;/div&gt;
                  </code></pre>
          <h5>Aspect ratios</h5>
          <p>Aspect ratios can be customized with modifier classes.</p>
          <pre><code class="language-html">
                  &lt;!-- 21:9 aspect ratio --&gt;
                  &lt;div class="embed-responsive embed-responsive-21by9"&gt;
                    &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                  &lt;/div&gt;

                  &lt;!-- 16:9 aspect ratio --&gt;
                  &lt;div class="embed-responsive embed-responsive-16by9"&gt;
                    &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                  &lt;/div&gt;

                  &lt;!-- 4:3 aspect ratio --&gt;
                  &lt;div class="embed-responsive embed-responsive-4by3"&gt;
                    &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                  &lt;/div&gt;

                  &lt;!-- 1:1 aspect ratio --&gt;
                  &lt;div class="embed-responsive embed-responsive-1by1"&gt;
                    &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                  &lt;/div&gt;
                  </code></pre>
        </div>
      </div>
    </div>
  </section>
  {{--/Embeds--}}

  {{--Flex--}}
  <section id="flex" class="card">
    <div class="card-header">
      <h4 class="card-title">Flex</h4>
    </div>
    <div class="card-content">
      {{--Enable flex behaviors--}}
      <div class="card-body">
        <div class="card-text">
          <p class="bd-lead">Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and
            more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be
            necessary.</p>
          <h5 id="enable-flex-behaviors" class="text-bold-600">Enable flex behaviors</h5>

          <p>Apply <code class="highlighter-rouge">display</code> utilities to create a flexbox container and transform
            <strong>direct children elements</strong> into flex items. Flex containers and items are able to be modified
            further with additional flex properties.</p>

          <div class="bd-example">
            <div class="d-flex p-2 bd-highlight">I'm a flexbox container!</div>
          </div>
          <pre><code class="language-html">
                  &lt;div class="d-flex p-2"&gt;I'm a flexbox container!&lt;/div&gt;
                  </code></pre>

          <div class="bd-example">
            <div class="d-inline-flex p-2 bd-highlight">I'm an inline flexbox container!</div>
          </div>
          <pre><code class="language-html">
                  &lt;div class="d-inline-flex p-2"&gt;I'm an inline flexbox container!&lt;/div&gt;
                  </code></pre>

          <p>Responsive variations also exist for <code class="highlighter-rouge">.d-flex</code> and <code
              class="highlighter-rouge">.d-inline-flex</code>.</p>

          <ul>
            <li><code class="highlighter-rouge">.d-flex</code></li>
            <li><code class="highlighter-rouge">.d-inline-flex</code></li>
            <li><code class="highlighter-rouge">.d-{breakpoint}-flex</code></li>
            <li><code class="highlighter-rouge">.d-{breakpoint}-inline-flex</code></li>
          </ul>
        </div>
      </div>

      {{--Direction--}}
      <div class="card-body">
        <div class="card-text">
          <h5 id="direction" class="text-bold-600">Direction</h5>

          <p>Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the
            horizontal class here as the browser default is <code class="highlighter-rouge">row</code>. However, you may
            encounter situations where you needed to explicitly set this value (like responsive layouts).</p>

          <p>Use <code class="highlighter-rouge">.flex-row</code> to set a horizontal direction (the browser default), or
            <code class="highlighter-rouge">.flex-row-reverse</code> to start the horizontal direction from the opposite
            side.</p>

          <div class="bd-example">
            <div class="d-flex flex-row bd-highlight mb-3">
              <div class="p-2 bd-highlight">Flex item 1</div>
              <div class="p-2 bd-highlight">Flex item 2</div>
              <div class="p-2 bd-highlight">Flex item 3</div>
            </div>
            <div class="d-flex flex-row-reverse bd-highlight">
              <div class="p-2 bd-highlight">Flex item 1</div>
              <div class="p-2 bd-highlight">Flex item 2</div>
              <div class="p-2 bd-highlight">Flex item 3</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex flex-row"&gt;
                    &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="d-flex flex-row-reverse"&gt;
                    &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                  &lt;/div&gt;
                  </code></pre>

          <p>Use <code class="highlighter-rouge">.flex-column</code> to set a vertical direction, or <code
              class="highlighter-rouge">.flex-column-reverse</code> to start the vertical direction from the opposite
            side.</p>

          <div class="bd-example">
            <div class="d-flex flex-column bd-highlight mb-3">
              <div class="p-2 bd-highlight">Flex item 1</div>
              <div class="p-2 bd-highlight">Flex item 2</div>
              <div class="p-2 bd-highlight">Flex item 3</div>
            </div>
            <div class="d-flex flex-column-reverse bd-highlight">
              <div class="p-2 bd-highlight">Flex item 1</div>
              <div class="p-2 bd-highlight">Flex item 2</div>
              <div class="p-2 bd-highlight">Flex item 3</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex flex-column"&gt;
                    &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="d-flex flex-column-reverse"&gt;
                    &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                  &lt;/div&gt;
                  </code></pre>

          <p>Responsive variations also exist for <code class="highlighter-rouge">flex-direction</code>.</p>

          <ul>
            <li><code class="highlighter-rouge">.flex-{row/column}</code></li>
            <li><code class="highlighter-rouge">.flex-{row-reverse/column-reverse}</code></li>
            <li><code class="highlighter-rouge">.flex-{breakpoint}-{row/column}</code></li>
            <li><code class="highlighter-rouge">.flex-{breakpoint}-{row-reverse/column-reverse}</code></li>
          </ul>
        </div>
      </div>

      {{--Justify content--}}
      <div class="card-body">
        <div class="card-text">
          <h5 id="justify-content" class="text-bold-600">Justify content</h5>
          <p>Use <code class="highlighter-rouge">justify-content</code> utilities on flexbox containers to change the
            alignment of flex items on the main axis (the x-axis to start, y-axis if <code
              class="highlighter-rouge">flex-direction: column</code>). Choose from <code
              class="highlighter-rouge">start</code> (browser default), <code class="highlighter-rouge">end</code>, <code
              class="highlighter-rouge">center</code>, <code class="highlighter-rouge">between</code>, or <code
              class="highlighter-rouge">around</code>.</p>

          <div class="bd-example">
            <div class="d-flex justify-content-start bd-highlight mb-3">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex justify-content-end bd-highlight mb-3">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex justify-content-between bd-highlight mb-3">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex justify-content-around bd-highlight">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex justify-content-start"&gt;...&lt;/div&gt;
                  &lt;div class="d-flex justify-content-end"&gt;...&lt;/div&gt;
                  &lt;div class="d-flex justify-content-center"&gt;...&lt;/div&gt;
                  &lt;div class="d-flex justify-content-between"&gt;...&lt;/div&gt;
                  &lt;div class="d-flex justify-content-around"&gt;...&lt;/div&gt;
                  </code></pre>

          <p>Responsive variations also exist for <code class="highlighter-rouge">justify-content</code>.</p>

          <ul>
            <li><code class="highlighter-rouge">.justify-content-start</code></li>
            <li><code class="highlighter-rouge">.justify-content-end</code></li>
            <li><code class="highlighter-rouge">.justify-content-center</code></li>
            <li><code class="highlighter-rouge">.justify-content-between</code></li>
            <li><code class="highlighter-rouge">.justify-content-around</code></li>
            <li><code class="highlighter-rouge">.justify-content-{breakpoint}-{start/end/center/between/around}</code></li>
          </ul>
        </div>
      </div>

      {{--Align items--}}
      <div class="card-body">
        <div class="card-text">
          <h5 id="align-items" class="text-bold-600">Align items</h5>

          <p>Use <code class="highlighter-rouge">align-items</code> utilities on flexbox containers to change the
            alignment of flex items on the cross axis (the y-axis to start, x-axis if <code
              class="highlighter-rouge">flex-direction: column</code>). Choose from <code
              class="highlighter-rouge">start</code>, <code class="highlighter-rouge">end</code>, <code
              class="highlighter-rouge">center</code>, <code class="highlighter-rouge">baseline</code>, or <code
              class="highlighter-rouge">stretch</code> (browser default).</p>

          <div class="bd-example">
            <div class="d-flex align-items-start bd-highlight mb-3" style="height: 100px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex align-items-end bd-highlight mb-3" style="height: 100px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex align-items-center bd-highlight mb-3" style="height: 100px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex align-items-baseline bd-highlight mb-3" style="height: 100px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex align-items-stretch bd-highlight" style="height: 100px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex align-items-start"&gt;...&lt;/div&gt;
                  &lt;div class="d-flex align-items-end"&gt;...&lt;/div&gt;
                  &lt;div class="d-flex align-items-center"&gt;...&lt;/div&gt;
                  &lt;div class="d-flex align-items-baseline"&gt;...&lt;/div&gt;
                  &lt;div class="d-flex align-items-stretch"&gt;...&lt;/div&gt;
                  </code></pre>

          <p>Responsive variations also exist for <code class="highlighter-rouge">align-items</code>.</p>

          <ul>
            <li><code class="highlighter-rouge">.align-items-start</code></li>
            <li><code class="highlighter-rouge">.align-items-end</code></li>
            <li><code class="highlighter-rouge">.align-items-center</code></li>
            <li><code class="highlighter-rouge">.align-items-baseline</code></li>
            <li><code class="highlighter-rouge">.align-items-stretch</code></li>
            <li><code class="highlighter-rouge">.align-items-{breakpoint}-{start/end/center/baseline/stretch}</code></li>
          </ul>
        </div>
      </div>

      {{--Align self--}}
      <div class="card-body">
        <div class="card-text">
          <h5 id="align-self" class="text-bold-600">Align self</h5>
          <p>Use <code class="highlighter-rouge">align-self</code> utilities on flexbox items to individually change their
            alignment on the cross axis (the y-axis to start, x-axis if <code
              class="highlighter-rouge">flex-direction: column</code>). Choose from the same options as <code
              class="highlighter-rouge">align-items</code>: <code class="highlighter-rouge">start</code>, <code
              class="highlighter-rouge">end</code>, <code class="highlighter-rouge">center</code>, <code
              class="highlighter-rouge">baseline</code>, or <code class="highlighter-rouge">stretch</code> (browser
            default).</p>

          <div class="bd-example">
            <div class="d-flex bd-highlight mb-3" style="height: 100px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="align-self-start p-2 bd-highlight">Aligned flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex bd-highlight mb-3" style="height: 100px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="align-self-end p-2 bd-highlight">Aligned flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex bd-highlight mb-3" style="height: 100px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="align-self-center p-2 bd-highlight">Aligned flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex bd-highlight mb-3" style="height: 100px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="align-self-baseline p-2 bd-highlight">Aligned flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
            <div class="d-flex bd-highlight" style="height: 100px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="align-self-stretch p-2 bd-highlight">Aligned flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="align-self-start"&gt;Aligned flex item&lt;/div&gt;
                  &lt;div class="align-self-end"&gt;Aligned flex item&lt;/div&gt;
                  &lt;div class="align-self-center"&gt;Aligned flex item&lt;/div&gt;
                  &lt;div class="align-self-baseline"&gt;Aligned flex item&lt;/div&gt;
                  &lt;div class="align-self-stretch"&gt;Aligned flex item&lt;/div&gt;
                  </code></pre>

          <p>Responsive variations also exist for <code class="highlighter-rouge">align-self</code>.</p>

          <ul>
            <li><code class="highlighter-rouge">.align-self-start</code></li>
            <li><code class="highlighter-rouge">.align-self-end</code></li>
            <li><code class="highlighter-rouge">.align-self-center</code></li>
            <li><code class="highlighter-rouge">.align-self-baseline</code></li>
            <li><code class="highlighter-rouge">.align-self-stretch</code></li>
            <li><code class="highlighter-rouge">.align-self-{breakpoint}-{start/end/center/baseline/stretch}</code></li>
          </ul>
        </div>
      </div>

      {{--Auto margins--}}
      <div class="card-body">
        <div class="card-text">
          <h5 id="align-self-margin" class="text-bold-600">Auto margins</h5>

          <p>Flexbox can do some pretty awesome things when you mix flex alignments with auto margins. Shown below are
            three examples of controlling flex items via auto margins: default (no auto margin), pushing two items to the
            right (<code class="highlighter-rouge">.mr-auto</code>), and pushing two items to the left (<code
              class="highlighter-rouge">.ml-auto</code>).</p>

          <p><strong>Unfortunately, IE10 and IE11 do not properly support auto margins on flex items whose parent has a
              non-default <code class="highlighter-rouge">justify-content</code> value.</strong> <a
              href="https://stackoverflow.com/a/37535548">See this StackOverflow answer</a> for more details.</p>

          <div class="bd-example">
            <div class="d-flex bd-highlight mb-3">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>

            <div class="d-flex bd-highlight mb-3">
              <div class="mr-auto p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>

            <div class="d-flex bd-highlight mb-3">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="ml-auto p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex"&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;/div&gt;

                  &lt;div class="d-flex"&gt;
                    &lt;div class="mr-auto p-2"&gt;Flex item&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;/div&gt;

                  &lt;div class="d-flex"&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                    &lt;div class="ml-auto p-2"&gt;Flex item&lt;/div&gt;
                  &lt;/div&gt;
                  </code></pre>
        </div>
      </div>

      {{--With align-items--}}
      <div class="card-body">
        <div class="card-text">
          <h5 id="with-align-items" class="text-bold-600">With align-items</h5>
          <p>Vertically move one flex item to the top or bottom of a container by mixing <code
              class="highlighter-rouge">align-items</code>, <code class="highlighter-rouge">flex-direction: column</code>,
            and <code class="highlighter-rouge">margin-top: auto</code> or <code
              class="highlighter-rouge">margin-bottom: auto</code>.</p>

          <div class="bd-example">
            <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
              <div class="mb-auto p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>

            <div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="mt-auto p-2 bd-highlight">Flex item</div>
            </div>
          </div>
          <pre><code class="language-html">
                  &lt;div class="d-flex align-items-start flex-column" style="height: 200px;"&gt;
                    &lt;div class="mb-auto p-2"&gt;Flex item&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;/div&gt;

                  &lt;div class="d-flex align-items-end flex-column" style="height: 200px;"&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                    &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                    &lt;div class="mt-auto p-2"&gt;Flex item&lt;/div&gt;
                  &lt;/div&gt;
                  </code></pre>
        </div>
      </div>

      {{--Wrap--}}
      <div class="card-body">
        <div class="card-text">
          <h5 id="wrap" class="text-bold-600">Wrap</h5>

          <p>Change how flex items wrap in a flex container. Choose from no wrapping at all (the browser default) with
            <code class="highlighter-rouge">.flex-nowrap</code>, wrapping with <code
              class="highlighter-rouge">.flex-wrap</code>, or reverse wrapping with <code
              class="highlighter-rouge">.flex-wrap-reverse</code>.</p>

          <div class="bd-example">
            <div class="d-flex flex-nowrap bd-highlight">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex flex-nowrap"&gt;
                    ...
                  &lt;/div&gt;
                  </code></pre>

          <div class="bd-example">
            <div class="d-flex flex-wrap bd-highlight">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex flex-wrap"&gt;
                    ...
                  &lt;/div&gt;
                  </code></pre>

          <div class="bd-example">
            <div class="d-flex flex-wrap-reverse bd-highlight">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex flex-wrap-reverse"&gt;
                    ...
                  &lt;/div&gt;
                  </code></pre>

          <p>Responsive variations also exist for <code class="highlighter-rouge">flex-wrap</code>.</p>

          <ul>
            <li><code class="highlighter-rouge">.flex-nowrap</code></li>
            <li><code class="highlighter-rouge">.flex-wrap</code></li>
            <li><code class="highlighter-rouge">.flex-wrap-reverse</code></li>
            <li><code class="highlighter-rouge">.flex-{breakpoint}-{nowrap/wrap/wrap-reverse}</code></li>
            <li><code class="highlighter-rouge">.flex-sm-wrap</code></li>
            <li><code class="highlighter-rouge">.flex-sm-wrap-reverse</code></li>
          </ul>
        </div>
      </div>

      {{--Order--}}
      <div class="card-body">
        <div class="card-text">
          <h5 id="order" class="text-bold-600">Order</h5>

          <p>Change the <em>visual</em> order of specific flex items with a handful of <code
              class="highlighter-rouge">order</code> utilities. We only provide options for making an item first or last, as well as a reset to use the DOM order. As <code class="highlighter-rouge">order</code> takes any integer value (e.g., <code class="highlighter-rouge">5</code>), add custom CSS for any additional values needed.</p>

          <div class="bd-example">
            <div class="d-flex flex-nowrap bd-highlight">
              <div class="order-3 p-2 bd-highlight">First flex item</div>
              <div class="order-2 p-2 bd-highlight">Second flex item</div>
              <div class="order-1 p-2 bd-highlight">Third flex item</div>
            </div>
          </div>
          <pre><code class="language-html">
                  &lt;div class="d-flex flex-nowrap"&gt;
                    &lt;div class="order-3 p-2"&gt;First flex item&lt;/div&gt;
                    &lt;div class="order-2 p-2"&gt;Second flex item&lt;/div&gt;
                    &lt;div class="order-1 p-2"&gt;Third flex item&lt;/div&gt;
                  &lt;/div&gt;
                  </code></pre>

          <p>Responsive variations also exist for <code class="highlighter-rouge">order</code>.</p>

          <ul>
            <li><code class="highlighter-rouge">.order-{value}</code></li>
            <li><code class="highlighter-rouge">.order-{breakpoint}-{value}</code></li>
          </ul>
        </div>
      </div>

      {{--Align content--}}
      <div class="card-body">
        <div class="card-text">
          <h5 id="align-content" class="text-bold-600">Align content</h5>
          <p>Use <code class="highlighter-rouge">align-content</code> utilities on flexbox containers to align flex items <em>together</em> on the cross axis. Choose from <code class="highlighter-rouge">start</code> (browser default), <code class="highlighter-rouge">end</code>, <code class="highlighter-rouge">center</code>, <code
              class="highlighter-rouge">between</code>, <code class="highlighter-rouge">around</code>, or <code class="highlighter-rouge">stretch</code>. To demonstrate these utilities, we’ve enforced <code class="highlighter-rouge">flex-wrap: wrap</code> and increased the number of flex items.</p>

          <p><strong>Heads up!</strong> This property has no effect on single rows of flex items.</p>

          <div class="bd-example">
            <div class="d-flex align-content-start flex-wrap bd-highlight mb-3" style="height: 200px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex align-content-start flex-wrap"&gt;
                    ...
                  &lt;/div&gt;
                  </code></pre>

          <div class="bd-example">
            <div class="d-flex align-content-end flex-wrap bd-highlight mb-3" style="height: 200px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex align-content-end flex-wrap"&gt;
                    ...
                  &lt;/div&gt;
                  </code></pre>

          <div class="bd-example">
            <div class="d-flex align-content-center flex-wrap bd-highlight mb-3" style="height: 200px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex align-content-center flex-wrap"&gt;
                    ...
                  &lt;/div&gt;
                  </code></pre>

          <div class="bd-example">
            <div class="d-flex align-content-between flex-wrap bd-highlight mb-3" style="height: 200px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex align-content-between flex-wrap"&gt;
                    ...
                  &lt;/div&gt;
                  </code></pre>


          <div class="bd-example">
            <div class="d-flex align-content-around flex-wrap bd-highlight mb-3" style="height: 200px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex align-content-around flex-wrap"&gt;
                    ...
                  &lt;/div&gt;
                  </code></pre>

          <div class="bd-example">
            <div class="d-flex align-content-stretch flex-wrap bd-highlight mb-3" style="height: 200px">
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
              <div class="p-2 bd-highlight">Flex item</div>
            </div>
          </div>

          <pre><code class="language-html">
                  &lt;div class="d-flex align-content-stretch flex-wrap"&gt;
                    ...
                  &lt;/div&gt;
                  </code></pre>

          <p>Responsive variations also exist for <code class="highlighter-rouge">align-content</code>.</p>

          <ul>
            <li><code class="highlighter-rouge">.align-content-start</code></li>
            <li><code class="highlighter-rouge">.align-content-end</code></li>
            <li><code class="highlighter-rouge">.align-content-center</code></li>
            <li><code class="highlighter-rouge">.align-content-around</code></li>
            <li><code class="highlighter-rouge">.align-content-stretch</code></li>
            <li><code class="highlighter-rouge">.align-content-{breakpoint}-{start/end/center/around/stretch}</code></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  {{--/Flex--}}

  {{--Float--}}
  <section id="Float" class="card">
    <div class="card-header">
      <h4 class="card-title">Float</h4>
    </div>
    <div class="card-content">
      {{--Overview--}}
      <div class="card-body">
        <div class="card-text">
          <p class="bd-lead">Toggle floats on any element, across any breakpoint, using our responsive float utilities.
          </p>
          <p>These utility classes float an element to the left or right, or disable floating, based on the current
            viewport size using the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/float">CSS <code
                class="highlighter-rouge">float</code> property</a>. <code class="highlighter-rouge">!important</code> is
            included to avoid specificity issues. These use the same viewport breakpoints as our grid system.</p>
          <p>Toggle a float with a class:</p>
          <div class="bd-example">
            <div class="float-left">Float left on all viewport sizes</div><br>
            <div class="float-right">Float right on all viewport sizes</div><br>
            <div class="float-none">Don't float on all viewport sizes</div>
          </div>
          <pre><code class="language-html">
                  &lt;div class="float-left"&gt;Float left on all viewport sizes&lt;/div&gt;&lt;br&gt;
                  &lt;div class="float-right"&gt;Float right on all viewport sizes&lt;/div&gt;&lt;br&gt;
                  &lt;div class="float-none"&gt;Don't float on all viewport sizes&lt;/div&gt;
                  </code></pre>
          <h5 id="float-responsive" class="text-bold-600">Responsive</h5>
          <p>Responsive variations also exist for each <code class="highlighter-rouge">float</code> value.</p>
          <div class="bd-example">
            <div class="float-sm-left">Float left on viewports sized SM (small) or wider</div><br>
            <div class="float-md-left">Float left on viewports sized MD (medium) or wider</div><br>
            <div class="float-lg-left">Float left on viewports sized LG (large) or wider</div><br>
            <div class="float-xl-left">Float left on viewports sized XL (extra-large) or wider</div><br>
          </div>
          <pre><code class="language-html">
                  &lt;div class="float-sm-left"&gt;Float left on viewports sized SM (small) or wider&lt;/div&gt;&lt;br&gt;
                  &lt;div class="float-md-left"&gt;Float left on viewports sized MD (medium) or wider&lt;/div&gt;&lt;br&gt;
                  &lt;div class="float-lg-left"&gt;Float left on viewports sized LG (large) or wider&lt;/div&gt;&lt;br&gt;
                  &lt;div class="float-xl-left"&gt;Float left on viewports sized XL (extra-large) or wider&lt;/div&gt;&lt;br&gt;
                  </code></pre>
          <p>Here are all the support classes;</p>
          <ul>
            <li><code class="highlighter-rouge">.float-{left/right/none}</code></li>
            <li><code class="highlighter-rouge">.float-{breakpoint}-{left/right/none}</code></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  {{--Image replacement--}}
  <section id="image-replacement" class="card">
    <div class="card-header">
      <h4 class="card-title">Image replacement</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Swap text for background images with the image replacement class.</p>
          <p>Utilize the <code class="highlighter-rouge">.text-hide</code> class or mixin to help replace an element’s
            text content with a background image.</p>
          <pre><code class="language-html">
                  &lt;h1 class="text-hide"&gt;Custom heading&lt;/h1&gt;
                  </code></pre>
          <p>Use the <code class="highlighter-rouge">.text-hide</code> class to maintain the accessibility and SEO
            benefits of heading tags, but want to utilize a <code class="highlighter-rouge">background-image</code>
            instead of text.</p>
          <div class="bd-example">
            <h1 class="text-hide my-2"
              style="background-image: url('images/logo/logo.png'); width: 30px; height: 20px; background-size: 30px;">
              Bootstrap</h1>
          </div>
          <pre><code class="language-html">
                  &lt;h1 class="text-hide my-2" style="background-image: url('/images/logo/logo.png'); width: 30px; height: 26px;"&gt;Bootstrap&lt;/h1&gt;
                  </code></pre>
        </div>
      </div>
    </div>
  </section>
  {{--/Image replacement--}}

  {{--position--}}
  <section id="display-position" class="card">
    <div class="card-header">
      <h4 class="card-title">Position</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Use these shorthand utilities for quickly configuring the position of an element.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.position-fixed</code></td>
              <td>Changes element's position to fixed.</td>
            </tr>
            <tr>
              <td><code>.position-relative</code></td>
              <td>Changes element's position to relative.</td>
            </tr>
            <tr>
              <td><code>.position-absolute</code></td>
              <td>Changes element's position to absolute.</td>
            </tr>
            <tr>
              <td><code>.position-static</code></td>
              <td>Changes element's position to static.</td>
            </tr>
            <tr>
              <td><code>.position-sticky</code></td>
              <td>Changes element's position to static.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-body">
        <div class="card-text">
          <h5 class="text-bold-600 my-1">Fixed top</h5>
          <p>Position an element at the top of the viewport, from edge to edge. Be sure you understand the ramifications
            of fixed position in your project; you may need to add aditional CSS.</p>
          <pre><code class="language-html">
                  &lt;div class="fixed-top"&gt;...&lt;/div&gt;
                  </code></pre>
        </div>
      </div>
      <div class="card-body">
        <div class="card-text">
          <h5 class="text-bold-600 my-1">Fixed bottom</h5>
          <p>Position an element at the bottom of the viewport, from edge to edge. Be sure you understand the
            ramifications of fixed position in your project; you may need to add aditional CSS.</p>
          <pre><code class="language-html">
                  &lt;div class="fixed-footer"&gt;...&lt;/div&gt;
                  </code></pre>
        </div>
      </div>
      <div class="card-body">
        <div class="card-text">
          <h5 class="text-bold-600 my-1">Sticky top</h5>
          <p>Position an element at the top of the viewport, from edge to edge, but only after you scroll past it. The
            <code class="highlighter-rouge">.sticky-top</code> utility uses CSS’s <code
              class="highlighter-rouge">position: sticky</code>, which isn’t fully supported in all browsers.</p>
          <p><strong>Microsoft Edge and IE11 will render <code class="highlighter-rouge">position: sticky</code> as <code
                class="highlighter-rouge">position: relative</code>.</strong> As such, we wrap the styles in a <code
              class="highlighter-rouge">@supports</code> query, limiting the stickiness to only browsers that properly can
            render it.</p>
          <pre><code class="language-html">
                  &lt;div class="sticky-top"&gt;...&lt;/div&gt;
                  </code></pre>
        </div>
      </div>
    </div>
  </section>
  {{--/position--}}

  {{--Screenreaders--}}
  <section id="screenreaders" class="card">
    <div class="card-header">
      <h4 class="card-title">Screenreaders</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Use screenreader utilities to hide elements on all devices except screen readers.</p>
          <p>Hide an element to all devices <strong>except screen readers</strong> with <code
              class="highlighter-rouge">.sr-only</code>. Combine <code class="highlighter-rouge">.sr-only</code> with
            <code class="highlighter-rouge">.sr-only-focusable</code> to show the element again when it’s focused (e.g. by
            a keyboard-only user). Can also be used as mixins.</p>
          <pre><code class="language-html">
                  &lt;a class="sr-only sr-only-focusable" href="#content"&gt;Skip to main content&lt;/a&gt;
                  </code></pre>
        </div>
      </div>
    </div>
  </section>
  {{--/ Screenreaders--}}

  {{--Sizing--}}
  <section id="sizing" class="card">
    <div class="card-header">
      <h4 class="card-title">Sizing</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Easily make an element as wide or as tall (relative to its parent) with our width and height utilities.</p>
          <p>Width and height utilities are generated from the <code class="highlighter-rouge">$sizes</code> Sass map in
            <code class="highlighter-rouge">_variables.scss</code>. Includes support for <code
              class="highlighter-rouge">25%</code>, <code class="highlighter-rouge">50%</code>, <code
              class="highlighter-rouge">75%</code>, and <code class="highlighter-rouge">100%</code> by default. Modify
            those values as you need to generate different utilities here.</p>
          <div class="bd-example">
            <div class="w-25 width-example p-3" style="background-color: #eee;">Width 25%</div>
            <div class="w-50 width-example p-3" style="background-color: #eee;">Width 50%</div>
            <div class="w-75 width-example p-3" style="background-color: #eee;">Width 75%</div>
            <div class="w-100 width-example p-3" style="background-color: #eee;">Width 100%</div>
          </div>
          <pre><code class="language-html">
                  &lt;div class="w-25 p-3" style="background-color: #eee;"&gt;Width 25%&lt;/div&gt;
                  &lt;div class="w-50 p-3" style="background-color: #eee;"&gt;Width 50%&lt;/div&gt;
                  &lt;div class="w-75 p-3" style="background-color: #eee;"&gt;Width 75%&lt;/div&gt;
                  &lt;div class="w-100 p-3" style="background-color: #eee;"&gt;Width 100%&lt;/div&gt;
                  </code></pre>
          <div class="bd-example">
            <div class="height-example-wrapper" style="height: 100px; background-color: rgba(255,0,0,0.1);">
              <div class="h-25 height-example d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">
                Height 25%</div>
              <div class="h-50 height-example d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">
                Height 50%</div>
              <div class="h-75 height-example d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">
                Height 75%</div>
              <div class="h-100 height-example d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">
                Height 100%</div>
            </div>
          </div>
          <pre><code class="language-html">
                  &lt;div style="height: 100px; background-color: rgba(255,0,0,0.1);"&gt;
                    &lt;div class="h-25 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 25%&lt;/div&gt;
                    &lt;div class="h-50 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 50%&lt;/div&gt;
                    &lt;div class="h-75 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 75%&lt;/div&gt;
                    &lt;div class="h-100 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 100%&lt;/div&gt;
                  &lt;/div&gt;
                  </code></pre>
          <p>You can also use <code class="highlighter-rouge">max-width: 100%;</code> and <code
              class="highlighter-rouge">max-height: 100%;</code> utilities as needed.</p>
          <div class="bd-example">
            <img class="mw-100" data-src="holder.js/1000px100?text=Max-width%20%3D%20100%25"
              alt="Max-width = 100% [1000%x100]" style="height: 100px; width: 1000%; display: block;"
              src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22782%22%20height%3D%22100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20782%20100%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15fc00274c0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15fc00274c0%22%3E%3Crect%20width%3D%22782%22%20height%3D%22100%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22176.3984375%22%20y%3D%2267.4%22%3EMax-width%20%3D%20100%25%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
              data-holder-rendered="true">
          </div>
          <pre><code class="language-html">
                      &lt;img class="mw-100" src="..." alt="Max-width 100%"&gt;
                  </code></pre>
          <div class="bd-example">
            <div class="height-example-wrapper" style="height: 100px; background-color: rgba(255,0,0,0.1);">
              <div class="mh-100 height-example"
                style="width: 100px; height: 200px; background-color: rgba(0,0,255,0.1);">Max-height
                100%</div>
            </div>
          </div>
          <pre><code class="language-html">
                  &lt;div style="height: 100px; background-color: rgba(255,0,0,0.1);"&gt;
                    &lt;div class="mh-100" style="width: 100px; height: 200px; background-color: rgba(0,0,255,0.1);"&gt;Max-height 100%&lt;/div&gt;
                  &lt;/div&gt;
                  </code></pre>
        </div>
      </div>
      {{--Width && Height--}}
      <div class="card-body">
        <div class="card-text my-1">
          <h5 class="text-bold-600">Width && Height</h5>
          <p>Add one of these to class to set width of the content.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.fit</code></td>
              <td>Set content maximum width 100%.</td>
            </tr>
            <tr>
              <td><code>.half-width</code></td>
              <td>Set content width 50%.</td>
            </tr>
            <tr>
              <td><code>.full-width</code></td>
              <td>Set content width 100%.</td>
            </tr>
            <tr>
              <td><code>.full-height</code></td>
              <td>Set content height 100%.</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Width && Height--}}


      {{--Fixed Width--}}
      <div class="card-body">
        <div class="card-text my-1">
          <h5 class="text-bold-600">Fixed Width</h5>
          <p>Add one of these to class to set fixed width of the content.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.width-{size}</code></td>
              <td>Set content fixed width in pixel of selected size where size can be 50, 100, 150, 200, 250, 300, 350,
                400, 450, 500, 550, 600, 650, 700, 750 and 800. i.e <code>.width-50</code></td>
            </tr>
            <tr>
              <td><code>.width-{size}-per</code></td>
              <td>Set content fixed width in percentage of selected size where size can be 5%, 10%, 15%, 20%, 25%, 30%,
                35%, 40%, 45%, 50%, 55%, 60%, 65%, 70%, 75% and 80%. i.e <code>.width-5-per</code></td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Fixed Width--}}

      {{--Fixed Height--}}
      <div class="card-body">
        <div class="card-text my-1">
          <h5 class="text-bold-600">Fixed Height</h5>
          <p>Add one of these to class to set fixed height of the content.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.height-{size}</code></td>
              <td>Set content fixed height in pixel of selected size where size can be 50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750 and 800. i.e <code>.height-50</code></td>
            </tr>
            <tr>
              <td><code>.height-{size}-per</code></td>
              <td>Set content fixed height in percentage of selected size where size can be 5%, 10%, 15%, 20%, 25%, 30%, 35%, 40%, 45%, 50%, 55%, 60%, 65%, 70%, 75% and 80%. i.e <code>.height-5-per</code></td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Fixed Height--}}
    </div>
  </section>
  {{--/Sizing--}}

  {{-- Spacing --}}
  <section id="spacing" class="card">
    <div class="card-header">
      <h4 class="card-title">Spacing</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Bootstrap includes a wide range of shorthand responsive margin and padding utility classes to modify an
            element's appearance.</p>
          <h5 class="text-bold-600">How it works</h5>
          <p>Assign responsive-friendly <code class="highlighter-rouge">margin</code> or <code
              class="highlighter-rouge">padding</code> values to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. Classes are built from a default Sass map ranging from <code class="highlighter-rouge">.25rem</code> to <code
              class="highlighter-rouge">3rem</code>.</p>
          <h5 class="text-bold-600">Notation</h5>
          <p>Spacing utilities that apply to all breakpoints, from <code class="highlighter-rouge">xs</code> to <code class="highlighter-rouge">xl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code class="highlighter-rouge">min-width: 0</code> and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.</p>
          <p>The classes are named using the format <code class="highlighter-rouge">{property}{sides}-{size}</code> for
            <code class="highlighter-rouge">xs</code> and <code
              class="highlighter-rouge">{property}{sides}-{breakpoint}-{size}</code> for <code
              class="highlighter-rouge">sm</code>, <code class="highlighter-rouge">md</code>, <code
              class="highlighter-rouge">lg</code>, and <code class="highlighter-rouge">xl</code>.</p>
          <p>Where <em>property</em> is one of:</p>
          <ul>
            <li><code class="highlighter-rouge">m</code> - for classes that set <code
                class="highlighter-rouge">margin</code></li>
            <li><code class="highlighter-rouge">p</code> - for classes that set <code
                class="highlighter-rouge">padding</code></li>
          </ul>
          <p>Where <em>sides</em> is one of:</p>
          <ul>
            <li><code class="highlighter-rouge">t</code> - for classes that set <code
                class="highlighter-rouge">margin-top</code> or <code class="highlighter-rouge">padding-top</code></li>
            <li><code class="highlighter-rouge">b</code> - for classes that set <code
                class="highlighter-rouge">margin-bottom</code> or <code class="highlighter-rouge">padding-bottom</code>
            </li>
            <li><code class="highlighter-rouge">l</code> - for classes that set <code
                class="highlighter-rouge">margin-left</code> or <code class="highlighter-rouge">padding-left</code></li>
            <li><code class="highlighter-rouge">r</code> - for classes that set <code
                class="highlighter-rouge">margin-right</code> or <code class="highlighter-rouge">padding-right</code></li>
            <li><code class="highlighter-rouge">x</code> - for classes that set both <code
                class="highlighter-rouge">*-left</code> and <code class="highlighter-rouge">*-right</code></li>
            <li><code class="highlighter-rouge">y</code> - for classes that set both <code
                class="highlighter-rouge">*-top</code> and <code class="highlighter-rouge">*-bottom</code></li>
            <li>blank - for classes that set a <code class="highlighter-rouge">margin</code> or <code
                class="highlighter-rouge">padding</code> on all 4 sides of the element</li>
          </ul>
          <p>Where <em>size</em> is one of:</p>
          <ul>
            <li><code class="highlighter-rouge">0</code> - for classes that eliminate the <code
                class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> by setting it to
              <code class="highlighter-rouge">0</code></li>
            <li><code class="highlighter-rouge">1</code> - (by default) for classes that set the <code
                class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code
                class="highlighter-rouge">$spacer * .25</code></li>
            <li><code class="highlighter-rouge">2</code> - (by default) for classes that set the <code
                class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code
                class="highlighter-rouge">$spacer * .5</code></li>
            <li><code class="highlighter-rouge">3</code> - (by default) for classes that set the <code
                class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code
                class="highlighter-rouge">$spacer</code></li>
            <li><code class="highlighter-rouge">4</code> - (by default) for classes that set the <code
                class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code
                class="highlighter-rouge">$spacer * 1.5</code></li>
            <li><code class="highlighter-rouge">5</code> - (by default) for classes that set the <code
                class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code
                class="highlighter-rouge">$spacer * 3</code></li>
            <li><code class="highlighter-rouge">auto</code> - for classes that set the <code
                class="highlighter-rouge">margin</code> to auto</li>
          </ul>
          <p>(You can add more sizes by adding entries to the <code class="highlighter-rouge">$spacers</code> Sass map
            variable.)</p>
        </div>
      </div>
      <div class="card-body">
        <div class="card-text">
          <h5 class="text-bold-600">Horizontal centering</h5>
          <p>Additionally, Bootstrap also includes an <code class="highlighter-rouge">.mx-auto</code> class for
            horizontally centering fixed-width block level content—that is, content that has <code
              class="highlighter-rouge">display: block</code> and a <code class="highlighter-rouge">width</code> set—by
            setting the horizontal margins to <code class="highlighter-rouge">auto</code>.</p>
          <div class="bd-example my-2">
            <div class="mx-auto" style="width: 200px; background-color: rgba(86,61,124,.15);">
              Centered element
            </div>
          </div>
          <pre><code class="language-html">
                  &lt;div class="mx-auto" style="width: 200px;"&gt;
                    Centered element
                  &lt;/div&gt;
                  </code></pre>
        </div>
      </div>
    </div>
  </section>
  {{--/ Spacing --}}

  {{--vertical alignment--}}
  <section id="vertical-alignment" class="card">
    <div class="card-header">
      <h4 class="card-title">Vertical alignment</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Easily change the vertical alignment of inline, inline-block, inline-table, and table cell elements.</p>
          <p>Change the alignment of elements with the <a
              href="https://developer.mozilla.org/en-US/docs/Web/CSS/vertical-align"><code
                class="highlighter-rouge">vertical-alignment</code></a> utilities. Please note that vertical-align only
            affects inline, inline-block, inline-table, and table cell elements.</p>
          <p>Choose from <code class="highlighter-rouge">.align-baseline</code>, <code
              class="highlighter-rouge">.align-top</code>, <code class="highlighter-rouge">.align-middle</code>, <code
              class="highlighter-rouge">.align-bottom</code>, <code class="highlighter-rouge">.align-text-bottom</code>,
            and <code class="highlighter-rouge">.align-text-top</code> as needed.</p>

          <div class="bd-example">
            <span class="align-baseline">baseline</span>
            <span class="align-top">top</span>
            <span class="align-middle">middle</span>
            <span class="align-bottom">bottom</span>
            <span class="align-text-top">text-top</span>
            <span class="align-text-bottom">text-bottom</span>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.align-{direction}</code></td>
              <td>Changes element's vertical alignment to mentioned direction (top, middle, bottom, baseline).</td>
            </tr>
            <tr>
              <td><code>.align-text-{top/bottom}</code></td>
              <td>Top of the element is aligned with the top / bottom of the parent element's font.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-body">
        <div class="card-text">
          <p>With table cells:</p>
          <div class="bd-example">
            <table style="height: 100px;">
              <tbody>
                <tr>
                  <td class="align-baseline">baseline</td>
                  <td class="align-top">top</td>
                  <td class="align-middle">middle</td>
                  <td class="align-bottom">bottom</td>
                  <td class="align-text-top">text-top</td>
                  <td class="align-text-bottom">text-bottom</td>
                </tr>
              </tbody>
            </table>
          </div>
          <pre><code class="language-html">
                  &lt;table style="height: 100px;"&gt;
                    &lt;tbody&gt;
                      &lt;tr&gt;
                        &lt;td class="align-baseline"&gt;baseline&lt;/td&gt;
                        &lt;td class="align-top"&gt;top&lt;/td&gt;
                        &lt;td class="align-middle"&gt;middle&lt;/td&gt;
                        &lt;td class="align-bottom"&gt;bottom&lt;/td&gt;
                        &lt;td class="align-text-top"&gt;text-top&lt;/td&gt;
                        &lt;td class="align-text-bottom"&gt;text-bottom&lt;/td&gt;
                      &lt;/tr&gt;
                    &lt;/tbody&gt;
                  &lt;/table&gt;
                  </code></pre>
        </div>
      </div>
    </div>
  </section>
  {{--/vertical alignment--}}

  {{--Image--}}
  <section id="image" class="card">
    <div class="card-header">
      <h4 class="card-title">Image</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Add one of these to class to change image size and other property.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table mb-0">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.bg-cover</code></td>
              <td>Scale the background image to be as large as possible so that the background area is completely covered
                by the background image.</td>
            </tr>
            <tr>
              <td><code>.background-repeat</code></td>
              <td>Repeat the background image.</td>
            </tr>
            <tr>
              <td><code>.background-no-repeat</code></td>
              <td>Do not repeat the background image.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  {{--/Image--}}

  {{--/Content helpers--}}
  <section id="content-helpers" class="card">
    <div class="card-header">
      <h4 class="card-title">Content helpers</h4>
    </div>
    <div class="card-content">
      {{--z-index--}}
      <div class="card-body">
        <div class="card-text">
          <h5 class="text-bold-600 my-1">z-index</h5>
          <p>Add one of these classes to change the elemets' z-index properties.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.zindex-minus-{1/2/3/4}</code></td>
              <td>Set element's z-index value minus 1/2/3/4.</td>
            </tr>
            <tr>
              <td><code>.zindex-{1/2/3/4}</code></td>
              <td>Set element's z-index value 1/2/3/4.</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/z-index--}}

      {{--Edges--}}
      <div class="card-body">
        <div class="card-text">
          <h5 class="text-bold-600 my-1">Edges</h5>
          <p>Add one of these to removes the slected edge of the elements, works with absolute, fixed and relative
            positioned elements.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.no-edge-{direction}</code></td>
              <td>Removes the edge of the element for given direction (top/bottom/left/right).</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Edges--}}

      {{--Cursors--}}
      <div class="card-body">
        <div class="card-text">
          <h5 class="text-bold-600 my-1">Cursors</h5>
          <p>Add one of these to class to change cursor style.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.cursor-pointer</code></td>
              <td>The cursor is a pointer and indicates a link. Useful for user interaction feedback.</td>
            </tr>
            <tr>
              <td><code>.cursor-move</code></td>
              <td>The cursor indicates something is to be moved. Used in shortable components</td>
            </tr>
            <tr>
              <td><code>.cursor-default</code></td>
              <td>Set cursor to browser default style.</td>
            </tr>
            <tr>
              <td><code>.cursor-progress</code></td>
              <td>The cursor indicates that the program is busy (in progress).</td>
            </tr>
            <tr>
              <td><code>.cursor-not-allowed</code></td>
              <td>The cursor indicates that the requested action will not be executed.</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--/Cursors--}}

      {{--Overflow--}}
      <div class="card-body">
        <div class="card-text">
          <h5 class="text-bold-600 my-1">Overflow</h5>
          <p>Add one of these to class to change overflow of element.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.overflow-visible</code></td>
              <td>Default. The overflow is not clipped. It renders outside the element's box.</td>
            </tr>
            <tr>
              <td><code>.overflow-hidden</code></td>
              <td>The overflow is clipped, and the rest of the content will be invisible.</td>
            </tr>
            <tr>
              <td><code>.overflow-auto</code></td>
              <td>If overflow is clipped, a scrollbar should be added to see the rest of the content.</td>
            </tr>
            <tr>
              <td><code>.overflow-scroll</code></td>
              <td>The overflow is clipped, but a scrollbar is added to see the rest of the content.</td>
            </tr>
          </tbody>
        </table>
      </div>

      {{--List--}}
      <div class="card-body">
        <div class="card-text my-1">
          <h5 class="text-bold-600 my-1">List</h5>
          <p>Add one of these to class to change list style.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table mb-0">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>.list-unstyled</code></td>
              <td>No marker is shown in the list item.</td>
            </tr>
            <tr>
              <td><code>.bullets-inside</code></td>
              <td>Indents the marker and the text. The bullets appear inside the content flow</td>
            </tr>
            <tr>
              <td><code>.list-style-circle</code></td>
              <td>Set the list item marker to circle.</td>
            </tr>
            <tr>
              <td><code>.list-style-square</code></td>
              <td>Set the list item marker to square.</td>
            </tr>
            <tr>
              <td><code>.list-style-icons</code></td>
              <td>Set the list item marker with icons.</td>
            </tr>
          </tbody>
        </table>
      </div>
      {{--List--}}

    </div>
  </section>
  {{--/ Content helpers--}}

  {{--Visibility--}}
  <section id="visibility" class="card">
    <div class="card-header">
      <h4 class="card-title">Visibility</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Control the visibility, without modifying the display, of elements with visibility utilities.</p>
          <p>Set the <code class="highlighter-rouge">visibility</code> of elements with our visibility utilities. These do
            not modify the <code class="highlighter-rouge">display</code> value at all and are helpful for hiding content
            from most users, but still keeping them for screen readers.</p>
          <p>Apply <code class="highlighter-rouge">.visible</code> or <code class="highlighter-rouge">.invisible</code> as
            needed.</p>

          <pre><code class="language-html">
                  &lt;div class="visible"&gt;...&lt;/div&gt;
                  &lt;div class="invisible"&gt;...&lt;/div&gt;
                  </code></pre>
        </div>
      </div>
    </div>
  </section>
  {{--/ visibility--}}

@endsection
